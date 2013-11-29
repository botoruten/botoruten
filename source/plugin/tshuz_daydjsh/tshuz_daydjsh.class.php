<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_tshuz_daydjsh {
	function  global_cpnav_extra1() {
	    global $_G;
	    if($_G['cache']['plugin']['tshuz_daydjsh']['style'] == 1) $return = '<script language="JavaScript">
<!-- // (c) www.discuzlab.com版权所有
var urodz= new Date("'.$_G['cache']['plugin']['tshuz_daydjsh']['day'].'");
var  s="温馨提示您：离'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'";
var now = new Date();
var ile = urodz.getTime() - now.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
if (dni > 1)
   document.write(""+s+"还有"+dni +"天")
else if (dni == 1)
     document.write(""+s+"只有2天啦！")
else if (dni == 0)
     document.write("温馨提示您：明天就是'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'啦！")
else
    document.write("'.$_G['cache']['plugin']['tshuz_daydjsh']['tip'].'");
// -->
</script>';
		return $return;
	}
}

class plugin_tshuz_daydjsh_forum extends plugin_tshuz_daydjsh{
	function index_status_extra() {
	    global $_G;
	    if($_G['cache']['plugin']['tshuz_daydjsh']['style'] == 2) $return = '<script language="JavaScript">
<!-- // (c) www.discuzlab.com版权所有
var urodz= new Date("'.$_G['cache']['plugin']['tshuz_daydjsh']['day'].'");
var  s="温馨提示您：离'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'";
var now = new Date();
var ile = urodz.getTime() - now.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
if (dni > 1)
   document.write(""+s+"还有"+dni +"天")
else if (dni == 1)
     document.write(""+s+"只有2天啦！")
else if (dni == 0)
     document.write("温馨提示您：明天就是'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'啦！")
else
    document.write("'.$_G['cache']['plugin']['tshuz_daydjsh']['tip'].'");
// -->
</script>';
		return $return;
	}
	function index_nav_extra() {
	    global $_G;
	    if($_G['cache']['plugin']['tshuz_daydjsh']['style'] == 3) $return = '<script language="JavaScript">
<!-- // (c) www.discuzlab.com版权所有
var urodz= new Date("'.$_G['cache']['plugin']['tshuz_daydjsh']['day'].'");
var  s="温馨提示您：离'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'";
var now = new Date();
var ile = urodz.getTime() - now.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
if (dni > 1)
   document.write(""+s+"还有"+dni +"天")
else if (dni == 1)
     document.write(""+s+"只有2天啦！")
else if (dni == 0)
     document.write("温馨提示您：明天就是'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'啦！")
else
    document.write("'.$_G['cache']['plugin']['tshuz_daydjsh']['tip'].'");
// -->
</script>';
		return $return;
	}
	function global_footerlink() {
	    global $_G;
	    if($_G['cache']['plugin']['tshuz_daydjsh']['style'] == 4) $return = '<script language="JavaScript">
<!-- // (c) www.discuzlab.com版权所有
var urodz= new Date("'.$_G['cache']['plugin']['tshuz_daydjsh']['day'].'");
var  s="温馨提示您：离'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'";
var now = new Date();
var ile = urodz.getTime() - now.getTime();
var dni = Math.floor(ile / (1000 * 60 * 60 * 24));
if (dni > 1)
   document.write(""+s+"还有"+dni +"天")
else if (dni == 1)
     document.write(""+s+"只有2天啦！")
else if (dni == 0)
     document.write("温馨提示您：明天就是'.$_G['cache']['plugin']['tshuz_daydjsh']['festival'].'啦！")
else
    document.write("'.$_G['cache']['plugin']['tshuz_daydjsh']['tip'].'");
// -->
</script>';
		return $return;
	}

}
?>
