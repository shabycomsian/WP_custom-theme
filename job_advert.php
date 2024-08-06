<?php
/**
  Template Name: job advert 
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
                                        <h1 class="second"><?php echo $page_head_line = get_post_meta($post->ID,'page_head_line',true);?></h1>
                                        <h2 class="third"><?php echo $page_tag_line = get_post_meta($post->ID,'page_tag_line',true);?></h2>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-5">
                     <?php
        wp_nav_menu( array(
            'theme_location' => 'blog-menu', // Defined when registering the menu
            'menu_id'        => 'blog-menu',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'nav nav-tab text-center nav-link',
            'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
            'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
        ) );
        ?>
                </div>
                <div class="col-lg-4 col-sm-12 mt-5">
                    <?php get_search_form();?>
                </div>
            </div>
            <div class="blog_cards">
                <div class="row mb-4 mt-5">
                   <?php $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => '7',
    'posts_per_page' => 12,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top')); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <p class="text-justify"><?php the_content();?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
    endwhile;
endif;?>


                </div>
            </div>
    
        </div>
    </div>
    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2>Ready to Get Started?</h2>
                <span>We guarantee, you will not use any other service like ours. It’s that good!</span>
                <div class="row justify-content-center matrices-buttons">
                    <div class="col-lg-3 col-md-6 col-sm-12 matrices_seperator">
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting10')?>" class="btn btn-block btn-primary btn-lg mb-3">30 Days free trial</a>
                    </div>
                   <?php dynamic_sidebar( 'subscriber_bottom_widget_2' ); ?>
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