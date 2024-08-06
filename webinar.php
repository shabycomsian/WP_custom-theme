<?php
/**
  Template Name:webinar
 */

get_header('new');
?> <div class="banner-content">
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
    <div class="blog_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-0 mt-sm-5">
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
                <div class="col-lg-4 col-sm-12 mt-3 mt-sm-5">
                    <?php get_search_form();?>
                </div>
            </div>
            
              <?php
              global $wp_query;
    $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    query_posts( 
        array ( 
            'post_type' => 'webinar', 
            'posts_per_page' => 9,
            'paged' => $paged ) 
        );      ?>
            <div class="blog_cards">
                <div class="row my-5">
                   
               
            <?php while ( have_posts() ) :the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <?php the_post_thumbnail('large', array('class' => 'card-img-top')); ?>
                                <div class="card-body text-center blog_ebook_card_body">
                                    <h5><?php the_title();?></h5>
                                    <p><?php the_excerpt();?></p>
                                    <button class="btn mt-3"><?php echo $webinar_botton_text = get_post_meta($post->ID,'webinar_botton_text',true);?></button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
             
                    

                </div>
            </div>
            <div class="pagi_nation py-5">
                <ul class="pagination pagination-md justify-content-center">
                    <?php the_posts_pagination(array(
                'prev_text'=>'Prev',
                'next_text'=>'Next',
                'screen_reader_text'=>' '
                
                ))?>
                </ul>
            </div>
                
               
       <?php wp_reset_query();
    ?>
                         
        </div>
    </div>

    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2>Subscribe to Our Newsletter</h2>
                <span>For up to date recruitment news and exclusive content</span>
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