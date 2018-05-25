<html>
<head>
	<title>Formulario</title>
</head>
	<body>
		<form action="Valida.php" method="POST" > <!--criando o formulario, colocando o metodo utilizado e a ação com uma variavel que será atribuida no outro arquivo -->
			<div align="center"> 
			<center><h3><b>Exercicio 7</b><h3></center><td>
				<table border="0" cellspacing="1" cellpading="0"><!--criando tabela -->
					<tr align="center" bgcolor="#33ffcc">
						 <h3>CONTATO<h3>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Nome: </td> 
						<td><input type="text" name="nome" size="20" autofocus></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc">Sexo:</td> <!--radio para que selecione só um todos deverão ter o mesmo nome-->
						<td>
						Masc. <input type="radio" name="sexo" value="Masculino"  >
						| Fem.<input type="radio" name="sexo" value="Feminino" >
						</td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>E-mail: </td> 
						<td><input type="email" name="email" size="20" ></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Confirmar E-mail: </td> 
						<td><input type="email" name="email2" size="20" ></td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Ano de Nascimento: </td> 
						<td><input type="int" name="dtnascimento" ></td>
					</tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Cidade: </td> 
						<td><input type="text" name="cidade" size="20"  autofocus></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0> UF:  </td> <!--modo de caixa de seleção-->
						<td><select name="estado" size="1">
							<option selected value="--" >--</option> <!--required é obrigatorio-->
							<option value="AC">AC</option>
							<option value="AL">AL</option>
							<option value="AP">AP</option>
							<option value="AM">AM</option>
							<option value="BA">BA<option>
							<option value="CE">CE</option>
							<option value="DF">DF</option>
							<option value="ES">ES</option>
							<option value="GO">GO</option>
							<option value="MA">MA</option>
							<option value="MT">MT</option>
							<option value="MS">MS</option>
							<option value="MG">MG</option>
							<option value="PA">PA</option>
							<option value="PB">PB</option>
							<option value="PR">PR</option>
							<option value="PE">PE</option>
							<option value="PI">PI</option>
							<option value="RJ">RJ</option>
							<option value="RN">RN</option>
							<option value="RS">RS</option>
							<option value="RO">RO</option>
							<option value="RR">RR</option>
							<option value="SC">SC</option>
							<option value="SP">SP</option>
							<option value="SE">SE</option>
							<option value="TO">TO</option>
							
							</select></td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Telefone: </td> 
						<td><input type="int" name="tel" size="11" ></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Senha: </td> 
						<td><input type="password" name="senha" size="8" ></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150>Aceito os termos:</td> 
						<td><input type="checkbox" name="aceito" ></td>
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
