<?php
$a=$_POST["n1"];
$b=$_POST["n2"];
$c=$_POST["n3"];
$d=$_POST["n4"];

$somaMedia = ($a + $b + $c + $d) / 4;
if ($somaMedia >= 70){
	$result="Aprovado";
} else if ($somaMedia < 70){
	$result="Reprovado";
}

?>

<html>
<body> 
      <table width=500 align="center">
			<tr>
				<td width=350> Sua media foi: <?php echo $somaMedia;?> </td>
				<td> <?php echo  $result;?>  </td>
			</tr>
		</table>
 </body>
</html>
