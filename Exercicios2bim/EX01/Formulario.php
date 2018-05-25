<!-- 1-	Crie um formulário com 2 campos “a” e “b” e um botão que aponte para um arquivo calcular.php,  
que retorna a soma desses 2  números.-->
<html>
<head>
	<title>Formulario</title>
</head>
	<body>
		<form name="formulario"action="Calcular.php" method="POST" > <!--criando o formulario, dando um nome o metodo utilizado -->
			<div align="center"> 
			<center><h3><b>Exercicio 1</b><h3></center><td>
				<table border="0" cellspacing="1" cellpading="0"><!--criando tabela -->
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Digite um numero:</td> 
						<td><input type="numero" name="a" maxlength="10"></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Digite outro Numero:</td> 
						<td><input type="numero" name="b" maxlength="10"></td>
					</tr>
					<tr>
						<td align="center" colspan=7><input type="submit" value="Enviar"></td><!--função enviar -->
					</tr>
					<tr>
						<td align="center" colspan=7><input type="reset" value="Limpar"></td><!--função limpar -->
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>
