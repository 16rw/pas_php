<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/pas_php/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <!-- 引入jquery -->
    <script type="text/javascript" src="/pas_php/Public/Admin/js/jquery.min.js"></script>
    <!-- 引入ystep插件 -->
    <script type="text/javascript" src="/pas_php/Public/Admin/js/ystep.js"></script>
    <style>
    .ystep-container {
  font-family: "Helvetica Neue",Helvetica,"Hiragino Sans GB","Wenquanyi Micro Hei","Microsoft Yahei",Arial,sans-serif;
  display: inline-block;
  position: relative;
  color: #000;
}
.ystep-container ul {
  list-style: none;
}
.ystep-container ul,.ystep-container li,.ystep-container p {
  margin: 0;
  padding: 0;
}

/*size css*/
.ystep-sm {
  width: 360px;
  height: 30px;
  font-size: 12px;
  line-height: 1;
}
.ystep-lg {
  width: 700px;
  height: 60px;
  font-size: 18px;
  /*line-height: .3;*/
}

/*small size css*/
.ystep-sm .ystep-container-steps {
  position: absolute;
  top: 2px;
  cursor: pointer;
  z-index: 10;
}
.ystep-sm li {
  float: left;
  width: 65px;
  height: 50px;
}
.ystep-sm .ystep-step-done {
  background-position: -119px -76px;
}
.ystep-sm .ystep-step-undone {
  background-position: -60px -76px;
}
.ystep-sm .ystep-step-active {
  background-position: -182px -76px;
}
.ystep-sm .ystep-progress {
  width: 260px;
  height: 3px;
  position: absolute;
  top: 30px;
  left: 8px;
  float: left;
  margin-right: 10px;
  overflow: hidden;
}
.ystep-sm .ystep-progress-bar {
  width: 260px;
  height: 6px;
  background: #e4e4e4;
  display: inline-block;
  float: left;
}
.ystep-sm .ystep-progress-highlight {
  height: 6px;
    display: block;
}




/*blue css*/
/*.ystep-blue .ystep-step-done {
  background-image: url("/pas_php/Public/Admin/images/pointes_blue.png");
  background-repeat: no-repeat;
}
.ystep-blue .ystep-step-undone {
  background-image: url("/pas_php/Public/Admin/images/pointes_blue.png");
  background-repeat: no-repeat;
  color: #9c9a9b;
}
.ystep-blue .ystep-step-active {
  background-image: url("/pas_php/Public/Admin/images/pointes_blue.png");
  background-repeat: no-repeat;
  color: #3276b1;
}
.ystep-blue .ystep-progress-highlight {
  background: #60baff;
}*/

/*popover css*/
.popover {
  font-family: "Helvetica Neue",Helvetica,"Hiragino Sans GB","Wenquanyi Micro Hei","Microsoft Yahei",Arial,sans-serif;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1010;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  white-space: normal;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  background-clip: padding-box;
}

.popover.top {
  margin-top: -10px;
}

.popover.right {
  margin-left: 10px;
}

.popover.bottom {
  margin-top: 10px;
}

.popover.left {
  margin-left: -10px;
}

.popover-title {
  padding: 2px 10px;
  margin: 0;
  font-size: 12px;
  font-weight: bold;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}

.popover-content {
  padding: 4px 10px;
  font-size: 12px;
}

.popover .arrow,
.popover .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}

.popover .arrow {
  border-width: 11px;
}

.popover .arrow:after {
  border-width: 10px;
  content: "";
}

.popover.top .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.25);
  border-bottom-width: 0;
}

.popover.top .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  border-top-color: #ffffff;
  border-bottom-width: 0;
  content: " ";
}

.popover.right .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.25);
  border-left-width: 0;
}

.popover.right .arrow:after {
  bottom: -10px;
  left: 1px;
  border-right-color: #ffffff;
  border-left-width: 0;
  content: " ";
}

.popover.bottom .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
  border-top-width: 0;
}

.popover.bottom .arrow:after {
  top: 1px;
  margin-left: -10px;
  border-bottom-color: #ffffff;
  border-top-width: 0;
  content: " ";
}

.popover.left .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.25);
  border-right-width: 0;
}

.popover.left .arrow:after {
  right: 1px;
  bottom: -10px;
  border-left-color: #ffffff;
  border-right-width: 0;
  content: " ";
}
    </style>
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