<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Crear Producto</title>


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
                <h1 class="nombrePrincipal">Matilda</h1>
            </a>
        </div>
    </main>
    <?php

    if (isset($_REQUEST['guardar'])) {
        if (isset($_FILES['foto']['name']) && isset($_FILES['foto2']['name'])) {
            $tipoArchivo = $_FILES['foto']['type'];
            $permitido=array("image/png","image/jpeg");
                if( in_array($tipoArchivo,$permitido) ==false ){
                    die("Archivo no permitido");
                }
            $nombreArchivo = $_FILES['foto']['name'];
            $tamanoArchivo = $_FILES['foto']['size'];
            $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            //IMAGEN 1 CARGA

            $tipoArchivo2 = $_FILES['foto2']['type'];
            $permitido2=array("image/png","image/jpeg");
                
            $nombreArchivo2 = $_FILES['foto2']['name'];
            $tamanoArchivo2 = $_FILES['foto2']['size'];
            $imagenSubida2 = fopen($_FILES['foto2']['tmp_name'], 'r');
            $binariosImagen2 = fread($imagenSubida2, $tamanoArchivo2);
            //IMAGEN 2 CARGA
            
            $con = mysqli_connect("localhost", "root", "", "matilda");
            $binariosImagen = mysqli_escape_string($con, $binariosImagen);
            $binariosImagen2 = mysqli_escape_string($con, $binariosImagen2);
            $query = "INSERT INTO productos (nombre ,precio ,imagen ,imagen2 ,categoria ,tipo ,tipodetalle,tipodetalleunico,color1,color2,color3,color4,color5,color6,color7) values 
                                                         ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen . "','" . $binariosImagen2 . "','" . $_POST['categoria'] . "','" . $tipoArchivo . "','" . $_POST['tipodetalle'] . "','" . $_POST['tipodetalleunico'] . "','" . $_POST['color1'] . "','" . $_POST['color2'] . "','" . $_POST['color3'] . "','" . $_POST['color4'] . "','" . $_POST['color5'] . "','" . $_POST['color6'] . "','" . $_POST['color7'] . "');
                            ";
            $res = mysqli_query($con, $query);
            //header("Location:productosCategoriaEditar.php?id=" .$_POST['categoria']);

            header("Location:crearProducto.php");
            
        
        }/*
        else if(isset($_FILES['foto']['name'])){
            $tipoArchivo3 = $_FILES['foto']['type'];
            $permitido3=array("image/png","image/jpeg");
                if( in_array($tipoArchivo,$permitido) ==false ){
                    die("Archivo no permitido");
                }
            $nombreArchivo3 = $_FILES['foto']['name'];
            $tamanoArchivo3 = $_FILES['foto']['size'];
            $imagenSubida3 = fopen($_FILES['foto']['tmp_name'], 'r');
            $binariosImagen3 = fread($imagenSubida3, $tamanoArchivo3);

            $con = mysqli_connect("localhost", "root", "", "matilda");
            $binariosImagen3 = mysqli_escape_string($con, $binariosImagen3);
            $query = "INSERT INTO productos (nombre ,precio ,imagen ,categoria ,tipo ,tipodetalle) values 
                                                         ('" . $_POST['nombre'] . "','" . $_POST['precio'] . "','" . $binariosImagen3 . "','" . $_POST['categoria'] . "','" . $tipoArchivo . "','" . $_POST['tipodetalle'] . "');
                            ";
            $res = mysqli_query($con, $query);
            //header("Location:productosCategoriaEditar.php?id=" .$_POST['categoria']);

            header("Location:crearProducto.php");

        }*/
    }
                ?>
    <h1 style="margin-top: 12px;text-align: center;">CREAR UN PRODUCTO</h1>
    <form action="" method="POST" enctype="multipart/form-data" class="formularioPerris">
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre" class="input-crear">

        <br id="br-nombre">
        <label for="nombre">Ingrese el precio</label>
        <input type="number" name="precio" id="precio" class="input-crear">
        
        <br id="br-descuento">
        <label for="categoria">Elija una categoria</label>
        <select style="display: block;" name="categoria" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UNA CATEGORIA</option>
            <option value="sweaters">SWEATER</option>
            <option value="camperas">CAMPERA</option>
            <option value="remeras">REMERA</option> 
            <option value="jeans">JEAN</option>
            <option value="pantalones">PANTALON</option>
            <option value="camisas">CAMISA</option> 
            <option value="musculosas">MUSCULOSA</option>
            <option value="shorts">SHORTS</option>
            <option value="polleras">POLLERA</option>
            <option value="vestidos">VESTIDOS</option>
            <option value="calsas">CALSAS</option>
            <option value="tops">TOPS</option>
        </select>
        <label for="categoria">TALLE UNICO</label>
        <select style="display: block;" name="tipodetalleunico" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN TALLE</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
            <option value="XXXXL">XXXXL</option>

            <option value="34">34</option>
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
        </select>
        <label for="categoria">Elija una tipo de talle</label>
        <select style="display: block;" name="tipodetalle" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN TIPO/TALLE</option>
            <option value="xs-xxl">XS al XXL</option>
            <option value="s-l">S al L</option>
            <option value="s-xxl">S al XXL</option>
            <option value="s-xxxl">S al XXXL</option>
            <option value="s-xxxxl">S al XXXXL</option>

            <option value="34-56">34 al 56</option>
            <option value="36-48">36 al 48</option>
            <option value="38-48">38 al 48</option>
            <option value="38-50">38 al 50</option>
            <option value="38-52">38 al 52</option>
        </select>
        <label for="categoria">1°- COLOR</label>
        <select style="display: block;" name="color1" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="categoria">2°- COLOR</label>
        <select style="display: block;" name="color2" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="categoria">3°- COLOR</label>
        <select style="display: block;" name="color3" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="categoria">4°- COLOR</label>
        <select style="display: block;" name="color4" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="categoria">5°- COLOR</label>
        <select style="display: block;" name="color5" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="categoria">6°- COLOR</label>
        <select style="display: block;" name="color6" id="categoria" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
        <label for="color7">7°- COLOR</label>
        <select style="display: block;" name="color7" id="color7" class="input-crear select-input">
            <option value="" selected>SELECIONE UN COLOR</option>
            <option value="black" style="background-color:black; color:white;">Negro</option>
            <option value="white">Blanco</option>
            <option value="grey" style="background-color:gray;">gris</option>
            <option value="burlywood" style="background-color:burlywood;">Beige</option> 
            <option value="beige" style="background-color:beige;">Beige-claro</option>
            <option value="red" style="background-color:red;">Rojo</option>
            <option value="skyblue" style="background-color:skyblue;">celeste</option> 
            <option value="blue" style="background-color:blue;">azul</option>
            <option value="green" style="background-color:green;">verde</option>
            <option value="darkkhaki" style="background-color:darkkhaki;">manteca
            <option value="pink" style="background-color:pink;">rosa</option></option>
            <option value="brown" style="background-color:brown;">chocolate</option></option>
        </select>
       
          
        <br id="br-talle">
        <label for="imagen">Carga la imagen "Principal"</label>
        <br>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto" id="img-principal">
            </div>
        <br>
        <label for="imagen">Carga segunda imagen"</label>
        <br>
            <div class="botones-input-file" id="primer-button">Subir imagen <i class="fas fa-file-upload"></i>
            <input class="subir-imagen-principal" type="file" name="foto2" id="img-principal">
            </div>
        <br>
        <hr>
        <button type="submit" name="guardar">Crear Producto</button>
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

