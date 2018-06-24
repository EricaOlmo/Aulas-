<div class="rodape">
	<hr>
<p>	
	Acesso em: 
	<?php
			$dia = date("d");
			$mes = date("m");
			$ano = date("Y");
	
			$meses = Array ("Janeiro","Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
	
			echo $dia." de ".$meses[$mes-1]." de ".$ano;

	?>
	 ás 
	<?php
	
		$hora = date("H")-3; //h maiusculo 24 horas e minusculo 12h
		$minuto = date("i");
		$segundo = date ("s");

		//$hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));
		//print "<br />Hora Atual: ".$hora;

		echo $hora." : ".$minuto." : ".$segundo; 
	?>
</p>
<p>Erica Olmo Borges &copy 2018</p>
</div>