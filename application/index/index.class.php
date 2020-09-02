<?php
use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";
class index{
    function int (){

        $smarty=new smarty();

        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from category where lid=0");
        $arr=[];
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }


        $smarty->assign("menuData",$arr);

        $smarty->display("index/index.html");
    }
    function ShowCulture(){
        $smarty=new smarty();
        $smarty->display("index/culture.html");
    }
    function ShowJewellery(){
        $smarty=new smarty();
        $smarty->display("index/jewelry.html");
    }
    function ShowContact(){
        $smarty=new smarty();
        $smarty->display("index/contact.html");
    }
    function ShowDynamic(){
        $smarty=new smarty();
        $smarty->display("index/dynamics.html");
    }
}