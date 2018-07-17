<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main >
    <!-- =============== choose your own plan title block starts ================== -->
    <section class="choose-plan-block">
        <div class="container">
            <h5 class="text-center wow fadeInUp text-uppercase">CHOOSE YOUR OWN PLANS</h5>
        </div>
    </section>
    <!-- =============== choose your own plan title block ends ================== -->

    <!-- =============== plan steps block starts ================== -->
    <section class="plan-step">
        <div class="steps-wrapper" data-wizard-init>


            <!-- == step navigation starts ==-->
            <div class="container">
                <ul class="text-center steps">
                    <li class="wow fadeInUp step1 <?php if($step==1) echo "current" ?>"><a href="/choose-plan-about-us.html"><span>1</span> About You</a>
                    </li>
                    <li class="wow fadeInUp step2  <?php if($step==2) echo "current" ?>"><a href="/choose-plan-select-program.html"><span>2</span> Select
                            Program</a></li>
                    <li class="wow fadeInUp step3 <?php if($step==3) echo "current" ?>"><a href="/choose-plan-review.html"><span>3</span> Checkout</a></li>
                </ul>
            </div>
            <!-- == step navigation ends ==-->

            <!-- == step content starts ==-->
            <div style="background-color: #fff;" class="step-content">
<?php if($step==1) { ?>

                <!-- choose plan about us step starts -->
                <div class="step1">
                    <div class="col-xs-12 col-sm-6 wow fadeInLeft  left-form">
                        <h5 class="text-uppercase">TELL US ABOUT YOU, WE CAN PREPARED YOUR HEALTHY MEALS AS WELL</h5>
                        <form class="about-us-form" method="post" action="<?php echo base_url("/User/Register") ?>">
                            <fieldset>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 pull-left">
                                        <div class="light-font radio-btn radio-btn-men checked">
                                            <input class="radio-class" type="radio" name="gender" value="men"/> <span>Men</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 pull-right">
                                        <div class="light-font radio-btn radio-btn-women">
                                            <input class="radio-class" type="radio" name="gender" value="women"/> <span>Women</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <input type="text" name="username" placeholder="Username"/>
                            </fieldset>
                            <fieldset>
                                <input type="text" name="first_name" placeholder="Full Name"/>
                            </fieldset>
                            <fieldset>
                                <input type="email" name="email" placeholder="E-mail"/>
                            </fieldset>
                            <fieldset>
                                <input type="text" name="address" placeholder="Address"/>
                            </fieldset>
                            <fieldset>
                                <input type="text" name="phone" placeholder="Phone"/>
                            </fieldset>

                            <fieldset>
                                <input type="password" name="password" placeholder="Password"/>
                            </fieldset>

                            <fieldset>
                                <input type="password" name="password_repeat" placeholder="Confirm Password"/>
                            </fieldset>


                            <fieldset>
                                <input type="hidden" name="longitude" id="longitude" placeholder="Longitude"/>
                            </fieldset>
                            <fieldset>
                                <input type="hidden" name="latitude" id="latitude" placeholder="latitude"/>
                            </fieldset>

                            <fieldset>
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                       id="token" value="<?php echo $this->security->get_csrf_hash(); ?>"
                                      />
                            </fieldset>


                            <div id="out1"></div>
                            <div id="map"></div>
                            <br><br>
                            <script>

                                // Note: This example requires that you consent to location sharing when
                                // prompted by your browser. If you see the error "The Geolocation service
                                // failed.", it means you probably did not give permission for the browser to
                                // locate you.
                                var map, infoWindow;
                                function initMap() {
                                    geoFindMe("out1");
                                    geoFindMe("out2");
                                    console.log("init .... map ");
                                    map = new google.maps.Map(document.getElementById('map'), {
                                        center: {lat: -34.397, lng: 150.644},
                                        zoom: 6
                                    });
                                    infoWindow = new google.maps.InfoWindow;

                                    // Try HTML5 geolocation.
                                    if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(function (position) {
                                            var pos = {
                                                lat: position.coords.latitude,
                                                lng: position.coords.longitude
                                            };

                                            infoWindow.setPosition(pos);
                                            infoWindow.setContent('Location found.');
                                            infoWindow.open(map);
                                            map.setCenter(pos);
                                        }, function () {
                                            handleLocationError(true, infoWindow, map.getCenter());
                                        });
                                    } else {
                                        // Browser doesn't support Geolocation
                                        handleLocationError(false, infoWindow, map.getCenter());
                                    }
                                }

                                function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                                    infoWindow.setPosition(pos);
                                    infoWindow.setContent(browserHasGeolocation ?
                                        'Error: The Geolocation service failed.' :
                                        'Error: Your browser doesn\'t support geolocation.');
                                    infoWindow.open(map);
                                }
                            </script>

                            <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyD7iO0-Cdf-LFywr0ql6x8MKz-H8eDaU&callback=initMap">


                            </script>


                            <script>

                                function geoFindMe(id) {

                                    var output = document.getElementById(id);

                                    if (!navigator.geolocation) {
                                        output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
                                        return;
                                    }

                                    function success(position) {
                                        var latitude = position.coords.latitude;
                                        var longitude = position.coords.longitude;

                                        //         output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';
                                        document.getElementsByName("longitude").value = longitude;
                                        document.getElementsByName("latitude").value = latitude;

                                        var img = new Image();

                                        img.src = "https://maps.googleapis.com/maps/api/staticmap?key=AIzaSyDyD7iO0-Cdf-LFywr0ql6x8MKz-H8eDaU&center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

                                        output.appendChild(img);
                                    }

                                    function error() {
                                        output.innerHTML = "Unable to retrieve your location";
                                    }

                                    //    output.innerHTML = "<p>Locating…</p>";

                                    navigator.geolocation.getCurrentPosition(success, error);
                                }

                            </script>

                            <fieldset>
                                <input type="submit"  value="next"/>
                            </fieldset>
                        </form>
                    </div>

                    <div class="col-xs-12 col-sm-6 wow fadeInLeft  left-form">
                        <h5 class="text-uppercase">ALREADY REGISTERED</h5>
                        <form class="login-form" method="post" action="<?php echo base_url("/User/Login") ?>">


                            <fieldset>
                                <input type="email" name="email" placeholder="E-mail"/>
                            </fieldset>

                            <fieldset>
                                <input type="password" name="password" placeholder="Password"/>
                            </fieldset>

                            <div id="out2"></div>
                            <br><br>
                            <input type="submit" value="next"/>


                            <!--                            <fb:login-button-->
                            <!--                                    scope="public_profile,email"-->
                            <!--                                    onlogin="checkLoginState();">-->
                            <!--                            </fb:login-button>-->

                            </fieldset>
                        </form>
                    </div>

                </div>
<?php } ?>

                <?php if($step==2) { ?>
                <div  ng-controller="ProgramPricingController"  class="step2">
                    <div class="container">
                        <!-- top text header starts -->
                        <div class="top-top-description">
                            <h3 class="text-uppercase wow fadeInUp text-center text-sp text-lt">SELECT PROGRAM</h3>
                        </div>
                        <!-- top text header ends -->

                        <!-- Select program buttons block starts -->
                        <div class="row select-program-btns">

                            <?php foreach($programs as $p) { ?>
                                <div class="col-xs-12 col-sm-4 wow fadeInLeft select-program-btn">
                                    <a ng-click="selectId(<?php echo $p['id']; ?>)" href="#">
                                        <img class="img-responsive" src="<?php echo base_url('/') . "administrator/uploads/".$p['icon']; ?>" alt="Weight loss icon" /> <span><?php echo $p['title']; ?></span>
                                    </a>
                                </div>
                            <?php } ?>





                        </div>
                        <!-- Select program buttons block ends -->



                    </div>

                    <!-- ============== pricing block starts ============== -->
                    <section class="block pricing-block">
                        <div class="container">

                            <!-- top header text starts -->
                            <div class="top-text-header text-center">
                                <h3 class="wow fadeInUp text-center animated text-uppercase" style="visibility: visible; animation-name: fadeInUp;">select plan</h3>
                            </div>
                            <!-- top header text ends -->

                            <!-- == pricing box starts == -->
                            <div class="row pricing-block-gray">


                                <div ng-repeat="pricing in pricing" class="col-xs-12 col-sm-4  pricing-box">
                                    <div class="text-center price-box-wrap">
                                        <h5>{{pricing.weeks}} WEEK PROGRAM</h5>
                                        <div class="price-per-day">
                                            <span class="price">${{pricing.price}}</span>
                                            <span class="per-day">/day</span>
                                        </div>
                                        <p>{{pricing.text}}</p>
<!--                                        <p>Calories<br />Female {{prog.female_calories}}, Male {{prog.male_calories}}</p>-->
                                        <!--                                <p>Protein Customization<br />Limited Protein Customization</p>-->
                                        <a href="<?php echo site_url('plan?step=3&plan='); ?>{{pricing.id}}" class="btn box-btn order-now-btn test-uppercase">order now</a>
                                    </div>
                                </div>

                                                        </div>
                            <!-- pricing box ends -->
                        </div>
                    </section>
                    <!-- ============== pricing block ends ============== -->

                </div>
                <?php } ?>
                <!-- choose plan select program step ends -->

                <?php if($step==3) { ?>

                    <div class="step3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 wow fadeInLeft review-left">
                                    <div class="review-info">
                                        <div class="title name">
                                            <span>Your Name</span>
                                            <span><?php print_r($user['first_name']); ?></span>
                                        </div>
                                        <div class="title gender">
                                            <span>Gender</span>
                                            <span><?php print_r($user['genre']); ?></span>
                                        </div>
                                        <div class="title email">
                                            <span>Email</span>
                                            <span><?php print_r($user['email']); ?></span>
                                        </div>
                                        <div class="title address">
                                            <span>Address</span>
                                            <span><?php print_r($user['address']); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 wow fadeInRight review-right">
                                    <div class="review-info">
                                        <div class="title program">
                                            <span>Your Program</span>
                                            <span><?php print_r($program['title']); ?></span>
                                        </div>
                                        <div class="title plan">
                                            <span>Plan</span>
                                            <span><?php print_r($plan['weeks']); ?> weeks</span>
                                            <p><?php print_r($program['text']); ?> weeks</p>
                                            <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                            <p><?php print_r($program['goal']); ?> weeks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center big-buttons-group">
                                <a class="btn border-btn-x-big hvr-wobble-horizontal">edit</a>
                                <a href="<?php echo site_url('plan?step=4&plan=').$plan['id']; ?>" class="btn btn-x-big hvr-wobble-horizontal">Checkout</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <!-- == step content ends ==-->
        </div>
    </section>
    <!-- =============== plan steps block ends ================== -->
</main>


<!-- ============== About us ends ============== -->
</main> <!-- main content ends -->


