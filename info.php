<?php

$title = "Formularz";
require_once("includes/head.php");

if( isset( $_GET['action'] ) && $_GET['action']=='send'){
	if(empty($_POST['type']) || empty($_POST['topic']) || empty($_POST['body']) )
		error("Wypełnij wszystkie pola !");
	$sql="INSERT INTO zgloszenia(`pid`, `date`, `type`, `solve`, `topic`, `body`) VALUES('{$player->id}', '".time()."', '{$_POST['type']}', 'N', '{$_POST['topic']}', '{$_POST['body']}')";
	SqlExec( $sql );
	error("Zgłoszenie dodane !",'done');
}

//przypisanie zmiennych i wyświetlenie strony
$smarty -> display('info.tpl');

require_once("includes/foot.php");

?>
