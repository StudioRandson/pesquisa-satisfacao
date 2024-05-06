<?php
	$situacao = $_POST['situacao'];
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "opinas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$result_imoveis = "INSERT INTO avaliacos (situacao) VALUES ('$situacao')";
	$resultado_imoveis = mysqli_query($conn, $result_imoveis);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon" /> -->
		<title>Pesquisa de Satisfação</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="emojs.css">
	</head>
		<style>

				

				h3{
				margin-top: -30px;
			}

			.radio-inline{
				width: 50px;
				margin-right: 3vh;			
				
				
			}

			p{
				font-size: 9px;
				margin-left: 10px;
			}

			.logo{
				width: 250px;
				margin-top: 18vh;
			}

			button{
				margin-left: -25px;
				text-align: center;
			}

			@media only screen and (max-width: 767px) and (orientation: portrait),
                   only screen and (max-height: 767px) and (orientation: landscape) {
              body {
                background-image: none !important;
              }
			  .logo{
					width: 200px !important;
					margin-top: 5vh !important;
				}

			  .b1, .b2, .b3, .b4, .b5{
				width: 60px !important;
				height: 60px !important;
			  }
			}

			@media (min-width: 1600px) {
				
				.logo{
					width: 230px;
				}
			}
			
				@media (min-width: 1600px) {
				h3{
					font-size: 33px !important;									
					
				}

				.b1, .b2, .b3, .b4, .b5{
				width: 100px !important;
				height: 100px !important;
			}

			.radio-inline{
				width: 60px;
				margin-right: 1vh;
		}
			
    	}

		@media (min-width: 1600px) {
			.b1, .b2, .b3, .b4, .b5{
				width: 100px !important;
				height: 100px !important;
			}
		}
		</style>
	<body>
		<div class="container text-center" role="main">
			<img src="img/logo.png" class="logo">
			<div class="page">
				<h3>Como Avalia o nosso Atendimento?</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="conexao.php">
				<div class="form-group">

									
					<label class="radio-inline"> 
						
						<button input type="radio" name="situacao1" value="pessimo" class="btn b1"style="width: 40px; height: 40px;"><img src="img/pessimo.png"  style="width: 78px; height: 78px;"></button>
						
					</label> 
						
					<label class="radio-inline"> 
						<button input type="radio" name="situacao1" value="ruim" class="btn  b2"style="width: 40px; height: 40px;"><img src="img/ruim.png" style="width: 78px; height: 78px;"></button> 
					</label> 
					
					<label class="radio-inline"> 
						<button input type="radio" name="situacao1" value="regular" class="btn  b3"style="width: 40px; height: 40px;"><img src="img/regular.png" style="width: 78px; height: 78px;"></button> 
					</label> 
					<label class="radio-inline"> 
						<button input type="radio" name="situacao1" value="bom" class="btn  b4"style="width: 40px; height: 40px;"><img src="img/bom.png" style="width: 78px; height: 78px;"></button>
					</label> 
						
					<label class="radio-inline"> 
						<button input type="radio" name="situacao1" value="excelente" class="btn  b5"style="width: 40px; height: 40px;"><img src="img/excelente.png" style="width: 78px; height: 78px;"></button> 
					</label> 
					
					
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<!-- <button type="submit" class="btn btn-danger">Cadastrar</button> -->
					</div>
				</div>
			</form>
		</div>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>