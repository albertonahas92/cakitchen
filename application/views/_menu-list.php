<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

        <!-- ============== Menu page banner starts ============== -->
        <section class="banner banner-image menu-page-banner">
            <div class="bannerwrap">
                <figure><img class="img-responsive" src="<?php echo base_url('/'); ?>/assets/themes/default/images/menu-bkg.png" alt="Meal icon" /></figure>
                <div class="banner-text text-center">
                    <h1 class="text-uppercase"><strong>OUR DELICIOUS MENU</strong></h1>
                    <p class="text-sp text-lt">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                </div>
            </div>
        </section>
        <!-- ============== Menu page banner ends ============== -->

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
                                    <select class="cat">
                                        <option value="Best Sellers"> Best Sellers</option>
                                    </select>
                                </fieldset>

                                <fieldset>
                                    <label>Sort By:</label>
                                    <select class="num">
                                        <option value="12"> 12 </option>
                                    </select>
                                </fieldset>

                                <div class="action-btn-wrap text-right pull-right">
                                   <a href="menu-grid.html" class="btn hvr-wobble-top"><i class="fa fa-th"></i></a> 
                                   <a href="menu-list.php" class="btn hvr-wobble-top active"><i class="fa fa-list-ul"></i></a>
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
                                <fieldset><input name="title" id="search" type="text" placeholder="Search something"></fieldset>
                                    <input type="submit" value="sssssssssss">
                                </form>
                            </div>
                            <!--search ends-->
        
                            <!--category- list-->
                            <div class="menu-sidebox-wrap wow fadeInLeft">
                                <h6 class="title text-sp text-lt">Menu Categories</h6>
                                <ul class="side-cat-list">
                                    <li><a href="#">All Categories</a></li>
                                    <?php foreach($categories as $c) { ?>

                                        <li><a href="#"><?php echo $c['title']; ?></a></li>

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
                                                <td><input type="text" id="amount"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div><!-- calories range ends -->

                            <!--seller list-->
                            <div class="menu-sidebox-wrap seller-list wow fadeInLeft">
                                <h6 class="title text-sp text-lt">Best Sellers</h6>
                                <ul>
                                    <li>
                                        <figure><a href="#"> <img src="images/best-seller1.jpg" alt=" Best seller image"></a></figure>

                                        <h6><a href="#">Porridge with Green Kiwi</a></h6>
                                        <h6 class="price">$15</h6>
                                    </li>

                                    <li>
                                        <figure><a href="#"> <img src="images/best-seller2.jpg" alt=" Best seller image"></a></figure>

                                        <h6><a href="#">Baked Fresh Salmon</a></h6>
                                        <h6 class="price">$15</h6>
                                    </li>

                                    <li>
                                        <figure><a href="#"> <img src="images/best-seller3.jpg" alt=" Best seller image"></a></figure>

                                        <h6><a href="#">Fresh Vegetable Salad</a></h6>
                                        <h6 class="price">$15</h6>
                                    </li>

                                    <li>
                                        <figure><a href="#"> <img src="images/best-seller4.jpg" alt=" Best seller image"></a></figure>

                                        <h6><a href="#">Baked Fresh Salmon</a></h6>
                                        <h6 class="price">$15</h6>
                                    </li>
                                </ul>
                            </div>
                            <!-- seller list ends -->

                            <!-- Ingredient tags -->
<!--                            <div class="menu-sidebox-wrap ingredient-tags wow fadeInLeft">-->
<!--                                <h6 class="title text-sp text-lt">Ingredient Tags</h6>-->
<!--                                <ul>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> ORGANIC </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> VEGAN </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> GLUTTEN-FREE </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> FRESH-SALMON </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> VEGETABLE </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> PORRIDGE </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> GLUTTEN-FREE </a></li>-->
<!--                                    <li><a href="#" class="hvr-wobble-top"> FRESH-SALMON </a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
                            <!-- Ingredient ends -->    
                        </div>
                        <!-- menu left ends -->

                        <!-- menu list right -->
                        <div class="col-xs-12 col-sm-9">
                            <!--menu listing -->
                            <div class="row menu-listing-wrap list-view">

                                <?php foreach($items as $i) { ?>

                                    <div class="col-xs-12 col-sm-12 menu-item wow fadeInLeft">
                                        <div class="menu-item-wrap">
                                            <figure><a href="#"><img class="img-responsive" src="<?php echo site_url('administrator/uploads/'.$i['image']); ?>" alt="Menu image"></a></figure>

                                            <div class="mid">
                                                <h4><a href="#"><?php echo $i['title'] ?></a></h4>
                                                <span><?php echo $i['sub_title']; ?></span>

                                                <div class="facts-table">
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <td><span>Calories</span></td>
                                                            <td><span><?php echo $i['calories']; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Proteins</span></td>
                                                            <td><span><?php echo $i['proteins']; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Fats</span></td>
                                                            <td><span><?php echo $i['fat']; ?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span>Carbohydrates</span>  </td>
                                                            <td><span><?php echo $i['carbohydrates']; ?></span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="right">
                                                <h3 class="price">$<?php echo $i['price']; ?></h3>
                                                <a href="#" class="btn border-btn-small hvr-wobble-top" data-toggle="modal" data-target="#myModal">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>


                                <?php } ?>


                                <!--single menu ends -->



                            </div>
                            <!-- menu listing ends-->

                            <div class="pull-right">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                            <!-- menu pegination -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 text-center menu-pegination wow fadeInUp">
                                    <ul>
                                        <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="active"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
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
                    <img src="images/menu-popup.png" alt="Menu image">
                </figure>
                
                <!--inner starts-->
                <div class="inner">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 top text-sp">
                            <span class="price pull-right">$25.99</span>
                            <h3><?php echo $item['title']; ?>
                                <span><?php echo $item['sub_title']; ?> </span>
                            </h3>
                        </div>

                        <div class="col-xs-12 col-sm-12"><hr></div>

                        <div class="col-xs-12 col-sm-12 content">
                           <p>
                               <?php echo $item['text']; ?>
                            </p>
                        </div>

                        <div class="col-xs-12 col-sm-6 ingredients">
                            <h6>INGREDIENTS</h6>
                            <ul>
                                
                                <?php foreach($ingridents as $ing) { ?>
                                    <li><?php echo $ing['title']; ?> </li>
                                <?php } ?>
                                
                              
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <h6>NUTRITION FACTS</h6>
                            
                            <div class="facts-table">                                
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><span>Calories</span></td>
                                            <td><span>800</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Proteins</span></td>
                                            <td><span>90g</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Fats</span></td>
                                            <td><span>48g</span></td>
                                        </tr>
                                        <tr>
                                            <td><span>Carbohydrates</span>  </td>
                                            <td><span>67g</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--inner ends-->

                <a href="#" class="btn btn-big hvr-wobble-skew"> ADD TO CART </a>
                
              </div>
            </div>
            <!--model content ends-->
          </div>
        </div>
        <!--model ends-->
<script>

    $('#search').keypress(function (e) {
        if (e.which == 13) {
            $('#itemForm').submit();
        }
    });




</script>