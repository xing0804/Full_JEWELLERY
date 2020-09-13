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

class designer {

    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addDes.html");
    }

    function addDes(){
        $dname=$_POST["dname"];
        $dposition=$_POST["dposition"];
        $dimgurl=$_POST["dimgurl"];

        $database=new db();
        $db=$database->db;

        $db->query("insert into designer (dname,dposition,dimgurl) values ('$dname','$dposition','$dimgurl')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/designer/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/designer/add'</script>";
        }

    }

    function showDes(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from designer");
        $arr=[];
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showDes.html");
    }

    function seeDes(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from designer where did=".$did);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/seeDes.html");
    }

    function edit(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from designer where did=".$did);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editDes.html");
    }

    function editDes(){
        $database=new db();
        $db=$database->db;


        $did=$_GET["did"];
        $dname=$_POST["dname"];
        $dposition=$_POST["dposition"];
        $dimgurl=$_POST["dimgurl"];



        if($dimgurl!=="hidden"){
            $db->query("update designer set dname='$dname',dposition='$dposition',dimgurl='$dimgurl' where did=".$did);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
            }
        }else{
            $db->query("update designer set dname='$dname',dposition='$dposition' where did=".$did);

            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
            }
        }
    }

    function del(){
        $did=$_GET["did"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from designer where did=".$did);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/designer/showDes'</script>";
        }
    }

}