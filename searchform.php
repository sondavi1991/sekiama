<form action="/" method="get">
    <div class="top_form">
        <input type="text" name="s" placeholder="<?php esc_html_e( 'Busque um produto ...', 'sekiama' ); ?>" id="search" value="<?php the_search_query(); ?>" />

        <span class="btn_search_form"><input type="image" alt="<?php esc_html_e( 'Search Form', 'sekiama' ); ?>" src="<?php echo get_template_directory_uri(); ?>/dist/images/search-icon.png" /></span>
    </div>
</form>