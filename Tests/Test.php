<?php
set_include_path(realpath("../../"));
require_once("Db/Mongodb/Collection/Abstract.php");

class modeltest extends Db_Mongodb_Collection_Abstract
{
    protected $_name     = "test";
}

class Ist extends Db_Mongodb_Collection_Abstract
{
    protected $_name = "ist";
}

class Dong extends Db_Mongodb_Collection_Abstract
{
        protected $_name = "dong";
}

class MarkA extends Db_Mongodb_Collection_Abstract
{
    protected $_name = "jen";
}

$config["dbname"] = "mark";
$config["username"] = "";
$config["password"] = "";
$config["host"]    = array("hostname"=>"localhost","port"=>27017);
//
//require_once("Zend/Loader/Autoloader.php");
//$autoload = Zend_Loader_Autoloader::getInstance();
//
//$mongo = new Db_Mongodb_Adapter($config);

$model = new MarkA($config);

$params["test"] = 'test';
$params["test2"] = 'aa';
$params["test3"] = 'bb';

print_r($model->getAdapter()->query("show dbs;"));exit;

echo $model->insert($params);
echo "\n \n";
//$par["test1"] = '1';
//$par["test2"] = '2';
$par["test"] = "test";
print_r($model->fetchAll($par, array("test","test2"), 5, array("test1"=>-1))->toArray());
//print_r($model->fetchAll($par, array("test1","test2"))->toArray());
