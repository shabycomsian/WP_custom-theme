<?php
/**
  Template Name: Home 
 */

get_header();
?>

	   <div class="banner-content">
            <div class="content-wrapper">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="banner-text">
                                        <h2 class="first animated fadeInRightBig"><?php echo get_theme_mod('text_setting')?></h2>
                                        <h1 class="second animated fadeInUpBig bounce"><?php echo get_theme_mod('text_setting2')?></h1>
                                        <h2 class="third animated fadeInLeftBig"><?php echo get_theme_mod('text_setting1')?></h2>
                                        <div class="banner-buttons">
                                            <a href="<?php echo get_theme_mod('text_setting4')?>" class="btn btn-light btn-lg"><?php echo get_theme_mod('text_setting3')?></a>
                                            <a href="<?php echo get_theme_mod('text_setting6')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting5')?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-rating">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mac-book-display">
                        <img src="<?php echo get_theme_mod('text_settingg115')?>" class="img-fluid" alt="macbook">
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
    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting7')?></h2>
                <span data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting8')?></span>
                <div class="matrices-buttons">
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting10')?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('text_setting9')?></a>
                    <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting12')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting11')?></a>
                </div>
            </div>
        </div>
    </div>
     <div class="specifications">
        <div class="container">
            <div class="col-md-8 offset-md-2 text-center">
                    <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting3500')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting35000')?></p>
                </div>
            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting350')?></h2>
                        <p><?php echo get_theme_mod('text_setting351')?></p>
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting354')?>" class="btn btn-link p-0"><?php echo get_theme_mod('text_setting353')?> <i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div> 
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img" >
                        <img src="<?php echo get_theme_mod('text_setting352')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting360')?></h2>
                        <p><?php echo get_theme_mod('text_setting361')?></p>
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting364')?>" class="btn btn-link p-0"><?php echo get_theme_mod('text_setting363')?> <i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_theme_mod('text_setting362')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting370')?></h2>
                        <p><?php echo get_theme_mod('text_setting371')?></p>
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting374')?>" class="btn btn-link p-0"><?php echo get_theme_mod('text_setting373')?> <i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div> 
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_theme_mod('text_setting372')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting380')?></h2>
                        <p><?php echo get_theme_mod('text_setting381')?></p>
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting384')?>" class="btn btn-link p-0"><?php echo get_theme_mod('text_setting383')?> <i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_theme_mod('text_setting382')?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="specification-content rmp">
                        <h2><?php echo get_theme_mod('text_setting3880')?></h2>
                        <p><?php echo get_theme_mod('text_setting3881')?></p>
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting3884')?>" class="btn btn-link p-0"><?php echo get_theme_mod('text_setting3883')?> <i class="fa fa-angle-right"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="specification-img">
                        <img src="<?php echo get_theme_mod('text_setting3882')?>" class="img-fluid" alt="">
                    </div>
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
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting16')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting17')?></p>
                </div>
            </div>
            <div class="row align-items-center mt-4">
                
                <div class="col-md-4">
					<span id="arrowup" class="arrow-up-slide"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
                    <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php
                         $ebit_post=null;
                         $ebit_post= new WP_Query(array(
                         'post_type' => 'producttab', 
                         'order' => 'DESC'
                         ));
                         if( $ebit_post->have_posts() ){
                         $x = 0;
                         while ( $ebit_post->have_posts() ) { $ebit_post->the_post();
                    ?>
                         <a class="nav-link <?php if( $x == 0){ echo 'active';} ?>" id="v-pills-<?php the_ID();?>-tab" data-toggle="pill" href="#v-pills-<?php the_ID();?>"
                            role="tab" aria-controls="v-pills-<?php the_ID();?>" aria-selected="true">
                            <span><?php the_title();?></span>
                            <?php echo the_excerpt();?>
                        </a>

                         <?php $x++;}
    
                     }else{
                             echo 'no post';
                     }
                     wp_reset_postdata();
                     $ebit_post=null;
                     ?>
                        
                    </div>
					<span class="arrow-up-slide" id="arrowdown"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                </div>
                <div class="col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                         <?php
                         $ebit_post=null;
                         $ebit_post= new WP_Query(array(
                         'post_type' => 'producttab', 
                         'order' => 'DESC'
                         ));
                         if( $ebit_post->have_posts() ){
                         $x = 0;
                         while ( $ebit_post->have_posts() ) { $ebit_post->the_post();
                    ?>
                        <div class="tab-pane fade show <?php if( $x == 0){ echo 'active';} ?>" id="v-pills-<?php the_ID();?>" role="tabpanel"
                            aria-labelledby="v-pills-<?php the_ID();?>-tab">
                            <div class="tab-outer">
                          <?php the_post_thumbnail('large', array('class' => 'img-fluid'));?>
                         </div>
                        </div>
                        <?php $x++;}
    
                     }else{
                             echo 'no post';
                     }
                     wp_reset_postdata();
                     $ebit_post=null;
                     ?>                                              
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting18')?></h2>
                    <p class="p-head" data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting19')?></p>
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
    <div class="optimise">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="optimise-content">
                        <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting20')?></h2>
                        <span data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting21')?></span>
                        <div class="optimise-buttons">
                            <a href="<?php echo get_theme_mod('text_setting23')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting22')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marketing-video text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 data-aos="fade-down" data-aos-duration="1000"><?php echo get_theme_mod('text_setting24')?></h2>
                    <p data-aos="fade-up" data-aos-duration="1000"><?php echo get_theme_mod('text_setting25')?></p>
                    <div class="embed-responsive embed-responsive-16by9 custom">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_theme_mod('text_setting26')?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>                              </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();?>