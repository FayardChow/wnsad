// JavaScript Document
;(function($,window){
	var defaults={
		dom1:'',  //最外层相对定位的class
		dom2:'',  //绝对定位的class
		dom3:'',  //定位元素里面的class
		speed:'', //每次滚动的距离
		time:'',  //每次滚动的时间
		ant_time:'', //animate动画时间
		direction:'', //滚动方向
	}



//滚动主体函数
function roll_direction(options,flag_html){
	  var flag_gap=$(options.dom1).height()+$(options.dom3).eq(0).height();
	  var flag_height=$(options.dom2).height();
	  //如果传过来的是top,则向上滚动
	  if(options.direction=='top'){
		   var flag_abs= Math.abs($(options.dom2).position().top);
		   flag_height-flag_abs<=flag_gap?$(options.dom2).append(flag_html):function(){};
		   $(options.dom2).animate({top:'-='+options.speed+'',},options.ant_time);
		 };
		 
      //如果传过来的是bottom,则向下滚动	 
	  if(options.direction=='bottom'){
		  var flag_abs= Math.abs($(options.dom2).position().top);
		  flag_height-flag_abs>=flag_gap?$(options.dom2).append(flag_html):function(){};
		  $(options.dom2).animate({bottom:'-='+options.speed+'',},options.ant_time);
		};
	  
	  
	  
	  
	 
	}


	



//鼠标移入停止定时器，移出重新开启
/*
function clear_timer(options,timer,flag_html){
	
  $(options.dom1).hover(function(){$(options.dom2).stop();clearInterval(timer)},function(){
    timer=setInterval(function(){roll_direction(options,flag_html)},options.time);
  })
  return timer;
}
*/

//主函数
$.fn.extend({
  roll_direction:function(options){
	   var options=$.fn.extend({},defaults,options);
	   var timer=null;
	   var flag_html=$(options.dom2).html();
	   $(options.dom2).append(flag_html);	   
      
		//上下滚动函数
		timer=setInterval(function(){roll_direction(options,flag_html)},options.time);
		//timer=clear_timer(options,timer,flag_html)
		
		
		/*
		  $(options.dom2).hover(function(){clearInterval(timer)},function(){
    timer=setInterval(function(){roll_direction(options,flag_html)},options.time);
  })*/

 }	

})
	
})(jQuery,window)