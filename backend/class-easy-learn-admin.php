<?php

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

if (!class_exists('TwinkleSMTPAdmin')) {
    class TwinkleSMTPAdmin
    {


        public $utils;
        public $db;

        public function __construct()
        {
            $this->utils = new TwinkleSMTPUtils();

            add_action("admin_menu", array($this, 'twinkle_smtp_admin_menu'));
            add_action('admin_enqueue_scripts', array($this, 'twinkle_smtp_admin_enqueue'));
            add_action( 'plugin_action_links_' . EASY_LEARN_BASE_PATH, array( $this, 'twinkle_smtp_action_links') );
            $this->db = new TwinkleSMTPDB($this);
            new TwinkleSMTPAdminAjax($this);
        }



        function twinkle_smtp_action_links($links) {
            $settings_url = add_query_arg( 'page', 'twinkle-smtp', get_admin_url() . 'admin.php' );
            $setting_arr = array('<a href="' . esc_url( $settings_url ) . '">Dashboard</a>');
            $links = array_merge($setting_arr, $links);
            return $links;
        }

        function twinkle_smtp_admin_menu()
        {
            $icon_url = EASY_LEARN_IMG_DIR . "twinkle_smtp_icon.svg";
            add_menu_page("EasyLearn", "EasyLearn", 'manage_options', "easy-learn", array($this, 'twinkle_smtp_admin_dashboard'), $icon_url, 6);
        }


        function twinkle_smtp_admin_enqueue( $page )
        {
            if($page == "toplevel_page_twinkle-smtp"){
                $this->utils->enqueue_style('admin', 'admin.css');
                $this->utils->enqueue_script('analytics', 'analytics.js', array('jquery'));
                $this->utils->enqueue_script('settings', 'settings.js', array('jquery'));
                $this->utils->enqueue_script('admin', 'admin.js', array('jquery'));
            }

        }



        function twinkle_smtp_admin_dashboard()
        {
            include_once EASY_LEARN_PATH . "backend/templates/dashboard.php";
        }

    }
}


new TwinkleSMTPAdmin();