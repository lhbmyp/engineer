$(document).ready(function(){
    $("td div a").each(function(){
        var bt = $(this).text();
        if(bt.length>20){
        	var btn=bt.substring(0,20)+'...';
        }
        $(this).html(btn);
    })
});
$(document).ready(function(){
    $("p a").each(function(){
        var bt = $(this).text();
        if(bt.length>35){
        	var btn=bt.substring(0,35)+'...';
        }
        $(this).html(btn);
    })
});
$(document).ready(function(){
    $("li.li_4 ul li a").each(function(){
        var bt2 = $(this).text();
        if(bt2.length>12){
            var btn2=bt2.substring(0,12)+'...';
        }
        $(this).html(btn2);
    })
});
function showUrl(url){
    console.log(url);
}