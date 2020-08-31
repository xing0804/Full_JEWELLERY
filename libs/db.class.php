<?php
namespace libs;
class db{
    function __construct()
    {
        global $config;
        //数据库的配置
        $host=isset($config["database"]["host"])?$config["database"]["host"]:"localhost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"";
        $dbname=isset($config["database"]["dbname"])?$config["database"]["dbname"]:"jewellery";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:"3306";

        $db=new \mysqli($host,$username,$password,$dbname,$port);
        if($db->connect_error){
            echo "数据库连接出错";
        };
        $db->query("set names utf8");
        $this->db=$db;
    }
}