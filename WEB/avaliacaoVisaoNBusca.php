<?PHP
    require('autenticacao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>	
		
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="uft-8">
		<title>EasyNutri</title>
		<script src="js/jquery-3.1.1.js"></script>
	  	<script src="js/bootstrap.min.js"></script> 
	  	<script src="js/jquery.quicksearch.js"></script>
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

	<div class="container" style="max-width: 1000px;min-width:60%;margin-bottom: 100px;">
		<div class="row">
			<h1 style="margin-top: 10px; border-bottom: 2px solid green; padding:20px 20px 20px 30px;"><strong> Avaliação Física</strong></h1>
		</div>
		<style type="text/css">
		#busca{
			margin-top: 20px; 
			background-color: rgb(24,126,78);
			color:white;
			border-radius: 10px 10px 0px 0px;
			width:80%;
			margin-left: 10%;
		}
		*{
			font-family: Verdana,sans-serif;
		}
			
		</style>
		<div class="row" id="busca" >
				<div class="col-sm-8"  >									
					
								<h1 style="margin:10px 0px 0px 50px">
								Pacientes
								</h1>
				</div>
				<div class="col-sm-4" style="padding-top: 20px;">	

								<div class="form-group input-group" >
									<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
									<input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
								</div>
							
				</div>	
										
		</div>
		<style type="text/css">
			a{
				color:#212529;
				text-decoration: none;
			}
			a:hover{
				color:#212529;		
			}
			}
		</style>
		<div class="row" style="width:80%;margin-left: 10%;">				
			    <table id="tabela" class="table table-hover" style="min-width: 400px;">
  				    <thead>
				      <tr>
				            <th>Nome</th>
				            <th>Telefone</th>
				            <th>E-mail</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <th><a href="avaliacaoVisaoN.php">João Carlos de Nascimento</a></th>
				            <td>(84)9949-9494</td>
				            <td>paciente@gmail.com</td>
				        	
				         </tr>
				  	
				        <tr>
				            <th><a href="avaliacaoVisaoN.php">João Tavares</a></th>
				            <td>(84)9929-2929</td>
				            <td>paciente2@gmail.com</td>
				        	
				         </tr>

				         <tr>
				            <th><a href="avaliacaoVisaoN.php">João Pedro</a></th>
				            <td>(84)9959-9959</td>
				            <td>paciente3@gmail.com</td>
				        	
				         </tr>

				         <tr>
				            <th><a href="avaliacaoVisaoN.php">Juliana Lima</a></th>
				            <td>(84)9969-9969</td>
				            <td>paciente4@gmail.com</td>
				        	
				         </tr>
				         <tr>
				            <th><a href="avaliacaoVisaoN.php">Victor Hugo</a></th>
				            <td>(84)9969-9979</td>
				            <td>paciente5@gmail.com</td>
				        	
				         </tr>
				         <tr>
				            <th><a href="avaliacaoVisaoN.php">David Luis</a></th>
				            <td>(84)9969-9889</td>
				            <td>paciente6@gmail.com</td>
				        	
				         </tr>
				         <tr>
				            <th><a href="avaliacaoVisaoN.php">Luiz Carvalho</a></th>
				            <td>(84)9919-9923</td>
				            <td>paciente7@gmail.com</td>
				        	
				         </tr>
				    </tbody>
				</table>
				<script>
 					$('input#txt_consulta').quicksearch('table#tabela tbody tr');
				</script>
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
       
        <p style="padding-top:20px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(84)9999-9999</p>

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