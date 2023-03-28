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
     <div>
         <nav id="btns_productos">
             <ul>
                 <li><a href="catalogo.php?id=Sillon#contenido">Sillón Capri</a></li>
                 <li><a href="catalogo.php?id=Mesa#contenido">Mesa Ipanema</a></li>
                 <li><a href="catalogo.php?id=Banco#contenido">Banco Venecia</a></li>
             </ul>
         </nav>
    <?php
    if(isset($_GET['id'])) {
        switch ($_GET['id']) {
            case 'Sillon':
              $imagen= 'Sillon.jpg';
              $titulo= 'Sillón Capri';
              $precio= '345.00';
              $informacion= 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece. ';
            break;
            
            case 'Mesa':
                $imagen='Mesa.jpg';
                $titulo='Mesa Ipanema';
                $precio='500.00';
                $informacion='Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms  ';
            break;

            case 'Banco':
                $imagen='Banco.jpg';
                $titulo='Banco Venecia';
                $precio='450.00';
                $informacion=' Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';
            break;
        }
    ?>     
         <div id="cont_productos">
             <div id="cont_img">
                 <img src="imagenes/<?php echo $imagen; ?>">
             </div>
             <div id="cont_txt">
                 <h3><?php echo $titulo; ?></h3>
                 <p><?php echo $informacion; ?></p>
                 <h4>$ <?php echo $precio; ?></h4>
             </div>

         </div>
     </div>
    <?php } ?>
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>