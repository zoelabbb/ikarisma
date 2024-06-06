<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table            = 'acl_user';
    protected $primaryKey       = 'id_user';
    // // protected $returnType       = 'object';
    // protected $allowedFields    = ['user_nama', 'user_pass'];
}
