<?php

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('custom-size-blog', 760, 480, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size-blog');
    add_image_size('custom-size-blog-item', 470, 315, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size-blog-item');
    add_image_size('thumb-carousel-category', 190, 130, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size-blog-item');
    add_image_size('thumb-pacote', 330, 470, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size-destino');
    add_image_size('thumb-destinos', 298, 470, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size-destino');
    add_image_size('wide', 1140, 350, true); // Custom Image Wide Size call using the_post_thumbnail('wide');    
    add_image_size('thumb-depoimentos', 300, 300, true); // Medium Thumbnail

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
    'default-color' => 'FFF',
    'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
    'default-image'         => get_template_directory_uri() . '/img/headers/default.jpg',
    'header-text'           => false,
    'default-text-color'        => '000',
    'width'             => 1000,
    'height'            => 198,
    'random-default'        => false,
    'wp-head-callback'      => $wphead_cb,
    'admin-head-callback'       => $adminhead_cb,
    'admin-preview-callback'    => $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('datacartes', get_template_directory() . '/languages');
}


function menutop_nav()
{
    wp_nav_menu(
    array(
        'theme_location'  => 'primary-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-{menu slug}-container',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '%3$s',
        'depth'           => 0,
        'walker'          => ''
        )
    );
}

function register_datacartes_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'datacartes'), // Main Navigation
        'footer-menu-1' => __('Secondary Menu', 'datacartes'),
        'footer-menu-2' => __('Footer Menu 2', 'datacartes'),
        'extra-menu' => __('Extra Menu', 'datacartes') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'datacartes' ),
    'secondary' => __( 'Secondary Menu', 'datacartes' ),
    'entire' => __( 'Menu Entire Site', 'datacartes' )

) );

add_filter( 'wp_nav_menu_menu-principal_items', 'new_nav_menu_items' );

add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'video', 'image' ) );
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo', array( 'height' => 110, 'width' => 200 ) );

// Filter custom logo with correct classes.
add_filter( 'get_custom_logo', 'datacartes_change_logo_class' );

if ( ! function_exists( 'datacartes_change_logo_class' ) ) {
    /**
     * Replaces logo CSS class.
     *
     * @param string $html Markup.
     *
     * @return mixed
     */
    function datacartes_change_logo_class( $html ) {

        $html = str_replace( 'class="custom-logo"', 'class="img-fluid"', $html );
        $html = str_replace( 'class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html );
        $html = str_replace( 'alt=""', 'title="Home" alt="logo"', $html );

        return $html;
    }
}

function datacartes_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('datacartes', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('datacartes'); // Enqueue it!
}

function datacartes_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

function datacartescomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
    <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

add_action( 'init', 'clientes' );

function clientes() {

  $labels = array(
     'name' => _x( 'Clientes', 'Post Type General Name', 'roots' ), // nome
     'singular_name' => _x( 'Clientes', 'Post Type Singular Name', 'roots' ), // nome único
     'menu_name' => __( 'Clientes', 'roots' ),
     'parent_item_colon' => __( 'Cliente Pai:', 'roots' ),
     'all_items' => __( 'Todos os Clientes', 'roots' ),
     'view_item' => __( 'Ver Cliente', 'roots' ),
     'add_new_item' => __( 'Adicionar novo Cliente', 'roots' ),
     'add_new' => __( 'Adicionar Cliente', 'roots' ),
     'edit_item' => __( 'Editar Cliente', 'roots' ),
     'update_item' => __( 'Atualizar Cliente', 'roots' ),
     'search_items' => __( 'Procurar Cliente', 'roots' ),
     'not_found' => __( 'Não encontrado', 'roots' ),
     'not_found_in_trash' => __( 'Não encontrado na Lixeira', 'roots' ),
 );

  $args = array(
    'labels'              => $labels,
    'description'         => 'My custom post type',
    'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'add_theme_support',), // define o que teremos no post type, no caso teremos: título, descricão e uma imagem
    'taxonomies'          => array( 'category', 'post_tag', ),
    'hierarchical'        => false,
    'public'              => true,
    'menu_position'       => 4,
    'can_export'          => true,
    'publicly_queryable'  => true,
    'capability_type'     => 'post',
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'exclude_from_search' => false,
    'has_archive'         => true,
    'query_var'           => 'image',
    'rewrite'             => true,
    'capability_type'     => 'post',
    );
  register_post_type( 'clientes', $args );
}

add_action('wp_enqueue_scripts', 'datacartes_styles');
add_action('init', 'datacartes_pagination');


remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


add_filter('body_class', 'add_slug_to_body_class');
add_filter('widget_text', 'do_shortcode');
add_filter('widget_text', 'shortcode_unautop');
add_filter('the_excerpt', 'shortcode_unautop');
add_filter('the_excerpt', 'do_shortcode');
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10);


remove_filter('the_excerpt', 'wpautop');


