<?php
/**
 * The Comments template file
 *
**/
if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : 
endif;
if(!empty($post->post_password)) : 
	 if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) :
	 endif;
endif; 
?>

<div class="clearfix"></div>
