<?php
/*
Plugin Name: Remove Wordpress to WordPress filter
Plugin URI: http://tomlany.net/2010/05/wordpress-to-wordpress/
Description: In WordPress 3.0, a filter changes all instances of "Wordpress" in posts, titles, and comments to "WordPress". This turns the filter off.
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