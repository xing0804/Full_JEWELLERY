<?php

if (!defined("MVC")) {
    die("非法侵入");
}

use \libs\smarty;
use \libs\db;
use \libs\upload;

include_once LIBS_PATH . "smarty.class.php";
include_once LIBS_PATH . "db.class.php";
include_once LIBS_PATH . "upload.class.php";

class type{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addList.html");
    }
    function addList(){
        $lname=$_POST["lname"];
        $lmsg=$_POST["lmsg"];

        $database=new db();
        $db=$database->db;

        $db->query("insert into list (lname,lmsg) values ('$lname','$lmsg')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/type/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/type/add'</script>";
        }


    }

    function showList(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from list");
        $arr=[];
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }

    function del(){
        $lid=$_GET["lid"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from list where lid=".$lid);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/type/showList'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/type/showList'</script>";
        }
    }

    function edit(){
        $lid=$_GET["lid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from list where lid=".$lid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editList.html");
    }

    function editList(){
        $lname=$_POST["lname"];
        $lmsg=$_POST["lmsg"];

        $database=new db();
        $db=$database->db;

        $db->query("update list set lmsg='$lmsg' where lname='$lname'");

        if($db->affected_rows>0){
            echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/type/showList'</script>";
        }else{
            echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/type/showList'</script>";
        }
    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/".$upload->fullpath;
        echo $path;
    }
}