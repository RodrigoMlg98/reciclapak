<?php 
namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use Config\Services;
class Contacto extends BaseController{
    use ResponseTrait;

	public function index(){
        $data=[
            'categorias'=>$this->categorias(),
			'title'=>'Contactanos',
		];
		return view('contacto',$data);
    }
    
    public function contacto()
    {
        helper(['form','cookie','text']);
        if ($this->request->getMethod() == 'post') {

                $correo = $this->request->getVar('email');
                $telefono = $this->request->getVar('phone');
                $mensaje = $this->request->getVar('coment');
                $nombre = $this->request->getVar('nombre');

                $email = Services::email();
                $email->setFrom('contacto@reciclapak.mx', 'Reciclapak');
                $email->setTo($correo);
                $email->setSubject('Mensaje enviado desde la Pagina oficial de Reciclapak');
                $email->setMessage(view('mail/contacto' , ['nombre' => $nombre]));
                $email->send();

                $correoAdmin = 'contacto@reciclapak.mx';
                $email = Services::email();
                $email->setFrom('contacto@reciclapak.mx', 'Reciclapak');
                $email->setTo($correoAdmin);
                $email->setSubject('Mensaje enviado desde la Pagina oficial de Reciclapak');
                $email->setMessage(view('mail/send', [ 'correo' => $correo, 'nombre' => $nombre, 'telefono' => $telefono, 'mensaje' => $mensaje ]));
                if($email->send()){
                    return $this->respond(["result"=>"succesfull"], 200);
                };
        }
    }
}
