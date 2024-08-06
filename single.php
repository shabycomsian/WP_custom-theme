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
                <div class="row my-5">
                    <div class="col-lg-8 col-sm-12">
                       
                            <div class="card ">
                                <?php the_post_thumbnail('large', array(
'class' => 'card-img-top'

)); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <span class="name_comments_date"><?php the_author_posts_link();?> - <?php the_time('M d, Y') ?></span>
                                    <p class="text-justify"><?php the_content();?>
                                    </p>
                                </div>
                            </div>
                       
                    </div>
                    <div class="col-lg-4 col-sm-12 mt-4 mt-lg-0">
                        <div class="card">
                            <div class="card-body author-section">
                                <div class="image-section">
                                    <?php echo get_avatar(get_the_author_meta('user_email'), '100'); // Display the author gravatar image with the size of 100 ?>
                                    <h6 class="mt-2 ml-3"><?php esc_html(the_author_meta('display_name')); // Displays the author name of the posts ?></h6>
                                </div>
                                <p>
                                    <?php esc_textarea(the_author_meta('description')); // Displays the author description added in Biographical Info ?>
                                </p>
                            </div>
                        </div><br>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="text-center social_media">Share on Social Media</h6>
                                <div class="row justify-content-center">
                                    <a class="top_social" href="javascript:window.location=%22http://www.facebook.com/sharer.php?u=%22+encodeURIComponent(document.location)+%22&#38;t=%22+encodeURIComponent(document.title)" title="Share on Facebook"><img src="<?php echo get_template_directory_uri();?>/images/facebook.png" alt=""></a>
                                    <a class="mx-2" href="javascript:window.location=%22https://twitter.com/share?url=%22+encodeURIComponent(document.location)+%22&text=%22+encodeURIComponent(document.title)"><img src="<?php echo get_template_directory_uri();?>/images/twitter.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class=" related_artical">Related Articles</h3>
            <div class="row mb-5 mt-4 blog_cards ">
                <?php
			$args = array( 'post_type' => 'post', 'post__in' => array(78,88,1), );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4 mt-lg-0">
                    <a href="<?php the_permalink(); ?>">
                            <div class="card">
                               <?php the_post_thumbnail('large', array(
'class' => 'card-img-top'

)); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <span class="name_comments_date"><?php the_author_posts_link();?> - <?php the_time('M d, Y') ?></span>
                                    <p class="text-justify"><?php the_excerpt('10');?></p>
                                </div>
                            </div>
                        </a>
                </div>
                 <?php endwhile;?>
     
            </div>
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
?>
