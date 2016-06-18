/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
jQuery(function($){
        $('#lunbo1').slideBox({
                duration : 2,//滚动持续时间，单位：秒
                easing : 'linear',//swing,linear//滚动特效
                delay : 5,//滚动延迟时间，单位：秒
                hideClickBar : false,//不自动隐藏点选按键
                clickBarRadius : 10
        });
        $('#lunbo2').slideBox({
                duration : 0.8,//滚动持续时间，单位：秒
                easing : 'linear',//swing,linear//滚动特效
                delay : 5,//滚动延迟时间，单位：秒
                hideClickBar : false,//不自动隐藏点选按键
                clickBarRadius : 10
        });
});
window.onload = function() {

    var oDiv = document.getElementById("tab");

    var oLi = oDiv.getElementsByTagName("div")[0].getElementsByTagName("li");

    var aCon = oDiv.getElementsByTagName("div")[1].getElementsByTagName("div");
	
	/*  var aCon = oDiv.getElementsByTagName("div")[1].getElementsByTagName("table"); */
/* 	 	console.log(aCon);
	 var _temp=[];
for(var i=0;i<aCon.length;i++)
{
	
	if(aCon[i].nodeType==1)
		_temp.push(aCon[i]);
}
aCon=_temp; */

console.log(oLi);

    var timer = null;

    for (var i = 0; i < oLi.length; i++) {

        oLi[i].index = i;

        oLi[i].onmouseover = function() {

            show(this.index);

        }

    }

    function show(a) {

        index = a;

        var alpha = 0;

        for (var j = 0; j < oLi.length; j++) {

            oLi[j].className = "";

            aCon[j].className = "";

           aCon[j].style.opacity = 0;

            aCon[j].style.filter = "alpha(opacity=0)";
            if(j==index){
                aCon[j].style.visibility="visible";
            }else{
                aCon[j].style.visibility="hidden";
            }
        }

        oLi[index].className = "now_tab1";

        clearInterval(timer);

        timer = setInterval(function() {

            alpha += 2;

            alpha > 100 && (alpha = 100);

            aCon[index].style.opacity = alpha / 100;

           aCon[index].style.filter = "alpha(opacity=" + alpha + ")";

            alpha == 100 && clearInterval(timer);

        },

        5)

    }

}

