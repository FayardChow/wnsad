// JavaScript Document
//游戏下载滚动
var oDiv=document.getElementById('div1');
var oUl=oDiv.getElementsByTagName('ul')[0];
//var oLi=oUl.getElementsByTagName('li');
var speed=-1;
var timer_game=null;
oUl.innerHTML+=oUl.innerHTML;
oUl.style.width=980*2+'px';
function move(){
if(oUl.offsetLeft<-oUl.offsetWidth/2)
	{
		oUl.style.left='0';
	}
	oUl.style.left=oUl.offsetLeft+speed+'px';
}
var timer_game=setInterval(move, 30);


oDiv.onmouseover=function ()
{
	clearInterval(timer_game);
};

oDiv.onmouseout=function ()
{
	timer_game=setInterval(move, 30);
};

