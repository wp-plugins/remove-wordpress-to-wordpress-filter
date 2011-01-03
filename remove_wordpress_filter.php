<?php
/*
Plugin Name: Remove Wordpress to WordPress filter
Plugin URI: http://tomlany.net/2010/05/wordpress-to-wordpress/
Description: This turns off the default filter changes all instances of "Wordpress" to "WordPress".
Version: 1.1
Author: Tom Lany
Author URI: http://tomlany.net/
License: GPL
*/

// For WordPress 3.0
remove_filter('the_content','capital_P_dangit');
remove_filter('the_title','capital_P_dangit');
remove_filter('comment_text','capital_P_dangit');

// For WordPress 3.0.1 and later
remove_filter('the_content','capital_P_dangit',11);
remove_filter('the_title','capital_P_dangit',11);
remove_filter('comment_text','capital_P_dangit',11);

?>