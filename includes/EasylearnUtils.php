<?php

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

if ( ! class_exists( 'TwinkleSMTPUtils' ) ) {
    class TwinkleSMTPUtils
    {

        function enqueue_style( $name, $src = '', $deps = array(), $ver = TWINKLE_SMTP_VERSION, $media = 'all' ) {
            $handle = "twinkle-smtp-".$name;
            $src = TWINKLE_SMTP_CSS_DIR . $src;
            _wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );
            $wp_styles = wp_styles();
            if ( $src ) {
                $_handle = explode( '?', $handle );
                $wp_styles->add( $_handle[0], $src, $deps, $ver, $media );
            }
            $wp_styles->enqueue( $handle );
        }

        function enqueue_script( $name, $src = '', $deps = array(), $ver = TWINKLE_SMTP_VERSION, $in_footer = false ) {
            $handle = "twinkle-smtp-".$name;
            $src = TWINKLE_SMTP_JS_DIR . $src;
            _wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $handle );
            $wp_scripts = wp_scripts();
            if ( $src || $in_footer ) {
                $_handle = explode( '?', $handle );
                if ( $src ) {
                    $wp_scripts->add( $_handle[0], $src, $deps, $ver );
                }
                if ( $in_footer ) {
                    $wp_scripts->add_data( $_handle[0], 'group', 1 );
                }
            }
            $wp_scripts->enqueue( $handle );
        }


    }
}
