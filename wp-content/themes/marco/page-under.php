<?php
/* Template Name: Coming Page */
get_header();
$img_path = get_template_directory_uri( '/' );

?>
    
<main>
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="logo">
                <img src="<?= $img_path.'/images/Marco.svg' ?>" alt="Marco">
            </div>
            <div class="inner-wrapper-container">
                <div class="top">
                    <h1>Grand opening 22<sup>ND</sup> January 2021</h1>
                </div>
                <div class="middle">
                    <h2>Subscribe our newsletter <img id="gift-box" src="<?= $img_path.'/images/gift-box.svg' ?>" alt="Marco"></h2>
                    <p>Register today to receive your <strong>FREE GIFT</strong> from Marco Fine Foods & Groceries</p>
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://marcofinefoods.us7.list-manage.com/subscribe/post?u=3229aeba97f46ad90350657c3&amp;id=e9a467706e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">First Name  <span class="asterisk">*</span>
                                    </label>
                                    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME"  placeholder="First Name" >
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">Last Name </label>
                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME"  placeholder="Last Name" >
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                    </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3229aeba97f46ad90350657c3_e9a467706e" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                            </div>
                        </form>
                    </div>

                    <!--End mc_embed_signup-->
                </div>
                <div class="bottom">
                    <ul>
                        <li>Fruit & Veg</li>
                        <li>Deli</li>
                        <li>Organic</li>
                        <li>Butcher</li>
                        <li>Groceries</li>
                        <li>Cafe</li>
                    </ul>
                    <div class="contact">
                        <div class="address">Shop 8, 830 Plenty Road, Reservoir</div>
                        <div class="email"><a href="mailto:info@marcofinefoods.com.au">E. Info@marcofinefoods.com.au</a></div>
                    </div>
                </div>
                <ul class="social-media">
                    <li><a href="https://www.instagram.com/marco_fine_foods/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/Marco-Fine-Foods-100857161907955" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
