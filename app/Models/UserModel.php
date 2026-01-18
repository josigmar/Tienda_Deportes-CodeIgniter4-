<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'Clientes';
    protected $allowedFields = ['Email','Password'];

    public function checkUser($user, $pass) {
        return $this->where(['Email' => $user, 'Password'=> $pass])->first();
    }
}