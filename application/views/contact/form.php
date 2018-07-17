<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<main>
    <!-- ============== Map block starts ============== -->
    <section class="map-block">
        <div class="container">
            <div class="map-wrap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.131452472411!2d110.38184681425321!3d-7.775883279296736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ca2277b3d5%3A0x5de05892db468c4d!2sUniversitas+Negeri+Yogyakarta!5e0!3m2!1sen!2snp!4v1471239219170" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- ============== Map block ends ============== -->

    <!-- ============== Contact form block starts ============== -->
    <section class="block contact-form">
        <div class="container">
            <h2 class="wow fadeInUp">WE ARE EXCITED TO HEAR FROM YOU</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-7 contact-left-text wow fadeInLeft">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                    <div class="location">
                        <img src="images/map-icon.png" alt="Map icon" /> Jalan Gotong Royong, Karangwaru, Tegalrejo, Kota<br />Yogyakarta, Daerah Istimewa Yogyakarta, Indonesia
                    </div>
                    <div class="phone">
                        <img src="images/phone-icon.png" alt="Phone icon" /> TEL : <a class="tel-link" href="tel:+622748877999">(+62274) 8877999</a><br /><a class="mailto-link" href="mailto:hello@madang.store" target="_top">hello@madang.store</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 contact-right-form wow fadeInRight">
                    <?php echo form_open('', array('role'=>'form')); ?>
                        <fieldset>   <?php echo form_input(array('name'=>'name', 'value'=>set_value('name'),'placeholder'=>'Your Name')); ?></fieldset>
                        <fieldset> <?php echo form_input(array('name'=>'email', 'value'=>set_value('name'),'placeholder'=>'Your Email')); ?></fieldset>
                        <fieldset>  <?php echo form_textarea(array('name'=>'message', 'value'=>set_value('message'),'placeholder'=>'Your Message')); ?></fieldset>
                        <fieldset><button class="btn">submit</button></fieldset>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== Contact form block ends ============== -->
</main>


