<?php
/*
Plugin Name: Remove WordPress to Wordpress filter
Plugin URI: http://tomlany.net/2010/05/wordpress-to-wordpress/
Description: In WordPress 3.0, a filter changes all instances of "Wordpress" in posts, titles, and comments to "WordPress". This turns the filter off.
Version: 1.0
Author: Tom Lany
Author URI: http://tomlany.net/
License: GPL
*/

remove_filter('the_content','capital_P_dangit');
remove_filter('the_title','capital_P_dangit');
remove_filter('comment_text','capital_P_dangit');

?>