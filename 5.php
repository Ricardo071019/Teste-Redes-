<?php 

$menor = 99999;
$maior = 99999;
$soma = 0;
$produto = 1;
$media = 0;

$numeros = array();
for ($i=0; $i <15 ; $i++) { 
	$numeros[]=rand(1,1000);
}

foreach ($numeros as $key => $numeros)
{
	if ($numeros>$maior) {
		$maior = $numeros;
	}
	if ($numeros<$menor) {
		$menor = $numeros;
	}

$soma=$soma+$numeros;
$produto=$produto*$numeros;
$media=$soma/15;

}
$media = $soma*15;

echo 'O maior Numero é: '.$maior;
echo "<br>";
echo 'O menor Numero é: '.$menor;
echo "<br>";
echo ' A media é: '.$media;
echo "<br>";
echo ' O produto é: '.$produto;
 ?>