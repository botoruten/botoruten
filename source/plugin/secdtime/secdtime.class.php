<?php

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_secdtime {

	function __construct(){
		
	}
	
	function  global_cpnav_extra1(){
		global $_G;
		$config = $_G['cache']['plugin']['secdtime'];
		$position = intval($config['secposition']);
		$position = in_array($position, array(1, 2))?$position:1;
		if($position==1){
			$color = $config['color'];
			$initime = $config['initime'];
			$color = $color?$color:'#ff0000';
			$formatop = $config['timeformatop'];
			$format = $config['secdtimeformat'];
			$format = $format?$format:'{y}年{d}天{h}小时{i}分钟{s}秒';
			$match = array();
			preg_match_all('/{(y|d|h|i|s)}/', $format, $match);
			$arr = preg_split('/{(y|d|h|i|s)}/', $format);
			$str = '
				<a id="showsecdtime" style="color:'.$color.';"></a>
				<style type="text/css">
				#showsecdtime:hover{
					text-decoration:none;
				}
				</style>
				<script type="text/javascript">
				function NewDate(str) { 
					var date = new Date(Date.parse(str.replace(/-/g,   "/"))); 
					return date; 
				} 
				function showsecdtime() {
					var today =NewDate("'.$initime.'");
					var birthDay=new Date();
					var timeold=today.getTime()-birthDay.getTime();
						//alert("'.$initime.'");
					var secdtimeold=timeold/1000
					var secondsold=Math.floor(secdtimeold);
					var msPerDay=24*60*60*1000;

					var msPerYear=365*24*60*60*1000;
					var e_Yearsold=timeold/msPerYear;
					var Yearsold=Math.floor(e_Yearsold);
					var e_daysold=(Yearsold-e_Yearsold)*-365
					var daysold=Math.floor(e_daysold);
					var e_hrsold=(daysold-e_daysold)*-24;
					var hrsold=numadd0(Math.floor(e_hrsold));
					var e_minsold=(hrsold-e_hrsold)*-60;
					var minsold=numadd0(Math.floor((hrsold-e_hrsold)*-60));
					//alert(minsold);
					var seconds=numadd0(Math.floor((minsold-e_minsold)*-60)).toString();
					document.getElementById("showsecdtime").innerHTML = "';
			foreach($arr as $k => $v) {
				$str = $str.$v;
				if($match[1][$k]) {
					$str = $str.'"+';
					//if((strtotime($initime)-time())/(365*24*60*60)>=1){
						switch($match[1][$k]) {
						case 'y':
							$str = $str.'Yearsold';
							break;
						case 'd':
							$str = $str.'daysold';
							break;
						case 'h':
							$str = $str.'hrsold';
							break;
						case 'i':
							$str = $str.'minsold';
							break;
						case 's':
							$str = $str.'seconds';
							break;
						default:
							$str = $str.'""';
					}
					/*
					}else{
						if(((strtotime($initime)-time())/(24*60*60))>=1){
								switch($match[1][$k]) {
								case 'd':
									$str = $str.'daysold';
									break;
								case 'h':
									$str = $str.'hrsold';
									break;
								case 'i':
									$str = $str.'minsold';
									break;
								case 's':
									$str = $str.'seconds';
									break;
								default:
									$str = $str.'""';
					}
						}else{
						switch($match[1][$k]) {
						case 'h':
							$str = $str.'hrsold';
							break;
						case 'i':
							$str = $str.'minsold';
							break;
						case 's':
							$str = $str.'seconds';
							break;
						default:
							$str = $str.'""';
						}
					}
				}*/
					$str = $str.'+"';
				}
			}
			$str = $str.'";
					setTimeout(showsecdtime, 1000);
				}
				function numadd0(num) {
					if(num < 10) {
						num = \'0\'+num;
					}
					return num;
				}
				showsecdtime();
				</script>
			';
			if(!$initime)
			{
				$str='';
			}else if((strtotime($initime)-time())/(24*60*60)<0){
				$over = $config['over'];
				$str="<span style=".'color:'.$color.';">'.$over."</span>";
			
			}
			return $str;
		}
	}
	
	function global_footerlink(){
		global $_G;
		$config = $_G['cache']['plugin']['secdtime'];
		$position = intval($config['secposition']);
		$position = in_array($position, array(1, 2))?$position:2;
		if($position==2){
			$color = $config['color'];
			$initime = $config['initime'];
			$color = $color?$color:'#ff0000';
			$formatop = $config['timeformatop'];
			$format = $config['secdtimeformat'];
			$format = $format?$format:'{y}年{d}天{h}小时{i}分钟{s}秒';
			$match = array();
			preg_match_all('/{(y|d|h|i|s)}/', $format, $match);
			$arr = preg_split('/{(y|d|h|i|s)}/', $format);
			$str = '
				<a id="showsecdtime" style="color:'.$color.';"></a>
				<style type="text/css">
				#showsecdtime:hover{
					text-decoration:none;
				}
				</style>
				<script type="text/javascript">
				function NewDate(str) { 
					var date = new Date(Date.parse(str.replace(/-/g,   "/"))); 
					return date; 
				} 
				function showsecdtime() {
					var today =NewDate("'.$initime.'");
					var birthDay=new Date();
					var timeold=today.getTime()-birthDay.getTime();
						//alert("'.$initime.'");
					var secdtimeold=timeold/1000
					var secondsold=Math.floor(secdtimeold);
					var msPerDay=24*60*60*1000;

					var msPerYear=365*24*60*60*1000;
					var e_Yearsold=timeold/msPerYear;
					var Yearsold=Math.floor(e_Yearsold);
					var e_daysold=(Yearsold-e_Yearsold)*-365
					var daysold=Math.floor(e_daysold);
					var e_hrsold=(daysold-e_daysold)*-24;
					var hrsold=numadd0(Math.floor(e_hrsold));
					var e_minsold=(hrsold-e_hrsold)*-60;
					var minsold=numadd0(Math.floor((hrsold-e_hrsold)*-60));
					//alert(minsold);
					var seconds=numadd0(Math.floor((minsold-e_minsold)*-60)).toString();
					document.getElementById("showsecdtime").innerHTML = "';
			foreach($arr as $k => $v) {
				$str = $str.$v;
				if($match[1][$k]) {
					$str = $str.'"+';
					//if((strtotime($initime)-time())/(365*24*60*60)>=1){
						switch($match[1][$k]) {
						case 'y':
							$str = $str.'Yearsold';
							break;
						case 'd':
							$str = $str.'daysold';
							break;
						case 'h':
							$str = $str.'hrsold';
							break;
						case 'i':
							$str = $str.'minsold';
							break;
						case 's':
							$str = $str.'seconds';
							break;
						default:
							$str = $str.'""';
					}
					/*
					}else{
						if(((strtotime($initime)-time())/(24*60*60))>=1){
								switch($match[1][$k]) {
								case 'd':
									$str = $str.'daysold';
									break;
								case 'h':
									$str = $str.'hrsold';
									break;
								case 'i':
									$str = $str.'minsold';
									break;
								case 's':
									$str = $str.'seconds';
									break;
								default:
									$str = $str.'""';
					}
						}else{
						switch($match[1][$k]) {
						case 'h':
							$str = $str.'hrsold';
							break;
						case 'i':
							$str = $str.'minsold';
							break;
						case 's':
							$str = $str.'seconds';
							break;
						default:
							$str = $str.'""';
						}
					}
				}*/
					$str = $str.'+"';
				}
			}
			$str = $str.'";
					setTimeout(showsecdtime, 1000);
				}
				function numadd0(num) {
					if(num < 10) {
						num = \'0\'+num;
					}
					return num;
				}
				showsecdtime();
				</script>
			';
			if(!$initime)
			{
				$str='';
			}else if((strtotime($initime)-time())/(24*60*60)<0){
				$over = $config['over'];
				$str="<span style=".'color:'.$color.';">'.$over."</span>";
			
			}
			return $str;
		}
	}
}


?>