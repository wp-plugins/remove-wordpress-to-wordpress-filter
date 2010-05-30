=== Remove Wordpress to WordPress filter ===
Contributors: tomthewebmaster
Tags: filter, filters, WordPress, Wordpress
Requires at least: 3.0
Tested up to: 3.0
Stable tag: 1.0

In WordPress 3.0, a default filter changes all instances of "Wordpress" (note the small "p") in posts, titles, and comments to "WordPress". This turns the filter off.

== Description ==

In WordPress 3.0, <a href="http://core.trac.wordpress.org/changeset/14996">a default filter</a> changes all instances of "Wordpress" in posts, titles, and comments to "WordPress". <a href="http://core.trac.wordpress.org/ticket/13583">For various reasons</a>, such as preserving spelling in existing posts and comments, a blog owner may want to turn this filter off. That is what this plugin does.

Simply upload the plugin files to your WordPress plugins folder, activate it on your blog's Plugin administration page, and you are set!

It should be noted that this plugin REQUIRES WordPress version 3.0 or later; and also that it makes use of the `remove_filter()` function, which <a href="http://codex.wordpress.org/Function_Reference/remove_filter">Codex documentation</a> warns could possibly disable additional filters unintentionally. If you have any problems or questions, feel free to <a href="http://tomlany.net/2010/05/wordpress-to-wordpress/">leave a comment on my website</a>, and I will respond as I have time.