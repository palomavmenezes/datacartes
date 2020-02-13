<!DOCTYPE html>
<html lang="pt-br">


<head>
 

    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <title>Data Cartês</title>

    <!-- Chamada de CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="wp-content/themes/datacartes/style.css">

    <link rel="icon" href="wp-content/themes/datacartes/favicon.ico">

    <!-- Chamada de Scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<?php wp_head(); ?>

</head>

<body>

  <?php
$preloader = get_theme_mod( 'newsmag_preloader_effect', false );
if ( $preloader ) :
  get_template_part( 'template-parts/preloader' );
endif;
?>

<header>
	<section class="top-bar">
		<!-- Início do Menu -->
    <div class="container-fluid menu-top">

      <nav id="navbar" class="navbar navbar-expand-md justify-content-center menu-top-bar">
      	<div class="row menu">
	       	<div class="top-menu">
		        <ul>
              <li><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" width="20px" height="20px"></li>
		        	<li><img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" width="20px" height="20px"></li>
		        	<li class="menu email">contato@datacartes.com.br</li>
		        	<li class="menu tel">+55 21 9 8552-3558</li>
              <li><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></a></li>
		      	</ul>
		      </div>
        </div>
      </nav>
      <!-- .main-nav -->
    </div>
 	</section>

 	<section class="top-mobile">
 	<nav class="navbar navbar-light light-blue lighten-4">

<!-- Collapse button -->
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active fas fa-bars fa-1x">
        <!-- <li class="nav-item active fas fa-bars fa-1x">
        <a class="nav-link" href="#">contato@datacartes.com.br</span></a>
        </li>
        <li class="nav-item active fas fa-bars fa-1x">
        <a class="nav-link" href="#">+55 21 9 8552-3558</span></a>
        </li> -->
      <li><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></a></li>
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar--> 
 	</section>
</header>


