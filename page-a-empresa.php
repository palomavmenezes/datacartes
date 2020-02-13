<?php get_header(); ?>

<!-- SEÇÃO 1 DA HOME - BANNER  -->

<section class="secao-a-empresa">

	<div class="container">

		<div class="row">
			<div class="col-md-12 logo-white">
				<h1 class="txt-banner" style="text-align: center;">Trabalhamos com <br>resultados metrificáveis</h1>
				<h3 class="txt-resultados-empresa">E não com opiniões.</h4>
			</div>
			<div class="col-md-12 botao-banner">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mac-a-empresa.png" class="mac-a-empresa"> </button>
			</div>
		</div>
	</div>

</section>

<!-- SEÇÃO 2 A Empresa -->

	<section class="secao-about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 txt-a-data">
					<h2>A Data Cartês</h2>
					<p>Cartês é uma referência a René Descartes, criador do Método Cartesiano. Esse método é o ceticismo metodológico, ou seja, o ato de duvidar de tudo aquilo que pode ser colocado em dúvida, na busca de um conhecimento absoluto e que possa ser provado como verídico. O método é guiado unicamente pela razão, do afastamento de habituais enganos dos sentidos. A matemática é o saber seguro e absoluto, e é a essência de toda a proposta.<br>
						<br>
					A Data Cartês nasce da vontade de trazer o empreendedorismo brasileiro para essa nova fase, onde o achismo fica para trás e prevalece a união entre criatividade e precisão. Entendemos que cada empreendedor tem um conhecimento único, para além de teorias vacadêmicas e revistas especializadas, e que podemos desenvolver em conjunto as ferramentas certas para o seu modelo de negócio ir além.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="quote">
		<div class="container">
			<div class="row">
				<h2>“Sem dados você é apenas uma pessoa qualquer<br>com uma opinião”</h2>
				<p>Frase de Edwards Deming, uma das maiores referências globais em consultoria.<br>Pensando bem, o contrário também parece verídico:<br>“Sem uma opinião, você é só mais uma pessoa com dados”.</p>
			</div>
		</div>
	</section>

	<section class="txt-a-empresa">
		<div class="container">
			<div class="row">
				<div class="col-md-6 txt-desenvolver">
					<h2>Podemos desenvolver em conjunto as ferramentas
					certas para o seu modelo de negócio ir além.</h2>
				</div>

				<div class="col-md-6 txt-desenvolver">
					<p>Hoje, com as revoluções tecnológicas, o poder do método cartesiano foi infinitamente potencializado pois a abundância de dados nos permite coletar evidências e fazer análises, sínteses e enumerações com muita velocidade. Realizando assim todas as 4 etapas idealizadas por René, de forma leve e precisa.</p>
				</div>
			</div>
		</div>
	</section>

		<section class="map-empresa">
		<div class="container">
			<div class="row">
				<div class="col-md-7 txt-atendimento-map">
					<h2>Prezamos por um atendimento verdadeiro</h2>
					<p>Nosso escritório está bem localizado,<br>
					mas se preferir, podemos ir até você.</p>
					<p class="green-text">Rua Senador Dantas, nº 75, CEP: 20031-914<br>
					Centro - Rio de Janeiro - Brasil</p>
				</div>

				<div class="col-md-5 map-empresa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0888420916485!2d-43.18015898462171!3d-22.910093743749673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f616c1f5ba3%3A0x3ce6aa9bffb02407!2sR.%20Sen.%20Dantas%2C%2075%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020010-000!5e0!3m2!1spt-BR!2sbr!4v1573246885587!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
	</section>

	<section class="quem-vai-atender">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo get_template_directory_uri(); ?>/img/quem-vai-te-atender.png" class="foto-atender">
				</div>

				<div class="col-md-6">
					<h2>Você saberá quem vai te atender</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
				</div>
			</div>
		</div>
	</section>


	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/noticias.php'; ?>
	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>