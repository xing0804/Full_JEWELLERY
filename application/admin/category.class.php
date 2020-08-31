<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";

class category{
    function int(){
        $smarty=new smarty();

        //查询数据库，显示信息
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from category");
        $data=array();
        while ($row=$result->fetch_assoc()){
            $data[]=$row;
        }
        $smarty->assign("data",$data);

        $smarty->display("admin/category.html");
    }

    function add(){
        $cname=$_POST["cname"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into list (cname,pid) values ('$cname',0)");
        if($db->affected_rows>0){
            header("location:/JEWELLERY/index.php/admin/category");
        }
    }

    function edit(){
        echo "修改栏目";
    }
}