<?php 
namespace App\Controllers;
use App\Models\ProductosModel;
class Home extends BaseController{
	public function index(){
		$productoModel=new ProductosModel;
		$producto=$productoModel->findAll(3);
        $data = [
			'categorias'=>$this->categorias(),
			'productos'=>$producto,
			'title' => 'Inicio',
		];
		return view('home',$data);
	}

	public function nosotros(){
		$data=[
			'categorias'=>$this->categorias(),
			'title'=>'Nosotros',
		];
		return view('nosotros',$data);
	}

	public function error404(){
		return view('errors/error_404');
	}

}
