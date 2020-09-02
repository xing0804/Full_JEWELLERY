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

class dynamic{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addDym.html");
    }

    function addDym(){
        $tid=$_POST["tid"];
        $dtitle=$_POST["dtitle"];
        $dmsg=$_POST["dmsg"];
        $dimgurl=$_POST["dimgurl"];

        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from category where cid=".$tid);
        $row=$result->fetch_assoc();
        $type=$row["cname"];

        $db->query("insert into dynamic (tid,dtitle,dmsg,dimgurl) values ('$type','$dtitle','$dmsg','$dimgurl')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/dynamic/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/dynamic/add'</script>";
        }
    }

    function showDym(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from dynamic");
        $arr=[];
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showDym.html");
    }

    function del(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from dynamic where did=".$did);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
        }
    }

    function seeDym(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from dynamic where did=".$did);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/seeDym.html");
    }

    function edit(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from dynamic where did=".$did);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editDym.html");
    }

    function editDym(){

        $database=new db();
        $db=$database->db;


        $did=$_GET["did"];
        $tid=$_POST["tid"];
        $dtitle=$_POST["dtitle"];
        $dmsg=$_POST["dmsg"];
        $dimgurl=$_POST["dimgurl"];

        $result=$db->query("select * from category where cid=".$tid);
        $row=$result->fetch_assoc();
        $type=$row["cname"];



        if($dimgurl!=="hidden"){
            $db->query("update dynamic set tid='$type',dtitle='$dtitle',dmsg='$dmsg',dimgurl='$dimgurl' where did=".$did);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
            }
        }else{
            $db->query("update dynamic set tid='$type',dtitle='$dtitle',dmsg='$dmsg' where did=".$did);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/dynamic/showDym'</script>";
            }
        }


    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/"."JEWELLERY"."/".$upload->fullpath;
        echo $path;
    }

    function getOption(){
        $database=new db();
        $this->db=$database->db;
        $result1=$this->db->query("select * from category where cname='品牌动态'");
        $row1=$result1->fetch_assoc();

        $lid=$row1["cid"];


        $result=$this->db->query("select * from category where lid=".$lid);

        $arr=[];
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        echo json_encode($arr);

    }

}