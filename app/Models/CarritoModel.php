<?php

namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model
{
    protected $table            = 'Carrito';
    protected $primaryKey       = 'carritoId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuarioId','fechaCreacion','fechaActualizacion','estado','subtotal','total'];

    
    

    
}
