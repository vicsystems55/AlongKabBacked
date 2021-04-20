<?php
/*
Project         :   Admitro – Laravel UI Admin Template 
@package        :   Laravel
Laravel Version :   7.16.1
PHP Version     :   7.4.9
Create Date     :   10/09/2020
Copyright       :   Spruko Technologies Private Limited
Author          :   SprukoSoft
Author URL      :   https://themeforest.net/user/sprukosoft
Support         :   support@spruko.com
License         :   Licensed under ThemeForest Licence
*/

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
