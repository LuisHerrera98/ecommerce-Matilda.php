<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Editar Producto</title>


    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="stylesheets/style.css">
    
    <!--TIPOGRAFIA GOOGLE FONTS--> 
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

    <!--CSS DEL REGISTRO PERRIS-->
    <link rel="stylesheet" href="stylesheets/styleRegistro.css">

     <!--CSS DEL EFECTO DEL HEADER-->
     <link rel="stylesheet" href="stylesheets/estilosHeader.css">

     <!--CSS DE LOS INPUT PARA CARGAR IMAGENES-->
     <link rel="stylesheet" href="stylesheets/inputFile.css">
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <main>
        <div class="logoSuperior" style="padding-top:5px;">
            <a href="productosAdministrar.php" class="logo-centro">
                <h1 class="nombrePrincipal">MATILDA</h1>
            </a>
        </div>
    </main>
    <?php
    $id=$_GET['id'];
    $nombre=$_GET['nombre'];
    $precio=$_GET['precio'];
    
    ?>
    

    
        
    <h1 style="margin-top: 12px;text-align: center;">EDITAR PRODUCTO</h1>
    <form action="guardar.php" method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Editar <?php echo $nombre ?></label>
        <input type="text" name="nombre" id="nombre" class="input-crear" value="<?php echo $nombre ?>">

        <input type="hidden" name="id" id="id" class="input-crear" value="<?php echo $id ?>">

        <br id="br-nombre">
        <label for="nombre">Edite el precio</label>
        <input type="number" name="precio" id="precio" class="input-crear" value="<?php echo $precio ?>">

        <hr>
        <button type="submit" name="guardar">Guardar Cambios</button>
    </form>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/cargarImagenes.js"></script>

    <script src="javascripts/validacionVistaCrearProducto.js"></script>
</body>
</html>

