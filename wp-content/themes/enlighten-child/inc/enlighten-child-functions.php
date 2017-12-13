<?php

function enlighten_child_header_slider(){
    $slider_cat = get_theme_mod('enlighten_slider_category');
    if($slider_cat){
        $slider_arg = array(
            'post_type' => 'post',
            'cat' => $slider_cat,
            'order' => 'DESC'
        );
        $slider_query = new WP_Query($slider_arg);
        if($slider_query->have_posts()):
            ?><div id="header_slider_wrap">
                <ul class="header_slider"> <?php
                        while($slider_query->have_posts()):
                                $slider_query->the_post();
                                ?>
                                <li class="slider_content_loop">
                                        <?php the_post_thumbnail( 'enlighten-slider-image' ); ?>
                                </li>

                                <?php
                        endwhile;
                        wp_reset_postdata();
                ?> </ul>
            </div><?php
        endif;
    }
}
add_action('enlighten_child_header_slider_action','enlighten_child_header_slider');