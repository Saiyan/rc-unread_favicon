
function updateFavicon(){
    var count = 0;
    $('.unreadcount').each(function(){
        var c = parseInt($(this).text());
        if(c && !isNaN(c)){
            count += c;
        }
    });
    if(count !== last)
        favicon.badge(count);
}

/*****************************/

var last = -1;
var favicon=new Favico({
    animation:'pop'
});

window.setInterval(updateFavicon, 10000);

