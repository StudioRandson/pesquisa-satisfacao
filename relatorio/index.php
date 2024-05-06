<?php
include('conexao.php');

if(isset($_POST['nome']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM relatorio WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: relatorio.php");

        } else {
            echo "Falha ao logar! Usuário ou senha incorretos";
        }

    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <title>relatório - login</title>
</head>
  <style>

 
  
    .btn{
  color: #333 !important;
  font-weight: bold;
}

  .log{
    text-align: center;  
        
  }

  .relatorio{
    color: #fad695;
    font-size: 20px;
    margin-bottom: 20px;
  }

  

  @media (max-width: 480px) {
        .container {
            width: 90%;
         }
        }

  </style>
<body>
  
  <section class="container">   
     
      <form class="box-input" action="" method="POST">
        <div class="log text-center">
          <img src="logo.png" alt="logo" height="100" width="100" >
          <p class="relatorio">Relatório</p>
        </div>
        <input type="text" placeholder="Usuário" name="nome">
        <input type="password" placeholder="Senha" name="senha">
        <p>
            <button type="submit" class="btn">Entrar</button>
        </p>
        
      </form>      
  </section>
</body>
</html>