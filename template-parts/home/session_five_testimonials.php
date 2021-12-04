<?php 
  $imageBgTestimonials = get_field( "_depoimentos_background", "options" );
?>
<section class="testimonials" style="background-image:url('<?php echo esc_url($imageBgTestimonials['url']); ?>')">
  <div class="container">
    <h2 class="big_title_white"><?php esc_html_e( 'Sekiama Lovers', 'sekiama' ); ?></h2>
    <h3 class="sub_title_white text_center"><?php esc_html_e( 'Confira o feedback de quem adquiriu as delícias da Sekiama nas refeições 
do dia-a-dia', 'sekiama' ); ?></h3>

    <div class="row">
      <div class="col-lg-6">
        <div>
          <img src="" alt="">
          <div>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>