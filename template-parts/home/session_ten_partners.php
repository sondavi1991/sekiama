<section class="inner_space_section">
  <div class="container">
    <span class="session_icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_details.svg"></span>
    <h2 class="big_title bottom29"><?php esc_html_e( 'Onde nos encontrar?', 'sekiama' ); ?></h2>
  </div>


  <div class="glide_partners">
    <div class="container glide__track" data-glide-el="track">
      <?php if( have_rows('parceiros', 'option') ): ?>
        <div class="glide__slides">
          <?php while( have_rows('parceiros', 'option') ): the_row(); 
              $logoPartners = get_sub_field('_partners_fotos');
          ?>
            <div class="glide__slide">
              <div>
                <img src="<?php echo esc_url($logoPartners['url']); ?>" alt="<?php echo esc_attr($logoPartners['alt']); ?>">
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>

    <!--arrows-->
    <div class="glide__arrows arrows" data-glide-el="controls">
      <div class="glide__arrow glide__arrow--left arrow_left" data-glide-dir="<">
        <i class="fas fa-chevron-left"></i>
      </div>
      <div class="glide__arrow glide__arrow--right arrow_right" data-glide-dir=">">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
    <!--arrows-->
  </div>
</section>