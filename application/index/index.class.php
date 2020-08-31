<?php
use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";
class index{
    function int (){

        $smarty=new smarty();

        $smarty->display("index/index.html");
    }
}