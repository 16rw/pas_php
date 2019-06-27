<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <!-- 引入jquery -->
    <script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
    <!-- 引入ystep插件 -->
    <script type="text/javascript" src="/Public/Admin/js/ystep.js"></script>
   
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
        <div class="ystep3"></div>
        <ul class="forminfo">
            <li><label>项目名称</label><input name="name" type="text" class="dfinput" value="<?php echo ($info["name"]); ?>"/><i>标题不能超过30个字符</i></li>
            <li><label>项目负责人</label><input name="people" type="text" class="dfinput" value="<?php echo ($info["people"]); ?>" /></li>
            <li><label>其他成员</label><input name="other" type="text" class="dfinput" value="<?php echo ($other["other"]); ?>"/><i></i></li>
            <li><label>所需公款</label><input name="money" type="text" class="dfinput" value="<?php echo ($info["money"]); ?>"/><i></i></li>
            <li><label>理由</label><textarea name="reason" cols="" rows="" class="textinput" value=""><?php echo ($info["reason"]); ?></textarea></li>
            <li><label>发布时间</label><input class="dfinput" name="ctime"  value="<?php echo ($info["ctime"]); ?>"/></li>
            <li>
                <label>审核状态</label>
                <input name="status" type="radio" <?php if($info['status'] == '已审核'): ?>checked<?php endif; ?>  value="已审核"/>已审核
                <input name="status" type="radio" <?php if($info['status'] == '未审核'): ?>checked<?php endif; ?> value="未审核"/>未审核
            </li>
            <li>
                <label>资金状态</label>
                <input name="mstatus" type="radio" <?php if($info['mstatus'] == '已拨款'): ?>checked<?php endif; ?>  value="已拨款"/>已拨款
                <input name="mstatus" type="radio" <?php if($info['mstatus'] == '未拨款'): ?>checked<?php endif; ?>  value="未拨款"/>未拨款
            </li>
            <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="审核通过"/></li>
        </ul>
       
    </div>
</form>
<script>
$(".ystep3").loadStep({
  size: "small",
  color: "blue",
  steps: [{
    title: "发起",
    content: "实名用户/公益组织发起项目"
  },{
    title: "审核",
    content: "乐捐平台工作人员审核项目"
  },{
    title: "募款",
    content: "乐捐项目上线接受公众募款"
  },{
    title: "执行",
    content: "项目执行者线下开展救护行动"
  },{
    title: "结项",
    content: "项目执行者公示善款使用报告"
  }]
});
</script>
</body>

</html>