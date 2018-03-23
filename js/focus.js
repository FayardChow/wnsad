// JavaScript Document




//轮播基础属性
var defaults={
  dom1:'',
  dom2:'',
  dom3:'',
  time:'',
  active:'',
  type:''
}



//图片显示方法
var focus_show=function(index,options){
	//console.log(options)
	$(options.dom2).eq(index).fadeIn().siblings().fadeOut();
	$(options.dom3).removeClass(options.active);
	$(options.dom3).eq(index).addClass(options.active);
}





//轮播方法
var focus_play=function(index,options){
  //alert(options.dom2)
  timer=setInterval(function(){
	 index++;
	 index=index>=$(options.dom2).length?0:index;
	 focus_show(index,options);
	},options.time)

	return timer;
}





//层级点击切换方法
var focus_tab=function(timer,options){
	//console.log(timer);
	$(options.dom3).on(options.type,function(){
	clearInterval(timer);
	index=$(this).index();
	
	focus_show(index,options);
	timer=focus_play(index,options);
  })
	
}




//轮播主函数
$.fn.extend({
	focus_img:function(options){
		var options=$.fn.extend({},defaults,options);
		var index=0;
		var timer=null;	
		
		timer=focus_play(index,options);
		focus_tab(timer,options);
	}
		
	
	
})