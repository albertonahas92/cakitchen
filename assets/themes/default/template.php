<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Default Public Template
 */
?>
<script type="text/javascript">
    base_url = '<?=base_url()?>';
</script>
<html ng-app="caKitchenApp" lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v=<?php echo $this->settings->site_version; ?>">
    <link rel="icon" type="image/x-icon" href="/favicon.ico?v=<?php echo $this->settings->site_version; ?>">
    <title><?php echo $page_title; ?> - <?php echo $this->settings->site_name; ?></title>

    <!-- favicon -->


    <!-- style lists -->



    <?php // CSS files ?>
    <?php if (isset($css_files) && is_array($css_files)) : ?>
        <?php foreach ($css_files as $css) : ?>
            <?php if ( ! is_null($css)) : ?>
                <?php $separator = (strstr($css, '?')) ? '&' : '?'; ?>
                <link rel="stylesheet" href="<?php echo $css; ?><?php echo $separator; ?>v=<?php echo $this->settings->site_version; ?>"><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>




    <?php // Javascript files ?>
    <?php if (isset($js_files) && is_array($js_files)) : ?>
        <?php foreach ($js_files as $js) : ?>
            <?php if ( ! is_null($js)) : ?>
                <?php $separator = (strstr($js, '?')) ? '&' : '?'; ?>
                <?php echo "\n"; ?><script type="text/javascript" src="<?php echo $js; ?><?php echo $separator; ?>v=<?php echo $this->settings->site_version; ?>"></script><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if (isset($js_files_i18n) && is_array($js_files_i18n)) : ?>
        <?php foreach ($js_files_i18n as $js) : ?>
            <?php if ( ! is_null($js)) : ?>
                <?php echo "\n"; ?><script type="text/javascript"><?php echo "\n" . $js . "\n"; ?></script><?php echo "\n"; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>


    <!-- montserrat font embed -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /******* loader image before page load ******/
        .no-js #loader {display: none;}.js #loader { display: block; position: absolute; left: 100px; top: 0;}.se-pre-con {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url(images/Preloader_4.gif) center no-repeat #fff;}
    </style>
</head>
<body class="home-page home-version1-page">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '428630550886851',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.11'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));





    function statusChangeCallback(response){
        alert(response.status);



        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }

//        {
//            status: 'connected',
//                authResponse: {
//            accessToken: '...',
//                expiresIn:'...',
//            signedRequest:'...',
//            userID:'...'
//        }
//        }
    }

</script>

<!-- loader image before page load starts -->
<div class="se-pre-con"></div>
<!-- loader image before page load ends -->
<!-- main wrapper of the site starts -->
<div class="wrapper">

    <!-- ============== Header starts ============== -->
    <header>
        <div class="container">
            <div class="row">

                <!-- ============== Left logo block starts ============== -->
                <div class="col-xs-12 col-sm-3 logo-block">
                    <figure><a href="/home-version1.html"><img class="img-responsive" src="<?php echo base_url('/'); ?>/assets/themes/default/images/madang-logo.png" alt="CAKitchen Logo" /></a></figure>
                </div>
                <!-- ============== Left logo block ends ============== -->

                <!-- ============== Main navigation starts ============== -->
                <div class="col-xs-12 col-sm-7 menu-block">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse">
                                <ul class="nav navbar-nav text-right pull-right">
                                    <li class="active"><a href="<?php echo base_url('about')?>">About Us</a></li>
                                    <li><a href="<?php echo base_url('menu')?>">menu</a></li>
                                    <li><a href="<?php echo base_url('programs')?>">programs</a></li>
                                    <li><a href="<?php echo base_url('pricing')?>">pricing</a></li>
                                    <li><a href="<?php echo base_url('plan')?>">choose plan</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>

                <div  ng-controller="CartController" class="col-xs-12 col-sm-2 nav-cart">
                    <a href="#" data-toggle="modal"
                       data-target="#cartModal" class="btn border-btn-small cart-btn pull-right hvr-wobble-horizontal"><i class="fa fa-shopping-cart"></i> {{cart.length}} Items   </a>


                    <div class="modal fade menu-pop-up" id="cartModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                   <main>
<h2 class="text-center">Shopping Cart</h2>

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
                                                            <a href="#"  ng-click="remove(item)" class="hvr-wobble-top"><img src="<?php echo base_url('/'); ?>/assets/themes/default/images//close-icon-small.svg" alt="Close icon"></a>
<!--                                                            <a href="#" class="hvr-wobble-top"><img src="--><?php //echo base_url('/'); ?><!--/assets/themes/default/images//pencil-icon-small.svg" alt="Edit icon"></a>-->
                                                        </td>

                                                        <td class="product-name"  data-title="Product">
                                                            <figure class="product-thumb"><img src="<?php echo base_url('/'); ?>administrator/uploads/{{item.image}}" alt="Product thumb"></figure>
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
                                                                            <td><span>Carbohydrates</span>  </td>
                                                                            <td><span>{{item.carbohydrates}}g</span></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td class="product-price"  data-title="Price">
                                                            <h6>${{item.price}}</h6>
                                                        </td>
                                                        <td class="product-quantity"  data-title="Quantity">
                                                            <span ng-click="item.quantity=item.quantity-1" class="altera decrescimo hvr-wobble-bottom"><img src="<?php echo base_url('/'); ?>/assets/themes/default/images//minus-small.svg" alt="Minus icon"></span>
                                                            <input type="text" ng-model="item.quantity" class="txtacrescimo" />
                                                            <span ng-click="item.quantity=item.quantity+1" class="altera acrescimo hvr-wobble-bottom"><img src="<?php echo base_url('/'); ?>/assets/themes/default/images//plus-small.svg" alt="Plus icon"></span>
                                                        </td>

                                                        <td class="product-subtotal" data-title="Sub Total"><h6>${{item.price * item.quantity}}</h6></td>
                                                    </tr>
                                                    <!--single product ends-->


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- shop table ends-->
                                        </div>
                                        <div class="row ">
                                            <!-- nutritation-->
                                            <div class="col-xs-12 col-sm-12  wow fadeInLeft">
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
                                                                <td><span>Carbohydrates</span>  </td>
                                                                <td><span>134g</span></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- nutritation ends-->
                                        </div>

                                        <hr>
                                        <div class="row ">
                                            <!-- cart proceed -->
                                            <div class="col-xs-12 col-sm-6 col-sm-offset-1 text-left wow fadeInRight">


                                                <div class="cart_totals">
                                                    <h4>
                                                        <span>Total</span>
                                                        $28.0
                                                    </h4>
                                                </div>

                                                <div class="proceed-to-checkout">

                                                </div>
                                            </div>
                                            <!-- cart proceed ends-->
                                        </div>
                                        <a href="<?php echo base_url("cart"); ?>" class="btn hvr-wobble-top">CHECKOUT</a>

                                    </div>
</main>
                                    <!--inner ends-->



                                </div>
                            </div>
                            <!--model content ends-->
                        </div>
                    </div>

                </div>
                <!-- ============== Main navigation ends ============== -->

            </div>
        </div>
    </header>
    <!-- ============== Header ends ============== -->

    <?php // Main content ?>
    <?php echo $content; ?>

    <!-- ============== footer block starts ============== -->
    <footer>
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 footer-logo">
                        <figure><a href="#"><img class="img-responsive" src="<?php echo base_url('/'); ?>/assets/themes/default/images/madang-logo-white.png" alt="Footer logo" /></a></figure>
                    </div>
                    <div class="col-xs-12 col-sm-2 footer-social-links pull-right hidden-md hidden-lg hidden-xs">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr hvr-wobble-top"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 footer-menu">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 footer-links-col">
                                <span>about</span>
                                <ul>
                                    <li><a href="<?php echo base_url("about"); ?>">about us</a></li>
                                    <li><a href="<?php echo base_url("contact"); ?>">contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-3 footer-links-col">
                                <span>Programs</span>
                                <ul>
                                    <li><a href="<?php echo base_url("plan"); ?>">Plan</a></li>
                                    <li><a href="<?php echo base_url("pricing"); ?>">Pricing</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-3 footer-links-col">
                                <span>Menu</span>
                                <ul>
                                    <li><a href="<?php echo base_url("menu"); ?>">menu</a></li>
                                    <li><a href="<?php echo base_url("cart"); ?>">cart</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-12 col-sm-3 footer-links-col">
                                <span>home</span>
                                <ul>
                                    <li><a href="<?php echo base_url("welcome"); ?>">home</a></li>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-2 footer-social-links pull-right hidden-sm">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram hvr-wobble-top"></i></a></li>
                            <li><a href="#"><i class="fa fa-tumblr hvr-wobble-top"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-footer">
            <div class="container">
                <div class="copyright-text text-center">&copy; 2017-2018 CAKitchen, Inc. ALL RIGHT RESERVED.</div>
            </div>
        </div>
    </footer>
    <!-- ============== footer block starts ============== -->

</div>
<!-- main wrapper of the site ends -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script type="text/javascript">
//    var CFG = {
//        url: '<?php //echo $this->config->item('base_url');?>//',
//        token: '<?php //echo $this->security->get_csrf_hash();?>//'
//    };
//
//
//    $(document).ready(function($){
//        $.ajaxSetup({data: {token: CFG.token}});
//        $(document).ajaxSuccess(function(e,x) {
//            var result = $.parseJSON(x.responseText);
//            $('input:hidden[name="csrf_token"]').val(result.token);
//            $.ajaxSetup({data: {token: result.token}});
//        });
//    });

</script>
</body>
</html>