<html>
	<body>
		<form action="Calculadora.php" method="POST" > <!--criando o formulario, colocando o metodo utilizado e a ação com uma variavel que será atribuida no outro arquivo -->
			<div align="center"> 
			<center><h3><b>Exercicio 3 - Parte 2</b><h3></center><td>
				<table border="0" cellspacing="1" cellpading="0"><!--criando tabela -->
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Numero 1: </td> 
						<td><input type="number" name="n1" size="20" required autofocus></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Numero 2:</td> 
						<td><input type="number" name="n2" size="20" required></td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0> Operacao  </td> <!--modo de caixa de seleção-->
						<td><select name="op" size="1">
							<option selected value="--" required>--</option> <!--required é obrigatorio-->
							<option value="Adicao (+)">Adicao</option>
							<option value="Subtracao (-)">Subtracao</option>
							<option value="Multiplicacao (*)">Multiplicacao</option>
							<option value="Divisao (/)">Divisao</option>
							</select></td>
				</tr>
					<tr>
						<td align="center" colspan=7><input type="submit" value="Calcular"></td><!--função enviar -->
					</tr>
					<tr>
						<td align="center" colspan=7><input type="reset" value="Limpar"></td><!--função limpar -->
					</tr>
				</table>
			</div>
		</form>
	</body>
</html>
