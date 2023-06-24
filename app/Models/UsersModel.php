<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'username';
    protected $returnType = 'object';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name'];

    // Jika Anda ingin menambahkan validasi atau aturan khusus lainnya,
    // Anda dapat melakukannya di sini.
}
