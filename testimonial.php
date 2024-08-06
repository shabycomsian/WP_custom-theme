<?php
/**
  Template Name: Testimonial
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
                                        <h1 class="second"><?php echo get_theme_mod('text_setting787')?></h1>
                                        <h2 class="third"><?php echo get_theme_mod('text_setting786')?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    
    <div class="testimonials mt-2">
        <div class="container">
            <div class="row">
                <?php
			$args = array( 'post_type' => 'casestudy', 'posts_per_page' => 3 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
                <?php $case_study_title = get_post_meta($post->ID,'case_study_title',true); ?>
                <?php $case_study_botton = get_post_meta($post->ID,'case_study_botton',true); ?>
                <?php $case_study_botton_link = get_post_meta($post->ID,'case_study_botton_link',true); ?>
                
                <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                    
                     <div class="card">
                        <div class="text-left">
                            <h3><?php the_title();?></h3>
							<?php the_content();?>
							<h6 class="text-danger">-<?php echo $case_study_title;?></h6>
                            <div class="text-center"><button class="btn btn-danger mb-2">
                                <a href="<?php echo $case_study_botton_link;?>"><?php echo $case_study_botton;?></a></button></div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
    <div class="testimonials-list mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h2><?php echo get_theme_mod('text_setting18')?></h2>
                     <p class="p-head"> &nbsp;<?php // echo get_theme_mod('text_setting19')?></p>
                    <div class="carousel-outer">
                        <div class="owl-carousel owl-theme">
			<?php
			$args = array( 'post_type' => 'Testimonials', 'posts_per_page' => -1 ,
			'tax_query'   => array(
  	array(
  		'taxonomy' => 'testimonial_category',
  		'field'    => 'slug',
  		'terms'    => 'home'
  	)
  ));
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php 
						 $testimonials_owner_designation = get_post_meta($post->ID,'testimonials_owner_designation',true);
						 ?>
                            <div class="item">
                                
                                <div class="testimonial-wrapper">
                                    <div class="user-img">
                                        <?php the_post_thumbnail();?>
                                    </div>
                                    <div class="user-info">
                                        <span class="username"><?php the_title();?></span>
                                        <span class="user-designation"><?php echo $testimonials_owner_designation;?></span>
                                    </div>
                                    <?php the_content();?>
                                </div>
                                
                            </div>
                            <?php endwhile;?>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="testimonials-list mt-4 testimo">
                <p class="text-center"><?php echo get_theme_mod('text_setting788')?></p>
				<h3><?php echo get_theme_mod('text_setting789')?></h3>
                <div class="row">
                    <?php
			$args = array( 'post_type' => 'Testimonials' ,
			'tax_query'   => array(
  	array(
  		'taxonomy' => 'testimonial_category',
  		'field'    => 'slug',
  		'terms'    => 'reviews'
  	)
  ));
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php 
						 $testimonials_owner_designation = get_post_meta($post->ID,'testimonials_owner_designation',true);
						 ?>
                    
					<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
						<div class="card">
							<div class="row">
								<div class="col-lg-2 d-flex align-items-center text-center justify-content-center">
									  <?php the_post_thumbnail();?>
								</div>
								<div class="col-lg-10">
									<div class="text-left">
									<h3><?php the_title();?><span class="text-muted"> - <?php echo $testimonials_owner_designation;?></span></h3>
									<?php the_content();?>
								</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<?php endwhile;?>
					
                </div>
				<div class="row mb-5">
                    <?php
			$args = array( 'post_type' => 'Testimonials' ,
			'tax_query'   => array(
  	array(
  		'taxonomy' => 'testimonial_category',
  		'field'    => 'slug',
  		'terms'    => 'home'
  	)
  ));
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>
						
						<?php 
						 $testimonials_owner_designation = get_post_meta($post->ID,'testimonials_owner_designation',true);
						 ?>
                    
					<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
						<div class="card">
							<div class="row">
								<div class="col-lg-2 d-flex align-items-center text-center justify-content-center">
									  <?php the_post_thumbnail();?>
								</div>
								<div class="col-lg-10">
									<div class="text-left">
									<h3><?php the_title();?><span class="text-muted"> - <?php echo $testimonials_owner_designation;?></span></h3>
									<?php the_content();?>
								</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<?php endwhile;?>
					
                </div>
            </div>
        </div>
    </div>
    <div class="loadmore">
    <div class="container">
<button class="lodemore" style="text-align:center;" href="" onclick="myFunction6()">Load More</button>
</div>
</div>
    <div class="matrices marge-with-footer">
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
     <?php
get_footer();
?>
    