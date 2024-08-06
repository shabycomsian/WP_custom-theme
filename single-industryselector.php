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
    <div class="industry_selector_details">
        <div class="container">
            
            <div class="row">
                <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
                
                <div class="col-lg-12 col-sm-12 mb-5 justify-content-center">
                    <?php the_post_thumbnail('large', array(
'class' => 'img-fluid ind_sector'

)); ?><h5 class="animated fadeInUpBig bounce"><?php the_title();?></h5>
                    <?php the_content();?>
                </div>
                 <?php endwhile; endif; ?> 
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