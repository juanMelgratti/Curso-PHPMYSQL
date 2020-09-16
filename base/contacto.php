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
    <h2>Contáctenos</h2>
        <?php
            if (isset($_GET['send'])){   
        ?>

            <h3 style="text-align:center;">Mensaje Enviado</h3>

        <?php
        }       
        ?>
        <form method="POST" action="send.php">
            <div class="container">
                <form action="/action_page.php">
                  <label for="fname">Nombre</label>
                  <input type="text" id="fname" name="firstname" placeholder="Tu nombre..." required>
              
                  <label for="lname">Apellido</label>
                  <input type="text" id="lname" name="lastname" placeholder="Tu apellido..." required>

                  <label for="old">Edad</label>
                  <input type="text" id="old" name="old" placeholder="Edad..." required>
                    
                  <label for="mail">Mail</label>
                  <input type="email" id="mail" name="mail" placeholder="Mail..." required>

                  <label for="subject">Motivo</label>
                  <input type="text" id="subject" name="subject" placeholder="Dinos tu motivo..." required>
           
                  <label for="msg">Mensaje</label>
                  <textarea id="msg" name="msg" placeholder="Escriba el mensaje aquí..." style="height:150px;" required></textarea>
              
                  <input type="submit" value="Enviar">
            </div>
        </form>
    
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>