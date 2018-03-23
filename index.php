<?php
$agent_dm = $agent_dm = 'http://pj2017606.vip/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎光临</title>
<link href="css/styles.css" type="text/css" rel="stylesheet" />
<script src="js/jquery-2.2.1.min.js" type="text/javascript"></script>
<script src="js/foll_direction.js" type="text/javascript"></script>
<script src="js/focus.js" type="text/javascript"></script>
<script src="js/ant.js" type="text/javascript"></script>
<script>
$(function(){
//获奖名单滚动	
$('.roll').roll_direction({
		dom1:'.roll',
		dom2:'.roll_ul',
		dom3:'.roll_li',
		speed:70,
		time:2000,
		ant_time:600,
		direction:'top',
	});
	
//轮播图	
$('.focus').focus_img({
	 dom1:'.focus',
	 dom2:'.focus_list',
	 dom3:'.focus_sp',
	 time:'4000',
	 active:'hot',
	 type:'mouseover'
	});
})
</script>
</head>
<body>
<div class="top_bg">
<div class="top mag">
  <h1><img src="images/logo.png" width="270" height="76" /></h1>
  <h2><img src="images/logo_net.png" width="437" height="65" /></h2>
  <h3><img src="images/top_r.png" width="241" height="77" /></h3>
<div style="clear:both"></div>
</div>
</div>
<!--top_bg-->

<div class="main_bg">
 <div class="main">
 
 
<!--    <div class="main_h1"><h1><img src="images/main_03.jpg" width="965" height="295" /> <p class="pock_num6">
	248,269,268.52</p></h1></div> -->
  <!-- <div class="main_focus focus">
     <ul>
       <li class="focus_list" style="display:block">
    <a target="_blank" href="<?php echo $agent_dm; ?>"><img src="images/banner_1.jpg" width="980" height="300" /></a></li>
       <li class="focus_list">
    <a target="_blank" href="<?php echo $agent_dm; ?>"><img src="images/banner_2.jpg" width="980" height="300" /></a></li>
       <li class="focus_list">
    <a target="_blank" href="<?php echo $agent_dm; ?>"><img src="images/banner_3.jpg" width="980" height="300" /></a></li>
     </ul>
     <p><span class="hot focus_sp"></span> <span class="focus_sp"></span> <span class="focus_sp"></span>  <span class="focus_sp"></span></p>
   </div>  -->
	<div class="main_list" id="div1">
	 <ul>
	   <li>
		 <p class="p1"><a href="<?php echo $agent_dm; ?>" target="_blank"><img src="images/main_list_01.png" width="180" height="81" /></a></p>
		 <p class="p2 pock_num1">628,257,265</p>
		 <p class="p3">&#x53E4;&#x602A;&#x7684;&#x7334;&#x5B50;</p>
	   </li>
	  <li>
		 <p class="p1"><a href="<?php echo $agent_dm; ?>" target="_blank"><img src="images/main_list_02.png" width="180" height="81" /></a></p>
		 <p class="p2 pock_num2">628,257,265</p>
		 <p class="p3">&#x94A2;&#x94C1;&#x4FA0;</p>
	   </li>
		<li>
		 <p class="p1"><a href="<?php echo $agent_dm; ?>" target="_blank"><img src="images/main_list_03.png" width="180" height="81" /></a></p>
		 <p class="p2 pock_num3">628,257,265</p>
		 <p class="p3">X&#x6218;&#x8B66;</p>
	   </li>
		<li>
		 <p class="p1"><a href="<?php echo $agent_dm; ?>" target="_blank"><img src="images/main_list_04.png" width="180" height="81" /></a></p>
		 <p class="p2 pock_num4">628,257,265</p>
		 <p class="p3">&#x7F8E;&#x56FD;&#x961F;&#x957F;</p>
	   </li>
		<li>
		 <p class="p1"><a href="<?php echo $agent_dm; ?>" target="_blank"><img src="images/main_list_05.png" width="180" height="81" /></a></p>
		 <p class="p2 pock_num5">628,257,265</p>
		 <p class="p3">&#x9AD8;&#x901F;&#x516C;&#x8DEF;&#x4E4B;&#x738B;</p>
	   </li>
	   </ul>
	</div>
   <!--main_list-->
   
   <div class="main_list main_list2">
    <ul>
      <li><p class="p4"><a target="_blank" href="<?php echo $agent_dm.'register.html'; ?>">
		立即注册</a></p></li>
      <li><p class="p4"><a target="_blank" href="<?php echo $agent_dm.'promotions.html'; ?>">
		优惠活动</a></p></li>
      <li><p class="p4"><a target="_blank" href="https://3rdinput.com/">
		客户维权</a></p></li>
      <li><p class="p4"><a target="_blank" href="<?php echo $agent_dm.'mgcasino_slotgame.html'; ?>">
		mg老虎机</a></p></li>
      <li><p class="p4"><a target="_blank" href="<?php echo $agent_dm.'MegawinCasino.html'; ?>">
		千炮捕鱼</a></p></li>
    </ul>
   </div>
   
  <!-- 游戏类别列表gamels -->
  <div class="game_ls">
    <ul>
      <li><a href="<?php echo $agent_dm.'mgcasino_slotgame.html'; ?>" target="_blank"><img src="images/games/1.jpg"><span>进入游戏</span></a></li>
      <li><a href="<?php echo $agent_dm.'ptcasino_slotgame.html'; ?>" target="_blank"><img src="images/games/2.jpg"><span>进入游戏</span></a></li>
      <li><a href="<?php echo $agent_dm.'MegawinCasino.html'; ?>" target="_blank"><img src="images/games/3.jpg"><span>进入游戏</span></a></li>
      <li><a href="<?php echo $agent_dm.'liveCasino.html'; ?>" target="_blank"><img src="images/games/4.jpg"><span>进入游戏</span></a></li>
      <li><a href="<?php echo $agent_dm.'liveCasino.html'; ?>" target="_blank"><img src="images/games/5.jpg"><span>进入游戏</span></a></li>
      <li><a href="<?php echo $agent_dm.'liveCasino.html'; ?>" target="_blank"><img src="images/games/6.jpg"><span>进入游戏</span></a></li>
    </ul>
  </div>

  
   <!--向上滚动-->
   
   <div class="main_mt">
    <div class="main_mt_left roll">
     <div class="roll_ul">
      <dl class="roll_li">
        <dt><img src="images/main_mt_left01.png" width="89" height="44" /> <span>
		&#x606D;&#x559C;&#x6B27;&#x9633;&#x5148;&#x751F;gfou**ng&#x5728;&#x6355;&#x9C7C;&#x738B;&#x4E2D;&#x83B7;&#x5F97;<b>268万奖金</b></span></dt>
        <dd><a target="_blank" href="<?php echo $agent_dm; ?>">立即申请</a></dd>
      </dl>
      <dl class="roll_li">
        <dt><img src="images/main_mt_left02.png" width="89" height="44" /> <span>
		&#x606D;&#x559C;&#x5F20;&#x5148;&#x751F;weggrg*48485&#x5728;&#x53E4;&#x602A;&#x7684;&#x7334;&#x5B50;&#x4E2D;&#x83B7;&#x5F97;<b>8.6万奖金</b></span></dt>
        <dd><a target="_blank" href="<?php echo $agent_dm; ?>">立即申请</a></dd>
      </dl>
      <dl class="roll_li">
        <dt><img src="images/main_mt_left03.png" width="89" height="44" /> <span>
		&#x606D;&#x559C;&#x8C22;&#x5148;&#x751F;gf***89&#x5728;&#x9AD8;&#x901F;&#x516C;&#x8DEF;&#x83B7;&#x5F97;<b>19.3万奖金</b></span></dt>
        <dd><a target="_blank" href="<?php echo $agent_dm; ?>">立即申请</a></dd>
      </dl>
      <dl class="roll_li">
        <dt><img src="images/main_mt_left04.png" width="89" height="44" /> <span>
		&#x606D;&#x559C;&#x738B;&#x5148;&#x751F;gfaini***99&#x5728;&#x62DB;&#x8D22;&#x8FDB;&#x5B9D;&#x4E2D;&#x83B7;&#x5F97;<b>14万奖金</b></span></dt>
        <dd><a target="_blank" href="<?php echo $agent_dm; ?>">立即申请</a></dd>
      </dl>
      <dl class="roll_li">
        <dt><img src="images/main_mt_left05.jpg" width="89" height="44" /> <span>
		&#x606D;&#x559C;&#x90C7;&#x5973;&#x58EB;gfyuan***99&#x5728;&#x7F8E;&#x56FD;&#x961F;&#x957F;&#x83B7;&#x5F97;<b>18.9万奖金</b></span></dt>
        <dd><a target="_blank" href="<?php echo $agent_dm; ?>">立即申请</a></dd>
      </dl>
      </div>
    </div>
    <!--main_mt_left-->
    
    <div class="main_mt_right">
      <h1><img src="images/main_mt_04.png" width="250" height="158" /></h1>
      <h2>&#x606D;&#x559C;&#x6C5F;&#x82CF;&#x5148;&#x751F;<span>gf7788**5</span>&#x5728;&#x62DB;&#x8D22;&#x8FDB;&#x5B9D;</h2>
      <h3>500&#x4E07;&#x5927;&#x5956;</h3>
      <h4><a target="_blank" href="<?php echo $agent_dm; ?>"><img src="images/main_mt_05.png" width="250" height="47" /></a></h4>
    </div>
    <!--main_mt_right--> 
   
    <div style="clear:both"></div>
   </div>
   <!--main_mt-->
   
 
 
 
 
   
 </div>
</div>
<!--main_bg-->


<div class="footer_bg">
 <div class="footer mag">
    <h1><img src="images/footer_left.png" width="571" height="142" /></h1>
    <h2><img src="images/footer_03.png" width="74" height="74" /></h2>
    <div style="clear:both"></div>
 </div>
 <script src="js/move.js" type="text/javascript"></script>
 <!--footer-->
 <p>Copyright©&#x6FB3;&#x95E8;&#x8461;&#x4EAC;&#x8D4C;&#x573A; Reserved</p>
</div>



</body>
</html>

