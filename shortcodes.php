<?php 

add_shortcode( 'featured', 'rmcc_post_listing_shortcode1' );
function rmcc_post_listing_shortcode1( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'Featured',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
            <?php $featured_icon_bg = get_post_meta($post->ID,'featured_icon_bg',true);?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="col-md-4">
                    <div class="features red">
                        <div class="feature-img" style="box-shadow: 0px 0px 15px 7px <?php echo $featured_icon_bg;?>;">
                            <?php the_post_thumbnail();?>
                        </div>
                        <div class="feature-text">
                            <h2><?php the_title();?></h2>
                            <span class="feature-tagline"><?php echo the_excerpt();?></span>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}




