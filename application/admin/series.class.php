<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";
include_once LIBS_PATH."upload.class.php";

class series{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addSeries.html");
    }
    function addSer(){
        $xname=$_POST["xname"];
        $xmsg=$_POST["xmsg"];

        $database=new db();
        $db=$database->db;

        $db->query("insert into xilie (xname,xmsg) values ('$xname','$xmsg')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/series/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/series/add'</script>";
        }


    }

    function showSeries(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from xilie");
        $arr=[];
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showSeries.html");
    }

    function del(){
        $xid=$_GET["xid"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from xilie where xid=".$xid);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/series/showSeries'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/series/showSeries'</script>";
        }
    }

    function edit(){
        $xid=$_GET["xid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from xilie where xid=".$xid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editSer.html");
    }

    function editSer(){
        $xname=$_POST["xname"];
        $xmsg=$_POST["xmsg"];

        $database=new db();
        $db=$database->db;

        $db->query("update xilie set xmsg='$xmsg' where xname='$xname'");

        if($db->affected_rows>0){
            echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/series/showSeries'</script>";
        }else{
            echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/series/showSeries'</script>";
        }
    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/".$upload->fullpath;
        echo $path;
    }
}