<?php
	require_once("Eventos.php");
	header('Access-Control-Allow-Origin: *');
	
	@mysql_connect("localhost", "root", "") or die("erro na conexão: " . mysql_error());
	mysql_select_db("derose"); 
	
	$sql = "SELECT * FROM eventos";
	$resultado = mysql_query($sql) or die ("erro no sql");
	$n  = mysql_num_rows($resultado);

	for($i = 0; $i<$n; $i++) {
		$dados[] = mysql_fetch_assoc($resultado, $i);
    }

	echo json_encode($dados);
	   
   


?>