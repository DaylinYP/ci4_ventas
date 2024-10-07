<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<h1>Carrito de Compras</h1>
<a href="<?= base_url('productos') ?>" class="btn btn-primary">regresar</a>



<table class="table table-border table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>cantidad</th>
            <th>precio</th>
            <th>subtotal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $total = 0;
        foreach ($datos as $producto):
            //suma del sutotal
            $total += $producto['subtotal'];
        ?>
            <tr>
                <form action="<?=base_url('modificarCarrito/').$producto['detalleId'];?>" method="post">
                    <td><?= $producto['productoId']; ?></td>
                    <td><?= $producto['nombre']; ?></td>
                    <td><input type="number" value="<?= $producto['cantidadCompra']; ?>" name="txtCantidad" id="txtCantidad" max="100" min="1"></td>
                    <td><?= $producto['precio'];?></td>
                    <td><?= $producto['subtotal']; ?></td>
                    
                    <input type="number" value="<?= $producto['precio'];?>" name="txtPrecio" id="txtPrecio" hidden></td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Actualizar"> 
                        <a href="<?=base_url('eliminarProducto/').$producto['detalleId'];?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </form>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
Total: <?= $total ?>
<br>
<a href="" class="btn btn-primary">Realizar Compra de productos</a>







<?php echo $this->endSection() ?>