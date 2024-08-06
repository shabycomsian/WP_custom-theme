<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                                        <h2 class="first"> 
                                            Search For :
                                        </h2>
                                        <h1 class="second">
                                           <?php the_search_query();?>
                                        </h1>
                                        
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
            
            
            <div class="blog_cards">
                 <div class="row my-4">
                    
                    
                    <?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                               <?php the_post_thumbnail('large', array(
'class' => 'card-img-top'

)); ?>
                                <div class="card-body">
                                    <h5><?php the_title();?></h5>
                                    <span class="name_comments_date"><?php the_author_posts_link();?> - 6 Comments - <?php the_time('M d, Y') ?></span>
                                    <p class="text-justify"><?php the_content();?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endwhile;?>
                   <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?> 
                </div>
                
            </div>
          
        </div>
    </div>
    <br><br>
<?php
get_footer();
?>