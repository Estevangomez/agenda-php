<?php 
 require_once "conexao.php";
  include("index.html");
			$id= $_GET['id'];			
			$sql= "SELECT * FROM contato WHERE id = $id";			
			$resultado= mysqli_query($conexao,$sql);			
			
			while ($dados = $resultado->fetch_assoc())		
			{	 			
?>
<!DOCTYPE html>
<html>
<head>
<title>Alterar Contato</title>
<meta charset="utf-8">
</head>
<body>	
<div class="container">		 
<form action="salvarAlterar.php" method="post" name="dados" id="frmEditar">
		<input type="hidden" name="id" id="id" value="<?php echo $dados['id'] ?>"/>
	 <div class="card">
        <h5 class="card-header">Editar Contato &nbsp;   </h5>  
     <div class="card-body">
				<table width="588" border="0" align="center" >     
				<tr>
			   <td>Nome :</td>
			   <td><input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>" required placeholder="Nome Completo" /></td>
			 </tr>         
			 <tr>
			   <td>Rua </td>
			   <td><input type="text" name="rua" id="rua" value="<?php echo $dados['rua'] ?>" required placeholder="Rua" /></td>
			 </tr>
			 <tr>
			   <td> N° Casa  :</td>
			   <td><input type="text" name="num_casa" value="<?php echo $dados['num_casa'] ?>" required placeholder="N° Casa" /></td>
			 </tr>
			 <tr>
			   <td>Bairro:</td>
			   <td><input type="text" name="bairro" value="<?php echo $dados['bairro'] ?>" required placeholder="bairro" /></td>
			 </tr>
			 <tr>
			   <td>Telefone:</td>
			   <td><input type="text" name="telefone" value="<?php echo $dados['telefone'] ?>" required placeholder="Telefone" /></td>
			 </tr>
			 <tr>
			   <td>Celular:</td>
				<td> <input type="text" name="celular" value="<?php echo $dados['celular'] ?>" required placeholder="celular" /></td>
			 </tr>
			 <tr>
			   <td height="22"></td>
			   <td>
				 <br>
				  <button id="salvar" type="button" class="btn btn-success">Salvar</button> 
						   
			   </td>
			 </tr>
			</table>  
<?php }?> 
</div>

              
</div>
</form>
</div>
    <br><br>
</body>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<script language="JavaScript" >
$(document).ready(function() {
	    $( "#salvar" ).click(function() {
           var nome = $('#nome').val();
             if(nome==null || nome == ""){
                 alert("Campo Nome não pode ficar vazio");
             }else{
                $('#frmEditar').submit();
             }   


        });
      
});
</script> 
</html>