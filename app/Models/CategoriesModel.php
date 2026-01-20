<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoriesModel extends Model {
    protected $table = 'Categorias';
    protected $primaryKey = 'indice_cat';
    protected $allowedFields = ['nombre_cat'];
}