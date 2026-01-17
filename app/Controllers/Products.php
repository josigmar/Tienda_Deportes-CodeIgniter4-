<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ProductsModel;
use App\Models\CategoriesModel;

class Products extends BaseController {
    public function showAll($id_category = null) {
        $model = model(ProductsModel::class);

        if ($id_category == null) {
            $data = [
                'products_list' => $model->getProducts()
            ];
        } else {
            $data = ['products_list' => $model->getProductsByCategory($id_category)];
        }        

        $model_cat = model(CategoriesModel::class);
        $data['categorias'] = $model_cat->findAll();

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

        $model_cat = model(CategoriesModel::class);
        $data['categorias'] = $model_cat->findAll();

        return view('templates/header', $data)
            . view('tienda/product')
            . view('templates/footer');
    }
}