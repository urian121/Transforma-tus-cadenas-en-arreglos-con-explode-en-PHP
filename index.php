<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> La función PHP explode() </title>
  <style>
    body{
      padding: 0;
      margin: 0;
      background-color: #f2f4f8;
    }
    .content{
      margin: 0 auto;
      width: 90%;
    }
    p{
      background-color: #ccc;
      padding: 5px;
      margin: 0 auto;
      width: 80%;
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>
  
<p>
  La función PHP <strong> explode()</strong> convierte una cadena en una array. A cada uno de los caracteres de la cadena se le asigna un índice que comienza en 0. 
  Esta función toma una cadena y la divide en varias partes, basándose en un delimitador especificado.
  <br>
  <em> La sintaxis de esta función es la siguiente:
   explode (separator, string, limit)
  </em>
</p>

<div class="content">
<?php

$cadenaString = "uno dos casa cuatro carro";
$array        = explode(" ", $cadenaString);

echo "El número de elementos en el array es: " . count($array);
echo '<pre>';
  print_r($array);
echo '</pre>';

foreach($array as $posicion=>$elemento){
	echo "El índice del elemento es: " . $posicion . " y el elemento es: " . $elemento;
	echo "<br>";
}
echo '<hr>';
for($i=0; $i< count($array); $i++){
	  echo $array[$i];
	  echo "<br>";
  }
echo '<hr>';



$miCadena   = "Hola a todos, bienvenidos al canal Web Developer.";
echo '<pre>';
$arraycadena = explode(" ",$miCadena);
  print_r($arraycadena);
echo '</pre>';
echo '<hr>';


$string         = "apple, banana, cherry, 2023-02-05";
$piezaArray     = explode(',', $string);
print_r($piezaArray);
echo '<hr>';



echo '<br>';
$mi_cadena = 'Urian|Alejandro|Brenda|Diego';
// límite positivo
echo '<pre>';
  print_r(explode('|', $mi_cadena, 2));
echo '</pre>';


//líimte negativo (desde PHP 5.1)
echo '<pre>';
  print_r(explode('|', $mi_cadena, -1));
echo '</pre>';
?>
</div>

</body>
</html>