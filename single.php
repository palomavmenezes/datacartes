<?php get_header(); ?>

        <section id="banner-blog-interno">
            <div class="container">
            	<div class="row">
            		<div class="col-md-12 txt-single-blog">
		            	<h2 style="color: #fff;">Blog</h2>
		            </div>
           		 </div>
        </section>
		<!-- section -->

		<section class="blog">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="container">
				<div class="row">
					<div class="col-md-12 img-single-post">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
				<div class="row content-single">
					<div class="col-md-3">
						<p><?php the_time('d/m/Y'); ?></p>
						<p>Compartilhar: <img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" width="25px" height="25px"> <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" width="25px" height="25px">
					</div>

					<div class="col-md-9 txt-single">
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
					</div>
				</div>
			</div>
					
		<?php endwhile; ?>

		<?php else: ?>
			<div class="artigo">
				<h2>Nada Encontrado</h2>
				<p>Erro 404</p>
				<p>Lamentamos mas não foram encontrados artigos.</p>
			</div>
		<?php endif; ?>

		</section>

		<section class="content">
            <div class="container">
                <div class="row">
                	<div class="col-md-6"> <h1 style="font-weight: 900;">Outras Publicações</h1> </div>
                	<div class="col-md-6 bSearch"><input class="btn-search" type="search" name="search" placeholder="Busque por uma publicação"><i class="fa fa-search"></i></a></div>

                    <div class="col-md-12">
                            <h2></h2>
                    </div>
                </div>
                <?php
                    $exclude = Array();
                    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6 ) );
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
                    wp_reset_query();
                ?>
                <div class="pagination"><?php get_template_part('pagination'); ?></div>
            </div>
        </section>
		<!-- /section -->

    <?php include 'includes/call-to-action.php'; ?>
    <?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/map.php'; ?>

<?php get_footer(); ?>
