// daydream for gridster
// resizes all gridster widgets to 1x1 and shuffles them arround.
//
// Usage:
//  <script type="text/javascript" src="js/daydream.js"></script>
//
// Optional Meta-Tags:
//  <meta name="daydream_starttime" content="<starttime>">
//  <meta name="daydream_slowdown" content="<slowdown>">
//  <meta name="daydream_gridmaxx" content="<gridmaxx>">
//  <meta name="daydream_gridmaxy" content="<gridmaxy>">
//
// starttime
//  (re)start daydream after <starttime> ms
//  defaults to 60000 (1min) if not set
//
// slowdown
//  slowdown daydream animations by <slowdown> ms
//  defaults to 1000 (1sec) if not set
//
// gridmaxx, gridmaxy
//  maximum gridsize in x and y coordinates to use for the animation
//  if both options are set to 0, max gridsize is calculated by the
//  grids maximum dimensions. this is the default

var starttime=60000;
var slowdown=1000;
var gridMaxX=0;
var gridMaxY=0;
var timeoutStart;
var intervalRow=Array();
var intervalCol=Array();

$(document).ready(function(){
    starttime = 1*$("meta[name='daydream_starttime']").attr("content")||starttime;
    slowdown=1*$("meta[name='daydream_slowdown']").attr("content")||slowdown;
    gridMaxX=1*$("meta[name='daydream_gridmaxx']").attr("content")||gridMaxX;
    gridMaxY=1*$("meta[name='daydream_gridmaxy']").attr("content")||gridMaxY;
   
    var autoSize=0;
    if(gridMaxX==0 && gridMaxY==0) {
        autoSize=1;
    }
    $("li").each(function(i) {
        var elem = $(this);
        elem.attr("data-row-save", elem.attr("data-row"));
        elem.attr("data-col-save", elem.attr("data-col"));
        elem.attr("data-sizex-save", elem.attr("data-sizex"));
        elem.attr("data-sizey-save", elem.attr("data-sizey"));
        elem.attr("data-overflow-save", elem.css("overflow"));
        
        if(autoSize) {
            if(elem.attr("data-row") && elem.attr("data-col") && elem.attr("data-sizex") && elem.attr("data-sizey")) {
                gridMaxY = Math.max(gridMaxY, elem.attr("data-row")*1 + elem.attr("data-sizey")*1 - 1);
                gridMaxX = Math.max(gridMaxX, elem.attr("data-col")*1 + elem.attr("data-sizex")*1 - 1);
            }
        }
    });
    timeoutStart = setTimeout(function() {startAnimation()}, starttime);
});

$(document).mousemove(function(event) {
    restartAnimation();
});
$(document).click(function(event) {
    restartAnimation();
});

function startAnimation() {
    $("li").each(function(i) {
        var elem = $(this);
        elem.css("pointer-events", "none");
        elem.css("overflow", "hidden");
        setTimeout(function() {elem.attr("data-sizex", 1);}, Math.floor(Math.random()*slowdown));
        setTimeout(function() {elem.attr("data-sizey", 1);}, Math.floor(Math.random()*slowdown));
        intervalRow[i] = setInterval(function() {elem.attr("data-row", Math.floor(Math.random()*gridMaxY)+1);}, Math.floor(Math.random()*4000)+slowdown);
        intervalCol[i] = setInterval(function() {elem.attr("data-col", Math.floor(Math.random()*gridMaxX)+1);}, Math.floor(Math.random()*4000)+slowdown);
    });
}

function stopAnimation() {
    $("li").each(function(i) {
        var elem = $(this);
        clearInterval(intervalRow[i]);
        clearInterval(intervalCol[i]);
        elem.attr("data-sizex", elem.attr("data-sizex-save"));
        elem.attr("data-sizey", elem.attr("data-sizey-save"));
        elem.attr("data-row", elem.attr("data-row-save"));
        elem.attr("data-col", elem.attr("data-col-save"));
        elem.css("overflow", elem.attr("data-overflow-save"));
        elem.css("pointer-events", "auto");
    });
}

function restartAnimation() {
    stopAnimation();
    clearTimeout(timeoutStart);
    timeoutStart = setTimeout(function() {startAnimation()}, starttime);
}