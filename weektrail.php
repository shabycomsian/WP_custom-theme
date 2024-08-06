<?php
/**
  Template Name: Weekly Trail
 */

get_header('demo');
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
    <div class="contact_us">
        <div class="container">
            <div class="row py-3">
                 <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
                <div class="col-lg-6 col-md-6 col-sm-12 pb-5">
                     <?php the_content();?>
                </div>
                <?php endwhile; endif;?>
                <div class="col-lg-6 col-md-6 col-sm-12 pb-5">
                    <div class="contact-form">
                        <?php dynamic_sidebar( 'demo_widgets1' ); ?>
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
get_footer('trail');
?>