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
        <li><a href="<?php echo U('project');?>">项目列表</a></li>
        <li><a href="<?php echo U('see');?>">查看详情</a></li>
    </ul>
</div>

<form action="" method="POST">
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>

        <ul class="forminfo">
            <li><label>项目名称</label><input readonly name="name" type="text" class="dfinput" value="<?php echo ($info["name"]); ?>"/></li>
            <li><label>项目负责人</label><input readonly name="people" type="text" class="dfinput" value="<?php echo ($info["people"]); ?>" /></li>
            <li><label>所需公款</label><input readonly name="money" type="text" class="dfinput" value="<?php echo ($info["money"]); ?>"/><i></i></li>
            <li><label>发布时间</label><input readonly class="dfinput" name="ctime"  value="<?php echo ($info["ctime"]); ?>"/></li>
            <li><label>状态</label><input readonly name="money" type="text" class="dfinput" value="<?php echo ($info["status"]); ?>"/><i></i></li>
            <li><label>资金状态</label><input readonly name="money" type="text" class="dfinput" value="<?php echo ($info["mstatus"]); ?>"/><i></i></li>
            <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认拨款"/></li>
        </ul>

    </div>
</form>

</body>

</html>