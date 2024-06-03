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