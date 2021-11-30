<?php 
  $BannerHome = get_field( "_hero", "options" );
  $btnCompra = get_field( "btn_compra", "options" );
  $btnReadMore = get_field( "btn_saiba_mais", "options" );
?>
<div style="background-image:url('<?php echo esc_url($BannerHome['url']); ?>')" class="hero_banner">
	<div>
		<ul>
			<?php 
				if($btnCompra){?>
					<li><a href="<?php echo $btnCompra ?>" target="_blank"><button class="btn_green"><?php esc_html_e( 'Comprar', 'sekiama' ); ?></button></a></li>
				<?php
			}?>

			<?php 
				if($btnReadMore){?>
					<li><a href="<?php echo $btnReadMore ?>" target="_blank"><button class="btn_red"><?php esc_html_e( 'Saber mais', 'sekiama' ); ?></button></a></li>
				<?php
			}?>
		</ul>
	</div>
</div>