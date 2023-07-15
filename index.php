<?php 


$site_path = realpath(dirname(__FILE__));
define('BASE_PATH', $site_path);

include_once 'assets/icons/paths.php';
include_once 'config.php';

include_once 'src/pages/home/index.php'; 

?>