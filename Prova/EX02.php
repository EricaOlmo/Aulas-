<?php
$distancia=$_POST["distancia"];
$consumo=$_POST["consumo"];
$valor=$_POST["valor"];
$calc=($distancia/$consumo)*$valor;
$litros=($distancia/$consumo);

?>
<html>
<body> 
      <table width=500 align="center">
			<tr>
				<td width=350>O valor que sera gasto com combustivel e: </td>
				<td width=350><?php echo $calc;?> Reais </td>
			</tr>
			<tr>
				<td width=350>O carro consumira: </td>
				<td width=350><?php echo $litros;?> Litros </td>
			</tr>
		</table>
 </body>
</html>
