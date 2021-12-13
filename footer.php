<?php
	$bgNews = get_field( "_newsletter_imagem_de_fundo", "options" );

?>
	<div style="background-image:url('<?php echo esc_url($bgNews['url']); ?>')" class="footer_newsletter">
		<div class="container">
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

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<?php  
						if(is_active_sidebar('footer_menu_1')) {
							dynamic_sidebar('footer_menu_1');
						}
					?>
				</div>
				<div class="col-lg-2">
					<?php  
						if(is_active_sidebar('footer_menu_2')) {
							dynamic_sidebar('footer_menu_2');
						}
					?>
				</div>
				<div class="col-lg-2">
					<?php  
						if(is_active_sidebar('footer_menu_3')) {
							dynamic_sidebar('footer_menu_3');
						}
					?>
				</div>
				<div class="col-lg-2">
					<?php  
						if(is_active_sidebar('footer_menu_4')) {
							dynamic_sidebar('footer_menu_4');
						}
					?>
				</div>
			</div>

			<div class="row">
				
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
