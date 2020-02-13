<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->
<main>
<section class="produtoSites">

	<div class="container">

		<div class="row">
			<div class="col-md-6 infoSites">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>/produtos">Produtos Cartês</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Dados</li>
				  </ol>
				</nav>
				<h2>Por que sua empresa precisa ter um site?</h2>
				<p>Atualmente, muitas pessoas estão conectadas na internet. Uma empresa que pretende atingir todas as classes sociais, necessita investir na criação de um site, com o objetivo de gerar conteúdo que pode atingir bilhões de pessoas, independente do lugar que ela estiver no momento.</p>
			</div>

			<div class="col-md-6 imgSites">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prod-sites.png">
			</div>
		</div>
	</div>

</section>

<section class="numbers">
	<div class="container">
			<div class="row content-numbers">
				<div class="col one">
					<p>Gera mais confiança</p>
				</div>

				<div class="col two">
					<p>Maior exposição da empresa</p>
				</div>

				<div class="col three">
					<p>Conquista de novos clientes</p>
				</div>

				<div class="col four">
					<p>Crescimento das vendas</p>
				</div>

				<div class="col five">
					<p>Maior contato com seu público</p>
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

	<section class="s-seo">
		<h3 class="caracteres">CARACTERÍSTICAS DE UM SITE DATA CARTÊS</h3>
		<div class="container">
			<div class="row caracteres">

					<div class="col-md-6 infoSeo">
						<h1>SEO</h1>
						<h4>Seu site bem ranqueado</h4>
						<p>Mais do que gerar um conteúdo de boa qualidade, websites precisam de técnicas que façam com que eles sejam vistos pelo maior número de pessoas possível. Por isso muitos veículos de comunicação adotam técnicas de otimização conhecidas como SEO (Search Engine Optimization), que fazem com que as suas páginas apareçam nas primeiras posições nos principais mecanismos de busca como Google ou Bing.</p>
					</div>

					<div class="col-md-6 imgSeo">
						<div class="row beneficios">
							<div class="col-sm-2 imgBeneficios"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/check-beneficios.png"></div>

							<div class="col-md-10 infoBeneficios">
								<h5>Benefício Principal</h5>
								<p>Melhor ranqueamento do site nas pesquisas</p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>

	<!-- SEÇÃO 5 DA HOME - CLIENTES -->

	<section class="clientes">
		<div class="container clientes">
			<div class="row clientes">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12 quality">
						<h3>Todos eles já tem qualidade Data Cartês</h3>
						<p>E você? Vai ficar sem?</p>
						</div>

						<div class="col-md-12 logo-clientes">
							<div class="row logos">
								<div class="col-md-3 logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cliente_rock_in_rio.png">
									<h4 class="title-logo">Rock In Rio</h4>
									<p class="p-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
								</div>

								<div class="col-md-3 logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cliente_rio_2016.png">
									<h4 class="title-logo">Rio 2016</h4>
									<p class="p-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
								</div>

								<div class="col-md-3 logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cliente_aqua_rio.png">
									<h4 class="title-logo">AquaRio</h4>
									<p class="p-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
								</div>

								<div class="col-md-3 logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cliente_gres_tijuca.png">
									<h4 class="title-logo">G.R.E.S Tijuca</h4>
									<p class="p-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
								</div>
							</div>

						</div>


					</div>
								<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"><svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
						</svg></span>
							  </a>
							  
							  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"><svg class="svg-icon" viewBox="0 0 20 20">
							<path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
						</svg></span>
							    
							  </a>
				</div>

			</div>
		</div>
	</section>

	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/map.php'; ?>

</main>

<?php get_footer(); ?>