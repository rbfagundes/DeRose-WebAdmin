<?php
require_once ("conectar.php");
require_once ("Eventos.php");
header ( 'Access-Control-Allow-Origin: *' );

$sql = "SELECT * FROM eventos";
$resultado = mysql_query ( $sql ) or die ( "erro no sql" );
$n = mysql_num_rows ( $resultado );

// for($i = 0; $i<$n; $i++) {
// $dados[] = mysql_fetch_assoc($resultado, $i);
// echo $dados[$i];
// }


$dados = array();
while ( $row = mysql_fetch_array ( $resultado, MYSQL_NUM ) ) {	
	$evt = new Eventos();
	$evt->id = $row[0];
	$evt->nome = $row[1];
	
	$dados[] = $evt;
}



echo json_encode($dados);

?>