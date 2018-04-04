var c = 0;
var time;
function cn(x,f) {
    if (f){
        if (x < 0) {
            return c = 2;
        } else if (x >= 2) {
            return c = 0;
        } else {
            return c=x+1;
        }
    } else if (!f){
        if (x == 0) {//021021
            return c = 2;
        } else if (x == 1) {
            return c = 0;
        } else {
            return c=x-1;
        }
    }
}

function roll_l(d) {
    var a = ['#f', '#s', '#t'];
    $(a[c]).animate({
        zIndex: 0,
        opacity: '0'
    }, 'slow');
    $(a[cn(c,d)]).animate({
        zIndex: 1,
        opacity: '1'
    }, 'slow');
}
$('document').ready(function () {
    time=window.setInterval('roll_l(1)',5000); 
    $('#left').click(function () {
        roll_l(0);
        window.clearInterval(time);
    })
    $('#right').click(function () {
        roll_l(1);
        window.clearInterval(time);
    })
    $('.main').mouseover(function(){
        window.clearInterval(time);
    })
    $('.main').mouseout(function(){
        time=window.setInterval('roll_l(1)',5000); 
    })
})
