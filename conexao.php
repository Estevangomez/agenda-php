    
<?php 
	
	$host = 'localhost';
	$db = 'agenda';
	$user = 'root';
	$pass = '';
	$conexao= mysqli_connect($host,$user,$pass,$db);
	if(!$conexao){
		die("Falha na Conexão!".mysqli_connect_erro());
	}
 ?>