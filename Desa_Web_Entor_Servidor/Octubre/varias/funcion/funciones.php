<?php
function repeticiones($array_palabra)
{
	$resultado=array_count_values($array_palabra);
	return $resultado;
}
function diferencia_array($p,$s)
{
	$resultado=array_diff($p,$s);
	return $resultado;
}
function dividir_array($array_palabra,$p)
{
	$resultado=array_chunk($array_palabra,$p);
	return $resultado;
}
function  comprobarlongitud3($p)
{
	$cierto=false;
	foreach ($p as $indice=>$valor)
	{
		if ($valor==3) 
		{
			$cierto=true;
			
		}
		
	}
	return $cierto;
}
function array_invertido($p)
{
	$invertir=array_reverse($p);
	return $invertir;
}
function impares($var)
{
	return ($var % 2 == 1);
}
function obtener_numeros_impares($p)
{
	$resultado=array_filter($p, "impares");
	return $resultado;
}
function pares($var)
{
	return ($var % 2 == 0);
}
function obtener_numeros_pares($p)
{
	$resultado=array_filter($p, "pares");
	return $resultado;
}
function comparar_arrays($p,$s)
{
	$resultado =array_merge($p,$s);
	return $resultado;
}
function cambiar_claves_valores($p)
{
	$resultado= array_flip ($p);
	return $resultado;
}
function cuadrado($var)
{
	return $var*$var;
}
function funcion_cuadrada_del_array($p)
{
	$cuadrados=array_map("cuadrado",$p);
	return $cuadrados;
	
}
function  ordenar_arrays(&$p)
{
	sort($p);
	
}
function inversa_pop(&$p)
{
	
	$resultado=array_pop($p);
	return $resultado;
}
function existe_indice($p,$s)
{
	$resultado=array_key_exists($s,$p);
	return $resultado;
}
function suprimir_elementos($p)
{
	$resultado=array_unique($p);
	return $resultado;
}
function longitud($array){
	$NumeroDeDatos=count($array);
	return $NumeroDeDatos;
}
function localizar_numero_en_array($array, $numero){
	$resultado=false;

	for ($i=0; $i < count($array) ; $i++) { 
		if ($array[$i]=$numero) {
			$resultado=true;
		}
	}
	return $resultado;
	
}$a <= 10;
function media($array){
	$longitud=longitud($array);
	$suma=0;
	for ($i=0; $i <$longitud ; $i++) { 
		$suma=$suma+$array[$i];
	}
	return ($suma/$longitud);

}
function desplazamiento_derecha ($dato1,$dato2){
	//rellenar los huecos con un 0
	$posicion2=count($dato2)-1;//aray de posiciones 
	$posicion1=count($dato1)-1;//arrayde numeros. el original
	$indice1=0;
	$indice2=0;
	while ($indice2<=$posicion2) {
		$posiciones=$dato2[$indice2];
		$aux=$posicion1;
		while ($posiciones<=$posicion1) {
			$dato1[$posicion1+1]=$dato1[$posicion1];
			$posicion1=$posicion1-1;
		}
		$dato1[$posiciones]=0;
		$posicion1=$aux+1;
		$indice2++;
	}
}
function desplazamiento_izquierda ($dato1,$dato2){
//borrar datos 
	$posicion2=count($dato2);//aray de posiciones 
	$posicion1=count($dato1);//arrayde numeros. el original
	$indice1=0;
	$indice2=0;
	while ($indice2<=$posicion2) {
		
		if ($dato2[$indice2]>$posicion1) {
			$posiciones=$dato2[$indice2];
			while ($posiciones<=$posicion1) {
				$dato1[$posiciones]=$dato1[$posicion1+1];
				$posiciones++;
			}
			$posicion1--;
			$indice2++;
		}
		
	}
}

?>