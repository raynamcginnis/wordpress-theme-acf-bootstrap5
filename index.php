<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="container">
    <header class="main-header">
        <div class="custom-logo"> 
       <a href="<?php echo bloginfo( 'url')?>">
       <?php  
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
       </a>

        </div>
        <div class="search">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		<input type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search for…', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<input type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form> </div>
        <nav class="main-menu">
        <?php wp_nav_menu() ; ?>
        </nav>
    </header>
    <section class="banner">
            <?php if ( is_active_sidebar( 'home_banner_slider' ) ) : ?>
		    <?php dynamic_sidebar( 'home_banner_slider' ); ?>
        <?php endif; ?>
    </section>
    <section class="content-holder">
        <article class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <h2><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h2>
                    <?php echo get_the_excerpt() ?>
                </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </article>
        <aside class="sidebar"></aside>
    </section>
    <footer class="main-footer">
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
        <aside class="footer-box"></aside>
    </footer>
    <div class="powered"></div>
</div>    
</body>
</html>