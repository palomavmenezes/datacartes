<!-- SEÇÃO 4 DA HOME - BLOG -->
<script>
	$('.carousel').carousel({
	  interval: 3000
	})
</script>

	<section class="noticias-home">
		<div class="container noticias-home">
			<div class="row noticias-home">
						<div class="col-md-4">
						<h1 class="noticias-home-txt">Informe-se <br>com nosso blog :)</h1>
						<button type="button" class="btn ir-blog" href="#">Ir para o blog</button>
						</div>

						<div class="col-md-7">
							<div class="row">
								<?php
                    $exclude = Array();
                    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2 ) );
                    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
                    $exclude[] = get_the_ID();
                ?>
								<div class="row bloglist">
					                <div class="col thumb">
					                    <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(); ?> </a>
					                    <div class="date-post"><br><span><?php the_time('d/m/Y'); ?></span></div>
					                    <a href="<?php the_permalink() ?>"> <div class="title-post"><h2><?php the_title(); ?></h2></div></a>
					                    <div class="content-post"><p><?php echo wp_trim_words( get_the_content(), 24 ); ?></p></div>
					                    <!--<div class="button-post"><a class="btn btn-blog">Ler Postagem</a></div> -->
					                </div>
								</div>
								<?php
											endwhile;
						                    endif;
						                    wp_reset_query(); ?>
							</div>
						</div>
						<div class="col-md-1 prev-next">
							<img src="<?php echo get_template_directory_uri(); ?>/img/neext-white.png">
							<img src="<?php echo get_template_directory_uri(); ?>/img/previus-white.png">
						</div>
			</div>

		</div>
	</section>