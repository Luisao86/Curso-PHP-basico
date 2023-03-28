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
    <h2>Clientes</h2>
    <h3>Pedidos:</h3>
    <?php
    
    include("conexion.php");
    $enlist_prod = mysqli_query($base, "SELECT * FROM `pedidos_cliente`");

    while ($mostrar_pedido = mysqli_fetch_assoc($enlist_prod)){

    ?>
    <div class = "contenido_pedidos"> 
        <h4>Producto:<?php echo $mostrar_pedido['producto']?></h4>
        <p>Cantidad:<?php echo $mostrar_pedido['cantidad']?></p>
        <p>Precio:$<?php echo $mostrar_pedido['precio']?></p>
        
    </div>
    </div>
    <?php
    }
    ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>