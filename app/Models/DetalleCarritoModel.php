<?php

namespace App\Models;

use CodeIgniter\Model;

class DetalleCarritoModel extends Model
{
    protected $table            = 'DetalleCarrito';
    protected $primaryKey       = 'detalleId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['carritoId','productoId','cantidadCompra','precio','subtotal','estado'];

    
   public function productosCarrito($carritoId){
    return $this->select('DetalleCarrito.*, Producto.nombre')
    ->join('Producto','DetalleCarrito.productoId = Producto.productoId')
    ->where('carritoId',$carritoId)
    ->findAll();
   }

    
}
