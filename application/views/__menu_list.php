<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<style>
    .pagination > li > a {
        padding: 0px;
    }

    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        border-color: #5fd718;
    !important;
        background-color: #5fd718;
    !important;
        color: white;
    !important;
    }

    .ngfade {
        transition: 1s linear all;
        -webkit-transition: 1s linear all;
    }

    .ngfade.ng-enter {
        opacity: 1;
    }

    .ngfade.ng-enter.ng-enter-active {
        opacity: 1;
    }

    .ngfade.ng-leave {
        opacity: 1;
    }

    .ngfade.ng-leave.ng-leave-active {
        opacity: 1;
    }

</style>
<!-- ============== Menu page banner starts ============== -->
<section class="banner banner-image menu-page-banner">
    <div class="bannerwrap">
        <figure><img class="img-responsive" src="<?php echo base_url('/'); ?>/assets/themes/default/images/menu-bkg.png"
                     alt="Meal icon"/></figure>
        <div class="banner-text text-center">
            <h1 class="text-uppercase"><strong>OUR DELICIOUS MENU</strong></h1>
            <p class="text-sp text-lt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna.</p>
        </div>
    </div>
</section>
<!-- ============== Menu page banner ends ============== -->
<article ng-controller="TableFilterController">
    <main> <!-- main content starts -->
        <!-- ============== Menu page starts ============== -->
        <section class="block menu-page-block">
            <div class="container">
                <!-- tool bar starts -->
                <div class="tool-bar wow fadeInUp">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <fieldset>
                                <label>Sort By:</label>
                                <select ng-model="sortKey" class="cat">
                                    <option value="id"> Latest</option>
                                    <option value="title"> Name</option>
                                    <option value="calories"> Calories</option>
                                    <option value="price"> Price</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>Items per page:</label>
                                <select ng-model="entryLimit" class="num">
                                 
                                    <option value="12">12</option>
                                    <option value="24"> 24</option>
                                </select>
                            </fieldset>

                            <div class="action-btn-wrap text-right pull-right">
                                <a href="#" class="btn hvr-wobble-top" ng-click="setList(false)"
                                   ng-class="(list == false) ? 'active' : ''"><i class="fa fa-th"></i></a>
                                <a href="#" class="btn hvr-wobble-top" ng-click="setList(true)"
                                   ng-class="(list == true) ? 'active' : ''"><i class="fa fa-list-ul"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tool bar ends-->

                <div class="row">
                    <!-- menu left sidebar -->
                    <div class="col-xs-12 col-sm-3 menu-left-sidebar">
                        <!-- search -->
                        <div class="search-section menu-sidebox-wrap wow fadeInLeft">
                            <form id="itemForm" method="get" action="">
                                <fieldset><input name="title" ng-model="f.title" id="search" type="text"
                                                 placeholder="Search something"></fieldset>

                            </form>
                        </div>
                        <!--search ends-->

                        <!--category- list-->
                        <div class="menu-sidebox-wrap wow fadeInLeft">
                            <h6 class="title text-sp text-lt">Menu Categories</h6>
                            <ul class="side-cat-list">
                                <li><a ng-class="(cat_id == -1) ? 'active' : ''" ng-click="setCat(-1)">All
                                        Categories</a></li>
                                <?php foreach ($categories as $c) { ?>

                                    <li><a ng-class="(cat_id==<?php echo $c['id']; ?>) ? 'active' : ''"
                                           ng-click="setCat(<?php echo $c['id']; ?>);"
                                        ><?php echo $c['title']; ?></a></li>

                                <?php } ?>

                            </ul>
                        </div>
                        <!--category list ends-->

                        <!-- calories range -->
                        <div class="menu-sidebox-wrap wow fadeInLeft">

                            <h6 class="title text-sp text-lt">Filter by Calories</h6>
                            <div class="calories-range">

                                <div id="slider-range"></div>
                                <div class="range-wrap text-sp">
                                    <table>
                                        <tr>
                                            <td>Calories :</td>
                                            <td><input type="text" ng-model="calories" id="amount"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div><!-- calories range ends -->


                    </div>
                    <!-- menu left ends -->

                    <!-- menu list right -->
                    <div class="col-xs-12 col-sm-9">


                        <!--menu listing -->
                        <div ng-show="list" class="row menu-listing-wrap list-view">


                            <div class="col-xs-12 col-sm-12 menu-item wow fadeInLeft">

                                <div dir-paginate="item in data | filter:f| filter:catFilter | filter:caloriesFilter | orderBy:sortKey |itemsPerPage:entryLimit"
                                     class="menu-item-wrap wow fadeInUp">
                                    <figure><a href="<?php echo site_url('menuSingle?id='); ?>{{item.id}}"><img
                                                    class="img-responsive"
                                                    src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ item.image }}"
                                                    alt="Menu image"></a></figure>

                                    <div class="mid">
                                        <h4><a href="#"> {{item.title}}</a></h4>



<span ng-repeat="cat in selected.categories"> {{cat.title}}</span>

                                        <span>{{item.sub_title}}</span>

                                        <div class="facts-table">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td><span>Calories</span></td>
                                                    <td><span> {{item.calories}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Proteins</span></td>
                                                    <td><span> {{item.proteins}}g</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Fats</span></td>
                                                    <td><span> {{item.fat}}g</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Carbohydrates</span></td>
                                                    <td><span> {{item.carbohydrates}}g</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="right">
                                        <h3 class="price"> {{item.price}} LBP</h3>
                                        <a href="#" ng-click="selectItem(item)"
                                           class="btn border-btn-small hvr-wobble-top" data-toggle="modal"
                                           data-target="#myModal">ADD TO CART</a>
                                    </div>
                                </div>


                            </div>

                            <!--single menu ends -->


                        </div>
                        <!-- menu listing ends-->
                        <div ng-hide="list" class="row menu-listing-wrap gd-view">
                            <!--single menu -->
                            <div dir-paginate="item in data | filter:f| filter:catFilter | filter:caloriesFilter | orderBy:sortKey |itemsPerPage:entryLimit"
                                 class="col-xs-12 col-sm-4 menu-item wow fadeInLeft">


                                <div
                                        class="text-center menu-item-wrap">
                                    <figure><a href="#"><img class="img-responsive"
                                                             src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{ item.image }}"
                                                             alt="Menu image"></a></figure>

                                    <div class="content">
                                        <h4><a href="#">{{item.title}}</a></h4>
                                        <span>{{item.sub_title}}</span>

                                        <h4 class="price"> {{item.price}} LBP</h4>
                                        <div class="bottom">
                                            <div class="facts-table">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><span>Calories</span></td>
                                                        <td><span>{{item.calories}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Proteins</span></td>
                                                        <td><span>{{item.proteins}}g</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Fats</span></td>
                                                        <td><span>{{item.fat}}g</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span>Carbohydrates</span></td>
                                                        <td><span>{{item.carbohydrates}}g</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <a href="#" class="btn hvr-wobble-top">ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                            <div class="pull-right">-->
                        <!--                                --><?php //echo $this->pagination->create_links(); ?>
                        <!--                            </div>-->
                        <!-- menu pegination -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 text-center menu-pegination wow fadeInUp">
                                <dir-pagination-controls
                                        max-size="5"
                                        direction-links="true"
                                        boundary-links="true">
                                </dir-pagination-controls>
                                <!--                                    <ul>-->
                                <!--                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>-->
                                <!--                                        <li><a href="#">1</a></li>-->
                                <!--                                        <li class="active"><a href="#">2</a></li>-->
                                <!--                                        <li><a href="#">3</a></li>-->
                                <!--                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>-->
                                <!--                                    </ul>-->
                            </div>
                        </div>

                        <!-- menu pegination ends-->
                    </div>
                    <!-- menu list ends-->
                </div>


            </div>
        </section>
        <!-- ============== Menu page ends ============== -->
    </main> <!-- main content ends -->

    <!-- Modal -->
    <div class="modal fade menu-pop-up" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <figure>
                        <img style="height: 100px;"
                             src="<?php echo base_url('/') . "administrator/uploads/"; ?>{{selected.image}}"
                             alt="Menu image">
                    </figure>

                    <!--inner starts-->
                    <div class="inner">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 top text-sp">
                                <span class="price pull-right"> {{selected.price}} LBP</span>
                                <h3>{{selected.title}}
                                    <span>{{selected.sub_title}} </span>
                                </h3>
                            </div>

                            <div class="col-xs-12 col-sm-12">
                                <hr>
                            </div>

                            <div class="col-xs-12 col-sm-12 content">
                                <p>
                                    {{selected.text}}
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-6 ingredients">
                                <!-- <h6>INGREDIENTS</h6> -->
                                <ul>

                                    <!-- <li ng-repeat="ing in selected.ingridents">{{ing.text}}</li> -->


                                    <!--                                <li>Red & yellow onions</li>-->
                                    <!--                                <li> 1/3 Cup corn</li>-->
                                    <!--                                <li> 1 Stalk celery</li>-->
                                    <!--                                <li> Red & green cabbage</li>-->
                                    <!--                                <li> Caraway-mustard dressing</li>-->
                                    <!--                                <li> 4 1/2 ounces green beans</li>-->
                                </ul>
                            </div>

                            <div class="col-xs-12 col-sm-6">
                                <h6>NUTRITION FACTS</h6>


                                <div class="facts-table">
                                    <table>
                                        <tbody>

                                        <tr>
                                            <td><span>Calories</span></td>
                                            <td><span>{{selected.calories}}</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Proteins</span></td>
                                            <td><span>{{selected.proteins}}g</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Fats</span></td>
                                            <td><span>{{selected.fat}}g</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Carbohydrates</span></td>
                                            <td><span>{{selected.carbohydrates}}g</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <br>
                                <div class="facts-table">
                                    <div>
                                        <table>
                                            <tbody>
                                            <tr ng-repeat="att in selected.attributes">
                                                <td><span>   {{att.title}}</span></td>
                                                <td><span>   {{att.daily}}  {{att.unit}}</span></td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--inner ends-->

                    <a href="#" ng-click="addToCart(selected)" class="btn btn-big hvr-wobble-skew"> ADD TO CART </a>

                </div>
            </div>
            <!--model content ends-->
        </div>
    </div>
</article>


<!--model ends-->
<script>

    //      $('#search').keypress(function (e) {
    //        if (e.which == 13) {
    //            $('#itemForm').submit();
    //        }
    //    });
    //


</script>