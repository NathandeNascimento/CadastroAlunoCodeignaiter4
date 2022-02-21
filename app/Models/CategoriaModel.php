<?php
namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\Files\File;

class CategoriaModel extends Model{
    protected $table = 'categoria';                         // nome da tabela do DB
    protected $primaryKey = 'id';                           // define chave primaria
    protected $allowedFields = ['nome','endereco','foto'];  // nomes dos campos do DB
    protected $returnType = 'object';                       // retorna o objeto


}

?>