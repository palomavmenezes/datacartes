<!-- SEÇÃO 4 DA HOME - BLOG -->

	<script type="text/javascript">
		$('.carousel').carousel()
	</script>


	<section class="clientes">
		<div class="container clientes">
			<div class="row clientes">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
						
						</div>

						<div class="col-md-12 logo-clientes">
						<?php
							$args = array(
						        'post_type' => 'clientes',
						        'posts_per_page' => 9,
						        'numberposts' => 3,
						        'caller_get_posts'=> 3,
						        'orderby' => 'date',
						        'order' => 'DESC'
						    	);
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							
						?>
						
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
								
							  <div class="carousel-inner">
							  	<div class="row logo-clientes">
							  		
							    <div class="carousel-item col-3 active">
							    	<?php the_post_thumbnail(); ?>
									<div class="carousel-caption content-logo">
									    </h3><?php the_title(); ?></h3>
									    <p><?php the_content(); ?></p>

									</div>
							    </div>

							    <div class="carousel-item col-3">
									<div class="carousel-caption content-logo">

									</div>

							    </div>
							    <?php endwhile; ?>
							</div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Anterior</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Próximo</span>
							  </a>

							
							
						</div>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>

	</section>