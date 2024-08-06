<?php
/**
  Template Name: tab
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
                                        <span class="first"> 
                                            Chose your ideal advertising and platfrom packages below
                                        </span>
                                        <span class="second">
                                            Easy Recruitment Simple Pricing
                                        </span>
                                        <div class="banner-buttons">
                                            <button id="hide123" onclick="myFunction1()" class="btn btn-success btn-lg">Billed Monthly</button>
                                            <button id="show123" class="btn btn-transparent btn-lg">Billed Annually</button>

                                        </div>
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
</div></div>
</br></br>
</br>
</br> </br>   <?php
get_footer('demo');
?>
    
    