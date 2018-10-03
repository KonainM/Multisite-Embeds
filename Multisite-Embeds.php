<?php
/*
 * Plugin Name: Multisite Embeds
 * Plugin URI: https://github.com/KonainM/Multisite-Embeds.git
 * Description: This plugin enables site admins to use various embed tags in a WordPress multisite.
 * Version: 1.0
 * Author: Konain Mukadam
 * Author URI: https://github.com/KonainM/Multisite-iframes.git
 */

add_filter('wp_kses_allowed_html', 'multisite_iframes', 1, 2 );

function multisite_iframes($allowedposttags, $miframes) {

	switch ( $miframes ) {
		case 'post' :
			$allowedposttags["iframe"] = array(
				"allowfullscreen" => array(),
				"frameborder" => array(),
				"height" => array(),
				"src" => array(),
				"width" => array(),
				"title" => array(),
				"id" => array(),
				"class" => array(),
				"name" => array(),
				"aria-label" => array(),
				"aria-labelledby" => array(),
				"role" => array(),
				"srcdoc" => array(),
			);
			$allowedposttags["object"] = array(
				"height" => array(),
				"width" => array(),
				"id" => array(),
				"class" => array(),
				"name" => array(),
				"aria-label" => array(),
				"aria-labelledby" => array(),
				"role" => array(),
			);
			$allowedposttags["param"] = array(
				"name" => array(),
				"value" => array(),
				"id" => array(),
				"class" => array(),
				"name" => array(),
				"aria-label" => array(),
				"aria-labelledby" => array(),
				"role" => array(),
			);
			$allowedposttags["embed"] = array(
				"src" => array(),
				"type" => array(),
				"allowfullscreen" => array(),
				"allowscriptaccess" => array(),
				"height" => array(),
				"width" => array(),
				"title" => array(),
				"id" => array(),
				"class" => array(),
				"name" => array(),
				"aria-label" => array(),
				"aria-labelledby" => array(),
				"role" => array(),
			);
			return $allowedposttags;
			break;
			default:
			return $allowedposttags;
	}
}
?>
