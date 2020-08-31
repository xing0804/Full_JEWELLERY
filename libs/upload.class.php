<?php
namespace libs;
header("content-type:text/html;charset:utf-8");

class upload{
    //定义属性，在外部可以修改的属性
    //定义文件上传的大小
    public $filesize;//后面的值不能是表达式
    //定义文件上传的类型
    public $fileType=array("image/png","image/jpeg","image/gif");
    //定义上传文件的表单的名字
    public $filename="file";

    public $defaultDir="upload";

    public $fullpath;

    function __construct()
    {
        $this->filesize=1024*1024*5;
    }

    private function accept(){
        $this->data=$_FILES[$this->filename];
    }

    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if($this->data["size"]<$this->filesize){
                if(in_array($this->data["type"],$this->fileType)){
                    return true;
                }else{
                    echo "文件类型不否";
                    return false;
                }
            }else{
                echo "文件太大";
                return false;
            }
        }else{
            echo "文件不合法";
            return false;
        }
    }

    private function createDir(){
        if(!is_dir($this->defaultDir)){
            mkdir($this->defaultDir,0777,true);
        }
        $currentDir=$this->defaultDir.DIRECTORY_SEPARATOR.date("Y-m-d");
        if(!is_dir($currentDir)){
            mkdir($currentDir,0777,true);
        }
        $filename=time().mt_rand(1000,20000).$this->data["name"];
        $this->fullpath=$currentDir.DIRECTORY_SEPARATOR.$filename;

    }

    private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }

    function up(){
        //1.接收上传的数据
        $this->accept();
        //检查数据是否合法
        if($this->check()){
            //创建文件夹，以放入上传文件
            $this->createDir();
            //移动到指定目录
            $this->move();
        }
    }
}