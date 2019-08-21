<?php include("index.html");?>
<!DOCTYPE html>
<html>
<head>
<title>Cadastrar Contato</title>
<meta charset="utf-8">
</head>
<body>	

<?php

require_once "conexao.php";

$nome=$_POST['nome'];
$rua=$_POST['rua'];
$num_casa=$_POST['num_casa'];
$bairro=$_POST['bairro'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];

      $sql = "INSERT INTO contato(nome,rua,num_casa,bairro,telefone,celular) values ('$nome','$rua','$num_casa','$bairro','$telefone',$celular)";
      $resultado= mysqli_query($conexao,$sql); 
	  $linhas = mysqli_affected_rows($conexao);

echo "<center>";
echo "<div class='alert alert-success' role='alert'>Contato Inserido Com Sucesso!</div><br>";
echo "<input type='button' onclick=location='index.html' value='Voltar à Tela Inicial'>";
echo "</center>";
?>
</body>
</html>