<!dostype=html>
<html lang="pl">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		
	</head>
	<body>

	<?php
	
	
	require "db_connect.php"; 
	connection();
	
	$nr_dok=$_POST['nr_dok'];
	$sql1=mysql_query("SELECT * FROM db_rel WHERE id_dok = '$nr_dok'") or die(mysql_error());
	$row = mysql_num_rows($sql1);
	
		if($row==1)
			{
				echo "Zamówienie .'$nr_dok' zostało już dodane. Podaj właściwy numer.";
				echo '
				';
				echo '<a href="pak.php" title="Powrót do formularza">Powrót do formularza</a>';
			}
				elseif ($row == 0)
				{
					

	mysql_close();	
	require "db_presta_connect.php"; 
	connection();
	
	//$nr_dok=$_POST['nr_dok'];
 	$pak=$_POST['pakujacy'];
 	$date=date("Y-m-d H:i:s");
 	$state=4;

 	$sql_add1="UPDATE ps_orders SET current_state=4 WHERE id_order='".$nr_dok."';"; //dodanie statusu do bazy 
 	$sql_add2="INSERT INTO `ps_order_history` SET id_employee='".$pak."', id_order='".$nr_dok."', id_order_state='".$state."', date_add='".$date."';"; //dodanie statusu so bazy
 	
 	/*$sql3="SELECT "; // sprawdzanie czy zamówienie jest już w bazie
 	
 	
 	if (mysql_query($sql3)) //blablabla
 	{
	 	die
 	}
 	echo "rekord jest już w bazie";
 	*/
 	
if (!mysql_query($sql_add1) or !mysql_query($sql_add2))
  {
  die('Error: ' . mysql_error());
  }
echo "poszło";
 				
 				}
 
 ?>
</body>
</html>