<?php
/**
 * Created by PhpStorm.
 * User: 09
 * Date: 20/08/2018
 * Time: 11:04
 */

  get_header(); ?>

    <?php
    if (have_posts()) {
        while  (have_posts()) : the_post(); ?>
            <h3><?php the_title() ?></h3>

            <p><?php the_content() ?></p>
            <hr>
        <?php  endwhile;

    }
    ?>
<?php get_footer(); ?>