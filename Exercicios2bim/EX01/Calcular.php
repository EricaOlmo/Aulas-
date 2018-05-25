<?php

	$va=$_POST["a"]; //declarado a variavel, o metodo e qual objeto que é do arquivo Formulario.html
	$vb=$_POST["b"];
	
	$soma=$va+$vb; //efetuando a soma que será mostrado no html abaixo
	
?>
<html>
<body> 
      <table width=500 align="center">
			<tr>
			    <td width=150 bgcolor="#00ccff" colspan=2><center><i><b>EXERCICIO 1</b></i></center></td>
			</tr>
			<tr>
				<td width=150 bgcolor="#33ffcc" width=50><i><b><center>A soma dos dois numeros:</center></b></i></td>
				<td width=150><center><?php echo $soma;?></center> </td> <!--exibe o valor da variavel soma -->
			</tr>
		</table>
 </body>
</html>

