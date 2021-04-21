<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Producto</title>

    <link rel="stylesheet" href="stylesheets/estilosProductos.css">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:500,600&display=swap" rel="stylesheet">
        
    <!--Materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!-- CSS Estilos de Carrusel -->
    <link rel="stylesheet" href="stylesheets/carrusel.css">
    
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="stylesheets/style.css">
    
    <!--TIPOGRAFIA GOOGLE FONTS-->

    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="stylesheets/estilosHeader2.css">

    <link rel="stylesheet" href="stylesheets/estilosDetalleProducto.css">
    

    <script src="javascripts/jquery.min.js"></script>
    
    <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
</head>
<body>
<header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="index.php"  class="logo"><img src="imagenesCarrusel/logo.jpeg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">Matilda</h1>
               </div>
            </div>
            <div id="" class="navegacion">
            <span class="menu-icon"><a href="#"><p class="palabraMenu"><i class="fas fa-home"></i>Menu</p><i class=" fas fa-bars"></i></a></span>
                <ul class="menuNavegacion" style="margin-top:5px;">
                    <li class="liPerri"><a href="#" style="font-size:16px; padding:1px;">Productos</a></li>
                    <div class="navProductos" style="width:100%; background-color:aliceblue; position:absolute; border-radius:3px; display:none">
                    <ul class="menuNavegacion" style="margin-top:5px; color:black; border-radius:5px;"> 

<li class="li-productos"><a href="productosCategoria.php?categoria=sweaters">SWEATERS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=camperas">CAMPERAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=remeras">REMERAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=jeans">JEANS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=pantalones">PANTALONES</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=camisas">CAMISAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=musculosas">MUSCULOSAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=shorts">SHORTS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=polleras">POLLERAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=vestidos">VESTIDOS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=calsas">CALSAS</a></li>

<li class="li-productos"><a href="productosCategoriaEditar.php?categoria=tops">TOPS</a></li>

</ul>

                    </div>
                    <li><a href="contacto.php" style="font-size:16px; padding:1px;">Contacto</a></li>
                    <li><a href="ayuda.php" style="font-size:16px; padding:1px;">Ayuda</a></li>
                </ul>
            </div>
    
        </div>
    
    </header>
    <header class="header-compu" id="heade">
    <div class="menuSuperior">
        <div class="logo-nombre">
            <img src="imagenes/corona.jpg" alt="">
            <h6>NachoStore</h6>
        </div>
    </div class="navegacionMenuInferior">
         <ul class="listaNavegacion">
            <a href="index.html"><li>Inicio</li></a>
            <a href="productos.html"><li>Productos</li></a>
            <a href="contacto.html"><li>Contacto</li></a>
            <a href="ayuda.php"><li>Ayuda</li></a>
        </ul>
    <div>
    
    </div>
    
    </header>
    <link rel="stylesheet" href="stylesheets/styleDetalle.css">
    <main>
        <div class="logoSuperior">
        </div>
    </main>
    <section class="seccionDetalleProducto">
        <div class="nav-detalle-producto">
            <a href="productosAdministrar.php">Inicio</a>    /
            <a href="productosEditar">Productos </a>    /
        </div>
        
        <?php
    // include_once "db_empresa.php";
    $id=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "matilda");
    $query = "SELECT id,nombre,precio,imagen FROM productos WHERE id='$id';";
    
    $res = mysqli_query($con, $query);
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <hr class="hr-detalle-producto">
        <div class="titulo-producto">
            <h1><?php echo $row['nombre'];?></h1>
        </div>
     
        <div class="detalleProducto">
            <div class="cajaDeImagen">
                <div class="container3">
                    <div class="row">
                        <div class="col s12">
                            <div class="carousel center-align tamañoCarrusel">
        

                                <div class="carousel-item">
                                <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen']); ?>">
                                </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="datos-detalle-producto">
            <p><?php echo strtoupper($row['nombre']) ?></p>
                <p style="font-size:20px; color:green;">$<?php echo $row['precio'] ?></p>
                <div class="imagen-mediosDePago">
                    <p style="font-weight:bold;">Medios de pago</p>
                    <img class="mediosDePagoImagen" src="imagenes/medios-pago.png" alt="">
                </div>
                <hr>
                <br>
            
                    <input style="display: none;" type="number" name="producto_id" value="<%=producto.id%>">
                    <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>">
                    
                    <div style="display: flex; justify-content: space-around; align-items: center; flex-direction: column;">
                        
                            <input type="text" value="<%=usuario.id%>" style="display: none;" name="usuario_id">
                            <a href="editar.php?id=<?php echo $row['id'] ?>&nombre=<?php echo $row['nombre']?>&precio=<?php echo $row['precio']?>" class="boton-editar-producto">editar</a>
                                <a href="borrar.php?id=<?php echo $row['id'] ?>" class="boton-eliminar-producto">eliminar</a>
                    </div>
            </div>
        </div>
        <?php
                        }
                    ?>  
        
    </section>

    <footer>
        <div class="container">
            <div class="lista">
                <nav class="centrar">
                    <h4>NAVEGACIÓN</h4>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Tabla de talles</a></li>
                        <li><a href="#">Como comprar</a></li>
                    </ul>
                </nav>
    
                <nav class="medios-pago centrar">
                    <h4>MEDIOS DE PAGO</h4>
                    <a href="#"><img src="imagenes/medios-pago.png" alt=""></a>
                </nav>
    
                <nav class="contactanos centrar">
                    <h4>CONTACTANOS</h4>
                    <ul>
                        <li><a href="#">2216497631 / WhatsApp 2216497631 / Mayoristas 2216497631</a></li>
                        <li><a href="#">luchoherrerafernandez@gmail.com</a></li>
                        <li><a href="#">Calle Falsa 1234</a></li>
                    </ul>
                </nav>
            </div>
            <div class="seguinos">
                <h4>Seguinos</h4>
                <hr class="linea">
                <a href="#"><img src="imagenes/facebook.png" alt=""></a>
                <a href="#"><img src="imagenes/instagram-bosquejado.png" alt=""></a>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/5211234567890?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/carruselProducto.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/jquery.min.js"></script>

    <script src="javascripts/menu.js"></script>



</body>
</html>