<?php 
require_once __DIR__."/../vendor/autoload.php";
use DBlite\QueryBuilder;
use DBlite\Connect;
use DBlite\DBlite;

$config = [
    // 预留配置,可不填写,目前仅支持mysql
    'dbtype' => 'MYSQL',
    // 'read' => [
    //     'host'   => '127.0.0.1',
    //     'port'   => 3306,
    //     'dbname' => 'databasesname',
        
    // ],
    'write' => [
        'host'   => '127.0.1.1',
        'port'   => 3301,
        'dbname' => 'write',
        'user'   => 'root', 
        'pswd'   => 'root',
        
    ], 
    // 相同用户名和密码,其他配置相同也可以
    
    
];

try{
$conec = DBlite::config($config);
}catch(\Exception $e)
{
var_dump($e->getMessage());
}

// $test = new QueryBuilder;
// $test->table('test as tb1')->where([['key1','like','%www%']])->where('key2','>',2)->get();
// 目标Sql 
// select `key`, `key2` from test where `key1` like ? and `key2` > ?;

// var_dump(strpos('as.dtest', '.',1) === false );
// var_dump($test);