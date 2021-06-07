<?php
   /*
   Plugin Name: Custom Login
   Plugin URI: https://websplash.pro/
   description: Nice and cool login page
   Version: 1.0
   Author: YM
   Author URI: https://websplash.pro/
   License: GPL2
   */

function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(//sgd.com.au/sgd-custom-login/logo-main-white.png);
        height:100px;
        width:300px;
        background-size: 110px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );


function wpb_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'wpb_login_logo_url' );
 
function wpb_login_logo_url_title() {
    return 'SGD';
}
add_filter( 'login_headertitle', 'wpb_login_logo_url_title' );


function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', '//sgd.com.au/sgd-custom-login/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
?>
