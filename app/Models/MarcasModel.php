<?php
namespace App\Models;
use CodeIgniter\Model;
class MarcasModel extends Model{

    protected $table ='marcas';
    protected $primarykey = 'id';
    protected $returnType = "array";
    protected $allowedFields = ['nombre'];
}

?>