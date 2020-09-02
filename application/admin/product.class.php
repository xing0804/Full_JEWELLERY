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

class product{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addCon.html");
    }
    function addCon(){
        $lid=$_POST["lid"];
        $xid=$_POST["xid"];
        $pname=$_POST["pname"];
        $pprice=$_POST["pprice"];
        $pmsg=$_POST["pmsg"];
        $pno=$_POST["pno"];
        $pmeterial=$_POST["pmeterial"];
        $pcolor=$_POST["pcolor"];
        $pmain=$_POST["pmain"];
        $ppack=$_POST["ppack"];
        $psaleback=$_POST["psaleback"];
        $pimgurl=$_POST["pimgurl"];

        $database=new db();
        $db=$database->db;


//        exit();

        $db->query("insert into product (lid,xid,pname,pprice,pmsg,pno,pmeterial,pcolor,pmain,ppack,psaleback,pimgurl) values ('$lid','$xid','$pname','$pprice','$pmsg','$pno','$pmeterial','$pcolor','$pmain','$ppack','$psaleback','$pimgurl')");

        if($db->affected_rows>0){
            echo "<script>alert('插入成功！');location.href='/JEWELLERY/index.php/admin/product/add'</script>";
        }else{
            echo "<script>alert('插入失败！');location.href='/JEWELLERY/index.php/admin/product/add'</script>";
        }
    }
    function showProduct(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from product");
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showProduct.html");
    }
    function show(){
        $pid=$_GET["pid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from product where pid=".$pid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/show.html");
    }

    function edit(){
        $pid=$_GET["pid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from product where pid=".$pid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editCon.html");
    }

    function editCon(){
        $pid=$_GET["pid"];

        $lid=$_POST["lid"];
        $xid=$_POST["xid"];
        $pname=$_POST["pname"];
        $pprice=$_POST["pprice"];
        $pmsg=$_POST["pmsg"];
        $pno=$_POST["pno"];
        $pmeterial=$_POST["pmeterial"];
        $pcolor=$_POST["pcolor"];
        $pmain=$_POST["pmain"];
        $ppack=$_POST["ppack"];
        $psaleback=$_POST["psaleback"];
        $pimgurl=$_POST["pimgurl"];

        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from category where cid=".$lid);
        $row=$result->fetch_assoc();
        $type=$row["cname"];

        $result1=$db->query("select * from category where cid=".$xid);
        $row1=$result1->fetch_assoc();
        $Series=$row1["cname"];

        if($pimgurl!=="hidden"){
            $db->query("update product set lid='$type',xid='$Series',pname='$pname',pprice='$pprice',pmsg='$pmsg',pno='$pno',pmeterial='$pmeterial',pcolor='$pcolor',pmain='$pmain',ppack='$ppack',psaleback='$psaleback',pimgurl='$pimgurl' where pid=".$pid);
            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
            }
        }else{
            $db->query("update product set lid='$type',xid='$Series',pname='$pname',pprice='$pprice',pmsg='$pmsg',pno='$pno',pmeterial='$pmeterial',pcolor='$pcolor',pmain='$pmain',ppack='$ppack',psaleback='$psaleback' where pid=".$pid);
            if($db->affected_rows>0){
                echo "<script>alert('修改成功！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
            }else{
                echo "<script>alert('修改失败！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
            }
        }




    }

    function del(){
        $pid=$_GET["pid"];
        $database=new db();
        $db=$database->db;
        $db->query("delete from product where pid=".$pid);
        if($db->affected_rows>0){
            echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
        }else{
            echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/product/showProduct'</script>";
        }
    }

    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/"."JEWELLERY"."/".$upload->fullpath;
        echo $path;
    }

    function getTypeOption(){
        $database=new db();
        $this->db=$database->db;
        $result1=$this->db->query("select * from category where cname='类别'");
        $row1=$result1->fetch_assoc();

        $lid=$row1["cid"];


        $result=$this->db->query("select * from category where lid=".$lid);

        $arr=[];
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        echo json_encode($arr);

    }

    function getSeriesOption(){
        $database=new db();
        $this->db=$database->db;
        $result1=$this->db->query("select * from category where cname='系列'");
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