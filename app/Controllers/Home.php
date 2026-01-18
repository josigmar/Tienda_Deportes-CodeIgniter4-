<?php
namespace App\Controllers;
use App\Models\InicioModel;

class Home extends BaseController {
    public function index() {
        $model = model(InicioModel::class);

        $data = [
            'populares' => $model->getProductosPopulares(),
            'ultimos' => $model->getProductosUltimos()
        ];

        return view('frontend/templates/header', $data)
            . view('frontend/tienda/index')
            . view('frontend/templates/footer');
    }
}