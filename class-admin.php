<?php
define("PLUGIN_NAME","Pocket Read it Later Button");
define("PLUGIN_TAGLINE","This plugin lets you easily add a Pocket Read it Later button to your WordPress blog via a shortcode.");
define("PLUGIN_URL","http://3doordigital.com/wordpress/plugins/getpocket-read-it-later-button/");
define("EXTEND_URL","http://wordpress.org/extend/plugins/getpocket/");
define("AUTHOR_TWITTER","alexmoss");
define("DONATE_LINK","http://3doordigital.com/go/getpocket-paypal/");

add_action('admin_menu', 'show_getpocket_options');
function show_getpocket_options() {
	add_options_page('Pocket Read it Later Button Instructions', 'Pocket Read it Later Button', 'manage_options', 'getpocket', 'getpocket_options');
}

function getpocket_fetch_rss_feed() {
    include_once(ABSPATH . WPINC . '/feed.php');
	$rss = fetch_feed("http://3doordigital.com/feed");
	if ( is_wp_error($rss) ) { return false; }
	$rss_items = $rss->get_items(0, 3);
    return $rss_items;
}

// ADMIN PAGE
function getpocket_options() {
    wp_register_style( 'getpocketStylesheet', plugins_url('admin.css', __FILE__) );
 wp_enqueue_style( 'getpocketStylesheet' );
?>
   <div class="pea_admin_wrap">
        <div class="pea_admin_top">
            <h1><?php echo PLUGIN_NAME?> <small> - <?php echo PLUGIN_TAGLINE?></small></h1>
        </div>

        <div class="pea_admin_main_wrap">
            <div class="pea_admin_main_left">
                <div class="pea_admin_signup">
                    Want to know about updates to this plugin without having to log into your site every time? Want to know about other cool plugins we've made? Add your email and we'll add you to our very rare mail outs.

                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                    <form action="http://peadig.us5.list-manage2.com/subscribe/post?u=e16b7a214b2d8a69e134e5b70&amp;id=eb50326bdf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="pea_admin_green">Sign Up!</button>
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>	<div class="clear"></div>
                    </form>
                    </div>

                    <!--End mc_embed_signup-->
                </div>
<br /><br />
               <div class="pea_admin_box">
			<h3 class="title">Using the Shortcode</h3>
			<table class="form-table">
				<tr valign="top"><td>
<p>You can insert the badge/icon manually in any page or post or template by simply using the shortcode <strong>[getpocket]</strong>. To enter the shortcode directly into templates using PHP so they appear on all pages and/or posts, enter <strong>echo do_shortcode('[getpocket]');</strong></p>
<p>Here's an example of using the shortcode:<br><code>[getpocket]</code></p>
<p>You can also insert the shortcode directly into your theme with PHP:<br><code>&lt;?php echo do_shortcode('[getpocket]'); ?&gt;</code>

					</td>
				</tr>
			</table>
</div>

</div>
            <div class="pea_admin_main_right">
                <div class="pea_admin_logo">

            <a href="http://3doordigital.com/?utm_source=<?php echo $domain; ?>&utm_medium=referral&utm_campaign=Pocket%2BButton%2BAdmin" target="_blank"><img src="<?php echo plugins_url( '3dd-logo.png' , __FILE__ ); ?>" width="250" height="92" title="3 Door Digital"></a>

                </div>


                <div class="pea_admin_box">
                    <h2>Like this Plugin?</h2>
<a href="<?php echo EXTEND_URL; ?>" target="_blank"><button type="submit" class="pea_admin_green">Rate this plugin	&#9733;	&#9733;	&#9733;	&#9733;	&#9733;</button></a><br><br>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like" data-href="<?php echo PLUGIN_URL; ?>" data-send="true" data-layout="button_count" data-width="250" data-show-faces="true"></div>
                    <br>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo PLUGIN_URL; ?>" data-text="Just been using <?php echo PLUGIN_NAME; ?> #WordPress plugin" data-via="<?php echo AUTHOR_TWITTER; ?>" data-related="WPBrewers">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <br>
<a href="http://bufferapp.com/add" class="buffer-add-button" data-text="Just been using <?php echo PLUGIN_NAME; ?> #WordPress plugin" data-url="<?php echo PLUGIN_URL; ?>" data-count="horizontal" data-via="<?php echo AUTHOR_TWITTER; ?>">Buffer</a><script type="text/javascript" src="http://static.bufferapp.com/js/button.js"></script>
<br>
                    <div class="g-plusone" data-size="medium" data-href="<?php echo PLUGIN_URL; ?>"></div>
                    <script type="text/javascript">
                      window.___gcfg = {lang: 'en-GB'};

                      (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                    <br>
                    <su:badge layout="3" location="<?php echo PLUGIN_URL?>"></su:badge>
                    <script type="text/javascript">
                      (function() {
                        var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
                        li.src = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//platform.stumbleupon.com/1/widgets.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
                      })();
                    </script>
                </div>

<center><a href="<?php echo DONATE_LINK; ?>" target="_blank"><img class="paypal" src="<?php echo plugins_url( 'paypal.gif' , __FILE__ ); ?>" width="147" height="47" title="Please Donate - it helps support this plugin!"></a></center>

                <div class="pea_admin_box">
                    <h2>About the Author</h2>

                    <?php
                    $default = plugins_url( 'noAvatar.gif' , __FILE__ );
                    $size = 70;
                    $alex_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( "alex@peadig.com" ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
                    ?>

                    <p class="pea_admin_clear"><img class="pea_admin_fl" src="<?php echo $alex_url; ?>" alt="Alex Moss" /> <h3>Alex Moss</h3><br><a href="https://twitter.com/alexmoss" class="twitter-follow-button" data-show-count="false">Follow @alexmoss</a>
<div class="fb-subscribe" data-href="https://www.facebook.com/alexmoss1" data-layout="button_count" data-show-faces="false" data-width="220"></div>
</p>
                    <p class="pea_admin_clear">Alex Moss is the Co-Founder and Technical Director of 3 Door Digital. With offices based in Manchester, UK and Tel Aviv, Israel he manages WordPress development as well as technical aspects of digital consultancy. He has developed several WordPress plugins (which you can <a href="http://3doordigital.com/wordpress/plugins/?utm_source=<?php echo $domain; ?>&utm_medium=referral&utm_campaign=Pocket%2BButton%2BAdmin" target="_blank">view here</a>) totalling over 200,000 downloads.</p>
</div>

                <div class="pea_admin_box">
                    <h2>More from 3 Door Digital</h2>
    <p class="pea_admin_clear">
                    <?php
$getpocketfeed = getpocket_fetch_rss_feed();
                echo '<ul>';
                foreach ( $getpocketfeed as $item ) {
			    	$url = preg_replace( '/#.*/', '', esc_url( $item->get_permalink(), $protocolls=null, 'display' ) );
					echo '<li>';
					echo '<a href="'.$url.'?utm_source=<?php echo $domain; ?>&utm_medium=referral&utm_campaign=Pocket%2BButton%2BRSS">'. esc_html( $item->get_title() ) .'</a> ';
					echo '</li>';
			    }
                echo '</ul>';
                    ?></p>
                </div>


            </div>
        </div>
    </div>



<?php
}

?>