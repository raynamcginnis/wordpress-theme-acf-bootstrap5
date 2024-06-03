<?php get_header() ?>
    <section class="content-holder">
        <article class="content">
            <h1>Search results for "<?php echo get_search_query(); ?>"</h1>
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
            <?php get_sidebar() ?>
        </aside>
        <div class="clearfix"></div>
    </section>

    <?php get_footer() ?>