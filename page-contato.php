<?php get_header(); ?>

	<section class="page-contact">
		<div class="container contact">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="row">							
								<div class="col-12 cafe-contato">
									<h1 class="txt-cafe">Vamos <br>tomar um café?</h1>
									<p> Nosso escritório está bem localizado, na Rua Senador Dantas<br>
										nº 75, Centro, Rio de Janeiro, CEP: 20010-000
									<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0771885136437!2d-43.178925168887375!3d-22.910523632325965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f616c1f5ba3%3A0x30d6d3ea2dbc6c01!2sR.%20Sen.%20Dantas%2C%2075%20-%202201%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020010-000!5e0!3m2!1spt-BR!2sbr!4v1572544671675!5m2!1spt-BR!2sbr" width="400px" height="200px" frameborder="0" style="border:0; margin-bottom: 20px;" allowfullscreen=""></iframe></div>
									<h5>Se você preferir, podemos ir até você. Fale conosco.</h3>
					        		<div class="social-contact">
					        			<ul>
							        	<li class="icons-contact"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/whatsapp-white.png" width="20px" height="20px"> +55 21 9 8552-3558</li>
							        	<li class="icons-contact"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/mail-white.png" width="20px" height="20px"> contato@datacartes.com.br</li>
							        	<li class="icons-contact"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram-white.png" width="20px" height="20px"> @datacartês</li>
							        	<li class="icons-contact"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook-white.png" width="20px" height="20px"> /datacartês</li>
					      				</ul>
					      			</div>
								</div>
							</div>
						</div>
							

						<div class="col-md-6 form-cafe">
								<div class="bg-contato">
								<button type="button" class="btn whatsapp contato" href="#">CONVERSAR VIA WHATSAPP</button>
								<div class="row hr-ou">
									<div class="col-sm-5 hr-cafe"><hr height="5px"></div>
									<div class="col-sm-2 ou">OU</div>
									<div class="col-sm-5 hr-cafe"><hr height="5px"></div></div>
								<form class="cafe">
								<div class="form-group">
									<input type="text" class="form-control" id="nome" placeholder="Nome">
								</div>

								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="E-mail">
								</div>

								<div class="form-group">
									<textarea class="form-control" id="mensagem" placeholder="Mensagem" rows="3"></textarea>
								</div>

									<button type="submit" class="btn enviar-cafe">Enviar</button>
								</form>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>