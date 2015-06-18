<!dostype=html>
<html lang="pl">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
	</head>
	<body>
	<div align="center">
	<form action="insert.php" method="post">
	<table border=1, width="200", height="120" cellspacing="0">
	<tr>
	<td align="center" colspan="2">
	Pakujący:
	<?php  //test GITa, blablablabalbalablabla
			//testtest
	
	require "db_presta_connect.php"; 
	connection(); 
		
	
	$result = mysql_query("SELECT id_employee,firstname FROM ps_employee WHERE id_profile=6");
	if (!$result) {
    	echo 'Nie można uruchomić zapytania: ' . mysql_error();
		exit;
	}
		echo '<select name="pakujacy">';

		//echo '<option value="">Pakujący</option>';

		while($option = mysql_fetch_assoc($result)) {

		echo '<option value="'.$option['id_employee'].'">'.$option['firstname'].'</option>';
}

echo '</select>';
	?>
	</td>
	</tr>	
	<tr>
		<td width=65 align=right>
			PA <input type=checkbox name=pa value=1><br />
			FV <input type=checkbox name=fv value=0>
		</td>
		<td align="center">
			nr. dok: <input type=text size="4" name=nr_dok><br/> 
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type=submit value="DODAJ" name=dodaj>
		</td>
	</tr>
	</table>
	<br/>
		
	</form>
	</div>


	</body>
</html>