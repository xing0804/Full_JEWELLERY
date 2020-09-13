<?php

namespace libs;
class pages{

    public $fullpath;
    public  $curentPages;
    public  $pages=10;
    public  $total=200;
    public  $nums=6;
    public  $limit;
    private function getUrlInfo(){
        $originPath="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
        $path="http://".$_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];

        $search=substr(strchr($originPath,"?"),1);
        $reg='/&*pages=\d*/';

        $search=preg_replace($reg,"",$search);
        if(isset($_GET["pages"])){
            $this->curentPages=$_GET["pages"];
        }else{
            $this->curentPages=0;
        }
        $this->fullpath=$path."?".$search."&pages=";



    }
    public function show(){

        $this->getUrlInfo();
        $str="";
        $str.="<a href='{$this->fullpath}0' style='float: left'>首页</a>";
        $up=$this->curentPages-1>0?$this->curentPages-1:0;
        $str.="<a href='{$this->fullpath}$up' style='float: left'>[上一页]</a>";

        $start=$this->curentPages-floor($this->pages/2)<0?0:$this->curentPages-floor($this->pages/2);

        $end=$start+$this->pages>floor($this->total/$this->nums)?floor($this->total/$this->nums):$start+$this->pages;

        for($i=$start;$i<=$end;$i++){
            $num=$i+1;
            if($i==$this->curentPages){
                $style='style="width: 54px;
    height: 35px;
    border: 1px solid black;
    text-align: center;
    line-height: 35px;
     text-decoration: none;
    background: black;
    float:left;
    color: white;
    cursor: pointer;" ';
            }else{
                $style='style="width: 54px;
    height: 35px;
    border: 1px solid black;
    text-align: center;
    line-height: 35px;
    text-decoration: none;
    float:left;
    margin-left: 10px;
    cursor: pointer;"';
            }
            $str.="<a href='{$this->fullpath}{$i}' $style>{$num}</a>";

        }


        $next=$this->curentPages+1>floor($this->total/$this->nums)?floor($this->total/$this->nums):$this->curentPages+1;
        $str.="<a href='{$this->fullpath}$next' style='float: left'>[下一页]</a>";

        $last=floor($this->total/$this->nums);
        $str.="<a href='{$this->fullpath}$last' style='float: left'>[尾页]</a>";


        $this->limit=" LIMIT ".$this->curentPages*$this->nums.",".$this->nums;
        return $str;
    }
}
