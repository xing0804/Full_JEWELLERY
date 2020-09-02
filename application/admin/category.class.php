<?php
if(!defined("MVC")){
    die("非法侵入");
}
use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";

class category{
    public $arr=array();

    function int(){
        $smarty=new smarty();

        //查询数据库，显示信息
        $database=new db();
        $this->db=$database->db;
        $str="";
        $this->tree(0,$str);
//        echo ($str);
//        $result=$db->query("select * from category");
//        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=$row;
//        }
        $smarty->assign("data",$str);

        $smarty->display("admin/category.html");
    }

    function tree($lid=0,&$str,$i=0){
        $result=$this->db->query("select * from category where lid=".$lid);
        while ($row=$result->fetch_assoc()){
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("↓",$i).$row["cname"].'</td><td>
<a class="add" href="javascript:;" attr="'.$row["cid"].'">添加</a>
<a class="del" href="/JEWELLERY/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'">删除</a>
<a class="edit" href="javascript:;" attr="'.$row["cid"].'" lid="'.$row["lid"].'">修改</a>
</td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }

    function show(){
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from category where  cid=".$cid);

        $row=$result->fetch_assoc();
        echo json_encode($row);
    }

    function getOption(){
       $this->treeOption(0,$this->arr);
       echo json_encode($this->arr);
    }

    function treeOption($lid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from category where lid=".$lid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "lid"=>$row["lid"],
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }

    function add(){
        if(isset($_POST["cid"])){
            $lid=$_POST["cid"];
        }else{
            $lid=0;
        }
        $cname=$_POST["cname"];
        $database=new db();
        $db=$database->db;

        $db->query("insert into category (cname,lid) values ('$cname',$lid)");
        if($db->affected_rows>0){
            header("location:/JEWELLERY/index.php/admin/category");
        }
    }

    function del(){
       $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from category where lid=".$cid);
        if($result->num_rows>0){
            echo "<script>alert('先删除子目录！');location.href='/JEWELLERY/index.php/admin/category'</script>";
        }else{
            $db->query("delete from category where cid=".$cid);

            if($db->affected_rows>0){
                echo "<script>alert('删除成功！');location.href='/JEWELLERY/index.php/admin/category'</script>";
            }else{
                echo "<script>alert('删除失败！');location.href='/JEWELLERY/index.php/admin/category'</script>";
            }
        }


    }

    //修改内容
    function editcon(){
        $cname=$_GET["cname"];
        $lid=$_GET["lid"];
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;

        $db->query("update category set cname='$cname',lid=$lid where cid=".$cid);

        if($db->affected_rows>0){
            echo "ok";
        }
    }
}