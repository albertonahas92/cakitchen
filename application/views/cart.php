<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main ng-controller="CartController">
    <div class="block cart-steps">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <ul class="text-center steps">
                        <li class="wow fadeInUp step1 current animated"
                            style="visibility: visible; animation-name: fadeInUp;"><a href="#"
                                                                                      class="hvr-wobble-top"><span>1</span>
                                Shopping Cart</a></li>
                        <li class="wow fadeInUp step2 animated" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="#" class="hvr-wobble-top"><span>2</span> Checkout</a></li>
                        <li class="wow fadeInUp step3 animated" style="visibility: visible; animation-name: fadeInUp;">
                            <a href="#" class="hvr-wobble-top"><span>3</span> Order Complete</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--steps ends-->

    <div class="container" style="width: 100%;">

        <div class="row block">
            <!--shop table-->
            <div class="col-xs-12 col-sm-12  shop-list">
                <table class="shop_table wow">
                    <thead>
                    <tr>
                        <th class="product-remove">&nbsp;</th>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-subtotal">Total</th>
                    </tr>
                    </thead>

                    <tbody>
                    <!--single product-->
                    <tr ng-repeat="item in cart">
                        <td class="product-remove" data-title="Action">
                            <a href="#" ng-click="remove(item)" class="hvr-wobble-top"><img
                                        src="<?php echo base_url('/'); ?>/assets/themes/default/images//close-icon-small.svg"
                                        alt="Close icon"></a>
                            <!--                                                            <a href="#" class="hvr-wobble-top"><img src="-->
                            <?php //echo base_url('/'); ?><!--/assets/themes/default/images//pencil-icon-small.svg" alt="Edit icon"></a>-->
                        </td>

                        <td class="product-name" data-title="Product">
                            <figure class="product-thumb"><img
                                        src="<?php echo base_url('/'); ?>administrator/uploads/{{item.image}}"
                                        alt="Product thumb"></figure>
                            <div class="prod-disc">
                                <h6 class="text-sp">{{item.title}}</h6>
                                <span class="text-lt text-sp">{{item.sub_title}}</span>

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
                            </div>

                        </td>
                        <td class="product-price" data-title="Price">
                            <h6>${{item.price}}</h6>
                        </td>
                        <td class="product-quantity" data-title="Quantity">
                            <span ng-click="item.quantity=item.quantity-1"
                                  class="altera decrescimo hvr-wobble-bottom"><img
                                        src="<?php echo base_url('/'); ?>/assets/themes/default/images//minus-small.svg"
                                        alt="Minus icon"></span>
                            <input type="text" ng-model="item.quantity" class="txtacrescimo"/>
                            <span ng-click="item.quantity=item.quantity+1"
                                  class="altera acrescimo hvr-wobble-bottom"><img
                                        src="<?php echo base_url('/'); ?>/assets/themes/default/images//plus-small.svg"
                                        alt="Plus icon"></span>
                        </td>

                        <td class="product-subtotal" data-title="Sub Total"><h6>${{item.price * item.quantity}}</h6>
                        </td>
                    </tr>
                    <!--single product ends-->


                    </tbody>
                </table>
            </div>
            <!-- shop table ends-->
        </div>
        <div class="row ">
            <!-- nutritation-->
            <div class="col-xs-12 col-sm-5 col-sm-offset-1  wow fadeInLeft">
                <div class="nutrition-fact">
                    <h6>Nutrition Facts Calculated</h6>
                    <div class="facts-table">
                        <table>
                            <tbody>
                            <tr>
                                <td><span>Calories</span></td>
                                <td><span>1600</span></td>
                            </tr>
                            <tr>
                                <td><span>Proteins</span></td>
                                <td><span>180g</span></td>
                            </tr>
                            <tr>
                                <td><span>Fats</span></td>
                                <td><span>96g</span></td>
                            </tr>
                            <tr>
                                <td><span>Carbohydrates</span></td>
                                <td><span>134g</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- nutritation ends-->

            <!-- cart proceed -->
            <div class="col-xs-12 col-sm-4 col-sm-offset-1 text-right wow fadeInRight">


                <div class="cart_totals">
                    <h4>
                        <span>Total</span>
                        $28.0
                    </h4>
                </div>

                <div class="proceed-to-checkout">
                    <a href="#" class="btn hvr-wobble-top">CHECKOUT</a>
                </div>
            </div>
            <!-- cart proceed ends-->
        </div>
        <br><br><br>

    </div>
</main>