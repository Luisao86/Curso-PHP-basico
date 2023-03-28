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
    <h2>Noticias</h2>
        <?php
         $noticias = array(
             array('imagen'=>'futbol.jpg', 'titulo'=>'Por las nuevas restricciones, la Policía clausuró dos torneos de fútbol','texto'=>'La Policía de Córdoba clausuró dos campeonatos de fútbol amateur que se desarrollaban este sábado en diferentes predios de la ciudad de Córdoba, según se informó. Los operativos se concretaron a raíz de las nuevas medidas de restricción por la pandemia del coronavirus que el Gobierno de Córdoba adoptó en las últimas horas.'),
             array('imagen'=>'lechuga.jpg', 'titulo'=>'Lechuga por las nubes', 'texto'=>'Según varios especialistas, la razón detrás de esto está en dos factores: la pérdida de cosecha por culpa del calor y los constantes cortes de luz que complican la refrigeración de estos productos una vez cosechados.'),
             array('imagen'=>'perros.jpg', 'titulo'=>'El mejor amigo del hombre', 'texto'=>'Un equipo de científicos japoneses ilumina este proceso de enamoramiento entre los perros y sus dueños: cuando se miran a los ojos, retroalimentan su felicidad liberando una hormona vinculada con el apego: la oxitocina.'),
             array('imagen'=>'netflix.jpg', 'titulo'=>'Netflix, caen sus acciones', 'texto'=>'Las acciones de Netflix se desploman en Bolsa. Este viernes, los títulos de la compañía caen casi un 25%, tras retroceder ayer un 20% en los mercados fuera de hora, después de dar a conocer  sus cuentas de 2021 y vaticinar una subida de suscriptores decepcionante.')
         );

    for($i=0; $i<count($noticias); $i++) {
      ?>  
      <div class="cont_noticias">
           <img src="imagenes/<?php echo $noticias[$i]['imagen']?>" class = "ajustar_img">  
           <h3><?php echo $noticias[$i]['titulo']?></h3> 
           <p><?php echo $noticias[$i]['texto']?></p>

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