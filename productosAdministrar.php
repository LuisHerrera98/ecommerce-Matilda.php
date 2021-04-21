<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Administrar</title>
        <link rel="icon" href="imagenesCarrusel/logo.jpeg">
    
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
    
        
        <link rel="stylesheet" href="stylesheets/estilosHeader.css">
        
        <script src="javascripts/jquery.min.js"></script>
    
        
        <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

        <link rel="stylesheet" href="stylesheets/estilosFinales.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    </head>
<body>
<header class="header" id="header" >
        <div class="container2 logo-nav-container">
            <div class="icon-busq" style="width:250px; position:relative;">
                <a href="productosAdministrar.php"  class="logo"><img src="imagenesCarrusel/logo.jpeg" alt=""></a>
               <div style="position:absolute; left:60px;">
                <h1 style="margin:0;">EDITAR/BORRAR</h1>
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
                    <li><a href="#" style="font-size:16px; padding:1px;">Contacto</a></li>
                    
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
            <a href="index.php"><li>Inicio</li></a>
            <a href="productos.php"><li>Productos</li></a>
            <a href="contacto.php"><li>Contacto</li></a>
            <a href="ayuda.php"><li>Ayuda</li></a>
        </ul>
    <div>
    
    </div>
    
    </header>
    <main class="main-final">
        <div style="padding-top:95px; width:100%; text-align:center;">
        <a href="crearProducto.php"><div><p>CREAR PRODUCTO</p></div></a>
        </div>
        <div class="container3">
        <style>
        .subtitulo {
    margin: 0;
    color: black;
    -webkit-text-stroke: 0.3px black;
    display: inline;
    font-size: 50px;
    font-weight: 500;
    text-transform: uppercase;
}
.container3 div div div div h2 {
    font-size: 25px;
}
</style>
            <div class="row">
                <div class="col s12 div-final">
                    <div class="tituloYflechas">
                        <i class="fas fa-long-arrow-alt-left"></i>
                        <h1 class="center-align titulo">Categorías Principales</h1>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <div class="carousel center-align tamañoCarrusel">

                        <div class="carousel-item">
                            <h2 class="subtitulo">Remeras</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=remeras"><img src="imagenesCarrusel/remera.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Musculosas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=musculosas"><img src="imagenesCarrusel/musculosa.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Jeans</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=jeans"><img src="imagenesCarrusel/jeans.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Pantalones</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=pantalones"><img src="imagenesCarrusel/pantalon.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Shorts</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=shorts"><img src="imagenesCarrusel/shorts.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Polleras</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=polleras"><img src="imagenesCarrusel/faldas.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Vestidos</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=vestidos"><img src="imagenesCarrusel/vestidos.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Calsas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=calsas"><img src="imagenesCarrusel/calsas.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Camisas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=camisas"><img src="imagenesCarrusel/camisa.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Tops</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=tops"><img src="imagenesCarrusel/tops.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Sweaters</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=sweaters"><img src="imagenesCarrusel/sweaters.jpg" alt=""></a>
                        </div>

                        <div class="carousel-item">
                            <h2 class="subtitulo">Camperas</h2>
                            <div class="linea-division"></div>
                            <a href="productosCategoriaEditar.php?categoria=camperas"><img src="imagenesCarrusel/campera.jpg" alt=""></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    
    
    <a href="https://wa.link/5jzkyo" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <script src="javascripts/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="javascripts/scripts.js"></script>

    <script src="javascripts/scriptCarrusel.js"></script>

    <script src="javascripts/headroom.min.js"></script>

    <script src="javascripts/menu.js"></script>

    <script src="javascripts/masonry.js"></script>

    <script src="javascripts/productos.js"></script>

    

</body>
</html>