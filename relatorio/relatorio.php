

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Relatório</title>   

</head>
    <style>

        body {
            margin: 0;
            padding: 0;
            background-color: #F8F9FA;
            color: #4F4F4F;
            font-family: Arial, sans-serif;
        }

        
        p{
            font-size: 18px;
            font-weight: bold;
        }

        .resultado{
            
            font-weight: bold;
            color: #005D89;
            text-align: center;
        }

        .btn{
            width: 100%;
            font-size: 18px;
            color: #005D89;
        }

        .btn:hover{
            width: 100%;
            font-size: 18px;
            color: #4F4F4F;
        }
    </style>
<body>
    
    <div class="container">
    
        <nav class="navbar navbar-light bg-light">
        
        <h3 class="resultado">Resultado da Pesquisa</h3>
        </nav>
    
    

<?php
    // Configurações de conexão ao MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "opinas";

    // Criar uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o MySQL: " . $conn->connect_error);
    }

    

    echo "<p>Em uma escala de 0 a 10, o quanto você recomendaria a nossa empresa para um amigo ou familiar?</p>";

    // Consulta SQL
    $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 0";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta: " . $conn->error);
    }

    // Exibir o resultado na interface
    $row = $result->fetch_assoc();
    echo "0️⃣ = " . $row["total"] . "</p>";

    // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 1";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "1️⃣ = " . $row["total"] . "</p>";

     // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 2";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "2️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 3";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "3️⃣ = " . $row["total"] . "</p>";
     
      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 4";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "4️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 5";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "5️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 6";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "6️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 7";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "7️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 8";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "8️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 9";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "9️⃣ = " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos WHERE situacao = 10";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "🔟 = " . $row["total"] . "</p>";

    #---------------------------------------------


    echo "<p>Como Avalia o nosso Atendimento?</p>";

     $sql = "SELECT COUNT(situacao) as total FROM avaliacos1 WHERE situacao = 'pessimo'";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Erro na consulta: " . $conn->error);
    }

    // Exibir o resultado na interface
    $row = $result->fetch_assoc();
    echo "😫 - Péssimo: " . $row["total"] . "</p>";

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos1 WHERE situacao = 'ruim'";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "🙁 - Ruim: " . $row["total"] . "</p>";

     // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos1 WHERE situacao = 'regular'";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "😶 - Regular: " . $row["total"] . "</p>";

      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos1 WHERE situacao = 'bom'";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "😊 - Bom: " . $row["total"] . "</p>";
     
      // ------------------------

     // Consulta SQL
     $sql = "SELECT COUNT(situacao) as total FROM avaliacos1 WHERE situacao = 'excelente'";
     $result = $conn->query($sql);
 
     if ($result === false) {
         die("Erro na consulta: " . $conn->error);
     }
 
     // Exibir o resultado na interface
     $row = $result->fetch_assoc();
     echo "😀 - Excelente: " . $row["total"] . "</p>";

      // ------------------------

      echo "<p>Em uma escala de 1 a 5, como avaliaria os nossos serviços</p>";

      // Consulta SQL
      $sql = "SELECT COUNT(qtd_estrelas) as total FROM star WHERE qtd_estrelas = 1";
      $result = $conn->query($sql);
  
      if ($result === false) {
          die("Erro na consulta: " . $conn->error);
      }
  
      // Exibir o resultado na interface
      $row = $result->fetch_assoc();
      echo "⭐ = " . $row["total"] . "</p>";
  
      // ------------------------
  
       // Consulta SQL
       $sql = "SELECT COUNT(qtd_estrelas) as total FROM star WHERE qtd_estrelas = 2";
       $result = $conn->query($sql);
   
       if ($result === false) {
           die("Erro na consulta: " . $conn->error);
       }
   
       // Exibir o resultado na interface
       $row = $result->fetch_assoc();
       echo "⭐⭐ = " . $row["total"] . "</p>";
  
       // ------------------------
  
       // Consulta SQL
       $sql = "SELECT COUNT(qtd_estrelas) as total FROM star WHERE qtd_estrelas = 3";
       $result = $conn->query($sql);
   
       if ($result === false) {
           die("Erro na consulta: " . $conn->error);
       }
   
       // Exibir o resultado na interface
       $row = $result->fetch_assoc();
       echo "⭐⭐⭐ = " . $row["total"] . "</p>";
  
        // ------------------------
  
       // Consulta SQL
       $sql = "SELECT COUNT(qtd_estrelas) as total FROM star WHERE qtd_estrelas = 4";
       $result = $conn->query($sql);
   
       if ($result === false) {
           die("Erro na consulta: " . $conn->error);
       }
   
       // Exibir o resultado na interface
       $row = $result->fetch_assoc();
       echo "⭐⭐⭐⭐ = " . $row["total"] . "</p>";
       
        // ------------------------
  
       // Consulta SQL
       $sql = "SELECT COUNT(qtd_estrelas) as total FROM star WHERE qtd_estrelas = 5";
       $result = $conn->query($sql);
   
       if ($result === false) {
           die("Erro na consulta: " . $conn->error);
       }
   
       // Exibir o resultado na interface
       $row = $result->fetch_assoc();
       echo "⭐⭐⭐⭐⭐ = " . $row["total"] . "</p>";
  
        // ------------------------



        // Fechar a conexão
    $conn->close();
    
    ?>
    <br><br>
    <p>
        <a button href="index.php" type="button" class="btn btn-warning">Fechar Relatório</button></a>
    </p><br>
    
    </div>
  
    
</body>
</html>
