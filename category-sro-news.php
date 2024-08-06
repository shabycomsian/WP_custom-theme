<?php
if (!defined('ABSPATH')) exit;
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
                                        <h1 class="second">SRO News</h1>
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
    <div class="blog_content blog_cards">
        <div class="container">


<div class="row my-4">
    <div class="col-md-12">
       <?php
    $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    query_posts( 
        array ( 
            'post_type' => 'post', 
            'posts_per_page' => 9,
            'cat' => '12',
            'paged' => $paged ) 
        );      ?>
        <div class="grid">
             <?php while (have_posts() ) : the_post(); ?>
             <?php $post_terms=get_the_terms(get_the_ID(),'category');?>
              <div class="element-item col-lg-4 col-md-6 col-sm-12 mb-4 <?php foreach($post_terms as $post_term){ echo $post_term->slug . ' '; } ?>">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                               <?php the_post_thumbnail('large', array(
'class' => 'card-img-top'

)); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <span class="name_comments_date"><?php the_author_posts_link();?> - <?php the_time('M d, Y') ?></span>
                                    <p class="text-justify"><?php the_excerpt('20');?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                   <?php endwhile; ?>

            
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