<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- ============== Banner starts ============== -->
<section class="banner banner-image">
    <div class="bannerwrap">
        <figure><img src="<?php echo base_url('/'); ?>/assets/themes/default/images/menu-bkg.png" alt="Program Banner" /></figure>
        <div class="banner-text text-center">
            <h1 class="text-uppercase">SELECT A PROGRAM TO FIT<br /><strong>YOUR LIFESTYLE</strong></h1>
        </div>
    </div>
</section>
<!-- ============== Baner ends ============== -->

<main> <!-- main content starts -->
    <!-- ============== Features block starts ============== -->
    <section class="block features-block">
        <div class="container">
            <div class="top-text text-center wow fadeInUp">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</div>
            <div class="row">



                <?php foreach($programs as $p) { ?>

                    <div class="col-xs-12 col-sm-4 features-item wow fadeInUp">
                        <div class="feature-item-wrap text-center">
                            <figure><a href="<?php echo site_url('programSingle?id=').$p['id']; ?>"><img class="img-responsive program-icon" src="<?php echo base_url('/').'/administrator/uploads/'.$p['icon'] ?>" alt="Icon" /></a></figure>
                            <h5><a href="#"><?php echo $p['title']; ?></a></h5>
                            <p><?php echo $p['text']; ?></p>
                            <a href="<?php echo site_url('programSingle?id=').$p['id']; ?>" class="btn hvr-wobble-horizontal">learn more</a>
                        </div>
                    </div>

                <?php } ?>


            </div>
        </div>
    </section>
    <!-- ============== Features block starts ============== -->

    <!-- ============== Body banner starts ============== -->
    <section class="parallax-block wow fadeInUp">
        <div class="parallax-block-text text-right">
            <div class="container">
                <h2 class="text-capitalize text-lt text-sp">NOT SURE WHICH PROGRAM<br />TO CHOOSE?</h2>
                <a class="btn border-btn-big hvr-wobble-horizontal text-sp">let us help</a>
            </div>
        </div>
    </section>
    <!-- ============== Body banner ends ============== -->

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

