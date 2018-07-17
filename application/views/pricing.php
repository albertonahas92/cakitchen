<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- ============== Banner starts ============== -->
<section   ng-controller="ProgramPricingController" class="banner pricing-banner">
    <div class="bannerwrap">
        <!--                    <figure><img src="images/pricing-banner.jpg" alt="Pricing Banner" /></figure>-->
        <div class="container">
            <div class="banner-text text-center">
                <!-- ============== pricing block starts ============== -->
                <section class="block pricing-block">

                    <!-- top header text starts -->
                    <div class="top-text-header text-center">
                        <div class="text-center  wow flipInX animated" style="visibility: visible; animation-name: flipInX;">
                            <select   ng-model="selected" ng-change="selectItem(prog)" class="select-program">

                                <option value="" disabled selected>Select your program</option>
                                <option ng-repeat="prog in data" value="{{prog.id}}">{{prog.title}}</option>


<!--                                --><?php //foreach($programs as $p) { ?>
<!--                                <option value="--><?php //echo $p['id']; ?><!--">   --><?php //echo $p['title']; ?><!--</option>-->
<!--                                --><?php //} ?>


                            </select>
                        </div>
                    </div>
                    <!-- top header text ends -->

                    <!-- == pricing box starts == -->
                    <div class="row">

                        <!-- pricing box single starts -->
                        <div ng-repeat="pricing in pricing" class="col-xs-12 col-sm-4  pricing-box">
                            <div class="text-center price-box-wrap">
                                <h5>{{pricing.weeks}} WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">${{pricing.price}}</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>{{pricing.text}}</p>
                                <p>Calories<br />Female {{prog.female_calories}}, Male {{prog.male_calories}}</p>
    <!--                                <p>Protein Customization<br />Limited Protein Customization</p>-->
                                <a href="<?php echo base_url("plan"); ?>" class="btn box-btn order-now-btn test-uppercase">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends -->


                    </div>
                    <!-- pricing box ends -->
                </section>
                <!-- ============== pricing block ends ============== -->
            </div>
        </div>
    </div>
</section>
<!-- ============== Baner ends ============== -->

<main> <!-- main content starts -->

    <!-- ============== how it works block starts ============== -->
    <section class="block how-it-works-block">
        <div class="container">
            <div class="top-text text-center wow fadeInUp">
                <h4 class="text-uppercase text-sp text-lt">HOW IT WORKS</h4>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 choose wow fadeInLeft">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive" src="images/meal.svg" alt="Meal icon" /></a></figure>
                        <h5><a href="#">Choose Your Favorite</a></h5>
                        <p>Choose your favorite meals and order online or by phone. It's easy to customize your order.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 deliver wow fadeInUp">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive" src="images/delivery.svg" alt="Delivery icon" /></a></figure>
                        <h5><a href="#">We Deliver Your Meals</a></h5>
                        <p>We prepared and delivered meals arrive at your door. Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 eat wow fadeInRight">
                    <div class="feature-item-wrap text-center">
                        <figure><a href="#"><img class="img-responsive" src="images/eat-enjoy.svg" alt="Eat and enjoy icon" /></a></figure>
                        <h5><a href="#">Eat and Enjoy</a></h5>
                        <p>No shooping, no cooking, no counting and no cleaning. Enjoy your healthy meals with your family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== how it works block starts ============== -->

    <!-- ============== testimonials block starts ============== -->
    <section class="testimonials-block">
        <div class="container">
            <div class="text-center wow fadeInRight testimonials">
                <ul class="bxslider">
                    <li>
                        <h3>Madang is Awesome!! Delicious meals that are healthy and fresh!</h3>
                        <p>Madang has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                        <div class="testimonial-author">
                            <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                            <span class="writer">Shirley Barnes</span>
                        </div>
                    </li>
                    <li>
                        <h3>Madang is Awesome!!</h3>
                        <p>This has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                        <div class="testimonial-author">
                            <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                            <span class="writer">Shirley Barnes</span>
                        </div>
                    </li>
                    <li>
                        <h3>Madang is Awesome!! Delicious meals that are healthy and fresh!</h3>
                        <p>Madang has fundamentally changed the way my family eat. Previously, dinner meant picking a restaurant on seamless and waiting for food to arrive. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                        <div class="testimonial-author">
                            <figure><img src="images/profile-picture.jpg" alt="Profile picture" /></figure>
                            <span class="writer">Shirley Barnes</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ============== testimonials block ends ============== -->

    <!-- ============== Subscribe block starts ============== -->
    <section class="block subscribe-block text-center">
        <div class="container">
            <div class="subscribe-wrap">
                <div class="top-text wow fadeInUp">
                    Be the lucky winner to get FREE Madang premium meals for one week. We are also offer you latest deal in your inbox!
                </div>
                <div class="subscribe-form wow fadeInDown">
                    <form>
                        <input type="text" placeholder="Enter your e-mail address here">
                        <button class="btn text-uppercase wow flipInX">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== Subscribe block ends ============== -->
</main> <!-- main content ends -->

<script>


</script>