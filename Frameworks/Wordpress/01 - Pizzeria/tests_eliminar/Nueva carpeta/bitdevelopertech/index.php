<?php get_header();?>

    <?php while(have_posts()) : the_post(); ?>
    <li><?php the_title(); ?> </li>
    <?php endwhile; ?>
<?php get_footer();?>

