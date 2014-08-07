<?php
/**
 * Plugin Name: WP ENV Auto-privacy
 * Plugin URI: 
 * Author: Evan Mattson
 * Author URI: http://aaemnnost.tv
 * Description: Automatically "discourages search engines from indexing" for non-production environments.
 * Version: 0.1
 */


if ( defined('WP_ENV') && 'production' !== WP_ENV )
{
	// short circuit with a 0 value - non-public/noindex 
	add_filter( 'pre_option_blog_public', '__return_zero' );

	// protect dev value from being saved
	add_filter( 'pre_update_option_blog_public', '__return_zero' );
}