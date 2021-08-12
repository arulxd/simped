<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $useTimestamps = false;

    protected $allowedFields = ['username', 'password', 'level'];


    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_user' => $id])->first();
        }
    }

    public function login($username, $password)
    {
        return $this->db->table('user')->where([
            'username' => $username,
            'password' => $password,
        ])->get()->getRowArray();
    }
}
