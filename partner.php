<?php
/**
  Template Name: Become a Partner 
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
                                        <h1 class="second animated fadeInUpBig bounce"><?php echo $page_head_line = get_post_meta($post->ID,'page_head_line',true);?></h1>
                                         <h2 class="third animated fadeInLeftBig"><?php echo $page_tag_line = get_post_meta($post->ID,'page_tag_line',true);?></h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="testimonials mt-3 py-5">
        <div class="container">
            <div class="col-md-10 offset-md-1 text-center">
            <div class="text-center mt-4">
                    <h2 data-aos="fade-down" data-aos-duration="1000" class="aos-init aos-animate"><?php echo get_theme_mod('text_setting3321')?></h2>
                    </div>
            <div class="row">
                <?php
			$args = array( 'post_type' => 'Partner', 'posts_per_page' => 8 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
                
                <div class="col-lg-3 col-md-6 col-sm-12 py-3">
                    
                     <div class="card partner">
                        <div class="text-center">
                            <?php the_post_thumbnail();?>
                            <h3><?php the_title();?></h3>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
            </div>
            </div>
            </div>
             <div class="partners matrices-fetuare">
        <div class="container">
            <div class="col-md-12 text-center">
                    <h2 class="py-3" data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3322')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3323')?></p>
                </div>
        </div>
    </div>

    <div class="partners">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting3324')?></h2>
                        <p><?php echo get_theme_mod('text_setting3325')?></p>
                    </div>
                </div> 
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img" >
                        <img src="<?php echo get_theme_mod('text_setting3326')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="banners">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                  <img src="<?php echo get_theme_mod('text_setting3327')?>" class="img-fluid" alt="">
    </div>
    </div>
    </div>
    </div> 
    
    <div class="partners">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting3328')?></h2>
                        <p><?php echo get_theme_mod('text_setting3329')?></p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_theme_mod('text_setting3330')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banners">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 text-center">
                    <h2 class="py-3" data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3331')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3332')?></p>
                    <img src="<?php echo get_theme_mod('text_setting3333')?>" class="img-fluid" alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="banners">
        <div class="container">
            <div class="row mt-5 py-5">
                <div class="col-md-12 text-center">
                    <h2 class="py-3" data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3334')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3335')?></p>
                    <img src="<?php echo get_theme_mod('text_setting3336')?>" class="img-fluid" alt="">
    </div>
    </div>
    </div>
    </div>
    <div class="industry">
        <div class="container">
            <div class="row insdutry-content align-items-center">
                <div class="col-md-6">
                    <div class="indutry-text">
                        <h2 data-aos="fade-right" data-aos-duration="1000"><?php echo get_theme_mod('text_setting13')?></h2>
                        <span data-aos="fade-right" data-aos-duration="1500"><?php echo get_theme_mod('text_setting14')?></span>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <div class="indutry-img" data-aos="fade-left" data-aos-duration="1000">
                        <img src="<?php echo get_theme_mod('text_setting15')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-list mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2><?php echo get_theme_mod('text_setting18')?></h2>
                     <p class="p-head"> &nbsp;<?php // echo get_theme_mod('text_setting19')?></p>
                    <div class="carousel-outer">
                        <div class="owl-carousel owl-theme">
			<?php
			$args = array( 'post_type' => 'Testimonials', 'posts_per_page' => -1 ,
			'tax_query'   => array(
  	array(
  		'taxonomy' => 'testimonial_category',
  		'field'    => 'slug',
  		'terms'    => 'home'
  	)
  ));
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php 
						 $testimonials_owner_designation = get_post_meta($post->ID,'testimonials_owner_designation',true);
						 ?>
                            <div class="item">
                                
                                <div class="testimonial-wrapper">
                                    <div class="user-img">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                    <div class="user-info">
                                        <span class="username"><?php the_title();?></span>
                                        <span class="user-designation"><?php echo $testimonials_owner_designation;?></span>
                                    </div>
                                    <?php the_content();?>
                                </div>
                                
                            </div>
                            <?php endwhile;?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
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