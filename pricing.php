<?php
/**
  Template Name: Pricing 
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
                                        <h1 class="second"><?php echo $page_head_line = get_post_meta($post->ID,'page_head_line',true);?></h1>
                                        <h2 class="third"><?php echo $page_tag_line = get_post_meta($post->ID,'page_tag_line',true);?></h2>
                                        <div class="banner-buttons">
                                            <button id="hide123" onclick="setValues(_pricing[1],true)" class="toggle-btn btn-transparent btn active btn-lg">Billed Monthly</button>
                                            <button id="show123" onclick="setValues(_pricing[1],true)" class="toggle-btn btn btn-transparent btn-lg">Billed Annually</button>

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
   <div class="billed text-center">
        <div class="container">
            <div class="row">
                <?php
		query_posts('p=205&post_type=pricing');
while (have_posts()): the_post(); ?>
        
            <?php 
						 $pricing_package_name = get_post_meta($post->ID,'pricing_package_name',true);
						 $pricing_package_class = get_post_meta($post->ID,'pricing_package_class',true);
						 $pricing_package_name_yearly = get_post_meta($post->ID,'pricing_package_name_yearly',true);
						 $pricing_package_title_class = get_post_meta($post->ID,'pricing_package_title_class',true);
						 $pricing_package_botton_class = get_post_meta($post->ID,'pricing_package_botton_class',true);
						 
						 ?>
            
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="<?php echo $pricing_package_class;?>">
                        <br><br>
                        <?php the_post_thumbnail();?><br><br>
                        <h2 class="text-<?php echo $pricing_package_title_class;?>"><?php the_title();?></h2>
                        <?php the_content();?>
                        <div class="freemium-sec-div">
                            <h2 class="aa"><?php echo $pricing_package_name;?></h2>
                            <h2 class="bb"><?php echo $pricing_package_name_yearly;?></h2><br>
                            <button class="btn btn-<?php echo $pricing_package_botton_class;?> btn-lg"><a href="https://traveltoursmart.com/wp/freemium-sign-up/">Choose Plan</a></button>
                        </div>
                    </div>

                </div>
                 <?php endwhile;?>
                  <?php
		query_posts('p=207&post_type=pricing');
while (have_posts()): the_post(); ?>
            <?php 
						 $pricing_package_name = get_post_meta($post->ID,'pricing_package_name',true);
						 $pricing_package_class = get_post_meta($post->ID,'pricing_package_class',true);
						 $pricing_package_name_yearly = get_post_meta($post->ID,'pricing_package_name_yearly',true);
						 $pricing_package_title_class = get_post_meta($post->ID,'pricing_package_title_class',true);
						 $pricing_package_botton_class = get_post_meta($post->ID,'pricing_package_botton_class',true);
						 
						 ?>
                 
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="<?php echo $pricing_package_class;?>">
                        <br><br>
                        <?php the_post_thumbnail();?><br><br>
                        <h2 class="text-<?php echo $pricing_package_title_class;?>"><?php the_title();?></h2>
                        <span class="cont"><?php the_content();?></span>
                        <div id="panel122"><?php echo $pricing_extra_content = get_post_meta($post->ID,'pricing_extra_content',true);?></div>
                       <botton class="see-all-options-standrad" href="" onclick="myFunction3()">See All Options</botton>
                        <br><br>
                        <p class="slider-txt ml-4">No of Admins</p><span id="slider-value-01"
                            class="slider-value mr-4"></span>
                        <div class="slidecontainer">
                            <input  id="myRange-01" type="range" min="1" max="50" value="1" class="slider" >
                        </div>
                        <br>
                        <p class="slider-txt ml-4">No of Basic Users</p><span id="slider-value-02"
                            class="slider-value mr-4"></span>
                        <div class="slidecontainer">
                            <input type="range" min="10" max="500" value="5" class="slider" id="myRange-02">
                        </div><br><br> 
					    <div class="">
                            <h2 class="aa"><p id="result">From £49</p></h2>
							<!--<h2 class="aa" id="result"><?php echo $pricing_package_name;?></h2>-->
                            <h2 id="result2" class="bb"><?php echo $pricing_package_name_yearly;?></h2><br>
                            <button class="btn btn-<?php echo $pricing_package_botton_class;?> btn-lg"><a href="https://traveltoursmart.com/wp/bespoke-pricing/">Choose Plan</a></button>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php
		query_posts('p=209&post_type=pricing');
while (have_posts()): the_post(); ?>
            <?php 
						 $pricing_package_name = get_post_meta($post->ID,'pricing_package_name',true);
						 $pricing_package_class = get_post_meta($post->ID,'pricing_package_class',true);
						 $pricing_package_name_yearly = get_post_meta($post->ID,'pricing_package_name_yearly',true);
						 $pricing_package_title_class = get_post_meta($post->ID,'pricing_package_title_class',true);
						 $pricing_package_botton_class = get_post_meta($post->ID,'pricing_package_botton_class',true);
						 
						 ?>
                
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="<?php echo $pricing_package_class;?>">
                        <br><br>
                        <?php the_post_thumbnail();?><br><br>
                        <h2 class="text-<?php echo $pricing_package_title_class;?>"><?php the_title();?></h2>
                        <span class="cont"><?php the_content();?></span>
                        <div id="panel123"><?php echo $pricing_extra_content = get_post_meta($post->ID,'pricing_extra_content',true);?></div>
                       <botton class="see-all-options-enterprise" href="" onclick="myFunction4()">See All Features</botton>
                        <div class="freemium-sec-div">
                            <h2 class="aa"><?php echo $pricing_package_name;?></h2>
                            <h2 class="bb" id="result2"><?php echo $pricing_package_name_yearly;?></h2><br>
                            <button class="btn btn-<?php echo $pricing_package_botton_class;?> btn-lg"><a href="https://traveltoursmart.com/wp/bespoke-pricing/">Choose Plan</a></button>
                        </div>
                    </div>

                </div>
                <?php endwhile;?> 
                
            </div>
        </div>
    </div>
    <br><br>
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
<script>
		/***** Range Slider Starts ******/
	
		
		 _pricing = {
				1: {basic: 5, price: 49 , annualprice: 495 },
				5: {basic: 25, price: 195 , annualprice: 1950},
				25: {basic: 100, price: 495 , annualprice: 4995},
				50: {basic: 500, price: 995 , annualprice: 9995}
				
			};
		var admSlider = document.getElementById("myRange-01"),
			bscSlider = document.getElementById('myRange-02'),
			bscVal = document.getElementById('slider-value-02'),
		res = document.getElementById("result");
	
		function setValues(pkg , _reset) {
			if(_reset){
				$(admSlider).val(1)
			}
			$(bscSlider).val(pkg.basic);
			$(bscVal).html('Upto ' + pkg.basic);
			if($('#show123').hasClass('active')){
			   		$('#result2').html("From £"+ pkg.annualprice );
			   } else{
				   res.innerHTML = "From £" + pkg.price;
			   }
			
		}
	
		admSlider.addEventListener("input", function() {
			var noOfAdmins = parseInt(this.value);
			
			for(var _adm in _pricing) {
				if(noOfAdmins <= _adm) {
					var _package = _pricing[_adm];
					setValues(_package);
					break;
				}
			}
			
			//res.innerHTML = "From £" + p.value * 2;
		}, false); 
	
	/***** Range Slider End ******/
	
    document.addEventListener('DOMContentLoaded', () => {

			let myBtns=document.querySelectorAll('.toggle-btn');
			myBtns.forEach(function(btn) {

				btn.addEventListener('click', () => {
				  myBtns.forEach(b => b.classList.remove('active'));
				  btn.classList.add('active');
				});
		 
			});

		});
		var slider01 = document.getElementById("myRange-01");
        var output01 = document.getElementById("slider-value-01");
        output01.innerHTML = slider01.value;

        slider01.oninput = function () {
            output01.innerHTML = this.value;
        }

        var slider02 = document.getElementById("myRange-02");
        var output02 = document.getElementById("slider-value-02");
        output02.innerHTML = slider02.value;

        slider02.oninput = function () {
            output02.innerHTML = this.value;
        }
		document.getElementById("myRange-02").disabled = true;
		
		
	
		
</script>
    
    