<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'Clientes';
    protected $allowedFields = ['Email','Password'];

    public function checkUser($user, $pass) {

        $usuario = $this->where('Email', $user)->first();

        if ($usuario && password_verify($pass, $usuario['Password'])) {
            return $usuario;
        }

        return null;
    }
}