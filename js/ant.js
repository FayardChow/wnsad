// JavaScript Document
$(function(){

//奖池初始化值
function pock(obj,num){
	var pock_num=num;
	setInterval(function(){
	   pock_num+=1348.46;
	   pock_html_start=pock_num.toFixed(2);
	   pock_html=addCommas(pock_html_start)
	  //pock_html=Number(pock_num).toLocaleString(3);
	   $(obj).html(pock_html)
	   },400)
	}
pock('.pock_num1',635876.33)
pock('.pock_num2',598762.34)
pock('.pock_num3',368751.23)
pock('.pock_num4',958720.48)
pock('.pock_num5',863247.64)
pock('.pock_num6',2482692.52)


		
})




function addCommas(nStr)
{
 nStr += '';
 x = nStr.split('.');
 x1 = x[0];
 x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}




