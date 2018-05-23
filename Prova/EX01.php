<?php
$a=$_POST["num1"];
$b=$_POST["num2"];
$c=$_POST["num3"];
$result=($a - $b) * $c;

?>

<html>
<body> 
      <table width=500 align="center">
			<tr>
				<td width=350><?php echo $result;?> </td>
			</tr>
		</table>
 </body>
</html>
