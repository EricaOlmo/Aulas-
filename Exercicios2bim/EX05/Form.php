<html>
<head>
	<title>Formulario</title>
</head>
	<body>
		<form action="valida.php" method="POST" > <!--criando o formulario, colocando o metodo utilizado e a ação com uma variavel que será atribuida no outro arquivo -->
			<div align="center"> 
			<center><h3><b>Exercicio 5 </b><h3></center><td>
				<table border="0" cellspacing="1" cellpading="0"><!--criando tabela -->
					<tr align="center" bgcolor="#33ffcc">
						 <h3>CONTATO<h3>
					</tr>
					<tr align="center">
						Todos os campos sao obrigatorios.<br>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Nome: </td> 
						<td><input type="text" name="nome" size="20" autofocus></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc">Sexo:</td> <!--radio para que selecione só um todos deverão ter o mesmo nome-->
						<td>
						Masc. <input type="radio" name="sexo" value="Masculino" >
						| Fem.<input type="radio" name="sexo" value="Feminino" >
						</td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>E-mail: </td> 
						<td><input type="email" name="email" size="20" ></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Confirmar E-mail: </td> 
						<td><input type="email" name="ConfirmaEmail" size="20" ></td>
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
