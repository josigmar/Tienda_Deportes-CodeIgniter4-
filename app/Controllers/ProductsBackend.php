<?php
namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;

class ProductsBackend extends BaseController {
    public function showAll() {
        $session = session(); 
        if (empty($session->get('user'))) { 
            return redirect()->to(base_url('admin')); 
        }

        $model = model(ProductsModel::class);

        $data = [
            'products_list' => $model->getProducts()
        ];      

        return view('backend/templates/headerBack')
            . view('backend/tienda/productsAllBack', $data)
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

    public function new() {
        helper('form');

        $model_cat = model(CategoriesModel::class);
        if ($data['categorias'] = $model_cat->findAll()) {
            return view ('backend/templates/headerBack', ['title' => 'Crear un nuevo producto'])
                . view('backend/tienda/create', $data)
                . view ('backend/templates/footerBack');
        }
    }

    public function create() { 
        helper('form'); 
        
        $data = $this->request->getPost(['Cod_producto', 'Categoria', 'Modelo', 'Marca', 'Peso', 'Precio', 'Stock']);
        
        if (! $this->validateData($data, [ 
            'Cod_producto' => 'required', 
            'Categoria'  => 'required', 
            'Modelo' => 'required|max_length[50]|min_length[3]', 
            'Marca' => 'required|max_length[50]|min_length[3]', 
            'Peso' => 'required', 
            'Precio' => 'required', 
            'Stock' => 'required' 
        ])) { 
            return $this->new(); 
        } 
        
        $post = $this->validator->getValidated(); 
        
        $model = model(ProductsModel::class); 

        $model->save([ 
            'Cod_producto' => $post['Cod_producto'], 
            'Categoria'  => $post['Categoria'],
            'Modelo'  => $post['Modelo'], 
            'Marca' => $post['Marca'], 
            'Peso' => $post['Peso'], 
            'Precio' => $post['Precio'], 
            'Stock' => $post['Stock'], 
        ]); 
        
        return redirect()->to(base_url('backend'));
    }

    public function update($Cod_producto) { 
        helper('form'); 
        
        if ($Cod_producto == null) { 
            throw new PageNotFoundException('No se puede editar el producto'); 
        } 
        
        $model = model(ProductsModel::class); 
        
        if($model->where('Cod_producto', $Cod_producto)->find()) {
            $data = [ 
                'products' => $model->where('Cod_producto', $Cod_producto)->first(), 
                'title' => 'Editar producto', 
            ]; 
        } else { 
            throw new PageNotFoundException('El producto seleccionado no se encuentra en la base de datos.'); 
        } 
        
        $model_cat = model(CategoriesModel::class); 
        
        if($data['categorias'] = $model_cat->findAll()) { 
            return view('backend/templates/headerBack', ['title' => 'Editar producto']) 
                . view('backend/tienda/update', $data) 
                . view('backend/templates/footerBack'); 
        } 
    }
    
    public function updatedItem($Cod_producto) { 
        helper('form'); 
        
        $data_form = $this->request->getPost(['Cod_producto', 'Categoria', 'Modelo', 'Marca', 'Peso', 'Precio', 'Stock']); 
        
        if (! $this->validateData($data_form, [ 
            'Cod_producto' => 'required', 
            'Categoria'  => 'required', 
            'Modelo' => 'required|max_length[50]|min_length[3]', 
            'Marca' => 'required|max_length[50]|min_length[3]', 
            'Peso' => 'required', 
            'Precio' => 'required', 
            'Stock' => 'required'  
        ])) { 
            return $this->update($Cod_producto); 
        } 
        
        $post = $this->validator->getValidated(); 
        
        $model = model(ProductsModel::class); 
        
        $model->save([ 
            'Cod_producto' => $Cod_producto, 
            'Categoria'  => $post['Categoria'],
            'Modelo'  => $post['Modelo'], 
            'Marca' => $post['Marca'], 
            'Peso' => $post['Peso'], 
            'Precio' => $post['Precio'], 
            'Stock' => $post['Stock'],
        ]); 
        return redirect()->to(base_url('backend/tienda/products/' . $Cod_producto)); 
    } 

    public function delete($Cod_producto) {
         if ($Cod_producto == null) { 
            throw new PageNotFoundException('No se puede eliminar el producto'); 
        } 
        
        $model = model(ProductsModel::class); 
        
        if ($model->find($Cod_producto)) {
            $model->delete($Cod_producto); 
        } else { 
            throw new PageNotFoundException('El producto seleccionado no se encuentra en la base de datos.'); 
        } 
        
        return redirect()->to(base_url('backend')); 
    }
}