<?PHP
    require('autenticacao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="uft-8">
		<title>EasyNutri</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/geral-theme.css"/>


</head>

<body style="min-height: 100%;">

	<header>
		<ul class="links">
			<li>
				<h1>
				EasyNutri
				</h1>
			</li>
			<li> 
				<a href="planoAlimentarBusca.php"> Plano Alimentar</a>
			</li>
			<li>
				<a href="avaliacaoVisaoNBusca.php">Avaliação Física</a>
			</li>
			<li>
				<a href="PerfilNutri.php">Perfil</a>
			</li>
			<li>
				<?PHP
            	echo "<a href = \"logout.php\">Sair</a>";
        		?>
			</li>
		</ul>
	</header>

		<div class="container" style="min-width:60%;">
		<div class="row">
			<style type="text/css">
				a{
					color:#212529;
					text-decoration: none;
				}
				a:hover{
					color:#212529;
					
				}
				*{
					font-family: Verdana,sans-serif;
				}
			</style>
			<h1 style="margin-top: 10px; border-bottom: 2px solid green; padding:20px 20px 20px 30px;"><strong> <a href="avaliacaoVisaoNBusca.php"> Avaliação Física</a> - João Carlos de Nascimento</strong></h1>
		</div>

		<div class="row" style="margin-top: 20px; margin-bottom:50px; padding-right: 50px;">
			<div class= "col-sm-6">
				<style type="text/css">
					form-control{
						width:40%;
					}
				</style>
				<h4 style="margin-left: 60px; padding-left:20px; padding-bottom:10px; border-bottom: 2px solid green;"><strong> Dados Base</strong></h4>
					
					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Data da Avaliação:</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;" >
							<input type="text" class="form-control" value ="06/09/2018">
						</div>

					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Altura(M):</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;" >
							<input type="text" class="form-control" value ="1.63">
						</div>

					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Peso (KG):</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value ="52,9">
						</div>
					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">IMC(M):</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="19.8">
						</div>

					<div class="row" style="padding-left:100px;">			
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Porcentagem de Gordura:</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="10.74">
						</div>	

				<h4 style="margin-left: 60px; padding-left:20px; padding-bottom:10px; ; 	border-bottom: 1px solid green; width:250px; margin-top: 20px;"><strong>Massa(%)</strong></h4>
			
					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Massa Gorda:</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="5,58">
						</div>

					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Massa Magra:</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="46.37">
						</div>

					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Ganho de Massa Magra:</p>
					</div>
						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="-">
						</div>

					<div class="row" style="padding-left:100px;">
						<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Perda de Massa Gorda:</p>
					</div>

						<div class="row" style="padding-left:110px;margin-top: 0px;">
							<input type="text" class="form-control" value="-">
						</div>
		

			<h4 style="margin-left: 60px; padding-left:20px; padding-bottom:10px;  	border-bottom: 1px solid green; width:250px; margin-top: 20px;"><strong>Circunferência(cm)</strong></h4>
			
				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Circunferência do Abdômen:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="73">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Circunferência da Cintura:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="70">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Circunferência do Braço:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="28/30">
						
					</div>

			<h4 style="margin-left: 60px; padding-left:20px; padding-bottom:10px;  	border-bottom: 1px solid green; width:250px; margin-top: 20px;"><strong>Dobra(mm)</strong></h4>
				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Dobra Tríceps:</p>
					
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="5">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 12;">Dobra Subescapular:</p>
					
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="15">
						
					</div>
				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Axila média:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="10">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Suprailíaca:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="15">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Abdômen:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="20">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Peitoral:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="6">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Coxa:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="10">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Bíceps:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="15">
						
					</div>

				<div class="row" style="padding-left:100px;">
					<p style="margin-bottom: 0px;font-weight: bold;font-size: 14;">Dobra Panturrilha:</p>
				</div>

					<div class="row" style="padding-left:110px;margin-top: 0px;">
						<input type="text" class="form-control" value="10">
						
					</div>

					<button class="btn  btn-block my-4  z-depth-0" type="submit" style="width:40% ;margin-left:35%; background-color:rgb(24,126,78);color:white" >Salvar</button>
			</div>
			
		</div>
	</div>

<!-- Footer -->
<footer class="footer navbar-fixed-bottom mt-auto  pt-3" style="background-color:rgb(24,126,78);color:white;">

  <!-- Footer Text -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
		<div class="col-md-4 mt-md-0 mt-3" style="padding-left: 100px;">

        <!-- Content -->
       <img src="LogoNutri.png" style="padding-bottom:20px;">
      </div>
      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3" >

        <!-- Content -->
        
        <p style="padding-top:20px;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Av.Sorte ,9999 , Cidade CEP 99999-999</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Content -->
       
        <p style="padding-top:20px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(99)9999-9999</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color:#8fccb2; color:black; ">
  	© 2019 Copyright: Judson
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>

</html>