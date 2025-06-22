<?php
namespace App\Models;

use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'info_usuario';
    protected $primaryKey = 'usuario_id';
    protected $allowedFields = ['nombre', 'apellido','usuario','email', 'password','perfil_id','baja'];

    
}