<?php
/**
 * @package Return_to login fix
 * @version 1.0
 */
/*
Plugin Name: Return_to login fix
Plugin URI: http://wordpress.org/extend/plugins/return_to-login-fix/
Description: This plugin is for all who got problems logging in from time to time, most commonly because of memeory errors (only one error is fixed currently). This plugin checks if the return_to POST is set when loggin in, if it is set, the plugin will overwrite the normal procedure for redirecting and redirect before the system does. 
This way as admin or user, does not get problems when logging in because of return_to and memory errors.
Author: Kim Vinberg
Version: 1.0
Author URI: http://dicm.dk/
*/

 
function do_anything() {
$url = get_bloginfo("url", "raw");

//echo "".$_POST['redirect_to']." = $url/wp-admin";

$redirect_to = urldecode($_POST['redirect_to']);

if(isset($redirect_to) && strstr($redirect_to,"wp-admin") == TRUE) {
header("Location: $url/wp-admin/");
exit;
}

}
add_action('wp_login', 'do_anything');

?>