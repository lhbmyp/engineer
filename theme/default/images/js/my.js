$(document).ready(function(){
    $("li a button").each(function(){
        bt = $(this);
        btnname = bt.html();
        reg = new RegExp("([\\u4e00-\\u9ffff]+)\\s+(.*)");
        match  = reg.exec(btnname);
        
        myhtml = "<p>"+match[1]+"</p ><p>"+match[2]+"</p >"
        $(this).html(myhtml);
    })

        var speedpic = 7;//速度数值越大速度越慢
        document.getElementById("demo2").innerHTML = document.getElementById("demo1").innerHTML;
        function Marqueepic() {
            if (document.getElementById("demo2").offsetWidth
                    - document.getElementById("demo").scrollLeft <= 0) {
                document.getElementById("demo").scrollLeft -= document
                        .getElementById("demo1").offsetWidth;
            } else {
                document.getElementById("demo").scrollLeft++;
            }
        }
        var MyMarpic = setInterval(Marqueepic, speedpic);

        document.getElementById("demo").onmouseover = function() {
            clearInterval(MyMarpic);
        }
        document.getElementById("demo").onmouseout = function() {
            MyMarpic = setInterval(Marqueepic, speedpic);
        }
}

)
/*$(document).ready(function(){
    $("ul li span").each(function(){
        bt = $(this);
        btnname = bt.html();
        reg = new RegExp("([\\u4e00-\\u9ffff]+)\\s+(.*)");
        match  = reg.exec(btnname);
        
        myhtml = "<p>"+match[1]+"</p ><p>"+match[2]+"</p >"
        $(this).html(myhtml);
    })
}

)*/