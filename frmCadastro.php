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
        <div class="card">
        <h5 class="card-header">Novo Contato &nbsp;   </h5>  
                <div class="card-body">
                        <table width="588" border="0" align="center" >     
                                <tr>
                               <td>Nome :</td>
                               <td ><input type="text" name="nome" id="nome" required placeholder="Nome Completo" /></td>
                             </tr>         
                             <tr>
                               <td>Rua </td>
                               <td><input type="text" name="rua" id="rua" required placeholder="Rua" /></td>
                             </tr>
                             <tr>
                               <td> N° Casa  :</td>
                               <td><input type="text" name="num_casa" required placeholder="N° Casa" /></td>
                             </tr>
                             <tr>
                               <td>Bairro:</td>
                               <td><input type="text" name="bairro" required placeholder="bairro" /></td>
                             </tr>
                             <tr>
                               <td>Telefone:</td>
                               <td><input type="text" name="telefone" required placeholder="Telefone" /></td>
                             </tr>
                             <tr>
                               <td>Celular:</td>
                                <td> <input type="text" name="celular" required placeholder="celular" /></td>
                             </tr>
                             <tr>
                               <td height="22"></td>
                               <td>
                                 
                                <button id="salvar" type="button" class="btn btn-success">Salvar</button> 
                                           
                               </td>
                             </tr>
                           </table>
 
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