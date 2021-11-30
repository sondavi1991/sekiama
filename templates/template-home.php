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


    endwhile;	
		
?>

<?php else: ?>

<?php endif; ?>

<?php get_footer();?>