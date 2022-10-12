<?php
namespace App\Models;
use CodeIgniter\Model;
class ModelosModel extends Model{

    protected $table ='modelos';
    protected $primarykey = 'id';
    protected $returnType = "array";
    protected $allowedFields = ['modelo','descipcion','img','id_producto'];
}

?>