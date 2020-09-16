
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>

    <?php
        $imagenes=array("default.jpg","default2.jpg","default3.png","default4.jpg")    
    ?>
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
    <h2>Noticias</h2>
    
    <div class="img-container">
    <?php
    $imagenes = array("img1.jpg", "img2.jpg", "img3.jpg", "img4.jpg");
    arsort($imagenes);
    shuffle($imagenes);
    while (list($i,$valor)=each($imagenes))
    {?>
      <img src="imagenes/<?php echo $valor ?>">
<?php
    }
?>  
    </div>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>
