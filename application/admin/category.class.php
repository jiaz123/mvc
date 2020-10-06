<?php

class category extends main
{
    public $arr=array();
    function int(){
        $str = "";
        $this->tree(0,$str);
        $this->smarty->assign("data",$str);
        $this->smarty->display("admin/category.html");
    }
    function add(){
        if (isset($_POST["cid"])){
            $gid=$_POST["cid"];
        }else{
            $gid = 0;
        }
        $cname=$_POST["cname"];
        $this->db->query("insert into mvc_category (cname,pid) values ('$cname',$gid)");
        if ($this->db->affected_rows>0){
            header("location:/study/mvc/index.php/admin/category");
        }
    }
    function show(){
        $cid=$_GET["cid"];
        $result=$this->db->query("select * from mvc_category where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }
    function tree($pid=0,&$str,$i=0){
        $result = $this->db->query("select * from mvc_category where pid = ".$pid);
        while ($row=$result->fetch_assoc()){
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("↪",$i).$row["cname"].'</td> <td>
<a href="javascript:;" class="add" attr="'.$row["cid"].'">添加</a>
<a href="/study/mvc/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove">删除</a>
<a href="javascript:;" attr="'.$row["cid"].'"class="edit" pid="'.$row["pid"].'">修改</a>
</td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }

    }
    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr){
        $result = $this->db->query("select * from mvc_category where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"]
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
    function del(){
        $cid=$_GET["cid"];
        $result=$this->db->query("select * from mvc_category where pid =".$cid);
        if ($result->num_rows>0){
            echo "<script>alert('请先删除子目录');location.href='/study/mvc/index.php/admin/category'</script>";
        }else{
            $this->db->query("delete from mvc_category where cid=".$cid);
            if($this->db->affected_rows>0){
                header("location:/study/mvc/index.php/admin/category");
            }
        }
    }
    // 修改内容
    function editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $this->db->query("update mvc_category set cname='{$cname}',pid='{$pid}' where cid=".$cid);
        if ($this->db->affected_rows>0){
            echo "ok";
        }
    }
    function edit(){
        echo "请在表格中修改";
    }
}