<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
   
    <style>
        .forminfo{ width:650px; }
        #verify,#name,#app{ float: right;/* border: 1px solid red;*/ width:200px; height: 30px; }
    </style>
    <script>
        
        

    </script>

</head>

<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="#">首页</a></li>
        <li><a href="#">表单</a></li>
    </ul>
</div>

<form action="<?php echo U('upd');?>" method="POST">
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>
        <ul class="forminfo">
            <li><label for="">新用户名</label><input class="dfinput" name="name" id="newname" type="text" /><span id="name"></span></li>
            <li><label for="">新密码</label><input class="dfinput" name="password" type="password" /></li>
            <li><label>确认密码</label><input class="dfinput" name="verify" type="password"  /><span id="verify"></span></li>
            <li><label>&nbsp;</label><input name="button" type="button" class="btn" value="确认修改"/></li>
        </ul>
    </div>
</form>


<script>
$(function(){
    
   
    $("input[name='button']").click(function(){
        var password = $("input[name='password']").val();

        var verify = $("input[name='verify']").val();
        //  alert(password);
        // alert(verify);
        if(password==verify){
             $.ajax({
                url:"<?php echo U('Account/upd');?>",
                type:'post',
                data:{
                    newname:$("#newname").val(),
                    password:password,
                },
                dataType:"json",
                success:function(data){
                    if(data){
                        window.top.location.href = "<?php echo U('Manager/adminExit');?>";
                         
                    } 
                }
            });
            
        }else{
            $('#verify').html('两次输入的密码不一致!!');
        }
    })
})   




$(function(){
    $("#newname").blur(function(){
        $newname = $('#newname').val();
        //alert($oldPwd);
        $.ajax({
            url:"<?php echo U('Account/account');?>",
            type:'get',
            data:{newname:$newname},
            dataType:"json",
            success:function(data){
                console.log(data);
                if(data.status==200){
                    $('#name').html(data.msg);
                }else{
                    $('#name').html(data.msg);
                }

            }
        });
    });
})
</script>

</body>

</html>