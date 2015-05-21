var bubbles = {
    interval : new Array(),
    starttime: 0,
    spotcount: 0,
    width: 0,
    height: 0,
    maxsize: 0,
    init : function (starttime, spotcount, maxsize, width, height) {

        this.starttime=starttime || 10000;
        this.spotcount=spotcount|| 15;
        this.maxsize=maxsize || 300;
        this.width=width || $(document).width()-this.maxsize;
        this.height=height || $(document).height()-this.maxsize;
        
        $('head').append('<style type="text/css">'
            + '    #daydreamshade {'
            + '        position:absolute;'
            + '        top:0px;'
            + '        left:0px;'
            + '        height:100%;'
            + '        width:100%;'
            + '        z-index:9999;'
            + '        background-color:black;'
            + '        opacity:0.9'
            + '    }'
            + '    .daydreamspot {'
            + '        position:absolute;'
            + '        top:'+Math.floor(this.height/2)+'px;'
            + '        left:'+Math.floor(this.width/2)+'px;'
            + '        border-radius:'+this.maxsize+'px;'
            + '        opacity:0.8;'
            + '    }'
            + '</style>');
        $('body').append('<div id="daydreamshade"></div>');
        this.start();
    },
    start : function () {
        $("#daydreamshade").hide();
        var spots = new Array();
        var c = this.spotcount>=0?this.spotcount:Math.floor(Math.random()*this.spotcount*-1+1);
        for(var d=0; d<c; d++) {
            spots[d] = $('<div id="daydreamspot'+d+'" class="daydreamspot"></div>');
            var size = Math.floor((Math.random()*(this.maxsize-20))+20) +"px";
            spots[d].css('height', size);
            spots[d].css('width', size);
            spots[d].css('backgroundColor', this.color());
            $("#daydreamshade").append(spots[d]);
        }
        setTimeout($.proxy(function() {
            $("#daydreamshade").show();
            for(var d=0; d<spots.length; d++) {
                this.animation(spots[d]);
            }
        }, this), this.starttime);
    },
    stop : function() {
        $('#daydreamshade').hide();
        for(var i=0;i<this.interval.length; i++) {
            clearInterval(this.interval[i]);
        }
        $('#daydreamshade').empty();
    },
    restart : function() {
        this.stop();
        this.start();
    },
    animation : function(elem) {
        var t = 2000 + Math.floor(Math.random()*(8000));
        
        var newX = Math.floor((Math.random()*(this.width))+1) +"px";
        var newY = Math.floor((Math.random()*(this.height))+1)+"px";
        var newSize = Math.floor((Math.random()*(this.maxsize-20))+20) +"px";
        var newColor = this.color();
        
        elem.animate({left:newX, top:newY, height:newSize, width:newSize, backgroundColor:newColor}, t);
        clearInterval(this.interval[elem.attr('id')]);
        this.interval[elem.attr('id')] = setInterval($.proxy(function() { this.animation(elem) }, this), t);
    },
    color : function() {
        var colors = new Array('ff','dd','bb', '99', '77', '55');
        return '#' + colors[Math.floor(Math.random()*colors.length)] + colors[Math.floor(Math.random()*colors.length)] + colors[Math.floor(Math.random()*colors.length)];
    },
};