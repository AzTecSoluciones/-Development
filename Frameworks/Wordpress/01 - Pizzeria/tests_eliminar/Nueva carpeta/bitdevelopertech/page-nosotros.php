<?php get_header();?>

    <?php while(have_posts()): the_post(); ?>


        <div class="hero" style = "background-image:url(<?php echo get_the_post_thumbnail_url() ?>);">
            <div class="contenido-hero">
                <div class="texto-hero">

                <h1><?php the_title(); ?></h1>

                </div>
            </div>
        
        </div>

        
        

    <div class="principal contenedor">
        <main class="texto-centrado contenido-paginas">
            <?php the_content(); ?>
        </main>
    </div>

    <h2>Este es un template exclusivo de Nosotros</h2>

    <?php endwhile; ?>


<?php get_footer();?>