<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://ashiwawa.com/
 * @since             1.0.0
 * @package           Jwcalculator
 *
 * @wordpress-plugin
 * Plugin Name:       Jiwasraya Calculator
 * Plugin URI:        http://ashiwawa.com/
 * Description:       Calculate people best package for insurance
 * Version:           1.0.0
 * Author:            vekaputra
 * Author URI:        http://ashiwawa.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jwcalculator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jwcalculator-activator.php
 */
function activate_jwcalculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jwcalculator-activator.php';
	Jwcalculator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jwcalculator-deactivator.php
 */
function deactivate_jwcalculator() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jwcalculator-deactivator.php';
	Jwcalculator_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jwcalculator' );
register_deactivation_hook( __FILE__, 'deactivate_jwcalculator' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jwcalculator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jwcalculator() {

	$plugin = new Jwcalculator();
	$plugin->run();

}
run_jwcalculator();
