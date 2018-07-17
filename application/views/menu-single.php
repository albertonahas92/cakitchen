<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- ============== Banner starts ============== -->
<section class="banner menu-single-banner">
    <div class="bannerwrap">
        <figure><img src="<?php echo base_url('/') . "administrator/uploads/"; ?><?php echo $item['image']; ?>" alt="Blog Banner" /></figure>
        <div class="banner-text text-center">
            <h2 class="text-uppercase"><?php echo $item['title']; ?></h2>
            <span><?php echo $item['sub_title']; ?></span>
        </div>
    </div>
</section>
<!-- ============== Baner ends ============== -->

<main>
    <!-- =============== menu single block starts ================== -->
    <section class="block menu-single-block">
        <div class="container">
            <div class="row">
                <!-- == single menu left content starts == -->
                <div class="col-xs-12 col-sm-7 col-md-8 menu-single-left">
                    <article>
                        <?php echo $item['text']; ?>
                    </article>
                    <!-- <div class="ingredients">
                        <h5 class="text-uppercase"><strong>INGREDIENTS</strong></h5>
                        <ul>
                           <?php foreach($ingrident as $ing) { ?>
                            <li><?php echo $ing['title']; ?></li>
                           <?php } ?>
                        </ul>
                    </div> -->
                </div>
                <!-- == single menu left content ends == -->

                <!-- == nutrition facts starts == -->
                <div class="col-xs-12 col-sm-5 col-md-4 menu-single-right">
                    <div class="facts-wrap">
                        <div class="title-block">
                            <h1>Nutrition Facts</h1>
                            Serving Size <?php echo $item['serving_size']; ?> g<br />
                            Serving Per Container <?php echo $item['serving_per_container']; ?>
                        </div>

                        <div class="amount-per-serving">
                            <div>Amount Per Serving</div>
                            <div class="calories">
                                <span class="pull-left"><strong>Calories</strong> <?php echo $item['calories']; ?></span>
                                <span class="pull-right">Calories from Fat <?php echo $item['calories_from_fat']; ?></span>
                            </div>
                            <div class="text-right daily-value">
                                <strong>% Daily Value*</strong>
                            </div>
                            <div class="parent-amount">
                                <span class="pull-left"><strong>Total Fat</strong> <?php echo $item['fat']; ?> g</span>
                                <span class="pull-right"><strong>75%</strong></span>
                                <div class="sub-amount">
                                    <div>
                                        <span class="pull-left">Saturated Fat  <?php echo $item['saturated_fat']; ?>g</span>
                                        <span class="pull-right"><strong>25%</strong></span>
                                    </div>
                                    <!-- <div>
                                        <span class="pull-left">Trans Fat  <?php echo $item['trans_fat']; ?>g</span>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div>
                                <span class="pull-left"><strong>Cholesterol </strong>   <?php echo $item['cholesterol']; ?>g</span>
                                <span class="pull-right"><strong>0%</strong></span>
                            </div>
                            <div>
                                <span class="pull-left"><strong>Sodium </strong>  <?php echo $item['Sodium']; ?>g</span>
                                <span class="pull-right"><strong>51%</strong></span>
                            </div> -->
                            <div class="parent-amount">
                                <span class="pull-left"><strong>Total Carbohydrate </strong>  <?php echo $item['carbohydrates']; ?>g</span>
                                <span class="pull-right"><strong>22%</strong></span>
                                <div class="sub-amount">
                                    <!-- <div>
                                        <span class="pull-left">Dietary Fiber  <?php echo $item['dietary_fiber']; ?>g</span>
                                        <span class="pull-right"><strong>72%</strong></span>
                                    </div> -->
                                    <div>
                                        <span class="pull-left">Sugars  <?php echo $item['sugars']; ?>g</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="pull-left"><strong>Protein </strong>  <?php echo $item['proteins']; ?>g</span>
                            </div>
                        </div>

                        <div class="vitamin">

                            <?php foreach($attributes as $att) { ?>

                                <span class="pull-left"><?php echo $att['title']; ?></span>
                                <span class="pull-right"><?php echo $att['daily'].$att['unit']; ?> %</span>

                            <?php } ?>


                        </div>

                        <div class="hints">*Percent Daily Values are based on a 2,000 calorie diet. Your daily value may be higher or lower depending on your calorie needs.</div>

                        <!-- <div class="calorie-table">
                            <table>
                                <tr>
                                    <th></th>
                                    <th>Calories:</th>
                                    <th>2,000</th>
                                    <th>2,500</th>
                                </tr>
                                <tr>
                                    <td>Total Fat</td>
                                    <td>Less than</td>
                                    <td>65g</td>
                                    <td>80g</td>
                                </tr>
                                <tr>
                                    <td>Sat Fat</td>
                                    <td>Less than</td>
                                    <td>20g</td>
                                    <td>25g</td>
                                </tr>
                                <tr>
                                    <td>Cholesterol</td>
                                    <td>Less than</td>
                                    <td>300mg</td>
                                    <td>300mg</td>
                                </tr>
                                <tr>
                                    <td>Total Carbohydrate</td>
                                    <td>Less than</td>
                                    <td>300g</td>
                                    <td>350g</td>
                                </tr>
                                <tr>
                                    <td>Dietary Fiber</td>
                                    <td>Less than</td>
                                    <td>25g</td>
                                    <td>30g</td>
                                </tr>
                            </table>
                        </div> -->
                    </div>
                </div>
                <!-- == nutrition facts ends == -->
            </div>
        </div>
    </section>
    <!-- =============== menu single block ends ================== -->

    <!-- ============== Sample menu block starts ============== -->
    <section class="block sample-menu-block">
        <div class="container">
            <div class="text-center top-description wow fadeInUp">
                <h3 class="text-uppercase no-sub-text light-font">MORE MENU YOU MAY LOVE</h3>
            </div>

            <!-- == menu listing starts == -->
            <div class="row menu-listing">
                <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                    <div class="text-center menu-item-wrap">
                        <figure><a href="#"><img class="img-responsive" src="images/menu-img1.jpg" alt="Menu image" /></a></figure>
                        <h4><a href="#">PORRIDGE</a></h4>
                        <span>With Fresh Fruit and Cranberries</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                    <div class="text-center menu-item-wrap">
                        <figure><a href="#"><img class="img-responsive" src="images/menu-img2.jpg" alt="Menu image" /></a></figure>
                        <h4><a href="#">BAKED SALMON</a></h4>
                        <span>With Brokoli and Vegetables</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                    <div class="text-center menu-item-wrap">
                        <figure><a href="#"><img class="img-responsive" src="images/menu-img3.jpg" alt="Menu image" /></a></figure>
                        <h4><a href="#">VEGETABLE SALAD</a></h4>
                        <span>With Cheese Feta</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 menu-item wow fadeInUp">
                    <div class="text-center menu-item-wrap">
                        <figure><a href="#"><img class="img-responsive" src="images/menu-img4.jpg" alt="Menu image" /></a></figure>
                        <h4><a href="#">TOMATOES OMELET</a></h4>
                        <span>With Parsley and Feta Cheese</span>
                    </div>
                </div>
            </div>
            <!-- == menu listing ends == -->
        </div>
    </section>
    <!-- ============== Sample menu block ends ============== -->
</main>

