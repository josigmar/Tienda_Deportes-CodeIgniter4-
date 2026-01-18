<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CategoriesModel;

class Users extends BaseController {
    public function loginForm($error=null) {
        helper('form');
        $model_cat = model(CategoriesModel::class);
        $data['categorias'] = $model_cat->findAll();

        if ($error == null) {
            return view('frontend/templates/header', $data)
            . view('frontend/users/login',['title' => 'Acceso privado', 'error' => ''])
            .view('frontend/templates/footer');
        } else {
            return view('frontend/templates/header', $data)
            . view('frontend/users/login',['title' => 'Acceso privado', 'error' => 'Credenciales incorrectas'])
            . view('frontend/templates/footer');
        }
    }

    public function checkUser() {
        helper('form');

        if (! $this->validate([
            'email' => 'required|max_length[255]|min_length[4]|valid_email',
            'password' => 'required|max_length[5000]|min_length[4]'
        ])) {
            return $this->loginForm();
        }

        $post = $this->validator->getValidated();

        $model = model(UserModel::class);

        $model_cat = model(CategoriesModel::class);
        $data['categorias'] = $model_cat->findAll();

        if ($data['user'] = $model->checkUser($post['email'], $post['password'])) {
            $session = session();
            $session->set('user', $post['email']);

            return redirect()->to(base_url('backend'));
        } else {
            return $this->loginForm("Error");
        }
    }

    public function closeSession() {
        $session = session();

        $session->remove('user');

        $session->destroy();

        return redirect()->to(base_url('admin'));
    }
}