<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div  ng-controller="ProgramSingleController"><section class="banner single-program-banner">
    <div class="bannerwrap">
        <figure><img  src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ program.image }}" alt="Single program banner" /></figure>
    </div>
</section>
<!-- ============== Single program banner starts ============== -->

<main > <!-- main content starts -->

    <!-- ============== Acelerated weight loss block starts ============== -->
    <section class="block weight-loss-block">
        <div class="container">
            <div class="text-center img-text-center">
                <figure><img class="img-responsive"   src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ program.icon }}" alt="Weight loss icon" /></figure>
                <h3 class="text-capitalize">{{program.title}}</h3>
                <p>{{program.text}}</p>
            </div>
            <ul>
                <li><span>Main Goal</span> : {{program.goal}}</li>
                <li><span>Schedule</span> :  {{min == max ? max : min + "and" + max }} weeks</li>
                <li><span>Speciality Menu</span> : Low Carb Meals</li>
                <li><span>Delivery</span> : Delivery Fresh twice a week </li>
            </ul>
        </div>
    </section>
    <!-- ============== Acelerated weight loss block ends ============== -->

    <!-- ============== Sample menu block starts ============== -->
    <section class="block sample-menu-block">
        <div class="container">
            <div class="text-center top-description wow fadeInUp">
                <h3 class="text-capitalize light-font text-sp text-lt">sample menu</h3>
                <p>{{program.notes}}</p>
            </div>

            <!-- == menu listing starts == -->
            <div class="row menu-listing">
                <div ng-repeat="item in items | limitTo:4" class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                    <div class="text-center menu-item-wrap">
                        <figure><a href="#"><img class="img-responsive" src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ item.image }}" alt="Menu image" /></a></figure>
                        <h4><a href="#">{{item.title}}</a></h4>
                        <span>{{item.sub_title}}</span>
                    </div>
                </div>

            </div>
            <!-- == menu listing ends == -->
        </div>
    </section>
    <!-- ============== Sample menu block ends ============== -->

    <!-- ============== select menu block starts ============== -->
    <section class="block select-menu-block">


        <!-- == menu tab part starts == -->
        <div class='food-tab wow fadeInUp'>
            <div class='container'>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#day1" role="tab" data-toggle="tab">Day 01</a></li>
                    <li role="presentation"><a href="#day2" role="tab" data-toggle="tab">Day 02</a></li>
                    <li role="presentation"><a href="#day3" role="tab" data-toggle="tab">Day 03</a></li>
                    <li role="presentation"><a href="#day4" role="tab" data-toggle="tab">Day 04</a></li>
                </ul>
            </div>
        </div>
        <!-- == menu tab part ends == -->

        <!-- == Tab description starts == -->
        <div class='tab-description'>
            <div class="container">
                <div class="tab-content">
                    <div ng-repeat="n in [].constructor(4)  track by $index" role="tabpanel" class="tab-pane fade in" ng-class="($index == 0) ? 'active' : ''" id="day{{$index+1}}">
                        <!-- == food listing group starts == -->
                        <div class="food-listing-group">
                            <div ng-repeat="item in items | filter:{ day: $index+1 }" class="food-listing-row wow fadeInLeft">
                                <div class="food-image">
                                    <a href='#'><figure><img class="img-responsive" src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ item.image }}" alt="Single program banner" alt="Food image" /></figure></a>
                                </div>
                                <div class="food-type">
                                    <h5><a href="#">{{meal[item.meal]}}</a></h5>
                                </div>
                                <div class="food-ingredients">
                                  {{item.subtitle}}
                                </div>
                                <div class="food-category">
                                    <a href="#" class="btn border-btn-small">{{item.catname}}</a>
<!--                                    <a href="#" class="btn border-btn-small">vegan</a>-->
                                </div>
                            </div>

                        </div>
                        <!-- == food listing group ends == -->

                    </div>

                </div>
            </div>
        </div>
        <!-- == Tab description ends == -->

    </section>
    <!-- ============== select menu block starts ============== -->

    <!-- ============== testimonial block starts ============== -->
    <section class="full-width-testimonial">
        <div class="container">
            <div class="text-center top-text-header">
                <h3 class="text-capitalize light-font">What Our Customers Say</h3>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
            </div>
            <div class="row text-center testimonial-wrap">
                <div class="col-xs-12 col-sm-5 testimonial-box-wrap">
                    <div class="text-center testimonial-box">
                        <figure><img src="images/testimonial-author1.jpg" alt="Testionial author" /></figure>
                        <h6>Crystal Burns</h6>
                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 testimonial-box-wrap">
                    <div class="text-center testimonial-box">
                        <figure><img src="images/testimonial-author2.jpg" alt="Testionial author" /></figure>
                        <h6>Madison Weaver</h6>
                        <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== testimonial block ends ============== -->

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
</div>