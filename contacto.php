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
    <form method="POST" action="enviar_consulta.php">
         <input type="text" name="nombre" placeholder="Nombre" maxlength="20" required>
         <input type="text" name="apellido" placeholder="Apellido" maxlength="40" required>
         <input type="number" name="edad" placeholder="Edad" min="18" max="105" placceholder="Edad">
         <input type="email" name="correo" placeholder="Correo" maxlength="100" required>
         <input type="text" name="motivo_consulta" placeholder="Motivo de su consulta" maxlength="100" required>
         <textarea name="mensaje" placeholder="Escriba su mensaje" maxlength="800" rows="5" required></textarea>
         <input type="submit">

    </form>
    <?php 
      if(isset($_GET['ok'])) {
         echo "<h2>Gracias por su mensaje</h2>";
      };
    ?>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>