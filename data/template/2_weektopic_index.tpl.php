<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?><?php
$return = <<<EOF

<style>
#weektopic_list{height:30px;border: 1px solid #CDCDCD;margin-bottom:5px}
#weektopic_list a{color:#336699}
#weektopic_list ul{ float:left; margin:0; width:120px;height:30px; overflow:hidden}
#weektopic_list ul li{ line-height:30px; height:30px; overflow:hidden}
#weektopic_list #myclick{float:right;line-height:30px;}
#weektopic_list #topic{float:left;line-height:30px;}
</style>
<div id="weektopic_list">
<span id="topic"><div style="margin-top:7px;float:left;"><img src="source/plugin/weektopic/images/gg.png" ></div>本周互动话题：
EOF;
 if($topic) { 
$return .= <<<EOF
<a href="{$topic['url']}" style="color:#336699;">{$topic['name']}</a>
EOF;
 } else { 
$return .= <<<EOF
<a href="#">这是演示话题哦,为什么地球是圆的？</a>
EOF;
 } 
$return .= <<<EOF
&nbsp;&nbsp;&nbsp;</span>
<!-- JiaThis Button BEGIN -->
<div style="float:left;line-height:30px;">大家都在说：</div>
<ul id="topic_list">

EOF;
 if($posts) { if(is_array($posts)) foreach($posts as $post) { 
$return .= <<<EOF
<li><a href="forum.php?mod=redirect&amp;goto=findpost&amp;ptid={$topic['tid']}&amp;pid={$post['pid']}">{$post['message']}</a></li>

EOF;
 } } else { 
$return .= <<<EOF

<li><a href="#">本周互动话题我也来发言</a></li>
<li><a href="#">管理员同志这是演示数据哦</a></li>

EOF;
 } 
$return .= <<<EOF

</ul>
<div style="margin-top:6px;float:right">
<div class="jiathis_style"><span class="jiathis_txt">分享到：</span>
<a class="jiathis_button_icons_1"></a>
<a class="jiathis_button_icons_2"></a>
<a class="jiathis_button_icons_3"></a>
<a class="jiathis_button_icons_4"></a>
<a class="jiathis_button_icons_5"></a>
<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
<a class="jiathis_counter_style"></a>
</div>
</div>
<script type="text/javascript" >
var jiathis_config={
url:"{$topic['url']}",
summary:"{$topic['name']}",
title:"{$topic['name']}",
hideMore:false
}
</script>
<script src="http://v3.jiathis.com/code/jia.js" type="text/javascript" charset="utf-8"></script>
<!-- JiaThis Button END -->
<span id="myclick">

EOF;
 if($_G['groupid']==1) { 
$return .= <<<EOF
<a href="plugin.php?id=weektopic&amp;action=showwindow" onclick='showWindow("apply",this.href)'><font color="red">添加本周话题</font></a> &nbsp; | &nbsp;
EOF;
 } 
$return .= <<<EOF
<a onclick="showWindow('weektopic','plugin.php?id=weektopic&action=reply&tid={$topic['tid']}')" href="javascript:" style="color:#69879B">我来说两句</a>&nbsp;&nbsp;
</span>
</div>
<script>
var topic=document.getElementById("topic_list"),can=true;
topic.innerHTML+=topic.innerHTML;
topic.onmouseover=function(){can=false};
topic.onmouseout=function(){can=true};
new function (){
var stop=topic.scrollTop%30==0&&!can;
if(!stop)topic.scrollTop==parseInt(topic.scrollHeight/2)?topic.scrollTop=0:topic.scrollTop++;
setTimeout(arguments.callee,topic.scrollTop%30?10:1500);
};
</script>

EOF;
?>