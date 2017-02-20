<html>
<head>
<meta charset="utf-8">
<title>Funcion POW</title>
</head>
<body style="text-align=center;">
<h3>Tabla de 4 x 4 mostrando la potencia de los 4 primeros numeros</h3>
<?php
define('TAM', 4);
//declaramos la funcion con los argumentos
function potencia($v1, $v2){
//pow funcion que eleva a la potencia 
 $rdo=pow($v1, $v2);
//devolvemos los valores
 return $rdo;
}
//creamos la tabla html donde imrpimiremos los resultados
 echo "<table border='2' cellspacing='5'>";
//recorremos el valor de nuestra constante
 for ($n1=1; $n1<=TAM; $n1++)
 {
  echo "<tr style='font-size: xx-large;font-style: normal;font-family: sans-serif;color: white;background: teal;'>";
   for ($n2=1; $n2<=TAM; $n2++)
     echo "<td>".potencia($n1,$n2)."</td>";
  echo "</tr>";
  }
  echo "</table>";
   
?>
</body>
</html>