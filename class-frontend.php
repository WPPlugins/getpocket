<?php

function getpocketshortcode() {
	$getpocket ='<!-- Pocket Read it Later Button: http://3doordigital.com/wordpress/plugins/getpocket-read-it-later-button/ -->
<div class="pocket">
<script type="text/javascript" src="http://readitlaterlist.com/button/single_v1.js"></script>
</div>';

  return $getpocket;
}
add_filter('widget_text', 'do_shortcode');
add_shortcode('getpocket', 'getpocketshortcode');
?>