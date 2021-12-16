<?php
	$bgNews = get_field( "_newsletter_imagem_de_fundo", "options" );

?>
	<div style="background-image:url('<?php echo esc_url($bgNews['url']); ?>')" class="footer_newsletter">
		<div class="container">
			<div class="wrapper">
				<h3>Receba nossas receitas & dicas</h3>
				<p>E faça parte do time de farofeiros Sekiama</p>

				<form>
					<div class="inputs_inners">
						<input type="text" name="nome" placeholder="Nome">
						<input type="email" name="email" placeholder="E-mail de contato">
					</div>
					<input class="btn_green adjust_btn_news" type="submit" value="Cadastrar">
				</form>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-xs-12">
					<?php  
						if(is_active_sidebar('footer_menu_1')) {
							dynamic_sidebar('footer_menu_1');
						}
					?>
				</div>
				<div class="col-lg-2 col-xs-12">
					<?php  
						if(is_active_sidebar('footer_menu_2')) {
							dynamic_sidebar('footer_menu_2');
						}
					?>

					<div class="menu_footer inner_space_section">
						<h3 class="title_menu_footer"><?php esc_html_e( 'Contato', 'sekiama' ); ?></h3>

						<ul class="icons_footer">
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_mail.svg"><?php esc_html_e( 'sac@sekiama.com.br', 'sekiama' ); ?></a></li>

							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_whats.svg"><?php esc_html_e( '(91) 98877-5052', 'sekiama' ); ?></a></li>

							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_phone.svg"><?php esc_html_e( '(91) 3246-6748', 'sekiama' ); ?></a></li>

							<li><a href="#"><span class="icon_insta"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/icon_insta.svg"></span><?php esc_html_e( 'Confira o nosso', 'sekiama' ); ?><br><?php esc_html_e( 'instagram', 'sekiama' ); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-xs-12">
					<?php  
						if(is_active_sidebar('footer_menu_3')) {
							dynamic_sidebar('footer_menu_3');
						}
					?>
				</div>
				<div class="col-lg-2 col-xs-12">
					<?php  
						if(is_active_sidebar('footer_menu_4')) {
							dynamic_sidebar('footer_menu_4');
						}
					?>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="logo_footer">
					<a href="https://www.otimaideia.com.br" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo_otima_ideia.svg">
					</a>

					<p><?php esc_html_e( 'Sekiama Alimentos da Amazônia @2021 Todos direitos reservados.', 'sekiama' ); ?></p>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
