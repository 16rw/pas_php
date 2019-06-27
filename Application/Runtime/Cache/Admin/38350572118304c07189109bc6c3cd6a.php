<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/pas_php/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li><a href="<?php echo U(people);?>">员工信息</a></li>
        <li><a href="<?php echo U(add);?>">添加员工</a></li>
    </ul>
</div>

<form action="" method="POST">
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>
        <ul class="forminfo">
            <li><label>用户名</label><input name="name" type="text" class="dfinput" /></li>
            <li><label>密码</label><input name="password" type="text" class="dfinput" /></li>
            <li><label>角色</label><select class="dfinput" name="role">
                <option value ="财务">财务</option>
                <option value="员工">员工</option>
            </select></li>
            <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="添加"/></li>
        </ul>
    </div>
</form>

</body>

</html>