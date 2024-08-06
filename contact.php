<?php
/**
  Template Name: Contact
 */
 get_header('new');
if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
wpcf7_enqueue_scripts();

}

if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
wpcf7_enqueue_styles();

}

?>
 <div class="banner-content">
            <div class="content-wrapper">
                <div class="content-table">
                    <div class="content-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="banner-text">
                                        <h1 class="second"><?php echo get_theme_mod('text_setting202')?></h1>
                                        <h2 class="third"><?php echo get_theme_mod('text_setting201')?></h2>
                                        
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
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                    <div class="card">
                        <div class="icon-div justify-content-center">
                            <img src="<?php echo get_theme_mod('text_setting204')?>" class="img_users">
                        </div>
                        <div class="text-center">
                            <p><?php echo get_theme_mod('text_setting205')?></p>
                            <h5 class="phone-no"><?php echo get_theme_mod('text_setting206')?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                    <div class="card">
                        <div class="icon-div justify-content-center">
                            <img src="<?php echo get_theme_mod('text_setting207')?>" class="img_email">
                        </div>
                        <div class="text-center">
                            <p><?php echo get_theme_mod('text_setting208')?><br><br></p>
                            <button class="btn btn-primary mb-2" onclick="myFunction()"><?php echo get_theme_mod('text_setting209')?></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                    <div class="card">
                        <div class="icon-div">
                            <img src="<?php echo get_theme_mod('text_setting211')?>" class="img_computer">
                        </div>
                        <div class="text-center">
                            <p><?php echo get_theme_mod('text_setting212')?><br></p>
                            <button class="btn btn-success mb-2"><a href="<?php echo get_theme_mod('text_setting214')?>"><?php echo get_theme_mod('text_setting213')?></a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form" id="panel12">
                <h3>Send us a message</h3>
                
                            <?php echo do_shortcode('[contact-form-7 id="1509" title="Contact Us Form"]'); ?>
                            
            </div>
            </div>
        </div>
    </div>

    <div class="matrices">
        <div class="container">
             <div class="matrices-content">
                <h2><?php echo get_theme_mod('text_setting7')?></h2>
                <span><?php echo get_theme_mod('text_setting8')?></span>
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