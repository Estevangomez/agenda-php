<?php
    session_start();
	include("index.html");
    ?>
	<!DOCTYPE html>
		<html>
	<head>
		<title>Cadastrar - Contato</title>	
	</head>
	<body>
<div class="container">
<form action="cadastrar.php" method="post" name="dados" id="frmContato">
<div class="form-group">
        <div class="card">
        <h5 class="card-header">Novo Contato &nbsp;   </h5>  
                <div class="card-body">
                        <table width="588" border="0" align="center" >     
                                <tr>
                               
                               <td ><input class="form-control" type="text" name="nome" id="nome" required placeholder="Nome Completo" /></td>
                             </tr>         
                             <tr>
                               
                               <td><input class="form-control" type="text" name="rua" id="rua" required placeholder="Rua" /></td>
                             </tr>
                             <tr>
                               
                               <td><input class="form-control" type="text" name="num_casa" required placeholder="N° Casa" /></td>
                             </tr>
                             <tr>
                               
                               <td><input  class="form-control" type="text" name="bairro" required placeholder="bairro" /></td>
                             </tr>
                             <tr>
                               
                               <td><input class="form-control" type="text" name="telefone" required placeholder="Telefone" /></td>
                             </tr>
                             <tr>
                               
                                <td> <input class="form-control" type="text" name="celular" required placeholder="celular" /></td>
                             </tr>
                             <tr>                               
                               <td>
                                 
                                <button id="salvar" type="button" class="btn btn-success">Salvar</button> 
                                           
                               </td>
                             </tr>
                           </table>
 
                </div>

              
              </div>
              </div>      
</form>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

<script language="JavaScript" >
$(document).ready(function() {
	    $( "#salvar" ).click(function() {
           var nome = $('#nome').val();
             if(nome==null || nome == ""){
                 alert("Campo Nome não pode ficar vazio");
             }else{
                $('#frmContato').submit();
             }   


        });
     
});
</script> 

	
	</body>
</html>