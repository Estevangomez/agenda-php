<?php 
    require_once "conexao.php";		
    include("index.html");
	$pesquisar = $_POST['pesquisar'];
	$sql= "SELECT * FROM contato WHERE nome LIKE '%$pesquisar%' LIMIT 20";
	$resultado= mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesquisar</title>
	<meta charset="utf-8">
</head>
<body>
	
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Rua</th>
      <th scope="col">N° Casa</th>
      <th scope="col">Bairro</th>
      <th scope="col">Telefone</th>
      <th scope="col">Celular</th>
      <th scope="col">Config.</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>

<?php 	
	
	while ($registro=mysqli_fetch_array($resultado)){
					
					$id= $registro['id'];					
					$nome= $registro['nome'];
					$rua= $registro['rua'];
					$num_casa= $registro['num_casa'];
					$bairro= $registro['bairro'];
					$telefone= $registro['telefone'];
					$celular= $registro['celular'];
					echo ("<form action='pesquisar.php' method='POST'>
							<tr>
							<td>".$nome."</td>
							<td>".$rua."</td>
							<td>".$num_casa."</td>
							<td>".$bairro."</td>
							<td>".$telefone."</td>
							<td>".$celular."</td>						
							<td><a href='alterar.php?id=".$id."'>Alterar </a> &nbsp; &nbsp; <a href='excluir.php?id=".$id."'>Excluir</a></td>							
							</tr></form>
						");
			}
				
			
?>
</table>
</body>
