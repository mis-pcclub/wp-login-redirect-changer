<?php
/*
Plugin Name: WP Login Redirect Changer
Description: Change WordPress login redirect url
Version: 1.0
Author: Combu
Author URI: https://combu.dev/
License: GPLv3
*/

function admin_default_page() {
  return home_url();
}
add_filter('login_redirect', 'admin_default_page');

?>
