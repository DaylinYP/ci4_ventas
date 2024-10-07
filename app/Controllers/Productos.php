<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductosModel;
use App\Models\CarritoModel;
use App\Models\DetalleCarritoModel;

class Productos extends BaseController
{
    
    public function index()
    {
        //metodo para cargar productos
        $productoModel = new ProductosModel();
        $datos['datos']= $productoModel->findAll();
        //print_r($datos);
        $carritoDetalle = new DetalleCarritoModel();

        //contar cuantos elementos tiene el carrito y enviarlo a la vista
        $datos['cantCarrito']= $carritoDetalle->countAllResults();
        //print_r($datos);
        
        return view('productos',$datos);
    }
    public function agregarProducto(){
        $carritoDetalle = new DetalleCarritoModel();
        $datos=[
            'carritoId'=>'1',
            'productoId'=>$this->request->getPost('txtProductoId'),
            'cantidadCompra'=>$this->request->getPost('txtCantidad'),
            'precio'=>$this->request->getPost('txtPrecio'),
            'subtotal'=>$this->request->getPost('txtPrecio') * $this->request->getPost('txtCantidad'),
            'estado'=>'pendiente'
        ];
        //print_r($datos);
        $mensaje=$carritoDetalle->insert($datos);
        //muetra el id del regitro ingresado
        print_r($mensaje);
        return view('mensaje');
    }
    public function verCarrito(){
        $carritoId=1;
        $carritoDetalle = new DetalleCarritoModel();
        //contar cuantos elementos tiene el carrito y enviarlo a la vista
        $datos['datos']= $carritoDetalle->productosCarrito($carritoId);
        print_r($datos);
        //return view('productos',$datos);
    }
    
}
