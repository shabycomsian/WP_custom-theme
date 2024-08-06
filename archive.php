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
	<div class="banner-content">
            <div class="content-wrapper">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="banner-text">
                                        <span class="first"></span>
                                        <span class="second"><?php the_title();?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
                                               <?php while (have_posts()) :the_post();?>
    <div class="blog_content pt-5">
        <div class="container">
            <div class="blog_cards">
                <div class="row my-5">
                    <div class="col-lg-8 col-sm-12">
                        <a href="">
                            <div class="card">
                                <img src="<?php echo get_template_directory_uri();?>/images/big-card-1.jpg" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <span class="name_comments_date">Danielle Meakin - 6 Comments - 29 Sep 2019</span>
                                    <p class="text-justify"><?php the_content();?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body author-section">
                                <div class="image-section">
                                    <?php echo get_avatar(get_the_author_meta('user_email'), '100'); // Display the author gravatar image with the size of 100 ?>
                                    <h6 class="mt-2 ml-3"><?php esc_html(the_author_meta('display_name')); // Displays the author name of the posts ?></h6>
                                </div>
                                <p>
                                    <br>
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
           
        </div>
    </div>
    <?php endwhile;?>
    
    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2>Ready to Get Started?</h2>
                <span>We guarantee, you will not use any other service like ours. It’s that good!</span>
                <div class="row justify-content-center matrices-buttons">
                    <div class="col-lg-3 col-md-6 col-sm-12 matrices_seperator">
                        <a href="<?php echo get_home_url(); ?>/<?php echo get_theme_mod('text_setting10')?>" class="btn btn-block btn-primary btn-lg mb-3">30 Days free trial</a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <input type="search" placeholder="Enter email address..." class="btn-block matrics_search mt-4">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="#" class="btn btn-block btn-success btn-lg">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="clients">
        <div class="container">
            <div class="row mb-5">
                    <?php
			$args = array( 'post_type' => 'Brands', 'posts_per_page' => 5 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col">
                        <div class="client-logo">
                            <div class="logo-wrapper">
                                <?php the_post_thumbnail();?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
        </div>
    </div>


<?php
get_footer();?>