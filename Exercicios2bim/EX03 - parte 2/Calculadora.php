<?php 
	
	$n1=$_POST["n1"];
	$n2=$_POST["n2"];
	$op=$_POST["op"];
	
	switch ($op){
		case "Adicao (+)": $res = $n1 + $n2; break;
		case "Subtracao (-)": $res = $n1 - $n2; break;
		case "Multiplicacao (*)": $res = $n1 * $n2; break;
		case "Divisao (/)": $res = $n1 / $n2; break;
	}
	
?>

<html>
	<body>
		<center><h3><b>Exercicio 3 - Parte 2</b><h3></center><td>
		<table align="center">
			<tr>
				<td width=150 bgcolor="#33ffcc" colspan=0><center>A operação escolhida foi: </center></td>
				<td><center><?php echo $op; ?></center></td>
			</tr>
			<tr>
				<td width=150 bgcolor="#33ffcc" colspan=0><center>O Resultado é: </center></td>
				<td><center> <?php echo $res; ?></center></td>
			</tr>
		</table>
	</body>
</html>