$(".add").click(function () {

    var cid= $(this).attr("attr");
    $("input[type=hidden]").val(cid);

    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"absolute",
        left:0,
        top:0
    })

    $(".addpannel").css("display","block");
})

$(".addpannel .close").click(function () {
    $(".addpannel").css("display","none");
    $(".mask").remove();
})
var cid;
$(".edit").click(function () {
    cid= $(this).attr("attr");
    var pid= $(this).attr("pid");
    $("input[type=hidden]").val(cid);

    $("<div class='mask'>").appendTo("body").css({
        width:"100%",
        height:"100%",
        opacity:0.3,
        background:"#000",
        position:"absolute",
        left:0,
        top:0
    })
    $(".editpannel").css("display","block");
    // 修改信息查询
    $.ajax({
        url:"/study/mvc/index.php/admin/category/show",
        data:{cid},
        dataType:"json",
        success:function (e) {
            $(".editpannel input[name=cname]").val(e["cname"])
        }
    })
    $.ajax({
        url:"/study/mvc/index.php/admin/category/getOption",
        dataType:"json",
        success:function (e) {
            tree(e,1,cid,pid)
            $("#opts").html(str)
            str="<option value='0'>一级</option>";
        }
    })
})
// 修改内容
$(".editpannel input[type=button]").click(function () {
    var data=($(".editpannel form").serialize()+"&cid="+cid);
    $.ajax({
        url:"/study/mvc/index.php/admin/category/editcon",
        data:data,
        success:function (e) {
            if ($.trim(e)=="ok"){
                location.reload()
            }
        }
    })
})

var str="<option value='0'>一级</option>";
// 循环插入空格实现层次
function str_repeat(str,num) {
    var result="";
    for (var i=0;i<num;i++){
        result+=str;
    }
    return result;
}

function tree(data,$i,cid,pid){
    for (var i=0;i<data.length;i++){
        if (data[i].child){
            if(data[i].cid!=cid){
                if (data[i].cid == pid){
                    str += "<option value='" + data[i].cid + "' selected>"+ str_repeat("&nbsp;&nbsp;&nbsp;",$i) + data[i].cname + "</option>"
                }else {
                    str += "<option value='" + data[i].cid + "'>"+ str_repeat("&nbsp;&nbsp;&nbsp;",$i) + data[i].cname + "</option>"
                }
            }
            tree(data[i].child,$i+1,cid,pid)
        }else {
            if(data[i].cid!=cid) {
                if (data[i].cid == pid) {
                    str += "<option value='" + data[i].cid + "' selected>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                } else {
                    str += "<option value='" + data[i].cid + "'>" + str_repeat("&nbsp;&nbsp;&nbsp;", $i) + data[i].cname + "</option>"
                }
            }
        }
    }
}

$(".editpannel .close").click(function () {
    $(".editpannel").css("display","none");
    $(".mask").remove();
})