<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<?php 
	
	require_once "conexao.php";
	
	$id= $_GET['id'];	
	$sql= "DELETE FROM contato WHERE id=$id";
	$resultado= mysqli_query($conexao,$sql);      
	$linhas = mysqli_affected_rows($conexao);
	
	
	echo "<center>";
echo "<div class='alert alert-success' role='alert'>Contato Excluido Com Sucesso!</div><br>";
echo "<input type='button' onclick=location='index.html' value='Voltar à Tela Inicial'>";
echo "</center>";
 ?>
 
</html>