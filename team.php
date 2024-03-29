<?php
require dirname(__FILE__).'/source/include/include_core.php';
//Template setting
$options = array(
    'template_dir' => 'template/',
    'css_dir' => 'static/css/', //Set css file's cache
    'js_dir' => 'static/js/', //Set js file's cache
    'cache_dir' => 'data/cache/',
    'auto_update' => true,
    'cache_lifetime' => 0,
    'cache_db' => false
);

$template = Template::getInstance();
$template->setOptions($options);

//Include template file
include($template->loadTemplate('header_common.html'));
include($template->loadTemplate('view_team.html'));
include($template->loadTemplate('footer_common.html'));
