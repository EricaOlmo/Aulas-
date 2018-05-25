<?php
	$acao=$_GET['acao'];
	
	if ($acao=="enviar"){
		
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$sexo=$_POST['sexo'];
		$pais=$_POST['pais'];
	} 
	if(isset($_POST['estudante'])){  //verificando se a chave foi iniciada antes de usar
		$estudante = $_POST['estudante']; 
		} else {
			$estudante="Nao é estudante!"; //caso não foi iniciada (marcada) exibirá essa mensagem
		}
		
?>
<html>
	<body>
	<div align="center"> 
			<center><h3><b>Exercicio 3 - Parte1</b><h3></center><td>
				<table border="0" cellspacing="1" cellpading="0">
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>Nome digitado</td> 
						<td><width=150><center><?php echo $nome."<br>"; ?></center> </td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0>E-mail digitado</td> 
						<td><width=150><center><?php echo $email."<br>"; ?></center> </td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc">Sexo da pessoa:</td> 
						<td><width=150><center><?php echo $sexo."<br>"; ?></center> </td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc">Estudante </td> 
						<td><width=150><center><?php echo $estudante."<br>"; ?></center> </td>
					</tr>
					<tr>
						<td width=150 bgcolor="#33ffcc" colspan=0> Pais da pessoa  </td> 
						<td><width=150><center><?php echo $pais."<br>"; ?></center> </td>
					</tr>
				</table>
	</div>
	</body>
</html>