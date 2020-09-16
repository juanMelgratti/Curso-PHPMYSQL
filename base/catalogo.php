<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
                <li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Catálogo</h2>
    <nav id="botonera_contenido">
        <ul>
            <li><a href="catalogo.php?id=SC">Sillón Capri</a></li><li><a href="catalogo.php?id=MI">Mesa Ipanema</a></li><li><a href="catalogo.php?id=BV">Banco Venecia</a></li>
        </ul>
    </nav>
    <article id="info_products">
        <?php
        if(isset($_GET['id'])){
            switch($_GET['id']){
                case 'SC':
                    $Producto = 'Sillón Capri';
                    $Precio = '$350.00';
                    $Caracteristicas = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.' ;
                    $Imagen = 'sillon1.jpg';
                break;
                case 'MI':
                    $Producto = 'Mesa Ipanema';
                    $Precio = '$500.00';
                    $Caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms '  ;
                    $Imagen = 'ipanema.jpg';
                break;
                case 'BV':
                    $Producto = 'Banco Venecia';
                    $Precio = '$450.00';
                    $Caracteristicas = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.'   ;
                    $Imagen = 'venecia.jpg';
                break;
            }
        
        ?>
    </article>
    <div id="datos">
        <h3><?php echo $Producto  ?></h3>
        <h3><?php echo $Precio ?></h3>
        <h3><?php echo $Caracteristicas ?></h3>
        <img src="imagenes/<?php echo $Imagen ?>" alt="">
    </div>
    <?php
    }
    ?>

    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>