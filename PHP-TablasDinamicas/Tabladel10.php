<html>
<head>
<meta charset="utf-8">
<title>Tablla del 1 al 10</title>
 <?php
  //Creamos los parametros iniciales
  $filas = 10;
  $columnas = 10;
  $texto = 1;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body>      
 
<!-- Creamos el inicio de la tabla manualmente-->
<table border="2" cellspacing="5">
 <?php
 //Iniciamos el bucle de las filas
 for($t=0;$t<$filas;$t++){
  echo "<tr>";
  //Iniciamos el bucle de las columnas
  for($y=0;$y<$columnas;$y++){
   if($grey){
    //Pintamos el cuadro
    echo "<td style='color: white;padding: 3px;background-color: #616060;font-family: sans-serif;font-size: x-large;'>".$texto."</td>";
    //El próximo no será pintado
    $grey=false;
    $texto++;
   }else{
    //Dejamos cuadro en blanco
    echo "<td style='padding:3px;font-family: sans-serif;font-size: x-large;'>".$texto."</td>";
    //El próximo será pintado
    $grey=true;
    $texto++;
    }
   }
   //Cerramos columna
   echo "</tr>";
  }
 ?>
 <!-- Cerramos tabla -->
 </table>
 </body>                                                                 
 </html>