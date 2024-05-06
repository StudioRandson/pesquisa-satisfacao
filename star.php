<?php
	$estrela = $_POST['estrela'];
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "opinas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$result_imoveis = "INSERT INTO star (qtd_estrelas) VALUES ('$estrela')";
	$resultado_imoveis = mysqli_query($conn, $result_imoveis);
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon" /> -->
		<title>Pesquisa</title>		
	</head>
	<style>

		

			h4{
				padding-top: 24vh;
				
			}

		.form{
			/* background: linear-gradient(to right,  #5e95e6,  #7987dd); */
			height: 300px;
			width: 500px;
			border-radius: 7px;
			font-weight: bold;
			color: black;
			text-align: center;
		}

		.btn{
			font-weight: bold;
			width: 70%;
			font-size: 20px;
			color: black;
			background-color: #FFC107;
		}		

		.logo{
			width: 100px;
			margin-top: 10vh;
			}

			@media only screen and (max-width: 767px) and (orientation: portrait),
                   only screen and (max-height: 767px) and (orientation: landscape) {
              h4 {
               font-size: 25px !important;
              }
			  .logo{
					width: 200px !important;
					
				}
			}
	</style>
	<body>
		<div class="container text-center">
			<!-- <img src="img/logo.png" class="logo"> -->
				<h4>Gostaria de fazer algum Elogio, Critica ou Melhoria?</h4>
				
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
			<div class="container text-center form">
						<form method="POST" action="processa.php" >							
							<br>
								<div class="mb-4">
										<label  class="form-label" name="nome" >Nome</label>
										<input type="text" name="nome" class="form-control" >
										</div>
										<div class="mb-4">
										<label class="form-label">Mensagem</label>
										<textarea class="form-control" type='text' name="mensage" rows="2"></textarea>
										</div><br>
										
										<input type="submit" class="btn btn-light" value="Finalizar Pesquisa">
						</form>
						

				
								</div>
	</div>
	</body>
</html>