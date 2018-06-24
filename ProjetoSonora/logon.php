<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

<style type='text/css'>
	body{
		background-color: #8f8f8f;
		
	}

	#main_table_form {
	   position:absolute;
	   left:50%;
	   top:50%;
	   margin-left:-120px;
	   margin-top:-45px;
	}

	.rodape{
	position:absolute;
	bottom: 0; 
	display: block; 
	width: 99%; 

	}

 </style>
 <body>
 
 <form name=""action=""  id="main_table_form" method="GET" > <!--criando o formulario, dando um nome o metodo utilizado -->
			<div align="center"> 
			<center><h3><b>Login</b><h3></center><td>
				<table border="1" cellspacing="0" cellpadding="0"><!--criando tabela -->
					<tr>
						<td width=150 bgcolor="#ff0000" colspan=0>Usuário:</td> 
						<td><input type="text" name="user" maxlength="20"></td> <!--tipo do campo, nome e tamanho-->
					</tr>
					<tr>
						<td width=150 bgcolor="#ff0000" colspan=0>Senha:</td> 
						<td><input type="password" name="pin" size="20" maxlength="10<style type="text/css">
						</td>
					</tr>
					<tr>
						<td align="center" colspan=7><input type="submit" value="Entrar"></td><!--função enviar -->
					</tr>
				</table>
			</div>
		</form>
  
 </body>
</html>
<?php 
  include ("rodape.inc");
?>