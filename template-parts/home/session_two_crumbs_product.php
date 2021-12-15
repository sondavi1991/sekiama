<section class="inner_space_section">
  <div class="container">
    <span class="session_icon"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_details.svg"></span>
    <h2 class="big_title"><?php esc_html_e( 'Sekiama Farofas', 'sekiama' ); ?></h2>
    <h3 class="sub_title text_center">Para voce que ama farofa, temos a farofa perfeita</h3>
  </div>
  
  <div class="space_inner_21_top">
    <div class="glide">
      <div class="container glide__track" data-glide-el="track">
        <div class="glide__slides">
          <!--loop slider product-->
            <?php
              $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
                'product_cat' => 'farofas'
              );
              $loop = new WP_Query( $args );
              if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post();
                $price = get_post_meta( get_the_ID(), '_price', true );
                $installment = $price / 12;
                ?>

                  <div class="glide__slide product_home_slider">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail(); ?>
                      <h2><?php the_title(); ?></h2>
                    </a>
                      <h3><?php echo wc_price( $price ); ?></h3>
                      <p>ou 12x de <?php echo wc_price( $installment ); ?> sem juros</p>
                  </div>

                <?php
                  
                endwhile;
              } else {
                echo __( 'No products found' );
              }
              wp_reset_postdata();
            ?>
          <!--loop slider product-->
        </div>
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
  </div>
</section>