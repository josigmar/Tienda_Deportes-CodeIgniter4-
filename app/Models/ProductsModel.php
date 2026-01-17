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
            $sql = $this->select('Productos.*, Categorias.nombre_cat');
            $sql = $this->join('Categorias', 'Productos.Categoria = Categorias.indice_cat');
            $sql = $this->findAll();
            return $sql; 
        }

        $sql = $this->select('Productos.*, Categorias.nombre_cat');
        $sql = $this->join('Categorias', 'Productos.Categoria = Categorias.indice_cat');
        $sql = $this->where(['Cod_producto' => $Cod_producto])->first();
        return $sql;          
    }

    public function getProductsByCategory ($id_category) {
        $sql = $this->select('Productos.*, Categorias.nombre_cat');
        $sql = $this->join('Categorias', 'Productos.Categoria = Categorias.indice_cat');
        $sql = $this->where(['Categoria' => $id_category])->findAll();
        return $sql; 
    }
}