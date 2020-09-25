<?php
use \libs\smarty;
use \libs\db;
include_once LIBS_PATH."smarty.class.php";
include_once LIBS_PATH."db.class.php";
class index{
    function int (){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

        $result1=$db->query("select * from homeType where imgtype='small'");
        $arr1=[];
        while ($row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("smallData",$arr1);

        $result2=$db->query("select * from homeType where imgtype='big'");
        $row2=$result2->fetch_assoc();
        $smarty->assign("bigData",$row2);

        $result1=$db->query("select * from product where isindex='yes'");
        $arr1=[];
        while ($row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("productData",$arr1);

        $smarty->display("index/index.html");

    }
    function ShowCulture(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

        $result1=$db->query("select * from designer");
        $arr1=[];
        while ($row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("desData",$arr1);

        $smarty->display("index/culture.html");

    }
    function ShowJewellery(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

        $result1=$db->query("select * from product");
        $arr1=[];
        while ($row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("productData",$arr1);

//        获取类别id
        $result2=$db->query("select * from category where cname='类别'");
        $row2=$result2->fetch_assoc();
        $lid=$row2["cid"];
//        根据类别id找到相应的子栏目
        $result3=$db->query("select * from category where lid=".$lid);
        $arr3=[];
        while ($row3=$result3->fetch_assoc()){
            $arr3[]=$row3;
        }
        $smarty->assign("listData",$arr3);

//        获取系列id
        $result4=$db->query("select * from category where cname='系列'");
        $row4=$result4->fetch_assoc();
        $xid=$row4["cid"];
//        根据类别id找到相应的子栏目
        $result5=$db->query("select * from category where lid=".$xid);
        $arr5=[];
        while ($row5=$result5->fetch_assoc()){
            $arr5[]=$row5;
        }
        $smarty->assign("xilieData",$arr5);

        $smarty->display("index/jewelry.html");
    }

    //珠宝首饰页面根据标签选择相应的产品
    function ProList(){
        $database=new db();
        $db=$database->db;
        $xid=$_GET["xid"];
        $lid=$_GET["lid"];


        if($xid=="all" && $lid=="all"){
            $result=$db->query("select * from product");
        }else if($xid==="all" && $lid!=="all"){
            $result=$db->query("select * from product where lid='$lid'");
        }else if($xid!=="all" && $lid==="all"){
            $result=$db->query("select * from product where xid='$xid'");
        }else if($xid!=="all" && $lid!=="all"){
            $result=$db->query("select * from product where xid='$xid' and lid='$lid'");
        }

        $str="";
        $i=$result->num_rows;
        while ($row=$result->fetch_assoc()){
            $str.='
            <div class="con-item img">
                <div class="item-img">
                    <a href="/JEWELLERY/index.php/index/index/showPro?pid='.$row["pid"].'">
                        <img src='.$row['pimgurl'].'
                            alt="">
                    </a>
                </div>
                <div class="item-content">'.$row['pname'].'</div>
            </div>                          
              ';
        }
        echo $str;
        echo $i;
    }

    //珠宝首饰搜索功能
    function searchProduct(){
        $searchName=$_GET["searchName"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from product where pname like '%$searchName%'");

        $str="";
        $i=$result->num_rows;
        while ($row=$result->fetch_assoc()){
            $str.='
            <div class="con-item img">
                <div class="item-img">
                    <a href="/JEWELLERY/index.php/index/index/showPro?pid='.$row["pid"].'">
                        <img src='.$row['pimgurl'].'
                            alt="">
                    </a>
                </div>
                <div class="item-content">'.$row['pname'].'</div>
            </div>                          
              ';
        };
        echo $str;
        echo $i;
    }

    //分类类型页面搜索
    function typeSearchPro(){
        $searchName=$_GET["searchName"];
        $tid=$_GET["tid"];
        $database=new db();
        $db=$database->db;
        $type=$db->query("select * from product where xid='$tid'");
        if($type->num_rows){
            $result=$db->query("select * from product where xid='$tid' and lid like '%$searchName%'");
        }else{
            $result=$db->query("select * from product where lid='$tid' and xid like '%$searchName%'");
        }


        $str="";
        $i=$result->num_rows;
        while ($row=$result->fetch_assoc()){
            $str.='
            <div class="con-item img">
                <div class="item-img">
                    <a href="/JEWELLERY/index.php/index/index/showPro?pid='.$row["pid"].'">
                        <img src='.$row['pimgurl'].'
                            alt="">
                    </a>
                </div>
                <div class="item-content">'.$row['pname'].'</div>
            </div>                          
              ';
        };
        echo $str;
        echo $i;
    }

    //联系页面初始化
    function ShowContact(){
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

        $smarty->display("index/contact.html");
    }

    //动态页面初始化
    function ShowDynamic(){

        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

//        获取品牌动态的lid
        $result1=$db->query("select * from category where cname='品牌动态'");
        $row1=$result1->fetch_assoc();
        $lid=$row1["cid"];
//        获取品牌动态的子栏目
        $result2=$db->query("select * from category where lid=".$lid);

        $arr2=[];
        while ($row2=$result2->fetch_assoc()){
            $arr2[]=$row2;
        }
//        传入前端页面
        $smarty->assign("typeData",$arr2);

        $result3=$db->query("select * from dynamic");

        //        获取全部动态传入

        $arr3=[];
        while ($row3=$result3->fetch_assoc()){
            $arr3[]=$row3;
        }
        $smarty->assign("dymData",$arr3);
        $num=$result3->num_rows;
        $smarty->assign("num",$num);

        $smarty->display("index/dynamics.html");

    }

    //根据标签选择动态
    function DymList(){
        $database=new db();
        $db=$database->db;
        $tid=$_GET["tid"];
        if($tid=="all"){
            $result=$db->query("select * from dynamic");
        }else{
            $result=$db->query("select * from dynamic where tid='$tid'");
        }

        $str="";
        while ($row=$result->fetch_assoc()){
            $str.='
                <div class="con-item img">
                        <div class="item-img">
                            <img src='.$row['dimgurl'].'
                                 alt="">
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                '.$row['dtitle'].'
                            </div>
                            <div class="item-date">
                                发布时间：'.$row['dtime'].'
                            </div>
                            <div class="item-text">
                                '.$row['dmsg'].'
                            </div>
                        </div>
                    </div>
                  
              ';
        }
        echo json_encode($str);
    }

    //搜索动态
    function searchDym(){
        $searchName=$_GET["searchName"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from dynamic where dtitle like '%$searchName%'");
        $str="";
        while ($row=$result->fetch_assoc()){
            $str.='
                <div class="con-item img">
                        <div class="item-img">
                            <img src='.$row['dimgurl'].'
                                 alt="">
                        </div>
                        <div class="item-content">
                            <div class="item-title">
                                '.$row['dtitle'].'
                            </div>
                            <div class="item-date">
                                发布时间：'.$row['dtime'].'
                            </div>
                            <div class="item-text">
                                '.$row['dmsg'].'
                            </div>
                        </div>
                    </div>
                  
              ';
        }
        echo $str;
    }

    //    进入类别/系列页面，主页面点击类型进入类型页面
    function ShowList(){
        $name=$_GET["name"];
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

//        查询所有符合的产品
        $result1=$db->query("select * from product where lid='$name' or xid='$name'");
        $arr1=[];
        while ($row1=$result1->fetch_assoc()){
            $arr1[]=$row1;
        }
        $smarty->assign("proData",$arr1);

//        查询这个类别的信息
        $result2=$db->query("select * from list where lname='$name'");
        $row2=$result2->fetch_assoc();
        $smarty->assign("listData",$row2);

        $smarty->display("index/geometry.html");

    }

    //产品详情页面显示
    function showPro(){
        $pid=$_GET["pid"];
        $smarty=new smarty();
        $database=new db();
        $db=$database->db;

        $this->menu($smarty,$db);

        $result1=$db->query("select * from product where pid=".$pid);
        $row1=$result1->fetch_assoc();
        $smarty->assign("proData",$row1);

        $smarty->display("index/product.html");
    }

    //菜单显示
    function menu($sm,$base){

        $result=$base->query("select * from category where lid=0");
        $arr=[];
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $sm->assign("menuData",$arr);

    }


}