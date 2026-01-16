<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductsModel extends Model {
    protected $table = 'Productos';
    /**
     * @param false | string $slug
     * 
     * @return array | null
     */
    public function getProducts($Cod_producto = null) {
        if ($Cod_producto === null) {
            return $this->findAll(); 
        }

        return $this->where(['Cod_producto' => $Cod_producto])->first();           
    }
}