<?php
function NuevoEelementos($array1, $numero){
    for ($i=0; $i < count($array1); $i++) { 
        if ($array1[$i]<$numero) {
            $array2[]= $array1[$i];
        }
    }
return $array2;
}
$a= array(1,4,6,7,23,564,12);
$b=10;
$array= NuevoEelementos($a,$b);

for ($i=0; $i <count($array) ; $i++) { 
    echo "$array[$i]<br> ";
};

?>