var daydream_animation;
$(function() {
    daydream_start();
    setInterval(function() {
        now = new Date();
        Y = now.getFullYear();
        m = now.getMonth()+1;
        d = now.getDate();
        H = now.getHours();
        i = now.getMinutes();
        s = now.getSeconds();
        datestring = Y+'-'+(m<10?'0'+m:m)+'-'+(d<10?'0'+d:d)+' '+(H<10?'0'+H:H)+':'+(i<10?'0'+i:i)+':'+(s<10?'0'+s:s);
        $('.clock').text(datestring);
    }, 1000);
});

function daydream_start() {
    $("#daydream").hide()
    
    setTimeout(function() {
        $("#daydream").show();
        daydream_animate();
        daydream_animation = setInterval(function() {
            daydream_animate();
        }, 10000);
    }, 1*$("meta[name='daydream_starttime']").attr("content")+1000);
}

function daydream_stop() {
    clearInterval(daydream_animation);
    $('#daydream').hide();
    $.get("http://wopr:8083/fhem?cmd=" + encodeURIComponent("set MISSED_CALL &nbsp;"));
    daydream_start();
}

function daydream_animate() {
    var w = $("#daydream iframe").width();
    var h = $("#daydream iframe").height();
    $("#daydream iframe").animate({left: Math.floor((Math.random()*(1060-w))+1)+"px", top:Math.floor((Math.random()*(560-h))+1)+"px"},10000);
    $("#daydream .clock").animate({left: Math.floor((Math.random()*(1060-w))+1)+"px", top:Math.floor((Math.random()*(560-h))+1)+"px"},10000);
}
