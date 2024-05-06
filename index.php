<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" href="img/favicon.ico" type="img/x-icon" /> -->
		<title>Pesquisa</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>
		<style>
			

			.page{
				margin-top: 5vh;
				
			}

			/* .form-group{
				margin-top: 50vh;
			} */

			h4{
				margin-top: -45px;
				
			}

			.radio-inline{
				width: 25px;
				
				
			}

			.logo{
				width: 200px;
				margin-top: 18vh;
				
			}

			@media (min-width: 1600px) {
				h4{
					font-size: 33px;
									
					/* Outras propriedades de estilo, se necessário */
				}
				

			}

			@media (min-width: 1600px) {
				
				.b0, .b1, .b2, .b3, .b4, .b5, .b6, .b7, .b8, .b9, .b10{
					width: 50px !important;
					height: 50px !important;
					margin-top: 2vh;
				}
				.radio-inline{
					width: 50px;
					margin-top: 10px;
				}

				.logo{
					width: 230px;
				}
			}

	    	/* @media only screen and (max-width: 767px) and (orientation: portrait),
                   only screen and (max-height: 767px) and (orientation: landscape) {
              body {
                background-image: none !important;
              }
			  .logo{
					width: 200px !important;
					margin-top: 10vh !important;
				}

				.b0, .b1, .b2, .b3, .b4, .b5, .b6, .b7, .b8, .b9, .b10{
					width: 20px !important;
					height: 20px !important;
					margin-top: 2vh;
				}

				.radio-inline{
					width: 20px;
					
				}
            } */

		</style>
	<body>
		<div class="container theme-showcase text-center" role="main">
			<img src="img/logo.png" class="logo">
			<div class="page">
				<h4>Em uma escala de 0 a 10 o quanto <b>VOCÊ</b><br> recomendaria a <b>nossa empresa</b> para um amigo ou familiar?</h4>
			</div>
			
			<form class="form-horizontal" method="POST" action="cadastrar.php">
				<div class="form-group">

					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="0" class="btn btn-success b0" style="width: 35px; height: 35px;">0</button>
					</label> 
					
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="1" class="btn btn-success b1"style="width: 35px; height: 35px;">1</button>
					</label> 
						
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="2" class="btn btn-warning b2"style="width: 35px; height: 35px;">2</button> 
					</label> 
					
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="3" class="btn btn-danger b3"style="width: 35px; height: 35px;">3</button> 
					</label> 
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="4" class="btn btn-success b4"style="width: 35px; height: 35px;">4</button>
					</label> 
						
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="5" class="btn btn-warning b5"style="width: 35px; height: 35px;">5</button> 
					</label> 
					
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="6" class="btn btn-danger b6"style="width: 35px; height: 35px;">6</button> 
					</label> 
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="7" class="btn btn-success b7"style="width: 35px; height: 35px;">7</button>
					</label> 
						
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="8" class="btn btn-warning b8"style="width: 35px; height: 35px;">8</button> 
					</label> 
					
					<label class="radio-inline"> 
						<button input type="radio" name="situacao" value="9" class="btn btn-danger b9"style="width: 35px; height: 35px;">9</button> 
					</label> 
					<label class="radio-inline" text-center> 
						<button input type="radio" name="situacao" value="10" class="btn btn-danger b10"style="width: 35px; height: 35px;">10</button> 
					</label> 
				</div>
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