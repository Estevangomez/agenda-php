<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<?php
require_once "conexao.php";

$id=$_POST['id'];
$nome=$_POST['nome'];
$rua=$_POST['rua'];
$num_casa=$_POST['num_casa'];
$bairro=$_POST['bairro'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
      
      $sql = "UPDATE contato SET nome = '$nome', rua = '$rua',num_casa = '$num_casa',bairro = '$bairro',telefone = '$telefone',celular = '$celular' WHERE id = $id";
      $resultado= mysqli_query($conexao,$sql);      
	  $linhas = mysqli_affected_rows($conexao);

echo "<center>";
echo "<div class='alert alert-success' role='alert'>Contato Alterado Com Sucesso!</div><br>";
echo "<input type='button' onclick=location='index.html' value='Voltar à Tela Inicial'>";
echo "</center>";
?>

</html>