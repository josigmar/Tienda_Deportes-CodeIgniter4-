<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\InicioModel;

class Home extends BaseController {
    public function index() {
        $model = model(InicioModel::class);

        $data = [
            'populares' => $model->getProductosPopulares()
        ];

        return view('templates/header', $data)
            . view('tienda/index')
            . view('templates/footer');
    }
}