<?php
/*
FUNCIONES PREDEFINIDAS
ISSET
IS_NULL
EMPTY
*/
 $var1 = 4;
 $var2 = NULL;
 $var3 = FALSE;
 $var4 = 0;

 echo "var 1";
 echo "<br>";
 var_dump(isset($var1)); // TRUE
 echo "<br>";
 var_dump(is_null($var1)); // FALSE
 echo "<br>";
 var_dump(empty($var1)); // FALSE
 echo "<br>";

 echo "var 2";
 echo "<br>";
 var_dump(isset($var2)); // FALSE
 echo "<br>";
 var_dump(is_null($var2)); // TRUE
 echo "<br>";
 var_dump(empty($var2)); // TRUE
 echo "<br>";

 echo "var 3";
 echo "<br>";
 var_dump(isset($var3)); // TRUE
 echo "<br>";
 var_dump(is_null($var3)); // FALSE
 echo "<br>";
 var_dump(empty($var3)); // TRUE
 echo "<br>";

 echo "var 4";
 echo "<br>";
 var_dump(empty($var4)); // TRUE, EL 0 COMO BOOLEAN ES FALSE
 echo "<br>";
 echo "unset";

 unset($var1);
 echo "<br>";
 var_dump(isset($var1)); // FALSE
 echo "<br>";
