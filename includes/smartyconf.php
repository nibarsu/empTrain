<?php
 /**
 * Example Application

 * @package Example-application
 */

require 'smarty/libs/Smarty.class.php';
$webroot="/var/www";
$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->setTemplateDir($webroot."/templates/");                                                
$smarty->setCompileDir($webroot."/templates_c/");
$smarty->setCacheDir($webroot."/cache/");

