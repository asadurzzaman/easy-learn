<?php
/**
 * Plugin Name:       EasyLearn
 * Plugin URI:        https://easylearn.com
 * Description:       Build Multi-step Guided Selling Process & Smart Forms to Convert 10X More Traffic Into Leads & New Customers.
 * Version:           1.0.7
 * Author:            WooFusion
 * Author URI:        https://easylearn.com
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       easy-learn
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'EASY_LEARN_VERSION', '0.0.1' );
defined( 'EASY_LEARN_PATH' ) or define( 'EASY_LEARN_PATH', plugin_dir_path( __FILE__ ) );
defined( 'EASY_LEARN_URL' ) or define( 'EASY_LEARN_URL', plugin_dir_url( __FILE__ ) );
defined( 'EASY_LEARN_BASE_FILE' ) or define( 'EASY_LEARN_BASE_FILE', __FILE__ );
defined( 'EASY_LEARN_BASE_PATH' ) or define( 'EASY_LEARN_BASE_PATH', plugin_basename(__FILE__) );
defined( 'EASY_LEARN_IMG_DIR' ) or define( 'EASY_LEARN_IMG_DIR', plugin_dir_url( __FILE__ ) . 'assets/img/' );
defined( 'EASY_LEARN_CSS_DIR' ) or define( 'EASY_LEARN_CSS_DIR', plugin_dir_url( __FILE__ ) . 'assets/css/' );
defined( 'EASY_LEARN_JS_DIR' ) or define( 'EASY_LEARN_JS_DIR', plugin_dir_url( __FILE__ ) . 'assets/js/' );


require_once EASY_LEARN_PATH . 'includes/EasylearnUtils.php';
require_once EASY_LEARN_PATH . 'includes/EasyLearnDB.php';
require_once EASY_LEARN_PATH . 'backend/class-easy-learn-ajax.php';
require_once EASY_LEARN_PATH . 'backend/class-easy-learn-admin.php';

