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

class homeType{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addHomeType.html");
    }

    function addHomeType(){
        $name=$_POST["name"];
        $ename=$_POST["ename"];
        $himgurl=$_POST["himgurl"];
        $imgtype=$_POST["imgtype"];

        $database=new db();
        $db=$database->db;

        $db->query("insert into homeType (name,ename,himgurl,imgtype) values ('$name','$ename','$himgurl','$imgtype')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/homeType/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/homeType/add'</script>";
        }
    }

    function show(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from homeType");
        $arr=[];
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showHomeType.html");
    }

    function edit(){
        $hid=$_GET["hid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from homeType where hid=".$hid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editHomeType.html");
    }

    function editHomeType(){
        $database=new db();
        $db=$database->db;


        $hid=$_GET["hid"];
        $name=$_POST["name"];
        $ename=$_POST["ename"];
        $himgurl=$_POST["himgurl"];



        if($himgurl!=="hidden"){
            $db->query("update homeType set name='$name',ename='$ename',himgurl='$himgurl' where hid=".$hid);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
            }
        }else{
            $db->query("update homeType set name='$name',ename='$ename',where hid=".$hid);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
            }
        }
    }

    function del(){
        $hid=$_GET["hid"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from homeType where hid=".$hid);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/homeType/show'</script>";
        }
    }
}