<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎登录后台管理系统</title>
<style>
    .verify{ border:1px solid red; width:300px; height: 44px; }
    .verify input{ width:150px; height: 44px; float: left;}
    .verify img{ width:150px; height: 44px; float: left; } 
    
</style>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
<script src="/Public/Admin/js/cloud.js" type="text/javascript"></script>

<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 

</head>

<style>
    .notice{
        text-align: center;
        width: 150px;
        position: absolute;
        right:60px ;
        top:40px;
    }
</style>
<body style="background-color:#1c77ac; background-image:url(/Public/Admin/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  


<div class="logintop">    
    <span>欢迎登录后台管理界面平台</span>    
    <ul>
    <li><a href="#">回首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
    </div>
    
    <form action="" method="POST">
        <div class="loginbody">

           
        <div class="loginbox loginbox3" style="margin-top: 100px;">
       
        <ul>
        <div class="notice"><p style="font-size: 18px; color: red;"><?php echo ((isset($err) && ($err !== ""))?($err):"&nbsp;"); ?></p></div>
        <li><input name="name" type="text" class="loginuser" placeholder="" /></li>
        <li><input name="password" type="password" class="loginpwd" placeholder="" /></li>
        <li class="yzm">
        <span><input width="150" name="verify" type="text" maxlength="4" value="验证码" onclick="JavaScript:this.value=''"/></span><cite><img src="/index.php/Admin/Manager/verifyImg" onclick="this.src='/index.php/Admin/Manager/verifyImg/'+Math.random()" alt=""></cite> 
        </li>
        <li><input name="" type="submit" class="loginbtn" value="登录"    /></li>
        </ul>
        
        
        </div>
        
        </div>
    </form>
    
    <div class="loginbm">版权所有  2019  <a href="http://www.uimaker.com">16ruanwaisirenzu</a> </div>
	
    
</body>

</html>