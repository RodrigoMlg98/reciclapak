<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoriasModel;
use App\Models\ProductosModel;
use App\Models\VariantesModel;
use App\Models\ModelosModel;
use App\Models\MarcasModel;
class Producto extends BaseController{
	
	public function index($categoria){
		$categoriasModel=new CategoriasModel;
		$productoModel= new ProductosModel;
		$catID=$categoriasModel->where('nombre',$categoria)->first();
		if($catID['id']){
			$producto=$productoModel->where('id_categoria',$catID['id'])->findAll();
			if($producto){
				$data=[
					'categoria'=>$categoria,
					'categorias'=>$this->categorias(),
					'productos'=>$producto,
					'title'=>$categoria,
				];
				return view('listproductos',$data);
			}else{
				$data=[
					'title'=>$categoria,
					'categorias'=>$this->categorias(),
					'categoria'=>$categoria,
				];
				return view('errors/no_stock',$data);
				echo 'error';
			}
			
		}else{
			return redirect()->to('/404');
		}
		
	}
	public function productosDetail(){
		if(!isset($_GET['q'])){
			return redirect()->to('/');
		}
		$name_producto=$_GET['q'];
		$productoModel=new ProductosModel;
		$variantesModel=new VariantesModel;
		$marcasModel=new MarcasModel;
		$modelosModel=new ModelosModel;
		$categoriasModel=new CategoriasModel;
		if(isset($_GET['m'])){
			$modelo_producto=$_GET['m'];
			if(!$producto=$productoModel->where('nombre',$name_producto)->where('modelo',$modelo_producto)->first()){
				return redirect()->to('/404');
			}
		}else{
			if(!$producto=$productoModel->where('nombre',$name_producto)->first()){
				return redirect()->to('/404');
			}
		}
		$categoria=$categoriasModel->where('id',$producto['id_categoria'])->first();
		$variantes=$variantesModel->where('id_producto',$producto['id'])->findAll();
		$marcas=$marcasModel->where('id',$producto['id_marca'])->first();
		$modelos=NULL;
		if($modelosModel->where('id_producto',$producto['id'])->findAll()){
			$modelos=$modelosModel->where('id_producto',$producto['id'])->findAll();
		}
		
        $data=[
			'marca'=>$marcas,
			'categoria'=>$categoria,
			'producto'=>$producto,
			'modelos'=>$modelos,
			'variantes'=>$variantes,
			'title'=>$name_producto,
			'categorias'=>$this->categorias(),
        ];
		return view('productoDetail',$data);
	}

	
	//--------------------------------------------------------------------

}
