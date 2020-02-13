<?php
/*
Template Name: Blog
*/
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<?php get_header(); ?>

    <main role="main">
        <section id="banner-blog">
            <div class="container">
            	<div class="row postDestaque">
            		<?php
                    $exclude = Array();
                    $postDestaque = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1 ) );
                    if( $postDestaque->have_posts() ): while( $postDestaque->have_posts() ): $postDestaque->the_post();
                    $exclude[] = get_the_ID();
                ?>
            		<div class="col-md-1 titleDestaque">
            			<h1 class="desktop">B<br>L<br>O<br>G</h1>
            			<h1 class="mobile">BLOG</h1>
            		</div>
            		<div class="col-md-5 thumb"> <a href="<?php the_permalink() ?>"> <?php the_post_thumbnail(); ?> </a></div>
            		<div class="col-md-5 contentPostDestaque">
            			<div class="date-post"><br><span><?php the_time('d/m/Y'); ?></span></div>
                                <a href="<?php the_permalink() ?>"> <div class="title-post"><h2><?php the_title(); ?></h2></div></a>
                                <div class="content-post"><p><?php echo wp_trim_words( get_the_content(), 35 ); ?></p></div>
                                <div class="button-post"><a class="btn btn-blog" href="<?php the_permalink() ?>">Ler Postagem</a></div>
            		</div>
            	</div>
                <?php
                    endwhile;
                    endif;
                    wp_reset_query();
                ?>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <div class="row">
                	<div class="col-md-12 bSearch"><input class="btn-search" type="search" name="search" placeholder="Busque por uma publicação"><i class="fa fa-search"></i></a></div>

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

        	<?php include 'includes/call-to-action.php'; ?>
	<?php include 'includes/vamostomarumcafe.php'; ?>
	<?php include 'includes/map.php'; ?>
        

    </main>

<?php get_footer(); ?>