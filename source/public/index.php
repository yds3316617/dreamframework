<?php  
use Core\FactoryManager;
define('ROOT_DIR', realpath(dirname(__FILE__).'/../').'/');
//define('BASE_URL', 'http://192.168.1.169/dreamFrameworkGithub/source/public');
define('BASE_URL', 'http://127.0.0.1/dreamFrameworkGithub/source/public');

/*smarty 变量配置*/
define('SMARTY_DIR',ROOT_DIR.'/Site/smarty/template/');
define('SMARTY_SYSPLUGINS_DIR',ROOT_DIR.'/Site/smarty/template/sysplugins/');
//模板目录
define('TEMPLATE_DIR',ROOT_DIR.'/data/template/');

define('COMPILE_DIR',ROOT_DIR.'/data/compile/');

//print_r(ROOT_DIR);exit;
include('../Core/FactoryManager.php');
include('../Core/DatabaseManager.php');
include('../Core/Api.php');
include('../Core/Tools.php');


$server = FactoryManager::singleCreateProduct('Server@Web');
//$server = FactoryManager::singleCreateProduct('KVStore@Core');
$server->initEnvironment();
$server->run();
