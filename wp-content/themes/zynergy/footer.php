<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marco
 */

?>

	</div><!-- #content -->
<?php $img_path = get_template_directory_uri( '/' ); ?>
	<footer id="colophon" class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="wrapper">
                    <a id="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $img_path.'/images/zynerye_init.svg' ?>" alt="Zynergy">
                    </a>
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="https://gtechsolution.us7.list-manage.com/subscribe/post?u=9465032801dd4a1dd69a1d74a&amp;id=da6d500d8c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <h3>REGISTER YOUR INTEREST</h3>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">First Name  <span class="asterisk">*</span>
                                    </label>
                                    <input type="text" placeholder="First Name" value="" name="FNAME" class="required" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
                                    </label>
                                    <input type="text" value="" name="LNAME" class="required" id="mce-LNAME" placeholder="Last Name" >
                                </div>
                                <div class="mc-field-group mc-field-group-email">
                                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                    </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9465032801dd4a1dd69a1d74a_da6d500d8c" tabindex="-1" value=""></div>
                                <div class="submit"><button type="submit" id="mc-embedded-subscribe" class="button">Submit</button></div>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="wrapper">
                    <span class="copyright">&copy; <?= date('Y')?> Zynergy Property All Rights Reserved</span>
                    <a id="dd" href="http://ddcreative.com.au/" target="_blank">Website by D&D Creative</a>
                    <a href="#" class="social-link" id="footer-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a id="footer-bottom-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo $img_path.'/images/zynergy_white_bg.svg' ?>" alt="Zynergy" >
                    </a>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
