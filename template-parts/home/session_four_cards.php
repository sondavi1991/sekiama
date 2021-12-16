<?php 
  $imageLeft = get_field( "image_left", "options" );
  $urlImageLeft = get_field( "link_image_left", "options" );

  $imageRight = get_field( "image_right", "options" );
  $urlImageRight = get_field( "link_image_right", "options" );
?>
<section class="container inner_bottom92">
  <div class="row">
    <div class="col-lg-6 col-xs-12">
      <div class="card" style="background-image:url('<?php echo esc_url($imageLeft['url']); ?>')">
        <a href="<?php echo $urlImageLeft; ?>" target="_blank">
          <button><?php esc_html_e( 'Eu quero!', 'sekiama' ); ?></button>
        </a>
      </div>
    </div>
    <div class="col-lg-6 col-xs-12">
      <div class="card" style="background-image:url('<?php echo esc_url($imageRight['url']); ?>')">
        <a href="<?php echo $urlImageRight; ?>" target="_blank">
          <button><?php esc_html_e( 'Saber mais', 'sekiama' ); ?></button>
        </a>
      </div>
    </div>
  </div>
</section>