<?php 
	$nome = $_POST ["nome"];
	$sexo = ["sexos"];
	$email = $_POST ["email"];
	$email2 = $_POST["email2"];
	$nascimento = ["dtnascimento"];
	$cidade = $_POST ["cidades"];
	$estado = $_POST ["estado"];
	$termos =  ["termo"];
		
	if (($nome == "") || ($sexo == "") || ($email == "") || ($email2 == "") || ($nascimento == "") || ($cidade == "") || ($estado == "") || ($termos == "")){
		echo "<script>alert('CAMPOS OBRIGATORIOS');
				window.history.go(-1);</script>";
	
	} 
	
	if ((date("Y") - $_POST["dtnascimento"]) < 18){
		echo "<script>alert('MENOR DE 18 ANOS!');
				window.history.go(-1);</script>";		
	}
	if ($email <> $email2){
		echo "<script>alert('EMAILS NÃO CORRESPODEM!');
				window.history.go(-1);</script>";			
	} else {
		?>
			<html>
				<body>
					<center>CADASTRADO REALIZADO COM SUCESSO!</center>
				</body>
			</html>

	<?php
	}
	?>