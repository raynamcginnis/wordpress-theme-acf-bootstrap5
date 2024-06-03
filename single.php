<?php get_header() ?>
    <section class="content-holder">
        <article class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="article">
                    <div class="post_thumbnail">
                        <?php 
                        // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                    <h2><?php echo get_the_title() ?></h2>
                    <p><small><?php the_time('F j, Y'); ?> by <?php the_author_posts_link();?></small></p>
                    <p class="postmetadata"><small><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></small></p>
                    <?php the_content() ?>
                </div>
            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <?php if ( comments_open() || get_comments_number() ) :
	        comments_template();
            endif; ?>
        </article>
        <aside class="sidebar">
            <?php get_sidebar() ?>
        </aside>
        <div class="clearfix"></div>
    </section>

    <?php get_footer() ?>