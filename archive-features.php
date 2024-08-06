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
                                        <h2 class="first">Some marketing tagline about that feature</h2>
                                        <h1 class="second">Recruitment Management</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="management">
        <div class="container-fluid my-5 text-center">
            <div class="row">
                <div class="col">
                    <a href="#">Talent Attrection</a>
                </div>
                <div class="col">
                    <a href="">Recruitment Management Platform</a>
                </div>
                <div class="col">
                    <a href="">Candidates Screening & Communication</a>
                </div>
                <div class="col">
                    <a href="">Consultation & Support</a>
                </div>
            </div>
        </div>
    </div>
    <div class="matrices-fetuare">
        <div class="container">
            <?php if (have_posts()) :
                                                while (have_posts()) :the_post();?>
            <div class="matrices-content">
                <h2 class="text-center"><?php the_title();?></h2>
                <p class="matrices-fetuare-text"><?php the_content();?>
                </p>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
    
    
    <div class="specifications">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-6">
                    <div class="specification-content rmp">
                        <h2>Some heading about this feature</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img">
                        <img src="images/img-01.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6 order-md-2">
                    <div class="specification-content rmp">
                        <h2>Some heading about this feature</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img">
                        <img src="images/img-02.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6">
                    <div class="specification-content rmp">
                        <h2>Some heading about this feature</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img">
                        <img src="images/img-01.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-6 order-md-2">
                    <div class="specification-content rmp">
                        <h2>Some heading about this feature</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="specification-img">
                        <img src="images/img-02.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="talent_attrection">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2 ta-one text-center">
                        <a href="#">Talent Attrection</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row ta-two mx-1">
                            <img src="./images/talent.jpg" alt="">
                            <h6 class="mt-4 ml-3">Recruitment Management <br> Plarform</h6>
                            <a href="#" class="arrow-img"><img src="./images/arrow.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="matrices">
        <div class="container">
            <div class="matrices-content">
                <h2>World Class Recruitment metrics</h2>
                <span>We guarantee, you will not use any other service like ours. It’s that good!</span>
                <div class="matrices-buttons">
                    <a href="#" class="btn btn-primary btn-lg">30 Days free trial</a>
                    <a href="#" class="btn btn-success btn-lg">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="clients">
        <div class="container">
            <div class="row mb-5">
                <div class="col">
                    <div class="client-logo">
                        <div class="logo-wrapper">
                            <img src="images/atlasian.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo">
                        <div class="logo-wrapper">
                            <img src="images/google.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo">
                        <div class="logo-wrapper">
                            <img src="images/forbes.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo">
                        <div class="logo-wrapper">
                            <img src="images/bbc.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo">
                        <div class="logo-wrapper">
                            <img src="images/shopify.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <?php
get_footer();
?>