<?php 

$a=$_POST["a"]; 


if($a<=300){

	$soma=$a*0.5; 
	$soma1=$a+$soma; 
	echo"Salário reajustado para "; 
	echo $soma1; 
} else{

	$mais=$a*0.3; 
	$mais1=$a+$mais; 
	echo"Salário reajustado para ";
	echo $mais1; 
}

?>