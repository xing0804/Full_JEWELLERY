<?php
error_reporting(0);
if(!defined("MVC")){
    die("非法入侵！");
}

use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";

class index{
    function int(){

        $smarty=new smarty();
        $smarty->display("admin/admin.html");

    }
    function login(){
        $uname=$_POST["uname"];
        $pass1=md5(md5($_POST["pass1"]));

        if(strlen($uname)<5||empty($pass1)){
            echo "用户名或者密码格式不正确！";
        }

        //匹配数据
        //连接数据库

        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from user where uname='$uname' and '$pass1'");

        var_dump($result);
        if($result->num_rows<1){
            echo "没有相应的用户";
        }else{
            $_SESSION["login"]="yes";
            $_SESSION["uname"]=$uname;
            header("location:/JEWELLERY/index.php/admin/index/first");
        }
    }

    function logout(){
        session_destroy();
        header("location:/JEWELLERY/index.php/admin");
    }
    
    function first(){

        if(isset($_SESSION["login"])&&$_SESSION["login"]=="yes"){
            $smarty=new smarty();
            $smarty->assign("uname",$_SESSION["uname"]);
            $smarty->display("admin/index.html");

        }else{
            header("location:/JEWELLERY/index.php/admin");
        }

    }

}
