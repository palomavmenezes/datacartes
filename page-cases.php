<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->

<section class="secao-a-empresa">

	<div class="container">

		<div class="row">
			<div class="col-md-12 logo-white">
			
			</div>
			<div class="col-md-12">
				<h1 class="txt-banner"> </h1>
			</div>
			<div class="col-md-12 botao-banner">
				<button type="button" class="btn btn-banner" href="<?php echo home_url(); ?>/descubra-como">DESCRUBRA COMO <img src="<?php echo get_template_directory_uri(); ?>/img/icons/set-banner.png" width="25px" class="set-banner"> </button>
			</div>
		</div>
	</div>

</section>

<!-- SEÇÃO 2 A Empresa -->

	<section class="secao-about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							
						</div>

						<div class="col-md-6">
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>