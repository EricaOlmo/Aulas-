<?php 
	$nome = $_POST ["nome"];
	$sexos = ["sexo"];
	$email = $_POST ["email"];
	$email2 = $_POST["email2"];
	$nascimento = $_POST ["dtnascimento"];
	$cidade = $_POST ["cidade"];
	$estado = $_POST ["estado"];
	$tel = $_POST["tel"];
	$senha = $_POST["senha"];
	$termo = ["aceito"];
		
	if (($nome == "") || ($sexos == "") || ($email == "") || ($email2 == "") || ($nascimento == "") || ($cidade == "") || ($estado == "") || ($tel == "") ||  ($senha == "") ||($termo == "") ){
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