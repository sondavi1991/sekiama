<?php 
  $shortCodeInstagram = get_field( "shortcode_instagram", "options" );
?>
<section class="container inner_space_section">
  <span class="session_icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_details.svg"></span>
  <h2 class="big_title"><?php esc_html_e( 'Acompanhe a sekiama em tempo real', 'sekiama' ); ?></h2>
  <h3 class="sub_title text_center">Nosso Instagram está cheio de novidades para você acompanhar a Sekiama diariamente</h3>

  <div>
    <?php echo do_shortcode( "$shortCodeInstagram" ); ?>
  </div>
</section>