<?php
/**
 * Plugin Name:     Add Manage Patterns Menu
 * Plugin URI:      https://github.com/wildoperation/Add-Manage-Patterns-Menu-WordPress-Plugin
 * Description:     Creates a 'Manage Patterns' menu item under the Appearance menu.
 * Version:         1.0.0
 * Author:          Wild Operation
 * Author URI:      https://wildoperation.com
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     add-manage-patterns-menu
 *
 * @package WordPress
 * @subpackage Add Manage Patterns Menu
 * @since 1.0.0
 * @version 1.0.0
 */

/* Abort! */
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

new \WOAMPM\Vendor\WOWPRB\WPPluginReviewBug( __FILE__ );

/**
 * Add 'Manage Patterns' menu item under Appearance.
 */
add_action(
	'admin_menu',
	function () {
		add_submenu_page(
			'themes.php',
			apply_filters( 'woaddmp_page_title', 'Patterns' ),
			apply_filters( 'woaddmp_menu_title', 'Manage Patterns' ),
			apply_filters( 'woaddmp_menu_capability', 'edit_posts' ),
			'edit.php?post_type=wp_block'
		);
	}
);
