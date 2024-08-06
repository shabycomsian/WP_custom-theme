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
                                        <h2 class="first">With access to over 5000 advertising channels and
                                            dedicated <br> support teams we cover multiple industry sectors</h2>
                                        <h1 class="second">Public Sector and Local Sector</h1>
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
             <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
            <div class="row">
                <div class="col-lg-6 col-sm-12 my-5">
                    <?php the_post_thumbnail('large', array(
'class' => 'img-fluid'

)); ?>
                </div>
                <div class="col-lg-6 col-sm-12 my-5">
                    <h5><?php the_title();?></h5>
                    <?php echo the_excerpt();?>
                    
                </div>
                <div class="col-lg-12 col-sm-12 mb-5 justify-content-center">
                    <?php the_content();?>
                </div>
            </div>
            <?php endwhile;  endif;?> 
        </div>
    </div>

    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2><?php echo get_theme_mod('text_setting7')?></h2>
                <span><?php echo get_theme_mod('text_setting8')?></span>
                <div class="matrices-buttons">
                    <a href="<?php echo get_theme_mod('text_setting10')?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('text_setting9')?></a>
                    <a href="<?php echo get_theme_mod('text_setting12')?>" class="btn btn-success btn-lg"><?php echo get_theme_mod('text_setting11')?></a>
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
get_footer();
?>