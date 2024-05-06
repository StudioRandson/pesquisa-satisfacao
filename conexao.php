<?php
	$situacao = $_POST['situacao1'];
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "opinas";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$result_imoveis = "INSERT INTO avaliacos1 (situacao) VALUES ('$situacao')";
	$resultado_imoveis = mysqli_query($conn, $result_imoveis);
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pesquisa</title>
		<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon" /> -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<style>

			

			  .page{
				margin-top: -5vh;
			}

        	h4{
				margin-top: 20px;
			}
		
		.star{
            width: 200px;
			
        }

		.logo{
			width: 250px;
			margin-top: 13vh;
			}

			@media only screen and (max-width: 767px) and (orientation: portrait),
                   only screen and (max-height: 767px) and (orientation: landscape) {
             
			  .logo{
					width: 200px !important;
					margin-top: 10vh !important;					
				}
				h4{
					font-size: 25px !important;
				}

				.star{
					width: 45px;
				}
			}

			@media (min-width: 1600px) {
				h4{
				font-size: 33px;
			}
				.star{
					width: 60px;
				}
			}
		
	</style>
	<body>
    <div class="container theme-showcase text-center" role="main">
		<img src="img/logo.png" class="logo">
        <div class="page">
			<h4>Com quantas estrelas Você avalia os nossos serviços?</h4><br>
        </div>	
              
        
        	<?php
				if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?> 
			
			<form class="form-horizontal" method="POST" action="star.php" enctype="multipart/form-data">
				<div class="estrelas">
					<input type="radio" id="vazio" name="estrela" value="" checked>
					
					<label for="estrela_um"><i class="fa"></i></label>
					<input type="radio" id="estrela_um" name="estrela" class="star" value="1">
					
					<label for="estrela_dois"><i class="fa"></i></label>
					<input type="radio" id="estrela_dois" name="estrela" class="star" value="2">
					
					<label for="estrela_tres"><i class="fa"></i></label>
					<input type="radio" id="estrela_tres" name="estrela" class="star" value="3">
					
					<label for="estrela_quatro"><i class="fa"></i></label>
					<input type="radio" id="estrela_quatro" name="estrela" class="star" value="4">
					
					<label for="estrela_cinco"><i class="fa"></i></label>
					<input type="radio" id="estrela_cinco" name="estrela" class="star"  value="5"><br><br>
					
					<input  type="submit" class='btn btn-success' value="Enviar">
					
					
				</div>
			</div>
    </div>
		</form>
		  	
	</body>
</html>
