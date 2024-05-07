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
        <?php  
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>

        </div>
        <div class="search"></div>
        <nav class="main-menu"></nav>
    </header>
    <section class="banner">

    </section>
    <section class="content-holder">
        <article class="content"></article>
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