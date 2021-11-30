<?php
/**
 * The header for our theme - Davi Manoel.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress
 * @subpackage DM - Soluções Web
 * @since 2.0
 * @version 2.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <?php get_template_part( 'template-parts/top/call-action-top',); ?>
  <span class="clear"></span>

  <div class="container">
    <div class="row header_form_top">
      <div class="logotipo col-lg-2"><!--logo-->
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) {
            echo '<a rel="home" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" href="' . site_url() . '">
            <img alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" src="'. esc_url( $logo[0] ) .'">
            </a>';
          } else {
              echo '<a href="' . site_url() . '">
              <h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>
              </a>';
        }?>
      </div><!--logo -->
        
      <?php get_template_part( 'template-parts/top/search-top',); ?>
    </div><!--header_form_top-->
  </div><!--container-->

  <div class="container">
    <nav class="top_menu">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          )
        );
      ?>
    </nav><!-- top_menu -->
  </div>
</header>