<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->
<main id="page-ecommerce">
<section class="produtoSites">

	<div class="container">

		<div class="row">
			<div class="col-md-6 infoSites">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/produtos">Produtos Cartês</a></li>
				    <li class="breadcrumb-item active" aria-current="page">E-commerce</li>
				  </ol>
				</nav>
				<h2>Alcance consumidores pelo mundo.</h2>
				<p>Lojas virtuais possuem várias vantagens que uma loja física não tem. Esse estilo de negócio só tem se fortalecido com a evolução da internet e você pode, e deve, se aproveitar desse cenário.</p>
			</div>

			<div class="col-md-6 imgEcommerce">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prod-ecommerce.png">
			</div>
		</div>
	</div>

</section>

<section class="numbers">
	<div class="container">
			<div class="row content-numbers">
				<div class="col one">
					<p>Mercado em expansão</p>
				</div>

				<div class="col two">
					<p>Investimento menor do que numa loja física</p>
				</div>

				<div class="col three">
					<p>Funcionamento 24 horas</p>
				</div>

				<div class="col four">
					<p>Baixíssimo custo de manutenção</p>
				</div>

				<div class="col five">
					<p>Monitoramento otimizado da empresa</p>
				</div>
			</div>
	</div>
</section>

<!-- SEÇÃO 2 A Empresa -->

	<section>
		<h3 class="caracteres">CARACTERÍSTICAS DE UM ECOMMERCE DATA CARTÊS</h3>
		<div class="container">
			<div class="row infosEcommerce">

				<div class="col-7 textEcommerce">
					<h1>Criamos experiências significativas e relevantes</h1>
					<p>Através da tecnologia Vtex que utilizamos para desenvolver nossos ecommerces, criamos soluções escaláveis e sob medida.</p>
				</div>

				<div class="col-5 vtex">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-vtex.png">
				</div>
				</div>
	</section>

	<section class="p-ecommerce">
		<div class="container iconsEcommerce">
				<div class="col-integramos">
					<div class="row">
						<div class="col-3 integramos">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-integramos.png">
						</div>

						<div class="col-4 txtIntegramos">
							<h3>Integramos</h3>
							<p>todos os canais de venda</p>
						</div>

						<div class="col-5">
						</div>
					</div>
				</div>

				<div class="col-otimizamos">
					<div class="row">
						<div class="col-5">
							
						</div>

						<div class="col-4 txtOtimizamos">
							<h3>Otimizamos</h3>
							<p>suas operações</p>
						</div>

						<div class="col-3 otimizamos">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-otimizamos.png">
						</div>
					</div>
				</div>

				<div class="col-disponibilizamos">
					<div class="row">
						<div class="col-3 disponibilizamos">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icon-disponibilizamos.png">
						</div>

						<div class="col-4 txtDisponibilizamos">
							<h3>Disponibilizamos</h3>
							<p>seus dados em tempo real em um único sistema de gerenciamento de pedidos</p>
						</div>

						<div class="col-5">
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/map.php'; ?>

</main>

<?php get_footer(); ?>