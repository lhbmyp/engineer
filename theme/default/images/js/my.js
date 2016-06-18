$(document).ready(function(){
    $("li a button").each(function(){
        bt = $(this);
        btnname = bt.html();
        reg = new RegExp("([\\u4e00-\\u9ffff]+)\\s+(.*)");
        match  = reg.exec(btnname);
        
        myhtml = "<p>"+match[1]+"</p ><p>"+match[2]+"</p >"
        $(this).html(myhtml);
    })
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