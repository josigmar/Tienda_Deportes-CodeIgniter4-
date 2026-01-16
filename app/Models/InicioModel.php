<?php
namespace App\Models;
use CodeIgniter\Model;

class InicioModel extends Model {
    protected $table = 'Productos';
    /**
     * @param false | string $slug
     * 
     * @return array | null
     */

    public function getProductosPopulares() {
        return $this->orderBy('Visitas', 'DESC')->findAll(4);
    }

    public function getProductosUltimos() {
        return $this->orderBy('Stock','ASC')->findAll(4);
    }
}