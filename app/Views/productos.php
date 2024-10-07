<?php echo $this->extend('plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<h1>Productos</h1>
<a href="<?=base_url('verCarrito')?>" class="btn btn-primary"> <i class="bi-cart"> <?= $cantCarrito; ?> </i></a>
<div class="row">


    <?php
    foreach ($datos as $producto):
    ?>

        <div class="card col-4 m-3" style="width: 18rem;">
            <img src="https://i.pinimg.com/736x/de/0d/87/de0d8775d21ffc398bbd2b4e8c061209.jpg" class="card-img-top" alt="computadora">
            <div class="card-body">

                <!--formulario para agregar el producto al carrito-->
                <form action="<?=base_url('agregarProducto');?>" method="post">
                    <h5 class="card-title"><?= $producto['nombre']; ?></h5>
                    <p class="card-text">

                        
                        Id: <?= $producto['productoId']; ?>
                        <br>
                        Nombre: <?= $producto['nombre']; ?>
                        <br>
                        Descripción: <?= $producto['descripcion']; ?>
                        <br>
                        Precio: <?= $producto['precio']; ?>
                        <br>
                        Stock: <?= $producto['cantidad']; ?>
                        <br>
                        Cantidad a comprar: <input type="number" name="txtCantidad" id="txtCantidad" min="0" max="<?= $producto['cantidad']; ?>" value="1">
                        <!--En la tabla Carrito detalle se debe guardar 
                            id del producto
                            cantidad comprada
                            precio
                            estos controles estan ocultos porque no los debe ver el usuario
                        -->
                        <input type="text" name="txtProductoId" id="txtProductoId" value="<?= $producto['productoId'];?>" hidden>
                        <input type="text" name="txtPrecio" id="txtPrecio" value="<?= $producto['precio']; ?>" hidden>

                    
                    </p>
                    <input type="submit" class="btn btn-primary" value="Agregar al carrito">
                </form>
            </div>
        </div>




    <?php
    endforeach;
    ?>
</div>


<?php echo $this->endSection() ?>