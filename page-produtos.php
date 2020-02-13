<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->

<section class="produtos-banner">

	<div class="container">

		<div class="row produtos">
			<div class="col-md-4 ajudar">
				<h2>No que podemos te ajudar?</h2>
				<p>Apaixonados pelo que fazemos, procuramos insaciavelmente oportunidades de gerar informações através de negócios, e negócios através de informações.</p>
			</div>

			<div class="col-md-4 sites">
				<a href="<?php echo home_url(); ?>/produtos/sites"><h2>Sites</h2></a>
			</div>

			<div class="col-md-4 ecommerce">
				<a href="<?php echo home_url(); ?>/produtos/ecommerce"><h2>Ecommerce</h2></a>
			</div>
		</div>
	</div>

</section>

<section class="produtos">

	<div class="container">

		<div class="row produtos">

			<div class="col-md-4 plataformas">
				<a href="<?php echo home_url(); ?>/produtos/plataformas-online"><h2>Plataformas <br>Online</h2></a>
			</div>

			<div class="col-md-4 otimizacao">
				<a href="<?php echo home_url(); ?>/produtos/otimizacoes-e-automacoes"><h2>Otimizações e Automações</h2></a>
			</div>

			<div class="col-md-4 bi">
				<a href="<?php echo home_url(); ?>/produtos/sistema-de-gestao-e-bi"><h2>Sistema de <br>Gestão e BI</h2></a>
			</div>
		</div>
	</div>

</section>




	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>