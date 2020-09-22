# https://stephaniel26.github.io/ProjetoBombeioMecanico/
#  <!DOCTYPE html>
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
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#sobre'>Sobre</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='calculo.php'>Cálculo</a></li>
                        <li class='nav-item'><a class='nav-link js-scroll-trigger' href='#contact'>Contatos</a></li>
						<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php#login'>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class=" text-white font-weight-bold">Sucker Rod Pumping System</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5"></p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#login">Faça o cálculo</a>
                    </div>
                </div>
            </div>
        </header>
		
	<section class="page-section" id="login">
            <div class="container">
                <h2 class="text-center mt-0">Login</h2>
                <hr class="divider my-4" />
                <div class="row">
                   <div class="col-lg-12 col-md-6 text-center">
						<div class="mt-5">
                            <form id="formExemplo" data-toggle="validator" role="form" action="logando.php" method="post">
								<label>Usuário</label>
								<input type="text" id="usuario" name="usuario" placeholder="Usuário" value=<?php  if (isset($_COOKIE["id_usuario_c"])) {echo($_COOKIE["id_usuario_c"]);}?>>	
						</div>
					</div>
					<div class="col-lg-12 col-md-6 text-center">
						<div class="mt-5">
								<label class="w3-label">Senha</label>
								<input type="password" id="senha" name="senha" class="w3-input" placeholder="Senha" required value=<?php if (isset($_COOKIE["senha_c"])) {echo($_COOKIE["senha_c"]);}?>>
						</div>
					</div>
					<div class="col-lg-12 col-md-6 text-center">
						<div class="mt-5">
								<input type="checkbox" id="salvar_chave" name="salvar_chave" value=1 <?php if (isset($_COOKIE["senha_c"])) {echo("checked");}?>>  Continuar conectado
						</div>
					</div>
					<div class="col-lg-12 col-md-6 text-center">
						<div class="mt-5">
							<input class="btn btn-dark btn-xl" type="submit" value="LOGIN"/>
							</form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
	
	
	<section class="page-section bg-dark text-white" id="sobre">
            <div class="container text-center">
                <p class="mb-4">Projeto desenvolvido com a finalidade de realizar os cálculos de dimensionamento e otimização da elevação de petróleo por bombeio mecânico em tempo reduzido e com pequena margem de erro, bem como possibilitar a comparação entre os resultados de várias possibilidades de projeto, selecionando aquele mais eficiente. A ferramenta trata de um sistema web que permitirá que aqueles usuários cadastrados possam realizar o dimensionamento de novos projetos, bem como otimizar aqueles sistemas que não estão operando no máximo de sua eficiência, de forma rápida e precisa.</p>
				<p style="font-weight-bold">Aluna: Stephanie Lara Correia</p>
				<p style="font-weight-bold">Orientador: Pablo Diego Pinheiro de Souza</p>
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

