<?php
/**
 
 */

get_header('new');
?>
<div class="banner-content">
            <div class="content-wrapper">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="container">
                            <div class="row">
                              
                                <div class="col-md-10 offset-md-1">
                                    
                                    <div class="banner-text">
                                        <h1 class="second animated fadeInUpBig bounce"><?php the_title();?></h1>
                                        <h2 class="third animated fadeInLeftBig"><?php echo $features_tag_line;?></h2>
                                        
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="management"  data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid my-2 my-sm-5 text-center">
            <div class="row">
                <?php
                global $post,$wp_query;
    $current_id = $wp_query->get_queried_object_id();
			$args = array( 'post_type' => 'Features', 'posts_per_page' => -1 ,'order' => 'ASC',);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
          
          
                <div class="col">
                     <a href="<?php echo esc_url(get_permalink()); ?>" <?php if ($current_id == $post->ID) echo ' class="current"'; ?>><?php the_title();?></a>
                </div>
                 <?php endwhile;?><?php wp_reset_query();?>
            </div>
        </div>
    </div>
    <div class="matrices-fetuare">
        <div class="container">
            <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
            <div class="matrices-content">
                <h2 class="text-center" data-aos="fade-left" data-aos-duration="1000"><?php the_title();?></h2>
                <p class="matrices-fetuare-text" data-aos="fade-right" data-aos-duration="1000"><?php the_content();?>
                </p>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
    
    <div class="specifications">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img" data-aos="fade-left" data-aos-duration="1000">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2"  data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading2', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content2', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image2', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading3', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content3', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image3', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading4', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content4', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image4', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading5', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content5', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image5', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <div class="specification-content rmp">
                        <h2><?php echo get_post_meta($post->ID, 'features_single_page_heading6', true); ?></h2>
                        <p><?php echo get_post_meta($post->ID, 'features_single_page_content6', true); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img">
                        <img src="<?php echo get_post_meta($post->ID, 'features_single_page_image6', true); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="talent_attrection">
                <div class="row">
                   <div class="col-lg-5 secondpag">
                                       <?php
                        $prev_post = get_previous_post();
                        if($prev_post) {
                        
                           $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
                           echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="previous">&laquo; Prev<br /></a>' .get_the_post_thumbnail($next_post->ID,'large', array('class' => 'card-img-top')).'<span class="featurtitle">'. $prev_title . '</span>'. "\n";
                        }?>
                        
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5 secondpag">
                                               <?php $next_post = get_next_post();
                        if($next_post) {
                  
                           $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
                           echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="nextt">Next &raquo;<br /></a>'. get_the_post_thumbnail($next_post->ID,'large', array('class' => 'card-img-top')) .'<span class="featurtitle">'. $next_title . '</span>'. "\n";
                        }
                        ?>
                                            
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="matrices">
        <div class="container">
           <div class="matrices-content">
                <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting7')?></h2>
                <span  data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting8')?></span>
                <div class="matrices-buttons">
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting10')?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('text_setting9')?></a>
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting12')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting11')?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
   <div class="container">
   <section class="customer-logos slider">
       <?php
			$args = array( 'post_type' => 'Brands', 'order' => 'ASC', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="slide"><?php the_post_thumbnail();?></div> <?php endwhile;?>
   </section>
</div>
</div>
     <?php
get_footer();
?>