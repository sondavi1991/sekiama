<?php 
/*****
*Template Name: Home
****/
 ?>

<?php get_header();?>

<?php 

if(have_posts()) :
    while (have_posts()) : the_post();
    get_template_part( 'template-parts/home/slider',);
    get_template_part( 'template-parts/home/session_one',);
    get_template_part( 'template-parts/home/session_two_crumbs_product',);
    get_template_part( 'template-parts/home/session_three_kits_product',);
    get_template_part( 'template-parts/home/session_four_cards',);
    get_template_part( 'template-parts/home/session_five_testimonials',);

    endwhile;	
		
?>

<?php else: ?>

<?php endif; ?>

<?php get_footer();?>