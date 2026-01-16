<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ProductsModel;

class Products extends BaseController {
    public function showAll() {
        $model = model(ProductsModel::class);

        $data = [
            'products_list' => $model->getProducts()
        ];

        return view('templates/header', $data)
            . view('tienda/productsAll')
            . view('templates/footer');
    }

    public function showProduct($Cod_producto = null) {
        $model = model(ProductsModel::class);

        $data['products'] = $model->getProducts($Cod_producto);

        if ($data['products'] === null) {
            throw new PageNotFoundException('No se ha encontrado el producto: ' . $Cod_producto);
        }

        return view('templates/header', $data)
            . view('tienda/product')
            . view('templates/footer');
    }
}