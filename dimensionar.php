<?php

$velocidade = $_POST['velocidade']; $comprimento = $_POST['comprimento']; $altura = $_POST['altura']; $densidade = $_POST['densidade']; $curso = $_POST['curso'];$diametro_colunaproducao = $_POST['diametro_colunaproducao']; $vazaosuperficie = $_POST['vazaosuperficie']; $api = $_POST['api']; $diametro = $_POST['diametro'];
$classe = $_POST['classe']; $diametrocoluna = $_POST['diametrocoluna']; $corrosividade = $_POST['corrosividade'];

$velocidade_bombeio = 0; $cargafluido = 0; $elongacao = 0; $elongacao_cargafluido = 0; $SpS = 0; $cursoefetivoanc = 0; $cursoefetivonanc = 0; $constante_coluna = 0;
$vazaobombaanc = 0; $vazaobombananc = 0; $vazaobombareal = 0; $eficienciavolumetricaanc = 0; $eficienciavolumetricananc = 0; $pesohaste_ar = 0; $pesohaste_agua = 0;
$cargamaxima = 0; $cargaminima = 0; $F1Skr = 0; $F2Skr = 0; $F3Skr = 0; $TSKr = 0; $Ta = 0; $tensaomaxima = 0; $tensaominima = 0; $tensaoadmissivel = 0; $potencia = 0; $torque = 0;
$contrabalanco = 0;
			/*AQUI*/
			if($api == '44'){			
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
			}
			/*AQUI*/
			else if($api == '54'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 0.908; 
					$constante_elastica = 1.668*0.000001; 
					$fator_frequencia = 1.138;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 0.929; 
					$constante_elastica = 1.633*0.000001; 
					$fator_frequencia = 1.14;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 0.957; 
					$constante_elastica = 1.584*0.000001; 
					$fator_frequencia = 1.137;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 0.99; 
					$constante_elastica = 1.525*0.000001; 
					$fator_frequencia = 1.122;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.027; 
					$constante_elastica = 1.46*0.000001; 
					$fator_frequencia = 1.095;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.067; 
					$constante_elastica = 1.391*0.000001; 
					$fator_frequencia = 1.061;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 1.108; 
					$constante_elastica = 1.318*0.000001; 
					$fator_frequencia = 1.023;}
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
			}
			/*AQUI*/
			else if($api == '55'){		
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 1.135; 
					$constante_elastica = 1.27*0.000001; 
					$fator_frequencia = 1;} 
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
			}
			/*AQUI*/
			else if($api =='64'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 1.164; 
					$constante_elastica = 1.328*0.000001; 
					$fator_frequencia = 1.229;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.211; 
					$constante_elastica = 1.319*0.000001; 
					$fator_frequencia = 1.215;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.275; 
					$constante_elastica = 1.232*0.000001; 
					$fator_frequencia = 1.184;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.341; 
					$constante_elastica = 1.141*0.000001; 
					$fator_frequencia = 1.145;}  
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
			}
			/*AQUI*/
			else if($api == '65'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 1.307; 
					$constante_elastica = 1.138*0.000001; 
					$fator_frequencia = 1.098;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.321; 
					$constante_elastica = 1.127*0.000001; 
					$fator_frequencia = 1.104;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.343; 
					$constante_elastica = 1.11*0.000001; 
					$fator_frequencia = 1.11;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.369; 
					$constante_elastica = 1.09*0.000001; 
					$fator_frequencia = 1.114;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.394; 
					$constante_elastica = 1.07*0.000001; 
					$fator_frequencia = 1.114;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.426; 
					$constante_elastica = 1.045*0.000001; 
					$fator_frequencia = 1.11;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 1.46; 
					$constante_elastica = 1.018*0.000001; 
					$fator_frequencia = 1.099;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 1.497; 
					$constante_elastica = 0.99*0.000001; 
					$fator_frequencia = 1.082;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
			}
			/*AQUI*/
			else if($api == '66'){			
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/6'){	
					$diametro1 = 1.0625; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 1.634; 
					$constante_elastica = 0.883*0.000001; 
					$fator_frequencia = 1;}
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000; $tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '75'){ 			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 1.566; 
					$constante_elastica = 0.997*0.000001; 
					$fator_frequencia = 1.191;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.604; 
					$constante_elastica = 0.973*0.000001; 
					$fator_frequencia = 1.193;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.664; 
					$constante_elastica = 0.935*0.000001; 
					$fator_frequencia = 1.189;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.732; 
					$constante_elastica = 0.892*0.000001; 
					$fator_frequencia = 1.174;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.803; 
					$constante_elastica = 0.847*0.000001; 
					$fator_frequencia = 1.151;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.875; 
					$constante_elastica = 0.801*0.000001; 
					$fator_frequencia = 1.121;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '76'){		
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 1.802; 
					$constante_elastica = 0.816*0.000001; 
					$fator_frequencia = 1.072;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 1.814; 
					$constante_elastica = 0.812*0.000001; 
					$fator_frequencia = 1.077;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 1.833; 
					$constante_elastica = 0.804*0.000001; 
					$fator_frequencia = 1.082;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 1.855; 
					$constante_elastica = 0.795*0.000001; 
					$fator_frequencia = 1.088;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 1.88; 
					$constante_elastica = 0.785*0.000001; 
					$fator_frequencia = 1.093;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 1.908; 
					$constante_elastica = 0.774*0.000001; 
					$fator_frequencia = 1.096;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 1.934; 
					$constante_elastica = 0.764*0.000001; 
					$fator_frequencia = 1.097;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 1.967; 
					$constante_elastica = 0.751*0.000001; 
					$fator_frequencia = 1.094;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 2.039; 
					$constante_elastica = 0.722*0.000001; 
					$fator_frequencia = 1.078;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 2.119; 
					$constante_elastica = 0.69*0.000001; 
					$fator_frequencia = 1.047;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
				echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '77'){		
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 2.224; 
					$constante_elastica = 0.649*0.000001; 
					$fator_frequencia = 1;} 
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '86'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.058; 
					$constante_elastica = 0.742*0.000001; 
					$fator_frequencia = 1.151;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.087; 
					$constante_elastica = 0.732*0.000001; 
					$fator_frequencia = 1.156;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.133; 
					$constante_elastica = 0.717*0.000001; 
					$fator_frequencia = 1.162;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.185; 
					$constante_elastica = 0.699*0.000001; 
					$fator_frequencia = 1.164;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.247; 
					$constante_elastica = 0.679*0.000001; 
					$fator_frequencia = 1.161;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.315; 
					$constante_elastica = 0.656*0.000001; 
					$fator_frequencia = 1.153;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 2.385; 
					$constante_elastica = 0.633*0.000001; 
					$fator_frequencia = 1.138;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 2.455; 
					$constante_elastica = 0.61*0.000001; 
					$fator_frequencia = 1.119;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '87'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.39; 
					$constante_elastica = 0.612*0.000001; 
					$fator_frequencia = 1.055;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.399; 
					$constante_elastica = 0.61*0.000001; 
					$fator_frequencia = 1.058;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.413; 
					$constante_elastica = 0.607*0.000001; 
					$fator_frequencia = 1.062;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.43; 
					$constante_elastica = 0.603*0.000001; 
					$fator_frequencia = 1.066;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.45; 
					$constante_elastica = 0.598*0.000001; 
					$fator_frequencia = 1.071;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.472; 
					$constante_elastica = 0.594*0.000001; 
					$fator_frequencia = 1.075;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 2.496; 
					$constante_elastica = 0.588*0.000001; 
					$fator_frequencia = 1.079;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 2.523; 
					$constante_elastica = 0.582*0.000001; 
					$fator_frequencia = 1.082;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 2.575; 
					$constante_elastica = 0.57*0.000001; 
					$fator_frequencia = 1.084;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 2.641; 
					$constante_elastica = 0.556*0.000001; 
					$fator_frequencia = 1.078;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 2.793; 
					$constante_elastica = 0.522*0.000001; 
					$fator_frequencia = 1.038;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '88'){ 			
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 2.904; 
					$constante_elastica = 0.497*0.000001; 
					$fator_frequencia = 1;} 
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '96'){		
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.382; 
					$constante_elastica = 0.67*0.000001; 
					$fator_frequencia = 1.222;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.435; 
					$constante_elastica = 0.655*0.000001; 
					$fator_frequencia = 1.224;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.511; 
					$constante_elastica = 0.633*0.000001; 
					$fator_frequencia = 1.223;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.607; 
					$constante_elastica = 0.606*0.000001; 
					$fator_frequencia = 1.213;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.703; 
					$constante_elastica = 0.578*0.000001; 
					$fator_frequencia = 1.196;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.806; 
					$constante_elastica = 0.549*0.000001; 
					$fator_frequencia = 1.172;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '97'){			
				if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 2.645; 
					$constante_elastica = 0.568*0.000001; 
					$fator_frequencia = 1.12;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 2.67; 
					$constante_elastica = 0.563*0.000001; 
					$fator_frequencia = 1.124;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 2.707; 
					$constante_elastica = 0.556*0.000001; 
					$fator_frequencia = 1.131;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 2.751; 
					$constante_elastica = 0.548*0.000001; 
					$fator_frequencia = 1.137;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 2.801; 
					$constante_elastica = 0.538*0.000001; 
					$fator_frequencia = 1.141;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 2.856; 
					$constante_elastica = 0.528*0.000001; 
					$fator_frequencia = 1.143;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 2.921; 
					$constante_elastica = 0.515*0.000001; 
					$fator_frequencia = 1.141;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 2.989; 
					$constante_elastica = 0.503*0.000001; 
					$fator_frequencia = 1.135;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 3.132; 
					$constante_elastica = 0.475*0.000001; 
					$fator_frequencia = 1.111;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '98'){		
				if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 3.076; 
					$constante_elastica = 0.474*0.000001; 
					$fator_frequencia = 1.045;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 3.089; 
					$constante_elastica = 0.472*0.000001; 
					$fator_frequencia = 1.048;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 3.103; 
					$constante_elastica = 0.47*0.000001; 
					$fator_frequencia = 1.051;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 3.118; 
					$constante_elastica = 0.468*0.000001; 
					$fator_frequencia = 1.055;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 3.137; 
					$constante_elastica = 0.465*0.000001; 
					$fator_frequencia = 1.058;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 3.157; 
					$constante_elastica = 0.463*0.000001; 
					$fator_frequencia = 1.062;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 3.18; 
					$constante_elastica = 0.46*0.000001; 
					$fator_frequencia = 1.066;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 3.21; 
					$constante_elastica = 0.453*0.000001; 
					$fator_frequencia = 1.071;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 3.289; 
					$constante_elastica = 0.445*0.000001; 
					$fator_frequencia = 1.074;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 3.412; 
					$constante_elastica = 0.428*0.000001; 
					$fator_frequencia = 1.064;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '99'){			
				if($diametro == '1'){	
					$diametro1 = 1; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/16'){	
					$diametro1 = 1.0625; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/4'){	
					$diametro1 = 1.25; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3'){	
					$diametro1 = 3; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 0.726; 
					$constante_elastica = 1.99*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 3.676; 
					$constante_elastica = 0.393*0.000001; 
					$fator_frequencia = 1;} 
				else{
					echo "Diâmetro não encontrado";}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '107'){			
				if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 3.085; 
					$constante_elastica = 0.506*0.000001; 
					$fator_frequencia = 1.195;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 3.158; 
					$constante_elastica = 0.494*0.000001; 
					$fator_frequencia = 1.197;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 3.238; 
					$constante_elastica = 0.48*0.000001; 
					$fator_frequencia = 1.195;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 3.336; 
					$constante_elastica = 0.464*0.000001; 
					$fator_frequencia = 1.187;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 3.435; 
					$constante_elastica = 0.447*0.000001; 
					$fator_frequencia = 1.174;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 3.537; 
					$constante_elastica = 0.43*0.000001; 
					$fator_frequencia = 1.156;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '108'){			
				if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 3.376; 
					$constante_elastica = 0.441*0.000001; 
					$fator_frequencia = 1.106;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 3.411; 
					$constante_elastica = 0.437*0.000001; 
					$fator_frequencia = 1.111;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 3.452; 
					$constante_elastica = 0.432*0.000001; 
					$fator_frequencia = 1.117;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 3.498; 
					$constante_elastica = 0.427*0.000001; 
					$fator_frequencia = 1.121;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 3.548; 
					$constante_elastica = 0.421*0.000001; 
					$fator_frequencia = 1.124;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 3.603; 
					$constante_elastica = 0.415*0.000001; 
					$fator_frequencia = 1.126;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 3.731; 
					$constante_elastica = 0.4*0.000001; 
					$fator_frequencia = 1.123;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 3.873; 
					$constante_elastica = 0.383*0.000001; 
					$fator_frequencia = 1.108;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
							<br><p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br><a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		/*AQUI*/
		else if($api == '109'){			
				if($diametro == '1 1/2'){	
					$diametro1 = 1.5; 
					$peso = 3.855; 
					$constante_elastica = 0.377*0.000001; 
					$fator_frequencia = 1.038;} 
				else if($diametro == '1 3/4'){	
					$diametro1 = 1.75; 
					$peso = 3.867; 
					$constante_elastica = 0.376*0.000001; 
					$fator_frequencia = 1.04;} 
				else if($diametro == '2'){	
					$diametro1 = 2; 
					$peso = 3.88; 
					$constante_elastica = 0.375*0.000001; 
					$fator_frequencia = 1.043;} 
				else if($diametro == '2 1/4'){	
					$diametro1 = 2.25; 
					$peso = 3.896; 
					$constante_elastica = 0.374*0.000001; 
					$fator_frequencia = 1.046;} 
				else if($diametro == '2 1/2'){	
					$diametro1 = 2.5; 
					$peso = 3.911; 
					$constante_elastica = 0.372*0.000001; 
					$fator_frequencia = 1.048;} 
				else if($diametro == '2 3/4'){	
					$diametro1 = 2.75; 
					$peso = 3.93; 
					$constante_elastica = 0.371*0.000001; 
					$fator_frequencia = 1.051;} 
				else if($diametro == '3 1/4'){	
					$diametro1 = 3.25; 
					$peso = 3.971; 
					$constante_elastica = 0.367*0.000001; 
					$fator_frequencia = 1.057;} 
				else if($diametro == '3 3/4'){	
					$diametro1 = 3.75; 
					$peso = 4.02; 
					$constante_elastica = 0.363*0.000001; 
					$fator_frequencia = 1.063;} 
				else if($diametro == '4 3/4'){	
					$diametro1 = 4.75; 
					$peso = 4.12; 
					$constante_elastica = 0.354*0.000001; 
					$fator_frequencia = 1.066;} 
				else{
					echo "
	<html lang='pt-br, en'>
		<head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
		</head>
		<body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<section class='page-section' id='calculo'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-11 col-md-6'>
						<div class='mt-0'>
						<br>
							<p style='color:black; font-size: 20px;'>Diâmetro não encontrado!</p>
							<p style='color:black; font-size: 20px;'>O diâmetro escolhido não está disponível para cálculo, pois não faz parte dos diâmetros do Grau API selecionado, consulte a tabela abaixo!</p>               
						</div>
					</div>
					<div class='col-lg-1 col-md-6'>
						<div class='mt-0'>
							<br>
							<a href='calculo.php'>VOLTAR</a>             
						</div>
					</div>
					<div class='col-lg-12 col-md-6 text-center'>
						<div class='mt-0'>
							<img src='img/tabelaAPI.png' class='img-responsive' alt='Responsive image'>
						</div>
					</div>
				</div>
			</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
	</html>";
		break;}
						
				if ($diametrocoluna == '1/2'){
					$area = 0.196;}
				else if ($diametrocoluna == '5/8'){
					$area = 0.307;}
				else if ($diametrocoluna == '3/4'){
					$area = 0.442;}
				else if ($diametrocoluna == '7/8'){
					$area = 0.601;}
				else if ($diametrocoluna == '1'){
					$area = 0.785;}
				else if ($diametrocoluna == '1 1/8'){
					$area = 0.994;}
				else if ($diametrocoluna == '1 1/4'){
					$area = 1.227;}
				else{
					echo "Diâmetro não encontrado";}
					
				if ($classe == 'C'){	
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'D'){
					$tensao_escoamento = 65000;	$tensao_ruptura = 90000;}
				else if ($classe == 'K'){
					$tensao_escoamento = 100000;	$tensao_ruptura = 120000;}
				else if ($classe == 'T'){
					$tensao_escoamento = 0;	$tensao_ruptura = 160000;}
				else{
					echo "Classe não encontrada";}
				
				if ($diametro_colunaproducao == '1.9'){
					$constante_coluna = 1/ ($comprimento * (0.500*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 3/8'){
					$constante_coluna = 1/ ($comprimento * (0.307*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '2 7/8'){
					$constante_coluna = 1/ ($comprimento * (0.221*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '3 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.154*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else if ($diametro_colunaproducao == '4'){
					$constante_coluna = 1/ ($comprimento * (0.130*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}	
				else if ($diametro_colunaproducao == '4 1/2'){
					$constante_coluna = 1/ ($comprimento * (0.111*0.000001)); 
					$constante_coluna = number_format($constante_coluna, 2, '.', '');}
				else{
					echo "Não encontrado";}
		}
		else{
			echo "Grau API não encontrado\n";}
				
				
				/*Calculo*/
				$velocidade_bombeio = ($velocidade*$comprimento)/(245000*$fator_frequencia);
				$velocidade_bombeio = number_format($velocidade_bombeio, 3, '.', '');
																	
				$cargafluido = 0.34*$altura*($diametro1*$diametro1)*$densidade;
				$cargafluido = number_format($cargafluido, 2, '.', '');
													
				$elongacao = 1/($comprimento*$constante_elastica);
				$elongacao = number_format($elongacao, 2, '.', '');
									
				$elongacao_cargafluido = $cargafluido / ($curso*$elongacao);
				$elongacao_cargafluido = number_format($elongacao_cargafluido, 3, '.', '');
							
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 0.9;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.8;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.7;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.6;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.5;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.4;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 0.91;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.81;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.71;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.61;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.51;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.41;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.01;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 0.92;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.83;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.72;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.63;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.53;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.43;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.02;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 0.93;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.85;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.75;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.65;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.56;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.47;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.06;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 0.96;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.88;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.8;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.69;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.58;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.47;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.03;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.93;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.8;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.68;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.58;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.51;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.09;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.05;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.89;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.78;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
					$SpS = 0.72;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.66;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.6;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.01;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 0.93;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.87;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.81;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.76;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.68;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.18;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.1;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 1.04;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 0.98;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 0.92;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.86;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.78;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.33;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.23;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 1.15;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 1.09;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 1.03;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 0.96;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.87;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.48;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.37;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 1.27;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 1.21;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 1.13;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 1.05;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 0.98;}
					else{
						echo "Não encontrado\n";}}
					
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.6;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.5;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 1.4;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 1.33;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 1.24;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 1.15;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 1.07;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$SpS = 1.7;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$SpS = 1.61;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$SpS = 1.52;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$SpS = 1.44;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$SpS = 1.37;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$SpS = 1.26;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$SpS = 1.16;}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
														
				$cursoefetivoanc = $curso * $SpS;
				$cursoefetivoanc = number_format($cursoefetivoanc, 2, '.', '');
										
				$cursoefetivonanc = (($curso * $SpS) - ($cargafluido/$constante_coluna));
				$cursoefetivonanc = number_format($cursoefetivonanc, 2, '.', '');
				
				$vazaobombaanc = 0.1166 * ($diametro1*$diametro1) * $cursoefetivoanc * $velocidade ;
				$vazaobombaanc = number_format($vazaobombaanc, 2, '.', '');
				
				$vazaobombananc = 0.1166 * ($diametro1*$diametro1) * $cursoefetivonanc * $velocidade ;
				$vazaobombananc = number_format($vazaobombananc, 2, '.', '');
				
				$vazaobombareal = 0.1166 * ($diametro1*$diametro1) * $curso * $velocidade ;
				$vazaobombareal = number_format($vazaobombareal, 2, '.', '');
				
				$eficienciavolumetricaanc = ($vazaosuperficie / $vazaobombaanc) * 100;
				$eficienciavolumetricaanc = number_format($eficienciavolumetricaanc, 2, '.', '');
				
				$eficienciavolumetricananc = ($vazaosuperficie / $vazaobombananc) * 100;
				$eficienciavolumetricananc = number_format($eficienciavolumetricananc, 2, '.', '');
				
				$pesohaste_ar = $peso * $comprimento;
				$pesohaste_ar = number_format($pesohaste_ar, 2, '.', '');
				
				$pesohaste_agua = $pesohaste_ar * (1 - (0.128 * $densidade));
				$pesohaste_agua = number_format($pesohaste_agua, 2, '.', '');
				
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.1;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.2;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.3;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.4;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.5;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.6;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.02;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.12;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.23;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.33;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.43;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.53;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.63;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.05;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.15;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.36;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.46;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.56;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.66;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.08;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.08;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.29;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.39;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.59;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.69;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.12;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.33;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.43;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.52;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.62;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.72;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.17;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.27;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.37;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.46;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.65;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.75;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.21;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.31;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.41;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.5;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.59;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.68;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.78;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.27;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.36;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.46;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.63;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.70;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.80;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.42;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.51;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.61;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.70;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.79;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.87;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.43;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.50;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.58;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.68;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.75;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.83;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.91;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.62;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.68;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.78;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.83;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 0.90;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 0.98;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.70;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.76;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.84;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 0.93;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 0.97;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 1;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 1.05;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F1Skr = 0.83;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F1Skr = 0.9;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F1Skr = 0.99;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F1Skr = 1.06;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F1Skr = 1.1;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F1Skr = 1.13;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F1Skr = 1.16;}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
				
				$cargamaxima = $pesohaste_agua + ($F1Skr * ($curso*$elongacao));
				$cargamaxima = number_format($cargamaxima, 2, '.', '');
				
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.004;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.01;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.015;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.019;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.015;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.022;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.025;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.015;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.028;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.039;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.045;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.039;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.05;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.055;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.035;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.055;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.073;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.08;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.073;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.083;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.086;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.065;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.088;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.115;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.125;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.12;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.119;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.12;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.128;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.154;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.165;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.161;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.158;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.16;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.155;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.175;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.192;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.201;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.2;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.195;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.2;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.23;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.228;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.241;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.235;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.235;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.24;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.271;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.269;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.275;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.27;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.263;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.27;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.29;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.302;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.316;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.306;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.309;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.29;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.3;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.349;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.368;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.364;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.35;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.339;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.34;}
					else{
						echo "Não encontrado\n";}}
					
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.42;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.433;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.446;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.433;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.413;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.384;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.38;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F2Skr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F2Skr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F2Skr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F2Skr = 0.475;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F2Skr = 0.45;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F2Skr = 0.42;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F2Skr = 0.41;}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
				$cargaminima = $pesohaste_agua - ($F2Skr * ($curso*$elongacao));
				$cargaminima = number_format($cargaminima, 2, '.', '');
				
				$tensaomaxima = $cargamaxima / $area;
				$tensaomaxima = number_format($tensaomaxima, 2, '.', '');
				
				$tensaominima = $cargaminima / $area;
				$tensaominima = number_format($tensaominima, 2, '.', '');
				
				$tensaoadmissivel = (($tensao_ruptura/4) + (0.5625*$tensaominima))*$corrosividade;
				$tensaoadmissivel = number_format($tensaoadmissivel, 2, '.', '');
				
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.09;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.16;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.215;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.245;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.25;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.245;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.1;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.17;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.25;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.25;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.112;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.178;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.23;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.27;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.26;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.126;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.195;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.245;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.273;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.285;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.273;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.147;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.213;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.288;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.3;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.288;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.163;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.23;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.28;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.31;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.325;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.325;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.188;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.305;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.265;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.38;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.288;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.345;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.428;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.45;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.255;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.337;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.4;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.51;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.53;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.299;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.388;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.47;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.59;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.61;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.35;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.45;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.67;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.695;}
					else{
						echo "Não encontrado\n";}}
					
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = 0.41;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = 0.522;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = 0.63;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = 0.74;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = 0.77;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$F3Skr = "Nulo";}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$F3Skr = "Nulo";}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
				
				$potencia = (2.53 * 0.000001 ) * $F3Skr * $curso * $elongacao * $curso * $velocidade ;
				$potencia = number_format($potencia, 2, '.', '');
				
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.05;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.09;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.14;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.19;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.25;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.26;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.06;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.1;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.16;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.21;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.25;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.28;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.29;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.08;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.11;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.19;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.24;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.28;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.3;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.31;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.14;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.27;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.31;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.32;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.33;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.13;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.18;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.3;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.33;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.345;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.16;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.22;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.3;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.33;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.35;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.355;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.36;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.2;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.26;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.37;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.375;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.38;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.385;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.25;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.31;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.38;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.41;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.42;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.43;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.44;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.29;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.35;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.42;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.45;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.47;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.5;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.515;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.34;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.4;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.46;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.51;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.52;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.525;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.38;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.45;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.5;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.53;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.56;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.56;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.565;}
					else{
						echo "Não encontrado\n";}}
					
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.44;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.5;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.58;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.62;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.63;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.635;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$TSKr = 0.49;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$TSKr = 0.55;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$TSKr = 0.6;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$TSKr = 0.64;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$TSKr = 0.67;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$TSKr = 0.68;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$TSKr = 0.685;}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
				
				if(($velocidade_bombeio >= 0) and ($velocidade_bombeio < 0.025)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.2;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.16;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.08;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.055;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.029;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = -0.017;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.025) and ($velocidade_bombeio < 0.075)){	
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.18;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.12;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.065;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.04;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = -0.017;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.075) and ($velocidade_bombeio < 0.125)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.12;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.08;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.055;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.027;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = -0.017;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = -0.005;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.125) and ($velocidade_bombeio < 0.175)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.1;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.065;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.04;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = -0.017;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.003;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.175) and ($velocidade_bombeio < 0.225)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.075;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.055;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.025;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = -0.017;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.011;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.225) and ($velocidade_bombeio < 0.275)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.06;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.04;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = -0.015;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.012;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.275) and ($velocidade_bombeio < 0.325)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.05;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.025;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = -0.017;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.011;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.013;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.325) and ($velocidade_bombeio < 0.375)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.04;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.016;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = -0.017;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.012;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.014;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.375) and ($velocidade_bombeio < 0.425)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.03;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.012;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = -0.005;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.011;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.013;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.015;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.425) and ($velocidade_bombeio < 0.475)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.013;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.005;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.011;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.014;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.025;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.475) and ($velocidade_bombeio < 0.525)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.025;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.009;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.011;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.013;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.025;}
					else{
						echo "Não encontrado\n";}}
					
				elseif(($velocidade_bombeio >= 0.525) and ($velocidade_bombeio < 0.575)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.03;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.03;}
					else{
						echo "Não encontrado\n";}}
				elseif(($velocidade_bombeio >= 0.575) and ($velocidade_bombeio <= 0.60)){
					if(($elongacao_cargafluido >= 0) and ($elongacao_cargafluido < 0.05)){
						$Ta = 0.03;}
					elseif(($elongacao_cargafluido >= 0.05) and ($elongacao_cargafluido < 0.15)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.15) and ($elongacao_cargafluido < 0.25)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.25) and ($elongacao_cargafluido < 0.35)){
						$Ta = 0.015;}
					elseif(($elongacao_cargafluido >= 0.35) and ($elongacao_cargafluido < 0.45)){
						$Ta = 0.02;}
					elseif(($elongacao_cargafluido >= 0.45) and ($elongacao_cargafluido < 0.55)){
						$Ta = 0.03;}
					elseif(($elongacao_cargafluido >= 0.55) and ($elongacao_cargafluido <= 0.60)){
						$Ta = 0.05;}
					else{
						echo "Não encontrado\n";}}
				else{
					echo "Não encontrado\n";}
				
				$Ta2 = 1 + (((($pesohaste_agua/($curso * $elongacao)) - 0.3) / 0.1) * $Ta);
				
				$torque = $TSKr * $curso * $elongacao * ($curso/2) *$Ta2 ; 
				$torque = number_format($torque, 2, '.', '');
				
				$contrabalanco = 1.06 * ( $pesohaste_agua + (0.5 * $cargafluido)); 
				$contrabalanco = number_format($contrabalanco, 2, '.', '');
						
			echo "<html lang='pt-br, en'>
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <meta name='description' content='' />
        <meta name='author' content='' />
        <title>Sucker Rod Pumping System</title>
        <!-- Font Awesome icons (free version)-->
        <script src='https://use.fontawesome.com/releases/v5.12.1/js/all.js' crossorigin='anonymous'></script>
        <!-- Google fonts-->
        <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700' rel='stylesheet' />
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
        <!-- Third party plugin CSS-->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css' rel='stylesheet' />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href='css/styles.css' rel='stylesheet' />
		<link rel='icon' href='img/logo11.png' type='image/x-icon' />
		<script src='http://code.jquery.com/jquery-latest.js'></script>
			 <script type='text/javascript'>
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
			<script type='text/javascript'>
                 $(document).ready(function () {
                    $('#id_radio3').click(function () {
                       $('#div4').hide('fast');
                       $('#div3').show('fast');
                });
                $('#id_radio4').click(function () {
                      $('#div3').hide('fast');
                      $('#div4').show('fast');
                 });
               });
			</script>
			</head>
    <body id='page-top'>
        <!-- Navigation-->
        <nav class='navbar navbar-expand-lg navbar-black fixed-top py-3' id='mainNav2' >
            <div class='container'>
                <a class='navbar-brand js-scroll-trigger' href='#page-top'></a><button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarResponsive'>
                    <ul class='navbar-nav ml-auto my-2 my-lg-0'>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
	<section class='page-section' id='calculo'>
        <div class='container'>
				<div class='row'>
						<div class='col-lg-6 col-md-6 text-center'>
							<div class='mt-5'>
								<input id='id_radio3' type='radio' name='name_radio1' value='value_radio1'/> Ancorada               
							</div>
						</div>
						<div class='col-lg-6 col-md-6 text-center'>
							<div class='mt-5'>
								<input id='id_radio4' type='radio' name='name_radio1' value='value_radio2' /> Não Ancorada
							</div>
						</div>
                    </div>
		</div>	
		<div class='container'>
			<div id='div3' class='row text-center'>
				<div class='col-lg-12 col-md-6 text-center'>
					<div class='mt-5'>
						<h2 style='color:#F4623A; font-size: 25px;'>Ancorada: </h2>
						<hr class='divider my-4' />
						<p style='color:black; font-size: 20px;'>Velocidade de Bombeio : $velocidade_bombeio </p>
						<p style='color:black; font-size: 20px;'>Carga de Fluído sobre o Pistão :  $cargafluido lb </h2>
						<p style='color:black; font-size: 20px;'>Constante Elástica da Coluna de Hastes :  $elongacao lb/in </h2>
						<p style='color:black; font-size: 20px;'>Elongação da Coluna devido à Carga do Fluído: $elongacao_cargafluido  </h2>
						<p style='color:black; font-size: 20px;'>Sp/S : $SpS  </h2>
						<p style='color:black; font-size: 20px;'>F1Skr : $F1Skr  </h2>
						<p style='color:black; font-size: 20px;'>F2Skr : $F2Skr  </h2>
						<p style='color:black; font-size: 20px;'>F3Skr : $F3Skr  </h2>							
						<p style='color:black; font-size: 20px;'>2T/SKr : $TSKr  </h2>						
						<p style='color:black; font-size: 20px;'>Ta : $Ta  </h2>
						<p style='color:black; font-size: 20px;'>Constante Kt: $constante_coluna adm </h2>
						<p style='color:black; font-size: 18px;'>Curso efetivo para coluna de produção Ancorada: $cursoefetivoanc in </h2>
						<p style='color:black; font-size: 20px;'>Vazão da Bomba Ancorada: $vazaobombaanc bbl/dia  </h2>
						<p style='color:black; font-size: 20px;'>Eficiência Volumétrica Ancorada: $eficienciavolumetricaanc %  </h2>
						<p style='color:black; font-size: 20px;'>Peso da Haste no Ar: $pesohaste_ar lb </h2>
						<p style='color:black; font-size: 20px;'>Peso da Haste na Água: $pesohaste_agua lb </h2>
						<p style='color:black; font-size: 20px;'>Carga Máxima na haste polida: $cargamaxima lb </h2>
						<p style='color:black; font-size: 20px;'>Carga Mínima na haste polida: $cargaminima lb </h2>
						<p style='color:black; font-size: 20px;'>Tensão Máxima na coluna de hastes : $tensaomaxima lb/in^2 </h2>
						<p style='color:black; font-size: 20px;'>Tensão Mínima na coluna de hastes : $tensaominima lb/in^2  </h2>
						<p style='color:black; font-size: 18px;'>Tensão Admissível na coluna de hastes : $tensaoadmissivel lb/in^2  </h2>
						<p style='color:black; font-size: 20px;'>Potência Requerida da haste polida : $potencia  </h2>
						<p style='color:black; font-size: 20px;'>Torque Máximo: $torque  </h2>
						<p style='color:black; font-size: 20px;'>Contra Balanço: $contrabalanco </h2>
					</div>
				</div>
			</div>
			<div id='div4' class='row'>
				<div class='col-lg-12 col-md-12 text-center'>
					<div class='mt-5'>
						<h2 style='color:#F4623A; font-size: 25px;'>Não Ancorada: </h2>
						<hr class='divider my-4' />
						<p style='color:black; font-size: 20px;'>Velocidade de Bombeio : $velocidade_bombeio </p>
						<p style='color:black; font-size: 20px;'>Carga de Fluído sobre o Pistão :  $cargafluido lb </h2>
						<p style='color:black; font-size: 20px;'>Constante Elástica da Coluna de Hastes :  $elongacao lb/in </h2>
						<p style='color:black; font-size: 20px;'>Elongação da Coluna devido à Carga do Fluído: $elongacao_cargafluido  </h2>
						<p style='color:black; font-size: 20px;'>Sp/S : $SpS  </h2>
						<p style='color:black; font-size: 20px;'>F1Skr : $F1Skr  </h2>
						<p style='color:black; font-size: 20px;'>F2Skr : $F2Skr  </h2>
						<p style='color:black; font-size: 20px;'>F3Skr : $F3Skr  </h2>							
						<p style='color:black; font-size: 20px;'>2T/SKr : $TSKr  </h2>						
						<p style='color:black; font-size: 20px;'>Ta : $Ta  </h2>
						<p style='color:black; font-size: 20px;'>Constante Kt: $constante_coluna adm </h2>
						<p style='color:black; font-size: 17px;'>Curso efetivo para coluna de produção Não Ancorada: $cursoefetivonanc in </h2>
						<p style='color:black; font-size: 20px;'>Vazão da Bomba Não Ancorada: $vazaobombananc bbl/dia  </h2>
						<p style='color:black; font-size: 20px;'>Eficiência Volumétrica Não Ancorada: $eficienciavolumetricananc %  </h2>
						<p style='color:black; font-size: 20px;'>Peso da Haste no Ar: $pesohaste_ar lb </h2>
						<p style='color:black; font-size: 20px;'>Peso da Haste na Água: $pesohaste_agua lb </h2>
						<p style='color:black; font-size: 20px;'>Carga Máxima na haste polida: $cargamaxima lb </h2>
						<p style='color:black; font-size: 20px;'>Carga Mínima na haste polida: $cargaminima lb </h2>
						<p style='color:black; font-size: 20px;'>Tensão Máxima na coluna de hastes : $tensaomaxima lb/in^2 </h2>
						<p style='color:black; font-size: 20px;'>Tensão Mínima na coluna de hastes : $tensaominima lb/in^2  </h2>
						<p style='color:black; font-size: 18px;'>Tensão Admissível na coluna de hastes : $tensaoadmissivel lb/in^2  </h2>
						<p style='color:black; font-size: 20px;'>Potência Requerida da haste polida : $potencia  </h2>
						<p style='color:black; font-size: 20px;'>Torque Máximo: $torque  </h2>
						<p style='color:black; font-size: 20px;'>Contra Balanço: $contrabalanco </h2>						
						<p style='color:black; font-size: 20px;'>Contra Balanço: $Ta2 </h2>
					</div>
				</div>
			</div>
		</div>
	</section>
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
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
        <!-- Third party plugin JS-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
        <!-- Core theme JS-->
        <script src='js/scripts.js'></script>
    </body>
				</html>"
?>