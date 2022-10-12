<?php
namespace App\Models;
use CodeIgniter\Model;
class ProductosModel extends Model{
    
    protected $table ='productos';
    protected $primarykey = 'id';
    protected $returnType = "array";
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nombre','modelo','descripcion','aplicaciones','medidas','img','id_marca','id_categoria'];
}

?>