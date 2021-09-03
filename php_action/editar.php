<?php
//Conexão
include_once 'db_connect.php';
//header
include_once 'header.php';
//Select
if(isset($_GET['id'])):
   $id= mysqli_escape_string($connect, $_GET['id']);

   $sql = "SELECT * FROM clientes WHERE id = '$=id'";
   $resultado = mysqli_query($connect, $sql);
   $dados = mysqli_fetch_array($resultado);
endif;   
?>

<div class="row">
     <div class="col s12 m6 push-m3">
        <h3 class="light">Editar cliente</h3>  
        <form action="update.php" method="POST">
          <div class="input-field col s12">
                <input type="text" name="name" id="name">
               <label type="nome">Nome</label>
          </div>

          <div class="input-field col s12">
               <input type="text" name="sobrenome" id="sobrenome">
               <label type="sobrenome">Sobrenome</label>
          </div>

          <div class="input-field col s12">
               <input type="text" name="email" id="email">
               <label type="email">Email</label>
          </div>

          <div class="input-field col s12">
               <input type="text" name="idade" id="idade">
               <label type="idade">Idade</label>
          </div>

          <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
          <a href="index.php" class="btn green"> Lista de clientes</a>
        </form>
          
     </div>
</div>


<?php
//footer
include_once 'footer.php';
?>