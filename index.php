<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    
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
		<input id="search_field" type="search" class="search-field"
			placeholder="<?php echo esc_attr_x( 'Search for…', 'placeholder' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<input id="search_btn" type="submit" class="search-submit"
		value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
</div>
    <div class="clearfix"></div>
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
        <aside class="sidebar">
        <?php if ( is_active_sidebar( 'home_sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'home_sidebar' ); ?>
            <?php endif; ?>
        </aside>
        <div class="clearfix"></div>
    </section>
    <footer class="main-footer">
    <?php if ( is_active_sidebar('home_footer_widgets' ) ) : ?>
                <?php dynamic_sidebar( 'home_footer_widgets' ); ?>
            <?php endif; ?>
            <div class="clearfix"></div>
    </footer>    
    <div class="powered">
        <p><small>Powered by <a href="<?php echo bloginfo('url')?>"><?php echo bloginfo('name') ?></a> | © <?php echo date('Y') ?></small></p>
    </div>
</div>  
<?php wp_footer(); ?>  
</body>
</html>