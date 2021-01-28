<?php get_header(); ?>

<h1><?php bloginfo('title'); ?></h1>
<p class="check">singular.php</p>
</header>


<nav id="main-nav" class="main-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</nav>

<nav class="burger-icon">
    <a href="#mobile-nav">
        <span></span>
        <span></span>
        <span></span>
    </a>
</nav>



<main>


    <!--The Loop-->
    <?php while( have_posts() ) : the_post(); ?>

    <article>

        <figure class="image my-featured-image">
            <?php echo the_post_thumbnail()?>

            <?php 
                if (my_post_thumbnail_caption()) { 
                 my_post_thumbnail_caption(); 
                }
                ?>


        </figure>

        <section class="content my-article-content">
            <h3><a href="<?php echo esc_url( get_permalink() ); ?>" class="link"><?php the_title(); ?></a></h3>
            <?php the_content(); ?>
        </section>

    </article>

    <?php endwhile; ?>
    <!--Loop ends-->


</main>

<footer>
    <?php get_footer(); ?>
