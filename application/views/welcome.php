<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- ============== Banner starts ============== -->
<section class="banner home-banner home-banner1">
    <div class="bannerwrap">

        <div id="owl-demo">


            <?php foreach ($home_slider as $h) { ?>

                <div class="item">
                    <img src="<?php echo site_url('administrator/uploads/' . $h['image']); ?>" alt="Owl Image">
                    <div class="container">
                        <div class="banner-text text-left">
                            <h1 class="text-capitalize">
                                <span><?php echo $h['title']; ?></span>
                                <!--                                <span>outside.</span>-->
                            </h1>
                            <p><?php echo $h['text']; ?></p>
                            <!--                            <a href="#" class="btn">learn more</a>-->
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>
<!-- ============== Baner ends ============== -->

<main>
    <!-- ============== how it works block starts ============== -->
    <section class="block how-it-works-block">
        <div class="container">
            <div class="top-text text-center wow fadeInUp">
                <h4 class="text-uppercase text-lt text-sp">HOW IT WORKS</h4>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 choose wow fadeInLeft">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive"
                                                 src="<?php echo base_url('/'); ?>/assets/themes/default/images/meal.svg"
                                                 alt="Meal icon"/></a></figure>
                        <h5><a class="text-lt" href="#">Choose Your Favorite</a></h5>
                        <p>Choose your favorite meals and order online or by phone. It's easy to customize your
                            order.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 deliver wow fadeInUp">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive"
                                                 src="<?php echo base_url('/'); ?>/assets/themes/default/images/delivery.svg"
                                                 alt="Delivery icon"/></a></figure>
                        <h5><a class="text-lt" href="#">We Deliver Your Meals</a></h5>
                        <p>We prepared and delivered meals arrive at your door. Duis autem vel eum iriure dolor in
                            hendrerit in vulputate.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 eat wow fadeInRight">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive"
                                                 src="<?php echo base_url('/'); ?>/assets/themes/default/images/eat-enjoy.svg"
                                                 alt="Eat and enjoy icon"/></a></figure>
                        <h5><a class="text-lt" href="#">Eat and Enjoy</a></h5>
                        <p>No shooping, no cooking, no counting and no cleaning. Enjoy your healthy meals with your
                            family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== how it works block starts ============== -->

    <!-- ============== featured menu block starts ============== -->
    <section class="block featured-menu-block">
        <div class="container">
            <!-- == top text header starts == -->
            <div class="wow fadeInUp top-text-header text-center">
                <h4 class="text-uppercase text-lt text-sp">OUR FEATURED MENU</h4>
            </div>
            <!-- == top text header ends == -->
        </div>

        <!-- == featured menu slider starts == -->
        <div class="wow fadeInUp featured-menu-slider">
            <div class="container">
                <ul class="bxslider1 row">


                    <?php foreach ($featured_menu as $f) { ?>

                        <li class="col-xs-12 col-sm-3">
                            <a href="<?php echo site_url('menuSingle?id=') . $f['id']; ?>">
                                <figure><img src="<?php echo site_url('administrator/uploads/' . $f['image']); ?>"
                                             alt="Featured image"/></figure>
                                <div class="menu-info">
                                    <h6 class="text-capitalize text-lt text-sp"><?php echo $h['title']; ?></h6>
                                    <span><?php echo $f['sub_title']; ?></span>
                                </div>
                            </a>
                        </li>

                    <?php } ?>

                </ul>
            </div>
        </div>
        <!-- == featured menu slider ends == -->
    </section>
    <!-- ============== featured menu block ends ============== -->

    <!-- ============== select program block starts ============== -->
    <section class='block select-program-block'>
        <div class='container'>
            <div class='row'>
                <div class="col-xs-12 col-sm-6 wow fadeInLeft ">
                    <figure style="margin-top:20px;"><img class="img-responsive"
                                                          src="<?php echo base_url('/'); ?>/assets/themes/default/images/select-program-image.png"
                                                          alt="Select program image"/></figure>
                    <h3 class='text-uppercase text-sp'>SELECT A PROGRAM TO FIT<br/>YOUR LIFESTYLE</h3>
                </div>
                <div class="col-xs-12 col-sm-6 wow fadeInRight pull-right right-form-block">

                    <form>

                        <fieldset>
                            <div class="select  text-lt text-sp">
                                <select>
                                    <?php foreach ($programs as $p) { ?>



                                        <option><?php echo $p['title']; ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                        </fieldset>



                        <fieldset>
                            <div class="select text-lt text-sp">
                                <select>
                                    <?php foreach ($programs as $p) { ?>
                                        <option><?php echo $p['title']; ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="select  text-lt text-sp">
                                <select>
                                    <?php foreach ($programs as $p) { ?>
                                        <option><?php echo $p['title']; ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                        </fieldset>


                        <fieldset>
                            <a href="<?php echo base_url("pricing"); ?>" class="btn box-btn order-now-btn test-uppercase text-sp">Compare Programs</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== select program block ends ============== -->

    <!-- ============== pricing block starts ============== -->
    <section ng-controller="ProgramPricingController" class="block pricing-block">
        <div class="container">

            <!-- top header text starts -->
            <div class="top-text-header text-center">
                <h4 class="wow fadeInUp text-center animated text-uppercase text-lt text-sp"
                    style="visibility: visible; animation-name: fadeInUp;">COMPARE PRICING</h4>
                <div class="text-center  wow flipInX animated" style="visibility: visible; animation-name: flipInX;">
                    <span class="select-program-title">Select Program</span>
                    <select ng-model="selected" ng-change="selectItem(prog)" class="select-program text-lt text-sp">

                        <option ng-repeat="prog in data" value="{{prog.id}}">{{prog.title}}</option>
                        <!--                        --><?php //foreach($programs as $p) { ?>
                        <!--                            <option value="">--><?php //echo $p['title']; ?><!--</option>-->
                        <!--                        --><?php //} ?>


                    </select>
                </div>
            </div>
            <!-- top header text ends -->

            <!-- == pricing box starts == -->
            <div class="row">

                <!-- pricing box single starts -->
                <div ng-repeat="pricing in pricing" class="col-xs-12 col-sm-4 wow fadeInLeft pricing-box">
                    <div class="text-center price-box-wrap two-week"
                         style="background-image:url(<?php echo site_url('administrator/uploads/'); ?>{{prog.icon}})">
                        <h5>{{pricing.weeks}} WEEK PROGRAM</h5>
                        <div class="price-per-day">
                            <span class="price">${{pricing.price}}</span>
                            <span class="per-day">/day</span>
                        </div>
                        <p>{{pricing.text}}</p>
                        <p>Calories<br/>Female {{prog.female_calories}}, Male {{prog.male_calories}}</p>
                        <p>{{prog.goal}}</p>
                            <a href="<?php echo base_url("plan"); ?>" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                    </div>
                </div>
                <!-- pricing box single ends -->


            </div>
            <!-- pricing box ends -->
        </div>
    </section>
    <!-- ============== pricing block ends ============== -->


    <!-- ============== full width video block starts ============== -->
    <section class="full-width-video">
        <div class="video-wrap">
            <img class="video-bg" alt="CAKitchen demo video playback"
                 src="<?php echo base_url('/'); ?>/assets/themes/default/images/video-bg.jpg">
            <video id="bg-video" preload="auto" muted>
                <source src="media/video.mp4" type="video/mp4"/>
                <source src="media/video.ogv" type="video/ogg"/>
                <source src="media/video.webm" type="video/webm"/>
                Your browser doesn't support HTML5 video. Here's a <a href="#">link</a> to download the video.
            </video>

            <div class="video-text text-center video-controls">
                <a href="#" class="play-btn" id="play-btn"><img
                            src="<?php echo base_url('/'); ?>/assets/themes/default/images/play-btn.svg"
                            alt="Play button"/></a>
                <h2 class="text-lt text-sp">SEE HOW WE PREPARE YOUR MEAL</h2>
            </div>
        </div>
    </section>
    <!-- ============== full width video block ends ============== -->

    <!-- ================== menu cateogry list====================-->
    <div class="block cat-list-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 top-text-header text-center wow fadeInUp">
                    <h4 class="text-uppercase text-lt text-sp">MENU CATEGORIES</h4>
                </div>
            </div>

            <div class="row">
                <!--single cat -->

                <?php foreach ($categories as $c) { ?>

                    <div class="col-sm-3 cat-wrap wow fadeInLeft">
                        <a href="<?php echo site_url('menu?cat=') . $c['id']; ?>">
                            <span><?php echo $c['title']; ?></span>
                            <figure><img src="<?php echo base_url('/') . 'administrator/uploads/' . $c['image'] ?>"
                                         alt=" Category "></figure>
                        </a>
                    </div>

                <?php } ?>


                <!-- singel cat ends-->

            </div>
        </div>
    </div>
    <!-- ================== menu cateogry list ends====================-->

    <!-- ============== team member block starts ============== -->
    <section class="block team-member-block">
        <div class="container">
            <!-- == top header text starts == -->
            <div class="top-text-header wow fadeInUp text-center">
                <h4 class="text-uppercase text-lt text-sp">OUR PASSIONATE TEAM MEMBER</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
                    dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
            </div>
            <!-- == top header text ends == -->

            <!-- == team member wrapper starts == -->
            <div class="row text-center">
                <!-- team member single starts -->


                <?php foreach ($members as $m) { ?>
                    <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft team-member-col">
                        <div class="text-center member-wrap">
                            <div class="member-info">
                                <figure><a href="#"><img
                                                src="<?php echo base_url('/') . 'administrator/uploads/' . $m['image'] ?>"
                                                alt="Member images"/></a></figure>
                                <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">MARINKA SULIS</a></h6>
                                <span class="designation text-capitalize">Founder &amp; CEO</span>
                            </div>
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <!-- team member single ends -->
            </div>
            <!-- == team member wrapper ends == -->
        </div>
    </section>
    <!-- ============== team member block ends ============== -->


    <!-- ============== testimonials block starts ============== -->
    <section class="testimonials-block">
        <div class="container">
            <div class="text-center wow fadeInRight testimonials">
                <ul class="bxslider">

                    <?php foreach ($testominals as $t) { ?>
                        <li>
                            <div class="testimonial-author">
                                <figure><img src="<?php echo base_url('/') . 'administrator/uploads/' . $t['image'] ?>"
                                             alt="Profile picture"/></figure>
                                <span class="writer text-sp"><?php echo $t['author']; ?></span>
                            </div>
                            <div class="testimonial-text"><h3 class="text-sp"><?php echo $t['title']; ?></h3>
                                <p><?php echo $t['text']; ?></p></div>

                        </li>
                    <?php } ?>


                </ul>
            </div>
        </div>
    </section>
    <!-- ============== testimonials block ends ============== -->

    <!-- ============== instagram block starts ============== -->
    <section class="block instagram-block">
        <div class="container">
            <div class="top-text-header text-center">
                <h4 class="text-uppercase text-sp text-lt">FOLLOW OUR INSTAGRAM</h4>
                <span class="follow-at text-spx text-lt">@CAKitchenFood</span>
            </div>
        </div>
        <div class="instagram-image-row">
            <ul>

                <?php foreach ($gallery as $g) { ?>
                    <li class="wow fadeInUp">
                        <figure><a href="#"><img
                                        src="<?php echo base_url('/') . 'administrator/uploads/' . $g['image'] ?>"
                                        alt="<?php echo $g['title']; ?>"/></a></figure>
                    </li>

                <?php } ?>

            </ul>
        </div>
    </section>
    <!-- ============== instagram block starts ============== -->

    <!-- ============== Subscribe block starts ============== -->
    <section class="block subscribe-block text-center">
        <div class="container">
            <div class="subscribe-wrap">
                <div class="top-text wow fadeInUp text-sp text-lt">
                    Be the lucky winner to get FREE CAKitchen premium meals for one week. We are also offer you latest
                    deal in your inbox!
                </div>
                <div class="subscribe-form wow fadeInDown">
                    <form>
                        <input type="text" class="text-spx text-lt" placeholder="Enter your e-mail address here">
                        <button type="button" class="btn text-uppercase wow flipInX" data-toggle="modal"
                                data-target=".newsletter-popup">subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== Subscribe block ends ============== -->


    <!-- Newsletter pop up starts -->
    <div class="newsletter-popup modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close hvr-wobble-vertical" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                <path d="M29.02,4.98A17,17,0,1,0,4.98,29.02,17,17,0,1,0,29.02,4.98ZM27.654,27.654A15.066,15.066,0,0,1,6.346,6.346,15.066,15.066,0,0,1,27.654,27.654ZM24.491,9.509a0.963,0.963,0,0,0-1.367,0L17,15.633,10.875,9.509a0.966,0.966,0,0,0-1.367,1.367L15.633,17,9.509,23.125a0.97,0.97,0,0,0,.68,1.653,0.943,0.943,0,0,0,.68-0.286l6.124-6.125,6.125,6.125a0.972,0.972,0,0,0,.68.286,0.931,0.931,0,0,0,.68-0.286,0.963,0.963,0,0,0,0-1.367L18.367,17l6.125-6.125A0.963,0.963,0,0,0,24.491,9.509Z"
                                      fill="#5fd718"/>
                            </svg>
                        </span>
                </button>
                <div class="modal-body">
                    <div class="newsletter-inner">
                        <h1 class="text-uppercase"><strong>BE THE LUCKY WINNER</strong></h1>
                        <h2 class="text-uppercase">AND GET FREE CAKitchen PREMIUM MEALS</h2>
                        <p>We are also offer you latest deal in your inbox. Be the first!</p>
                        <div class="newsletter-subscribe-form">
                            <form>
                                <fieldset>
                                    <input type="text" placeholder="Drop your e-mail here"/>
                                </fieldset>
                                <fieldset>
                                    <input type="submit" value="submit"/>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter pop up ends -->
</main>

