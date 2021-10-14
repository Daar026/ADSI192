<!DOCTYPE html>
<!--
productos.php
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Registro de usuario, sispow">
        <link rel="icon" href="Vista/src/logo.png"/>
        <link rel="stylesheet" href="Vista/css/gestion.css"/>
        <link rel="stylesheet" href="Vista/Css/productos.css">
        <script type="text/javascript" src="Vista/Js/jquery.js"></script>
        <script type="text/javascript" src="Vista/Js/productos.js"></script>
        <title>SISPOW - INICIO</title>
    </head>

    <body>
        <div class="main"> 
            <header> 
                <h2>SISTEMA DE INVENTARIO</h2>
                <nav>
                    <a href="index.php?accion=destruir"><img src="Vista/src/pagar.png" alt=""></a>
                </nav>
            </header>

            <div class="barra">
                <nav>
                    <h3>Menú</h3>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Categorias</a>
                    <a href="../Empleado/"><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Empleados</a>
                    <a href="index.php?accion=productos" class="activa"><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Productos</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Compras</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Proveedores</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Ventas</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Clientes</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Reportes</a>
                    <a href=""><img src="Vista/src/ventas.png" width="20px" height="20pz" alt="">Inventario</a>


                </nav>
            </div>
            <main>
                <div class="ventanaNuevoLineaProducto">
                    <form action="index.php?accion=ingresarLineaProducto" method="post">
                        <div class="cerrarNuevoLineaProducto"><img src="Vista/src/cerrar.png" width="30px" title="Cerrar ventana" alt=""></div>
                        <h2>Nueva Linea de Producto</h2>
                        <table border="0" cellspacing="0" cellspadding="0">
                            
                            <tr>
                                <td class="verde">Nombre Linea de Producto</td>
                                <td>
                                    <input class="campo" type="text" name="LprDes" required autocomplete="off">

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                    <input class="boton" type="submit" name="enviar" value="Ingresar Datos">
                                </td>

                            </tr>
                        </table>

                    </form>
                </div>
                <!--
                  Contenido
                -->
                <div class="targes">
                    <table>
                        <tr>
                            <td><h3>Linea de Productos: &nbsp; &nbsp;</h3></td>
                            <td><div class="nuevoLineaProducto">
                                    <img src="Vista/src/nuevo2.png" width="30px" title="Añadir Linea Producto" alt="">
                                </div></td>

                        </tr>
                    </table>
                    <form action="index.php?accion=editarLineaProducto1" method="POST">

                        <table cellspacing="0" cellpadding="0" class="tablaPrincipal">
                            <thead>
                                <tr>
                                    <th>Linea ID</th>
                                    <th>Descripcion</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($result->num_rows > 0) {
                                    ?>
                                    <?php while ($fila = $result->fetch_object()) {
                                        ?>

                                        <tr>
                                            <td>
                                                <select name="LprID">
                                                    <option value="<?php echo $fila->LprID; ?>"><?php echo $fila->LprID; ?></option>
                                                </select>
                                                </td>
                                            <td>
                                                <input type="text" name="LprDes" value="<?php echo $fila->LprDes; ?>" required>
                                            </td>
                                            <td class="caja_btn">
                                                <input type="submit" value="Editar" class="botones editar_color">

                                            </td>
                                        </tr>
                                        <?php }
                                    ?>
                                </tbody>
                            </table>
                        <?php } else {
                            ?>
                           
                           <a href="index.php?accion=mostrarLineaProducto" class="botones editar_color">Volver</a>

                        <?php } ?>


                        <?php /*
                         */ ?>




                    </form>




                </div>  
            </main>
        </div>
    </body>
</html>