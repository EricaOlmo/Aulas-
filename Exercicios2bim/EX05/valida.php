<?php
		
	$nome=$_POST["nome"];
	$email=$_POST["email"];
	$email2=$_POST["ConfirmaEmail"];
	$sexos= ["sexo"];
	
	if (($nome == "") || ($email == "") || ($email2 == "") || ($sexos == "")){
		echo "<script>alert('CAMPOS OBRIGATORIOS');
				window.history.go(-1);</script>";
	
	}
	if ($email <> $email2){
		echo "<script>alert('EMAILS NÃO CORRESPODEM!');
				window.history.go(-1);</script>";			
	} else {
		?>
					<html>
							
					<body>
						<center>CADASTRADO COM SUCESSO!</center>
					</body>
				</html>
	<?php
	}	
?>
