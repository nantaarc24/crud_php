<?php 
namespace App\Models;

use CodeIgniter\Model;

class Libro extends Model{
    protected $table      = 'libros';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    //activar las columnas de mi tabla
    protected $allowedFields= ['nombre','imagen'];
}