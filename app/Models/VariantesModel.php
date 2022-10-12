<?php
namespace App\Models;
use CodeIgniter\Model;
class VariantesModel extends Model{

    protected $table ='variantes';
    protected $primarykey = 'id';
    protected $returnType = "array";
    protected $allowedFields = ['img','id_producto'];
}

?>