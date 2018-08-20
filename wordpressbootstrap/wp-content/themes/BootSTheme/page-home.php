<?php get_header(); ?>
    <div class="row">



            <?php

                $cat_args = array (
                    'include' => '9,2,1'
                );

                $categories = get_categories($cat_args);

                foreach ($categories as $category)
                {
                    $args = array(
                        'type' => 'post',
                        'posts_per_page'=>1,
                        'cat' => $category->term_id
                    );
                    $lastblog = new WP_Query($args);

                    if( $lastblog->have_posts() ){

                        while( $lastblog->have_posts() ): $lastblog->the_post(); ?>
                            <div class="col-xs-12 col-sm-4">
                                <?php get_template_part('content','featured'); ?>
                            </div>

                        <?php endwhile;

                    }
                }

                wp_reset_postdata();


            ?>

        </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <?php

            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <?php get_template_part('content',get_post_format()); ?>

                <?php endwhile;

            endif;



            ?>
        </div>

        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar(); ?>
        </div>

    </div>


<?php get_footer(); ?>