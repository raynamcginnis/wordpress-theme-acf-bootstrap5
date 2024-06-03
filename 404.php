<?php get_header() ?>
<section class="page_404">

<h1>404</h1>
<p>This page is not found.</p>
<p>Try searching for what you need?</p>

<div class="search-404">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<input id="search_field" type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search for…', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	    <input id="search_btn" type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
        </form>
        </div>
</section>
<?php get_footer() ?>


