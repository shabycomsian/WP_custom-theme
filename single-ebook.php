<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header('new');
?>
  <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
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
    <?php endwhile; endif;?>
      <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
    <div class="blog_content pt-5">
        <div class="container">
            <div class="blog_cards">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                        
                            <div class="card">
                                 <?php the_post_thumbnail('large', array('class' => 'card-img-top')); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <p class="text-justify"><?php the_content();?>
                                    </p>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-body">
                                <?php echo $forms = get_post_meta($post->ID,'forms',true);?>
                            </div>
                        </div><br>
                       
                    </div>
                </div>
            </div>
                        <div class="card my-0 my-lg-4 mb-4 mb-lg-0">
                            <div class="card-body">
								  <div class="user-detail-section">
                                <div class="user-image">
                                    <img src="<?php echo $ebook_author_image = get_post_meta($post->ID,'ebook_author_image',true);?>">
                                </div>
                                <div class="user-info ml-3 mb-0">
                                     <h6 class="mt-2"><?php echo $ebook_author_name = get_post_meta($post->ID,'ebook_author_name',true);?></h6>
                                    <p><?php echo $ebook_author_desc = get_post_meta($post->ID,'ebook_author_desc',true);?>
                                </p>
                            </div>
								</div>
                        </div>
                        
                    </div>
            <h3 class="related_artical">Related Articles</h3>
            <div class="row mb-5 mt-4 blog_cards ">
               <?php
			$args = array( 'post_type' => 'ebook','order' => 'ASC', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4 mt-lg-0">
                    <a href="<?php the_permalink(); ?>">
                        <div class="card">
                            <?php the_post_thumbnail('large', array('class' => 'card-img-top')); ?>
                            <div class="card-body">
                                <h5><?php the_title();?></h5>
                                <?php the_excerpt();?>
                            </div>
                        </div>
                    </a>
                </div>
                 <?php endwhile;?>
                
            </div>
    </div>
    <?php endwhile; endif;?>
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
