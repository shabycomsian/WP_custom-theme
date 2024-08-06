<?php
/**
  Template Name: Features 
 */

get_header('new');
?>

	   
        <div class="banner-content inner-pages">
            <div class="content-wrapper">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="banner-text">
                                        <h2 class="first animated fadeInRightBig"><?php echo get_theme_mod('text_setting101')?></h2>
                                        <h1 class="second animated fadeInUpBig bounce"><?php echo get_theme_mod('text_setting102')?></h1>
                                        <h2 class="third animated fadeInLeftBig"><?php echo get_theme_mod('text_setting103')?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container feature-section">
            <div class="row">
                <?php
			$args = array( 'post_type' => 'Featured', 'post__in' => array(29,32,34), );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<?php $featured_icon_bg = get_post_meta($post->ID,'featured_icon_bg',true);?>
						
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1000">
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
               
                <?php endwhile;?>
            </div>
        </div>
    </div>

    <div class="specifications">
        <div class="container">
                <?php
			$args = array( 'post_type' => 'Features', 'order' => 'ASC', 'posts_per_page' => -1 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<?php $features_tag_line = get_post_meta($post->ID,'features_tag_line',true);?>
						<div class="row instead-hr">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content">
                        <span class="tagline"><?php echo $features_tag_line;?></span>
                        <h2><?php the_title();?></h2>
                        <p><?php echo the_excerpt();?></p><br>
                        <a href="<?php the_permalink();?>" class="btn btn-success text-white">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img mt-2">
                        <?php the_post_thumbnail();?>
                    </div>
                </div>
                </div>
                <?php endwhile;?>
         
        </div>
    </div>
    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting71')?></h2>
                <span data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting81')?></span>
                <div class="matrices-buttons">
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting310')?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('text_setting91')?></a>
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting312')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting311')?></a>
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