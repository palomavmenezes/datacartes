<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->

<section class="banner-home">

	<div class="container">

		<div class="row">
			<div class="col-md-12 logo-white">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png">
			</div>
			<div class="col-md-12">
				<h1 class="txt-banner">Desenvolvemos as ferramentas certas
para seu negócio ir além.</h1>
			</div>
			<div class="col-md-12 botao-banner">
				<button type="button" class="btn btn-banner" href="<?php echo home_url(); ?>/descubra-como">DESCRUBRA COMO <img src="<?php echo get_template_directory_uri(); ?>/img/icons/set-banner.png" width="25px" class="set-banner"> </button>
			</div>
		</div>
	</div>

</section>
	<section class="img-dots">
		<div class="container img-dots">
		<div class="row dotss">
			<div class="col-md-12 dots">
				<img src="<?php echo get_template_directory_uri(); ?>/img/dots.png" class="dots">
			</div>
		</div>
	</div>
	</section>

	<!-- SEÇÃO 2 DA HOME - RESULTADOS METRIFICÁVEIS -->

	<section class="secao-resultados">
		<div class="container resultados">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<h1 class="resultados-metrificaveis">Trabalhamos com resultados metrificáveis</h1>
							<p class="not-options">E não com opiniões.</p>
							<p class="txt-resultados">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						</div>

						<div class="col-md-6">
							<img class="macbook" src="<?php echo get_template_directory_uri(); ?>/img/macbook.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- SEÇÃO 3 DA HOME - No que podemos te ajudar? -->

	<section class="atendimento">
		<div class="container help">
			<div class="row help">
				<div class="col-md-12 help">
					<div class="row help-dentro">
						<div class="col-md-6 help-a">
							<h3>No que podemos<br>te ajudar?</h3>
							<h4>Desenvolvimento Web e Mobile</h4>
							<p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.<br> Quis ipsum suspendisse ultrices gravida. Risus<br> commodo viverra maecenas accumsan lacus<br> vel facilisis. 
								<div class="btn-servico"><button type="button" class="btn descri-a">NOSSOS CASES</button> <button type="button" class="btn descri-b">MAIS SOBRE O SERVIÇO</button></div>
						</div>

						<div class="col-md-6 help-b">

							<div class="btn prev">Voltar seção
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/prev.png">
								</div>
							</div>

							<div><button type="button" class="btn servicos">DESENVOLVIMENTO WEB E MOBILE</button></div>

							<div><button type="button" class="btn servicos">PERFORMANCE ONLINE</button></div>

							<div><button type="button" class="btn servicos">AUTOMAÇÃO CRM</button></div>

							<div><button type="button" class="btn servicos active">OTIMIZAÇÃO E AUTOMAÇÃO DE PROCESSOS</button></div>

							<div><button type="button" class="btn servicos">DESENVOLVIMENTO DE PLATAFORMAS ONLINE</button></div>

							<div><button type="button" class="btn servicos">BUSINESS INTELLIGENCE</button></div>

							<div><button type="button" class="btn servicos">ANÁLISE DE DADOS E ELABORAÇÃO DE RELATÓRIOS</button></div>
							<div class="btn prox">Pular seção
								<div><img src="<?php echo get_template_directory_uri(); ?>/img/next.png">
								</div>
							</div>
						</div>

						<div class="col-md-6 help-mobile">
							<h3>No que podemos<br>te ajudar?</h3>
							<h4>Desenvolvimento Web e Mobile</h4>
							<p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua.<br> Quis ipsum suspendisse ultrices gravida. Risus<br> commodo viverra maecenas accumsan lacus<br> vel facilisis. 
								<div class="btn-servico"><button type="button" class="btn descri-a">NOSSOS CASES</button> <button type="button" class="btn descri-b">MAIS SOBRE O SERVIÇO</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- SEÇÃO 4 DA HOME - Atendimento Verdadeiro -->

	<section class="secao-help">
		<div class="container help">
			<div class="row help">
				<div class="col-md-12 help">
					<div class="row help-d">
						<div class="col-md-7 help-a">
							<img src="<?php echo get_template_directory_uri(); ?>/img/atendimento-home.png" class="img-atendimento">
						</div>

						<div class="col-md-5 help-b">
							<h3>Prezamos por <br>um atendimento<br> verdadeiro</h3>
							<p>Nosso escritório está bem localizado,<br> mas se preferir, podemos ir até você.</p>
							<h5>Você saberá quem vai te atender.</h5>
							<p>Como consultoria, nos posicionamos<br> para resolver seus problemas e<br> não só pedir mais recursos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/home/clientes-home.php'; ?>
	<?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>