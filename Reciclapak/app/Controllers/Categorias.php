<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\VariantesModel;
use App\Models\CategoriaModel;
use App\Models\SubCategoriaModel;
use App\Models\MarcasModel;
class Categorias extends BaseController{
	public function index($prod){
        $productoModel=new ProductosModel;
        $variantesModel=new VariantesModel;
        $categoriaModel=new CategoriaModel;
        $categoria=$categoriaModel->findAll();
        $marcaModel=new MarcasModel;
        $producto=$productoModel->findAll();
        $variantes=$variantesModel->findAll();
        // $marca=$marcaModel->where('id',$producto['id_marca'])->first();
        $data = [
			'categoriasproducto'=>$this->categorias(),
			'subcategoriasproducto'=>$this->subcategorias(),
            'marcasproducto'=>$this->marcas(),
            'variantes'=>$variantes,
            'categoria'=>$categoria,
            'title' => $prod,
			'productos' => $producto,
        ];
		return view('/catalogo/categorias',$data);
	}

	//--------------------------------------------------------------------

}
