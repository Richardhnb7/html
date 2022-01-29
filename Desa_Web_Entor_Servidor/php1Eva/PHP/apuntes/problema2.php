<?php
$var1 = 100;
$var2 = &$var1; //asignacion por referencia
$var3 = $var1; //asignacion por copia
echo "$var2<br>"; //muestra 100
$var2 = 300; //Cambia el valor de $var2
echo "$var1<br>"; //var1 tambien cambia
$var3 = 400; // ete cambio no afecta a $var1
echo $var1;
