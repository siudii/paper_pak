<!dostype=html>
<html lang="pl">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
	</head>
	<body>
	
	
	<?php 
	
	require "db_connect.php"; 
	connection(); 
		
	
	$result = mysql_query("SELECT first_name, last_name FROM db_pak WHERE id_pak = '3'");
	if (!$result) {
    	echo 'Nie można uruchomić zapytania: ' . mysql_error();
		exit;
	}
		$row = mysql_fetch_row($result);

		echo $row[0];
	?>
		
	
	
	</body>
</html>