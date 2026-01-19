<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'Clientes';
    protected $allowedFields = ['Email','Password'];

    public function checkUser($user, $pass) {
        return $this->where(['Email' => $user, 'Password'=> $pass])->first();
        //Idea para ampliar la práctica hacer el verify para saber si la password está cifrada para ver si concuerda con la que hay cifrada en la BBDD, mirar también el tema de hashear la password
    }
}