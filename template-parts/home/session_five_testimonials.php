<?php 
  $imageBgTestimonials = get_field( "_depoimentos_background", "option" );
?>
<section class="testimonials" style="background-image:url('<?php echo esc_url($imageBgTestimonials['url']); ?>')">
  <div class="container">
    <h2 class="big_title_white"><?php esc_html_e( 'Sekiama Lovers', 'sekiama' ); ?></h2>
    <h3 class="sub_title_white text_center"><?php esc_html_e( 'Confira o feedback de quem adquiriu as delícias da Sekiama nas refeições 
do dia-a-dia', 'sekiama' ); ?></h3>

    <div class="row">
      <?php if( have_rows('depoimentos_repeater', 'option') ): ?>
        <div class="row">
          <?php while( have_rows('depoimentos_repeater', 'option') ): the_row(); 
              $photoTestimonials = get_sub_field('_photo');
              $descTestimonials = get_sub_field('_description');
              $nameTestimonials = get_sub_field('_name');
          ?>
            <div class="col-lg-6">
              <div class="slider_testimonials">
                <img src="<?php echo esc_url($photoTestimonials['url']); ?>" alt="<?php echo esc_attr($photoTestimonials['alt']); ?>">
                <div>
                  <span class="descTestimonials"><?php echo $descTestimonials; ?></span>
                  <span class="nameTestimonials"><?php echo $nameTestimonials; ?></span>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>