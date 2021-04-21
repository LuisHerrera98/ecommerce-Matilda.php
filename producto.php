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

    <link rel="stylesheet" href="stylesheets/estilosFinales.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
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

                            <li class="li-productos"><a href="productos.php">Ver Todo</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=sweaters">SWEATERS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=camperas">CAMPERAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=remeras">REMERAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=jeans">JEANS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=pantalones">PANTALONES</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=camisas">CAMISAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=musculosas">MUSCULOSAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=shorts">SHORTS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=polleras">POLLERAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=vestidos">VESTIDOS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=calsas">CALSAS</a></li>

                            <li class="li-productos"><a href="productosCategoria.php?categoria=tops">TOPS</a></li>

                        </ul>

                    </div>
                    <li><a href="contacto.php" style="font-size:16px; padding:1px;">Contacto</a></li>
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
            <a href="index.php">Inicio</a>    /
            <a href="productos.php">Productos </a>    /
        </div>
        <?php
    // include_once "db_empresa.php";
    $id=$_GET['id'];
    $con = mysqli_connect("localhost", "root", "", "matilda");
    $query = "SELECT id,nombre,precio,imagen,imagen2,tipodetalle,tipodetalleunico,color1,color2,color3,color4,color5,color6,color7 FROM productos WHERE id='$id';";
    
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
                                <?php
                                if($row['imagen2']){?>

                                <div class="carousel-item">
                                <img src="data:<?php echo $row['tipo']; ?>;base64,<?php echo  base64_encode($row['imagen2']); ?>">
                                </div>

                                <?php
                                }
                                ?>

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="whatsapp.php" method="post">
            <div class="datos-detalle-producto">
                <p><?php echo strtoupper($row['nombre']) ?></p>
                <p style="font-size:20px; color:green;">$<?php echo $row['precio'] ?></p>
                <div class="imagen-mediosDePago">
                <p style="font-weight:bold;">Medios de pago</p>
                    <img class="mediosDePagoImagen" src="imagenes/medios-pago.png" alt="">
                <hr>
                <div style="display:flex; justify-content:space-between;align-items:center; width:100%">
                <select style="display: block;margin-top:10px;border-radius:10px; width:45%" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>COLOR</option>
                    <?php
                        if($row['color1']){
                            $color="";
                            $letra="black";
                            if($row['color1']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color1']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color1']=="grey"){
                                $letra="black";
                                
                                $color="Gris";
                            }
                            if($row['color1']=="burlywood"){
                                $letra="black";
                                
                                $color="Beige";
                            }
                            if($row['color1']=="beige"){
                                $letra="black";
                                
                                $color="Beige-Claro";
                            }
                            if($row['color1']=="red"){
                                $letra="black";
                                
                                $color="Rojo";
                            }
                            if($row['color1']=="skyblue"){
                                $letra="black";
                                
                                $color="Celeste";
                            }
                            if($row['color1']=="blue"){
                                $letra="black";
                                
                                $color="Azul";
                            }
                            if($row['color1']=="green"){
                                $letra="black";                                

                                $color="Verde";
                            }
                            if($row['color1']=="darkkhaki"){
                                $letra="black";

                                $color="Manteca";
                            }
                            if($row['color1']=="pink"){
                                $letra="black";

                                $color="Rosa";
                            }
                            if($row['color1']=="brown"){
                                $letra="black";

                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color1'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color2']){
                            $color="";
                            $letra="black";
                            if($row['color2']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color2']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color2']=="grey"){
                                $letra="black";
                                
                                $color="Gris";
                            }
                            if($row['color2']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color2']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color2']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color2']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color2']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color2']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color2']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color2']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color2']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color2'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color3']){
                            $color="";
                            $letra="black";
                            if($row['color3']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color3']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color3']=="grey"){
                                $letra="black";
                                $color="Gris";
                            }
                            if($row['color3']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color3']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color3']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color3']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color3']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color3']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color3']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color3']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color3']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color3'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color4']){
                            $color="";
                            $letra="black";
                            if($row['color4']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color4']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color4']=="grey"){
                                $letra="black";
                                $color="Gris";
                            }
                            if($row['color4']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color4']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color4']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color4']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color4']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color4']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color4']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color4']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color4']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color4'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color5']){
                            $color="";
                            $letra="black";
                            if($row['color5']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color5']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color5']=="grey"){
                                $letra="black";
                                $color="Gris";
                            }
                            if($row['color5']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color5']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color5']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color5']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color5']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color5']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color5']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color5']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color5']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color5'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color6']){
                            $color="";
                            $letra="black";
                            if($row['color6']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color6']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color6']=="grey"){
                                $letra="black";
                                $color="Gris";
                            }
                            if($row['color6']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color6']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color6']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color6']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color6']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color6']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color6']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color6']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color6']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color6'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                    <?php
                        if($row['color7']){
                            $color="";
                            $letra="black";
                            if($row['color7']=="black"){
                                $letra="white";
                                $color="Negro";
                            }
                            if($row['color7']=="white"){
                                $letra="black";
                                $color="Blanco";
                            }
                            if($row['color7']=="grey"){
                                $letra="black";
                                $color="Gris";
                            }
                            if($row['color7']=="burlywood"){
                                $letra="black";
                                $color="Beige";
                            }
                            if($row['color7']=="beige"){
                                $letra="black";
                                $color="Beige-Claro";
                            }
                            if($row['color7']=="red"){
                                $letra="black";
                                $color="Rojo";
                            }
                            if($row['color7']=="skyblue"){
                                $letra="black";
                                $color="Celeste";
                            }
                            if($row['color7']=="blue"){
                                $letra="black";
                                $color="Azul";
                            }
                            if($row['color7']=="green"){
                                $letra="black";
                                $color="Verde";
                            }
                            if($row['color7']=="darkkhaki"){
                                $letra="black";
                                $color="Manteca";
                            }
                            if($row['color7']=="pink"){
                                $letra="black";
                                $color="Rosa";
                            }
                            if($row['color7']=="brown"){
                                $letra="black";
                                $color="Chocolate";
                            }
                            ?>
                            <option value="<?php echo $color?>" style="background-color:<?php echo $row['color7'] ?>; color:<?php echo $letra ?>;"><?php echo $color ?></option>
                    <?php
                        }
                    ?>
                </select>

                <?php
                // ACA PARA ABAJO ESTA LA LOGICA DE MOSTRAR LAS LISTAS DE TALLE SEGUN EL TIPO DE TALLE DE LA BD
            if($row['tipodetalle']){
                if($row['tipodetalle']=="34-56"){?>

                    <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                        <option value="" selected>TALLE</option>
                        <option value="36">34</option>
                        <option value="36">36</option>
                        <option value="38">38</option>
                        <option value="40">40</option>
                        <option value="42">42</option> 
                        <option value="44">44</option>
                        <option value="46">46</option>
                        <option value="48">48</option>
                        <option value="50">50</option>
                        <option value="52">52</option>
                        <option value="54">54</option>
                        <option value="56">56</option>
                    </select>
    
                    <?php
                    }
                    ?>
                    <?php
                // ACA PARA ABAJO ESTA LA LOGICA DE MOSTRAR LAS LISTAS DE TALLE SEGUN EL TIPO DE TALLE DE LA BD
                if($row['tipodetalle']=="36-48"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="36">36</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option> 
                    <option value="44">44</option>
                    <option value="46">46</option>
                    <option value="48">48</option> 
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="38-48"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option> 
                    <option value="44">44</option>
                    <option value="46">46</option>
                    <option value="48">48</option> 
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="38-50"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option> 
                    <option value="44">44</option>
                    <option value="46">46</option>
                    <option value="48">48</option> 
                    <option value="50">50</option>
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="38-52"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option> 
                    <option value="44">44</option>
                    <option value="46">46</option>
                    <option value="48">48</option> 
                    <option value="50">50</option>
                    <option value="52">52</option>
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="s-l"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="S">S</option>
                    <option value="M">M</option> 
                    <option value="L">L</option>
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="xs-xxl"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option> 
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option> 
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="s-xxl"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="S">S</option>
                    <option value="M">M</option> 
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option> 
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="s-xxxl"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="S">S</option>
                    <option value="M">M</option> 
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option> 
                    <option value="XXXL">XXXL</option> 
                </select>

                <?php
                }
                ?>
                <?php
                if($row['tipodetalle']=="s-xxxxl"){?>

                <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color7" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    <option value="S">S</option>
                    <option value="M">M</option> 
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option> 
                    <option value="XXXL">XXXL</option> 
                    <option value="XXXL">XXXXL</option>
                </select>

                <?php
            }  
                }else{?>
                    <select style="display: block;margin-top:10px;border-radius:10px;width:45%;" name="color" id="color7" class="input-crear select-input">
                    <option value="" selected>TALLE</option>
                    
                    <option value="S"><?php echo $row['tipodetalleunico'] ?></option>

                </select>
                    
                <?php   
                }
                ?>
                
                </div>
                </div>
                <br>
                <hr>
                <br>
            
                    <input style="display: none;" type="number" name="producto_id" value="<%=producto.id%>">
                    <input type="hidden" name="nombre" value="<?php echo $row['nombre']; ?>">
                    
                    <div style="display: flex; justify-content: space-around; align-items: center; flex-direction: column;">
                        
                            <input type="text" value="<%=usuario.id%>" style="display: none;" name="usuario_id">
                            <button id="añadir-carrito" class="boton-comprar-detalle" type="submit">Comprar</button>
                    </div>
            </div>
            </form>
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

    <script src="javascripts/productos.js"></script>



</body>
</html>