<?php
namespace App\Models;
use CodeIgniter\Model;
class CategoriasModel extends Model{

    protected $table ='categorias';
    protected $primarykey = 'id';
    protected $returnType = "array";
    protected $allowedFields = ['nombre'];
}

?>