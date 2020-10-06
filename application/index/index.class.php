<?php
header("content-type:text/html;charset=utf-8");
if(!defined("MVC")){
    die("访问路径不合法");
}
class index extends main{
    function int(){
        $arr=array();
        $i=0;
        $result=$this->db->query("select * from mvc_category where pid = 0");
        while ($row=$result->fetch_assoc()){
            $arr[$i]=$row;
            $result1=$this->db->query("select * from mvc_category where pid=".$row['cid']);
            while ($row1=$result1->fetch_assoc()){
                $arr[$i][]=$row1;
            }
            $i++;
        }
        $this->smarty->assign("menudata",$arr);
        $this->smarty->display("index/index.html");
    }
    function about(){
        $this->smarty->display("index/about.html");
    }
}