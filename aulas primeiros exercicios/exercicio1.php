<?php
$v1=$_POST["num1"];
$v2=$_POST["num2"];

$soma=$v1+$v2;

if ($soma>20){
	$soma=$soma+8;
}else{
	$soma=$soma-5;
}

?>
<html>
<body> 
      <table width=500 align="center">
			<tr>
			    <td width=500 bgcolor="#cc3333" colspan=2><center><i><b>EXERCICIO 1</b></i></center></td>
			</tr>
			<tr>
				<td width=150 bgcolor="#00cc00" width=50><i><b><center>RESULTADO:</center></b></i></td>
				<td width=350><?php echo $soma;?> </td>
			</tr>
		</table>
 </body>
</html>

