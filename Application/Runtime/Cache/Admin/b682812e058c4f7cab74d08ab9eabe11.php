<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网站后台管理系统 - Powered by XYCMS</title>
<script type="text/javascript" src="<?php echo (URL); ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (URL); ?>js/ajax.js"></script>
<script type="text/javascript" src="<?php echo (URL); ?>js/send.js"></script>
<link href="<?php echo (URL); ?>css/style.css" type="text/css" rel="stylesheet" />
</head>
<body style="background:#E2E9EA">


<div id="header" class="header">
  <div class="logo">logo图片</div>
  <div class="nav">&nbsp;&nbsp;&nbsp;&nbsp;欢迎你！<?php echo (session('username')); ?><i>|</i> [超级管理员] <i>|</i> [<a href="/cloud/index.php/Admin/login/end" target="_top">退出</a>] <i>|</i> <a href="/cloud/index.php/Home/index/index" target="_blank">浏览站点</a> <i>|</i> </div>
  <div class="topmenu">
    <ul>
      <li id="menu_1"><span><a href="javascript:void(0);" onClick="sethighlight(1);option(11)">OpenStack</a></span></li>
      <li id="menu_2"><span><a href="javascript:void(0);" onClick="sethighlight(2);option(21);">vSphere</a></span></li>
      <li id="menu_3"><span><a href="javascript:void(0);" onClick="sethighlight(3);option(31)">SVN</a></span></li>
      <li id="menu_4"><span><a href="javascript:void(0);" onClick="sethighlight(4);option(41)">开发历程</a></span></li>
      <li id="menu_5"><span><a href="javascript:void(0);" onClick="sethighlight(5);option(51)">通知公告</a></span></li>
      <li id="menu_6"><span><a href="javascript:void(0);" onClick="sethighlight(6);option(61)">文档发布</a></span></li>
      <li id="menu_7"><span><a href="javascript:void(0);" onClick="sethighlight(7);option(71)">联系我们</a></span></li>
      <li id="menu_8"><span><a href="javascript:void(0);" onClick="sethighlight(8);option(81)">平台监控</a></span></li>
    </ul>
  </div>
</div>

<!-- content-section -->
<div id="Main_content">
  <div id="MainBox" >
    <div class="main_box">
      <ul>
        <!--OpenStack-->
        <li class="nav_11 show">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/openstack','fodel');" value="批量删除" style="float:right;">
            </form>
            <form name="addform" id="fodel" >
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onClick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">审核状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody >
                  <?php if(is_array($list2)): foreach($list2 as $key=>$r2): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r2["oid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r2["oid"]); ?></td>
                      <td><a href="javascript:;" class="openstack" data-a="<?php echo ($r2["applicant"]); ?>"><?php echo ($r2["applicant"]); ?>的云服务器申请</a></td>
                      <td><span><?php echo ($r2["state"]); ?></span></td>
                      <td><?php echo ($r2["email_state"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r2["addtime"])); ?></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page2); ?></ul></div>
          </div>
        </li>
        <li class="nav_12 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/openstack','foodel');"  value="批量删除" style="float:right;">
            </form>
            <form name="addform" id="foodel" >
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onClick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">销毁状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list22)): foreach($list22 as $key=>$r22): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r22["oid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r22["oid"]); ?></td>
                      <td><a href="javascript:;" class="openstack_del" data-a="<?php echo ($r2["applicant"]); ?>"><?php echo ($r22["applicant"]); ?>的云服务器的销毁申请</a></td>
                      <td><span><?php echo ($r22["del_state"]); ?></span></td>
                      <td><?php echo ($r22["del_notice"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r22["del_time"])); ?></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page22); ?></ul></div>
          </div>
        </li>
        <!--vSphere-->
        <li class="nav_21 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/vsphere','fvdel');" value="批量删除" style="float:right;">
            </form>
            <form name="addform" id="fvdel">
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onClick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">审核状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list1)): foreach($list1 as $key=>$r1): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r1["vid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r1["vid"]); ?></td>
                      <td><a href="javascript:;" class="vsphere" data-a="<?php echo ($r1["applicant"]); ?>"><?php echo ($r1["applicant"]); ?>的vSphere申请</a></td>
                      <td><span><?php echo ($r1["state"]); ?></span></td>
                      <td><?php echo ($r1["email_state"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r1["addtime"])); ?></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page1); ?></ul></div>
          </div>
        </li>
        <li class="nav_22 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="submit" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/vsphere','fvvdel');" value="批量删除" style="float:right;">
            </form>
            <form name="addform" id="fvvdel" >
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">销毁状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="16" type="checkbox"></td>
                      <td>16</td>
                      <td><a href="javascript:;" class="vsphere_del">刘立凡vSphere的销毁申请</a></td>
                      <td><span>未操作</span></td>
                      <td>已通知</td>
                      <td>2017年9月18日 13:25</td>
                    </tr>
                  <?php if(is_array($list11)): foreach($list11 as $key=>$r11): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r11["vid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r11["vid"]); ?></td>
                      <td><a href="javascript:;" class="vsphere_del" data-a="<?php echo ($r11["applicant"]); ?>"><?php echo ($r11["applicant"]); ?>vSphere的销毁申请</a></td>
                      <td><span><?php echo ($r11["del_state"]); ?></span></td>
                      <td><?php echo ($r11["del_notice"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r11["del_time"])); ?></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page11); ?></ul></div>
          </div>
        </li>
        <!--SVN-->
        <li class="nav_31 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/svn','fsdel');" value="批量删除" style="float:right;">
            </form>
            <form id="fsdel">
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">审核状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list)): foreach($list as $key=>$r): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r["sid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r["sid"]); ?></td>
                      <td><a href="javascript:;" class="svn" data-a="<?php echo ($r["applicant"]); ?>"><?php echo ($r["applicant"]); ?>的SVN申请</a></td>
                      <td><span><?php echo ($r["state"]); ?></span></td>
                      <td><?php echo ($r["email_state"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r["addtime"])); ?></td>
                    </tr><?php endforeach; endif; ?>               
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page); ?></ul></div>
          </div>
        </li>
        <li class="nav_32 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="submit" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/svn','fssdel');" value="批量删除" style="float:right;">
            </form>
            <form name="addform" id="fssdel" >
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">申请者</th>
                      <th width="160">销毁状态</th>
                      <th width="120">邮件通知状态</th>
                      <th width="250">申请日期</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="16" type="checkbox"></td>
                      <td>16</td>
                      <td><a href="javascript:;" class="svn_del">刘立凡SVN的销毁申请</a></td>
                      <td><span>已销毁</span></td>
                      <td>未通知</td>
                      <td>2017年9月18日 13:25</td>
                    </tr>
                 <?php if(is_array($list0)): foreach($list0 as $key=>$r0): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r0["sid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r0["sid"]); ?></td>
                      <td><a href="javascript:;" class="svn_del" data-a="<?php echo ($r0["applicant"]); ?>"><?php echo ($r0["applicant"]); ?> SVN的销毁申请</a></td>
                      <td><span><?php echo ($r0["del_state"]); ?></span></td>
                      <td><?php echo ($r0["del_notice"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r0["del_time"])); ?></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page0); ?></ul></div>
          </div>
        </li>
        <!--开发历程-->
        <li class="nav_41 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" value="添加历程" class="button" onClick="option(42)">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/develop','fddel');" value="批量删除" style="float: right">
            </form>
            <form name="addform" id="fddel">
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">开发历程内容</th>
                      <th width="160">发布时间</th>
                      <th width="120">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list4)): foreach($list4 as $key=>$r4): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="1" type="checkbox"></td>
                      <td><?php echo ($r4["did"]); ?></td>
                      <td style="float: left;"><a href="javascript:;" data-a="<?php echo ($r4["did"]); ?>" class="course"><?php echo ($r4["title"]); ?></a></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r4["addtime"])); ?></td>
                      <td><a href="#" onclick="Del('./delete/flag/del/table/develop/id/'+<?php echo ($r4["did"]); ?>);" class="a_btn">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page4); ?></ul></div>
          </div>
        </li>
        <li class="nav_42 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <div class="journey_title">
              <a href="javascript:;" onClick="option(41)"><img src="<?php echo (URL); ?>img/images/back.png" style="float: left;"></a>
              <p>添加历程</p>
            </div>
            <div class="add_journey">
              <form id="fdevelop">
                <span>历程标题：</span><input type="text" name="title" class="journey" /><br />
                <span class="content">具体内容：</span><textarea name="content" cols="80" rows="6"></textarea><br />
                <div class="word_num"><p>字数限制：180字内</p></div>
                <input type="button" value="发布" class="a_btn" onClick="send('./develop','fdevelop');">
              </form>
            </div>
          </div>
        </li>
        <!--通知公告-->
        <li class="nav_51 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" value="添加公告" class="button" onClick="option(52)">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/notice','fndel');" value="批量删除" style="float: right">
            </form>
            <form name="addform" id="fndel" >
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onClick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">公告历史</th>
                      <th width="250">发布时间</th>
                      <th width="120">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list3)): foreach($list3 as $key=>$r3): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r3["nid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r3["nid"]); ?></td>
                      <td><a href="javascript:;" class="affiche"><?php echo ($r3["title"]); ?></a></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r3["addtime"])); ?></td>
                      <td><a href="#" onclick="Del('./delete/flag/del/table/notice/id/'+<?php echo ($r3["nid"]); ?>);" class="a_btn">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page3); ?></ul></div>
          </div>
        </li>
        <li class="nav_52 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <div class="journey_title">
              <a href="javascript:;" onClick="option(51)"><img src="<?php echo (URL); ?>img/images/back.png" style="float: left;"></a>
              <p>添加公告</p>
            </div>
            <div class="add_journey">
              <form id="fanotice">
                 <span>公告标题：</span><input type="text" name="title" class="document" /><br />
                <span class="content">公告内容：<small>(需要换行请用空格符代替)</small></span><textarea name="content" cols="80" rows="6"></textarea><br />
                <input type="button" value="发布" onClick="send('./notice','fanotice');" class="a_btn">
              </form>
            </div>
          </div>
        </li>
        <li class="nav_53 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" value="发布通知" class="button" onClick="option(54)">
              <input type="submit" class="button" name="dosubmit" value="批量删除" style="float: right">
            </form>
            <form name="addform" id="addform" action="#" method="post">
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onClick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">通知历史</th>
                      <th width="250">发布时间</th>
                      <th width="120">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="1" type="checkbox"></td>
                      <td>1</td>
                      <td><a href="javascript:;" class="affiche">平台外网IP的申请、网速升级</a></td>
                      <td>2017年9月18日 13:25</td>
                      <td><a href="#" class="a_btn">删除</a></td>
                    </tr>
                    <tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="2" type="checkbox"></td>
                      <td>2</td>
                      <td><a href="javascript:;" onClick="option(55)">平台外网IP的申请、网速升级</a></td>
                      <td>2017年9月18日 13:25</td>
                      <td><a href="#" class="a_btn">删除</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record">显示第 1--2 条记录，共 2 条记录</div>
          </div>
        </li>
        <li class="nav_54 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <div class="journey_title">
                <a href="javascript:;" onClick="option(53)"><img src="<?php echo (URL); ?>img/images/back.png" style="float: left;"></a>
                <p>用户通知</p>
              </div>
            <div class="add_journey">
              <form action="?act=search" method="post">
                <p>
                  <span>选择用户：</span>
                  <select name="lx" id="lx" class="input_select">
                    <option selected="selected" value="" onClick="special()">请选择</option>
                    <option value="1" onClick="special()">所有用户</option>
                    <option value="2" onClick="special()">16级学生</option>
                    <option value="3" onClick="special()">教师用户</option>
                    <option value="4" onClick="special()">普通用户</option>
                    <option value="5" name="special" onClick="special()">专有用户</option>
                  </select>
                </p>
                <p>
                  <input type="text" style="padding-left: 5px;margin-left: 100px;display: none;" />
                </p>
                <p><span class="content">通知内容：</span><textarea name="content" cols="80" rows="6"></textarea></p>
                <input type="button" value="发布" class="a_btn">
              </form>
            </div>
          </div>
        </li>
        <!--文档发布-->
        <li class="nav_61 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table" action="?act=search" method="post">
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" value="添加文档" class="button" onClick="option(62)">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/document','fddel');" value="批量删除" style="float: right">
            </form>
            <form name="addform" id="fddel">
              <div class="table-list">
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">文档标题</th>
                      <th width="160">文档链接</th>
                      <th width="200">发布时间</th>
                      <th width="120">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(is_array($list5)): foreach($list5 as $key=>$r5): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]" id="id[]" value="<?php echo ($r5["did"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r5["did"]); ?></td>
                      <td style="float: left;"><?php echo ($r5["doc_title"]); ?></td>
                      <td><?php echo ($r5["doc_link"]); ?></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r5["addtime"])); ?></td>
                      <td><a href="#" onclick="Del('./delete/flag/del/table/document/id/'+<?php echo ($r5["did"]); ?>  );" class="a_btn">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="record"><ul><?php echo ($page5); ?></ul></div>
          </div>
        </li>
        <li class="nav_62 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <div class="journey_title">
              <a href="javascript:;" onClick="option(61)"><img src="<?php echo (URL); ?>img/images/back.png" style="float: left;"></a>
              <p>发布文档</p>
            </div>
            <div class="add_journey">
              <form id="fdoc">
                <span>文档标题：</span><input type="text" name="doc_title" class="document" /><br />
                <span>文档链接：</span><input type="text" name="doc_link" class="document" /><br />
                <input type="button" value="发布" onClick="send('./docPush','fdoc');" class="a_btn">
              </form>
            </div>
          </div>
        </li>
        <!--联系我们-->
        <li class="nav_71 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <form class="search_table"  >
              <input id="keyword" type="text" size="14" class="input-text" name="keyword">
              <input type="submit" value="查询" class="button">
              <input type="button" class="button" name="dosubmit" onclick="Del('./delete/flag/del_num/table/touchus','fdel');" value="批量删除" style="float:right;">
            </form>

              <div class="table-list">
               <form id="fdel" >
                <table width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="30"><input type="checkbox" name="allbox" id="check_box" onclick="CheckAll()"></th>
                      <th width="40">序号</th>
                      <th width="200">留言板</th>
                      <th width="200">发布时间</th>
                      <th width="120">操作</th>
                    </tr>
                  </thead>
          
                  <tbody>
                  <?php if(is_array($list6)): foreach($list6 as $key=>$r6): ?><tr>
                      <td width="30"><input class="inputcheckbox" name="id[]"  value="<?php echo ($r6["tid"]); ?>" type="checkbox"></td>
                      <td><?php echo ($r6["tid"]); ?></td>
                      <td><a href="javascript:;" data-a="<?php echo ($r6["username"]); ?>" class="messageBoard"><?php echo ($r6["username"]); ?>的留言</a></td>
                      <td><?php echo (date("Y年m月d日 H:i",$r6["addtime"])); ?></td>
                      <td><a href="#" onclick="Del('./delete/flag/del/table/touchus/id/'+<?php echo ($r6["tid"]); ?>);" class="a_btn">删除</a></td>
                    </tr><?php endforeach; endif; ?>
                  </tbody>  
                        
                </table>
              
              </div>

            <div class="record"><ul><?php echo ($page6); ?></ul></div>
          </div>
        </li>
        <!--平台监控-->
        <li class="nav_81 hide">
          <div class="mainbox">
            <div id="nav" class="mainnav_title"></div>
            <div class="platform">
              <a href="#" class="a_btn">OpenStack管理中心</a>
              <a href="#" class="a_btn">邮件登录中心</a>
              <a href="#" class="a_btn">内网云盘登录中心</a>
              <a href="#" class="a_btn">平台监控中心</a>
              <a href="#" class="a_btn">vSphere管理中心</a>
              <a href="#" class="a_btn">邮件管理中心</a>
              <a href="#" class="a_btn">教师管理中心</a>
              <a href="#" class="a_btn">待定......</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>

<!-- aside-cection -->
  <div id="leftMenuBox">
    <div id="leftMenu">
      <div style="padding-left:12px;_padding-left:10px;">
        <dl id="nav_1">
          <dt>OpenStack管理</dt>
          <dd id="nav_11" onClick="option(11)"><span><a href="javascript:;">申请列表</a></span></dd>
          <dd id="nav_12" onClick="option(12)"><span><a href="javascript:;">申请销毁</a></span></dd>
        </dl>
        <dl id="nav_2">
          <dt>vSphere管理</dt>
          <dd id="nav_21" onClick="option(21)"><span><a href="javascript:;">申请列表</a></span></dd>
          <dd id="nav_22" onClick="option(22)"><span><a href="javascript:;">申请销毁</a></span></dd>
        </dl>
        <dl id="nav_3">
          <dt>SVN管理</dt>
          <dd id="nav_31" onClick="option(31)"><span><a href="javascript:;">申请列表</a></span></dd>
          <dd id="nav_32" onClick="option(32)"><span><a href="javascript:;">申请销毁</a></span></dd>
        </dl>
        <dl id="nav_4">
          <dt>开发历程</dt>
          <dd id="nav_41" onClick="option(41)"><span><a href="javascript:;">历程列表</a></span></dd>
        </dl>
        <dl id="nav_5">
          <dt>通知公告</dt>
          <dd id="nav_51" onClick="option(51)"><span><a href="javascript:;">公告列表</a></span></dd>
          <dd id="nav_53" onClick="option(53)"><span><a href="javascript:;">用户通知</a></span></dd>
        </dl>
        <dl id="nav_6">
          <dt>文档发布</dt>
          <dd id="nav_61" onClick="option(61)"><span><a href="javascript:;">文档列表</a></span></dd>
        </dl>
        <dl id="nav_7">
          <dt>联系我们</dt>
          <dd id="nav_71" onClick="option(71)"><span><a href="javascript:;">留言列表</a></span></dd>
        </dl>
        <dl id="nav_8">
          <dt>平台监控</dt>
          <dd id="nav_81" onClick="option(81)"><span><a href="javascript:;">平台列表</a></span></dd>
        </dl>
      </div>
    </div>
    <div id="Main_drop"> <a  href="javascript:toggleMenu(1);" class="on"><img src="<?php echo (URL); ?>img/images/admin_barclose.gif" width="11" height="60" border="0"  /></a> <a  href="javascript:toggleMenu(0);" class="off" style="display:none;"><img src="<?php echo (URL); ?>img/images/admin_baropen.gif" width="11" height="60" border="0"  /></a> </div>
  </div>
</div>


<div id="footer" class="footer">
  Powered by <a href="#" target="_blank">AIB云计算小组</a>&nbsp; Released&nbsp;Copyright &copy; 2016-2017 技术支持QQ：991179382
</div>

</body>
</html>
<script language="JavaScript">
var getWindowWH = function(){
    return ["Height","Width"].map(function(name){
    return window["inner"+name] ||
    document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
  });
}

window.onload = function (){
  if(!+"\v1" && !document.querySelector) { //IE6 IE7
   document.body.onresize = resize;
  } else { 
    window.onresize = resize;
  }
  function resize() {
    wSize();
    return false;
  }
};

function CheckAll(){
  $("input[name='allbox']").live('click',function (){
    if ($(this).is(":checked")){
      $("input[name='id[]']").prop("checked",true);
    }else{
      $("input[name='id[]']").prop("checked",false);
    }
  });
}

function osAuditing(id){
  window.open("os_del/id/"+id,"_blank","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=520, height=400");
}

function vsAuditing(id){
  window.open("vs_del/id/"+id,"_blank","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=520, height=400");
}

function svnAuditing(id){
  window.open("svn_del/id/"+id,"_blank","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=520, height=400");
}

function eMail(email,table,app,flag){
  window.open("e_mail/email/"+email+"/table/"+table+"/app/"+app+"/flag/"+flag,"_blank","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=470, height=400");
}

function auditing(v,flag,app){
  window.open("./auditing/result/"+v+"/flag/"+flag+"/app/"+app,"_blank","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=470, height=400");
}

function special(){
  if ($("option[name='special']").attr("selected") == 'selected'){
    $("input[type='text']").css('display','block');
  }else{
    $("input[type='text']").css('display','none');
  }
}

// function sendCourse(){
//   alert("历程发布成功！");

// }

function Del(url,id=''){
  if(window.confirm("您确定删除吗？删除后不可恢复！")){
    send(url,id);
  }
    
}

function wSize(){
  var str=getWindowWH();
  var strs= new Array();
  strs=str.toString().split(","); //字符串分割
  var h = strs[0] - 95-30;
  $('#leftMenu').height(h);
  $('#Main').height(h); 
  $('#Main_drop').height(h); 
}
wSize();

function sethighlight(n) {
   $('.topmenu li span').removeClass('current');
   $('#menu_'+n+' span').addClass('current');
   $('#leftMenu dl').hide();
   $('#nav_'+n).show();
   $('#leftMenu dl dd').removeClass('on');
   $('#nav_'+n+' dd').eq(0).addClass('on');
}

$html=$('.main_box').html();
function option(n) {
  if(n == 11){
    $('.main_box').html($html);
    $('.nav_'+n).css('display','block');
  }else{
    $('.main_box').html($html);
    $('.nav_11').css('display','none');
   $('#MainBox').children('li').hide();
   $('.nav_'+n).show();
 }
}

$('#leftMenu dl dd').click(function(){
  $('#leftMenu dl dd').removeClass('on');
  $(this).addClass('on');
});

function toggleMenu(doit){
  if(doit==1){
    $('#Main_drop a.on').hide();
    $('#Main_drop a.off').show();
    $('#MainBox .main_box').css('margin-left','24px');
    $('#leftMenu').hide();
  }else{
    $('#Main_drop a.off').hide();
    $('#Main_drop a.on').show();
    $('#leftMenu').show();
    $('#MainBox .main_box').css('margin-left','224px');
  }
} 
sethighlight(1);
</script>




<script>
//取出空白行
$(function(){
    document.children[0].children[1].firstChild.parentNode.removeChild(document.children[0].children[1].firstChild);
})
</script>