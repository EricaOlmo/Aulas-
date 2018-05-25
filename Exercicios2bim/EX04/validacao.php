<?php
	
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$idade=$_POST['idade'];
		$msg=$_POST['msg'];
		
	if (($nome == "") || ($email == "") || ($idade == "") || ($msg == "")){
		echo "<script>alert('CAMPOS OBRIGATORIOS');
				window.history.go(-1);</script>";
	
	} 
	
	if ($idade >=18){		
?>
			<html> <!--apresentar na tela o resultado ---- nada certo -->
				<body>
						<div align="center"> 
						<center><h3><b>Exercicio 4 </b><h3></center><td>
							<table border="0" cellspacing="1" cellpading="0">
								<tr>
									<td width=150 bgcolor="#33ffcc" colspan=0>Nome digitado</td> 
									<td><width=150><center><?php echo $nome;?></center> </td>
								</tr>
								<tr>
									<td width=150 bgcolor="#33ffcc" colspan=0>E-mail digitado</td> 
									<td><width=150><center><?php echo $email; ?></center> </td>
								</tr>
								<tr>
									<td width=150 bgcolor="#33ffcc">Idade aceita:</td> 
									<td><width=150><center><?php echo $idade." anos"; ?></center> </td>
								</tr>
								<tr>
									<td width=150 bgcolor="#33ffcc">Mensagem </td> 
									<td><width=150><center><?php echo $msg; ?></center> </td>
								</tr>
							</table>
				</div>
				</body>
			</html>
		<?php
		
	} else {
		echo"<script>alert('MENOR DE 18');
			window.history.go(-1);</script>";
	}
	?>