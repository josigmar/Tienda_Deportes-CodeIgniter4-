<?php
namespace App\Controllers;
use App\Models\CategoriesModel;

class CategoriesBackend extends BaseController {

    public function showAll() {
        $model = model(CategoriesModel::class);

        $data = [
            'categorias' => $model->findAll(),
            'title'      => 'Gestión de Categorías'
        ];

        return view('backend/templates/headerBack', $data)
             . view('backend/categorias/indexCat', $data)
             . view('backend/templates/footerBack');
    }

    public function newCat() {
        helper('form');

        return view('backend/templates/headerBack', ['title' => 'Nueva Categoría'])
             . view('backend/categorias/createCat')
             . view('backend/templates/footerBack');
    }

    public function createCat() {
        helper('form');

        $model = model(CategoriesModel::class);

        if (!$this->validate(['nombre_cat' => 'required|min_length[3]'])) {
            return $this->newCat();
        }

        $model->save([
            'nombre_cat' => $this->request->getPost('nombre_cat')
        ]);

        return redirect()->to(base_url('backend/categorias'));
    }

    public function editCat($id) {
        helper('form');

        $model = model(CategoriesModel::class);
        
        $categoria = $model->find($id);
        if (!$categoria) {
            return redirect()->to(base_url('backend/categorias'));
        }

        $data = ['categoria' => $categoria, 'title' => 'Editar Categoría'];

        return view('backend/templates/headerBack', $data)
             . view('backend/categorias/updateCat', $data)
             . view('backend/templates/footerBack');
    }

    public function updatedCat($id) {
        helper('form');

        $model = model(CategoriesModel::class);

        if (!$this->validate(['nombre_cat' => 'required|min_length[3]'])) {
            return $this->editCat($id);
        }

        $model->save([
            'indice_cat' => $id,
            'nombre_cat' => $this->request->getPost('nombre_cat')
        ]);

        return redirect()->to(base_url('backend/categorias'));
    }

    // 6. BORRAR
    public function deleteCat($id) {
        $model = model(CategoriesModel::class);
        
        try {
            $model->delete($id);
        } catch (\Exception $e) {
            die("No puedes borrar esta categoría porque tiene productos dentro.");
        }

        return redirect()->to(base_url('backend/categorias'));
    }
}