<?php
/* EXPLODE (devuelve un array) de pizzas en 
la variable porciones, es decir
convierte porciones en tipo array insertandole los datos.
Teniendo una cadena, sabiendo el separador se puede convertir 
en un array.
*/
 $pizza = "york milanesa bacon";
 $porciones = explode(" ", $pizza);
 echo $porciones[0];
 echo "<br>";
 echo $porciones[1];