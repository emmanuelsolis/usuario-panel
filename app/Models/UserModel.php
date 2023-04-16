<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table      = 'user';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    // Esta linea de abajo nos permite que no se inserten los campos created_at y updated_at y que no se actualicen
    // protected sirve para que no se pueda modificar desde fuera de la clase
    protected $allowedFields = ['nombre', 'apellido', 'email'];
}