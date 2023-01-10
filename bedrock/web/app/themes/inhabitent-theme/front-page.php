<?php
/**
 * The front page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package inhabitent
 */
?>

<?php get_header(); ?>

<section class="">
    <?php if(have_posts() ) :
        while(have_posts()):
            the_post();?>

            <div>
                <?php the_post_thumbnail();?>
            </div>

        <?php endwhile;
    endif;
    ?>
</section>

<?php get_footer(); ?>