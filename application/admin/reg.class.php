<?php
use libs\smarty;
use libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";
class reg{
    function add(){

        $smarty=new smarty();
        $smarty->display("admin/reg.html");
    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass1=$_POST["pass1"];
        $pass2=$_POST["pass2"];
        if($pass1!==$pass2){
            echo "密码不一致";
            return;
        }
        //连接数据库
//        $db=$this->db;

        $database=new db();
        $db=$database->db;

        $result=$db->query("select uname from user where uname='$uname'");

        if($result->num_rows>0){
            echo "用户名存在！";
            return;
        }

//        $pass1=md5(md5($pass1));


        //对数据库进行操作
        $db->query("insert into user (uname,pass) values ('$uname','$pass1')");

        var_dump($db->affected_rows);
        if($db->affected_rows>0){
            echo "插入成功";
        }else{
            echo "插入失败";
        }

        //将数据从结果中取出来
//        $data=array();
//        while ($row=$result->fetch_assoc()){
//            $data[]=($row);
//        }
    }
}