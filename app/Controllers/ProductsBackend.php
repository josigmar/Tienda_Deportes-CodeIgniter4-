<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ProductsModel;

class ProductsBackend extends BaseController {
    public function showAll() {
        $model = model(ProductsModel::class);

        $data = [
            'products_list' => $model->getProducts()
        ];      

        return view('backend/templates/headerBack', $data)
            . view('backend/tienda/productsAllBack')
            . view('backend/templates/footerBack');
    }

    public function showProduct($Cod_producto = null) {
        $model = model(ProductsModel::class);

        $data['products'] = $model->getProducts($Cod_producto);

        if ($data['products'] === null) {
            throw new PageNotFoundException('No se ha encontrado el producto: ' . $Cod_producto);
        }

        return view('backend/templates/headerBack', $data)
            . view('backend/tienda/productBack')
            . view('backend/templates/footerBack');
    }
}