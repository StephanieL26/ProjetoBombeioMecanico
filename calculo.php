<!DOCTYPE html>
<html lang="pt-br, en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		<link rel="icon" href="img/logo11.png" type="image/x-icon" />
		<?php require_once 'config.php';?>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
			 <script type="text/javascript">
                 $(document).ready(function () {
                    $('#id_radio1').click(function () {
                       $('#div2').hide('fast');
                       $('#div1').show('fast');
                });
                $('#id_radio2').click(function () {
                      $('#div1').hide('fast');
                      $('#div2').show('fast');
                 });
               });
			</script>
			</head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#calculo'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section" id="calculo">
        <div class="container">
		<br>
            <h2 class="text-center mt-4">Cálculo</h2>
                <hr class="divider my-4" />
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="mt-4">
								<p class="mt-0" style="font-weight: bold">Instrucões para preenchimento do formulário:</p>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="mt-4">
								<ul>
									<li> Por favor, ao utilizar números decimais use '.' Ex.: 0.825 </li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" /> DIMENSIONAMENTO               
							</div>
						</div>
						<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" /> DIMENSIONAMENTO E OTIMIZAÇÃO
							</div>
						</div>
                    </div>
		</div>	
			<br>
        <div class="container">
           <div id="div1" class="row text-center">
			<div class="col-lg-12 col-md-6 text-center" >
			<h2> Dimensionamento </h2>
			</div>
             <div class="col-lg-4 col-md-6 text-center" >
                        <div class="mt-5">
							<form id="formExemplo" data-toggle="validator" role="form" method="POST" href="dimensionar.php"> 	
								<h3 style="font-size:22px"> Grau API </h3>
								<select name="api" style="margin-left: 8px" placeholder="Grau API">
								<option> Selecione o Grau API </option>
								<option> 44 </option>
								<option> 54 </option>
								<option> 55 </option>
								<option> 64 </option>
								<option> 65 </option>
								<option> 66 </option>
								<option> 76 </option>
								<option> 77 </option>
								<option> 85 </option>
								<option> 86 </option>
								<option> 87 </option>
								<option> 88 </option>
								<option> 96 </option>
								<option> 97 </option>
								<option> 98 </option>
								<option> 99 </option>
								<option> 107 </option>
								<option> 108 </option>
								<option> 109 </option>						
								</select>
							</div>
					</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Bomba </h3>
								<select name="diametro" style="margin-left: 8px" placeholder="Diâmetro">
								<option> Selecione o Diâmetro </option>
								<option> 1 </option>
								<option> 1 1/16 </option>
								<option> 1 1/4 </option>
								<option> 1 1/2 </option>
								<option> 1 3/4 </option>
								<option> 2 </option>
								<option> 2 1/4 </option>
								<option> 2 1/2 </option>
								<option> 2 3/4 </option>
								<option> 3 </option>
								<option> 3 1/4 </option>
								<option> 3 3/4 </option>
								<option> 4 3/4 </option>					
								</select>	
							</div>
						</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Classe </h3>
								<select name="classe" style="margin-left: 8px" placeholder="Classe">
								<option> Selecione a Classe </option>
								<option> C </option>
								<option> D </option>
								<option> K </option>
								<option> T </option>				
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Coluna de Hastes </h3>
								<select name="diametrocoluna" style="margin-left: 8px" placeholder="Classe">
								<option> Selecione a Coluna de Hastes </option>
								<option> 1/2 </option>
								<option> 5/8 </option>
								<option> 3/4 </option>
								<option> 7/8 </option>	
								<option> 1 </option>
								<option> 1 1/8 </option>
								<option> 1 1/4 </option>	
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Coluna de Produção </h3>
								<select name="diametro_colunaproducao" style="margin-left: 8px" placeholder="Classe">
								<option> Selecione a Coluna de Hastes </option>
								<option> 1.9 </option>
								<option> 2 3/8 </option>
								<option> 2 7/8 </option>
								<option> 3 1/2</option>	
								<option> 4 </option>
								<option> 4 1/2 </option>	
								</select>
							</div>
						</div>						
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Velocidade de Bombeio Real: (spm) </h3>
								<input type="text" name="velocidade" size="S" placeholder="Ex.: 18"/>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Comprimento da coluna de Hastes (ft): </h3> 
								<input type="text" name="comprimento" size="S" placeholder="Ex.: 4275.10"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Altura Dinâmica do Fluído (ft): </h3>
								<input type="text" name="altura" size="S" placeholder="Ex.: 4275.10"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Densidade Relativa do Fluído(adm): </h3> 
								<input type="text" name="densidade" size="S" placeholder="Ex.: 0.825"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Curso da Haste Polida (pol): </h3>
								<input type="text" name="curso" size="S" placeholder="Ex.: 64"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">			
								<h3 style="font-size:22px"> Vazão de Líquido na Superfície (bpd): </h3>
								<input type="text" name="vazaosuperficie" size="S" placeholder="Ex.: 283"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">			
								<h3 style="font-size:22px"> Nível de Corrosividade (adm): </h3>
								<input type="text" name="corrosividade" size="S" placeholder="Ex.: 0.9"/>
							</div>
					</div>
					
					<div class="col-lg 12 col-md-2 text-center">
						<div class="mt-5">					
							<input class="btn btn-light btn-xl" style="color: black" type="submit" name="calcularbnt" value="DIMENSIONAR"/>
						</div>
					</div>
				</form>
			</div>
		<br>
			<div id="div2" class="row">
			<div class="col-lg-12 col-md-6 text-center" >
				<h2> Dimensionamento e Otimização</h2>
			</div>
			<div class="col-lg-4 col-md-6 text-center">
                        <div class="mt-5">
							<form id="formExemplo" data-toggle="validator" role="form" method="POST" action="otimizar.php" > 	
								<h3 style="font-size:22px"> Grau API </h3>
								<select name="api" style="margin-left: 8px; color:#F4623A" placeholder="Grau API">
								<option> Selecione o Grau API </option>
								<option> 44 </option>
								<option> 54 </option>
								<option> 55 </option>
								<option> 64 </option>
								<option> 65 </option>
								<option> 66 </option>
								<option> 76 </option>
								<option> 77 </option>
								<option> 85 </option>
								<option> 86 </option>
								<option> 87 </option>
								<option> 88 </option>
								<option> 96 </option>
								<option> 97 </option>
								<option> 98 </option>
								<option> 99 </option>
								<option> 107 </option>
								<option> 108 </option>
								<option> 109 </option>						
								</select>
						</div>
					</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Bomba </h3>
								<select name="diametro" style="margin-left: 8px; color:#F4623A" placeholder="Diâmetro">
								<option> Selecione o Diâmetro </option>
								<option> 1 </option>
								<option> 1 1/16 </option>
								<option> 1 1/4 </option>
								<option> 1 1/2 </option>
								<option> 1 3/4 </option>
								<option> 2 </option>
								<option> 2 1/4 </option>
								<option> 2 1/2 </option>
								<option> 2 3/4 </option>
								<option> 3 </option>
								<option> 3 1/4 </option>
								<option> 3 3/4 </option>
								<option> 4 3/4 </option>					
								</select>	
							</div>
						</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Classe </h3>
								<select name="classe" style="margin-left: 8px; color:#F4623A" placeholder="Classe">
								<option> Selecione a Classe </option>
								<option> C </option>
								<option> D </option>
								<option> K </option>
								<option> T </option>				
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Coluna de Hastes </h3>
								<select name="diametrocoluna" style="margin-left: 8px; color:#F4623A" placeholder="Classe">
								<option> Selecione a Coluna de Hastes </option>
								<option> 1/2 </option>
								<option> 5/8 </option>
								<option> 3/4 </option>
								<option> 7/8 </option>	
								<option> 1 </option>
								<option> 1 1/8 </option>
								<option> 1 1/4 </option>	
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Diâmetro da Coluna de Produção </h3>
								<select name="diametro_colunaproducao" style="margin-left: 8px; color:#F4623A" placeholder="Classe">
								<option> Selecione a Coluna de Hastes </option>
								<option> 1.9 </option>
								<option> 2 3/8 </option>
								<option> 2 7/8 </option>
								<option> 3 1/2</option>	
								<option> 4 </option>
								<option> 4 1/2 </option>	
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Curso Máximo </h3>
								<select name="cursomaximo" style="margin-left: 8px; color:#F4623A" placeholder="Classe">
								<option> Selecione o Curso Máximo </option>
								<option> 64 </option>
								<option> 74 </option>	
								<option> 86 </option>
								<option> 100 </option>	
								<option> 120 </option>	
								<option> 144 </option>	
								<option> 168 </option>	
								<option> 192 </option>	
								<option> 240 </option> 	
								</select>
							</div>
						</div>
						
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Velocidade de Bombeio Real: (spm) </h3>
								<input type="text" name="velocidade" size="S" placeholder="Ex.: 18"/>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Comprimento da coluna de Hastes (ft): </h3> 
								<input type="text" name="comprimento" size="S" style="color:#F4623A" placeholder="Ex.: 4275.10"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Altura Dinâmica do Fluído (ft): </h3>
								<input type="text" name="altura" size="S" style="color:#F4623A" placeholder="Ex.: 4275.10"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Densidade Relativa do Fluído(adm): </h3> 
								<input type="text" name="densidade" size="S" style="color:#F4623A" placeholder="Ex.: 0.825"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Curso da Haste Polida (pol): </h3>
								<input type="text" name="curso" size="S" style="color:#F4623A" placeholder="Ex.: 64"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">			
								<h3 style="font-size:22px"> Vazão de Líquido na Superfície (bpd): </h3>
								<input type="text" name="vazaosuperficie" style="color:#F4623A" size="S" placeholder="Ex.: 283"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">			
								<h3 style="font-size:22px"> Nível de Corrosividade (adm): </h3>
								<input type="text" name="corrosividade" style="color:#F4623A" size="S" placeholder="Ex.: 0.9"/>
							</div>
					</div>
					<div class="col-lg-6 col-md-6 text-center">
							<div class="mt-5">
								<h3 style="font-size:22px"> Tipo de Otimização </h3>
								<select name="otimizar" style="margin-left: 8px;" placeholder="Classe">
								<option> Selecione o tipo de Otimização </option>
								<option> Diâmetro </option>
								<option> Curso </option>
								<option> Velocidade </option>
								</select>
							</div>
						</div>
					
					<div class="col-lg 12 col-md-2 text-center">
						<div class="mt-5">
							<input class="btn btn-light btn-xl" style="color:#F4623A" type="submit" name="calcularbnt" value="DIMENSIONAR E OTIMIZAR"/>
						</div>
					</div>
			</div>
				</form>
		</div>
	</section>
	
	
	<section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Apoie nosso Projeto!</h2>
            </div>
    </section>
        <!-- Contact section-->
        <section class='page-section' id='contact'>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-lg-8 text-center'>
                        <h2 class='mt-0'>Contatos</h2>
                        <hr class='divider my-4'/>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-4 ml-auto text-center mb-5 mb-lg-0'>
                        <i class='fas fa-phone fa-3x mb-3 text-muted'></i>
                        <div> (83) 9 9986-1934</div>
                    </div>
                    <div class='col-lg-4 mr-auto text-center'>
                        <i class='fas fa-envelope fa-3x mb-3 text-muted'></i>
						<a class='d-block' href='stephanie.lara@estudante.ufcg.edu.br'>stephanie.lara@estudante.ufcg.edu.br</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class='bg-light py-5'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-6 ml-auto text-center mb-5 mb-lg-0'>
						<br>
						<img src='img/logo_uaepetro.png' class='img-responsive' alt='Responsive image'>
					</div>
					<div class='col-lg-6 ml-auto text-center mb-5 mb-lg-0'>
						<br>
						<img src='img/logouf.png' class='img-responsive' alt='Responsive image'>
					</div>
				</div>
			</div>			
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
