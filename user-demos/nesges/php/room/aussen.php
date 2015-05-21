<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="1">
    	<header>KLIMA</header>
    	<? include("widget/widget.aussen-klima.php") ?>
    </li>
    <li data-row="2" data-col="7" data-sizex="1" data-sizey="3">
        <header>WEITER</header>
        <? include("widget/widget.aussen-more.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="3">
        <header>AKTUELL</header>
        <? include("widget/widget.weather-vertical.php") ?>
    </li>
    
    
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
        <header><div data-type="label" data-device="Wetter" data-get="fc2_day_of_week"></div></header>
        <div class="centered container weather">
            <? weatherforecast(1) ?>
        </div>
    </li>
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="3">
        <header><div data-type="label" data-device="Wetter" data-get="fc3_day_of_week"></div></header>
        <div class="centered container weather">
            <? weatherforecast(2) ?>
        </div>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="2">
        <header><div data-type="label" data-device="Wetter" data-get="fc4_day_of_week"></div></header>
        <div class="centered container weather">
            <? weatherforecast(3) ?>
        </div>
    </li>
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="2">
        <header><div data-type="label" data-device="Wetter" data-get="fc5_day_of_week"></div></header>
        <div class="centered container weather">
            <? weatherforecast(4) ?>
        </div>
    </li>
    
    <li data-row="3" data-col="5" data-sizex="2" data-sizey="2">
        <a id="imgmaplink" href="aussen-iframe.php?content=dwd_de"><img id="imgmap" src="<?= weathermap('dwd_de') ?>" width='100%' height='100%' data-number="0" alt="Wetterkarte"></a>
        <script>
            $(document).ready(function() {
                setInterval(function() {
                    var n = $("#imgmap").data("number");
                    var newsrc;
                    var newsrckey;
                    switch(n) {
                        case 0:  newsrckey = 'dwd_de_nacht';        newsrc = "<?= weathermap('dwd_de_nacht') ?>"; break;
                        case 1:  newsrckey = 'wetteronline_radar';  newsrc = "<?= weathermap('wetteronline_radar') ?>"; break;
                        case 2:  newsrckey = 'wetteronline_wolken'; newsrc = "<?= weathermap('wetteronline_wolken') ?>"; break;
                        case 3:  newsrckey = 'austro_sat';          newsrc = "<?= weathermap('austro_sat') ?>"; break;
                        case 4:  newsrckey = 'kontor_de';           newsrc = "<?= weathermap('kontor_de') ?>"; break;
                        default: newsrckey = 'dwd_de';              newsrc = "<?= weathermap('dwd_de') ?>"; n=-1; break;
                    }
                    $("#imgmap").attr('src', newsrc);
                    $("#imgmaplink").attr('href', 'aussen-iframe.php?content='+newsrckey);
                    $("#imgmap").data("number", n+1)
                }, 5000);
            });
        </script>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="1" data-sizey="1">
        <header>UV</header>
        <? include('widget/widget.weather-uv.php') ?>
    </li>
    <li data-row="4" data-col="3" data-sizex="1" data-sizey="1">
        <header>OZON</header>
        <? include('widget/widget.weather-ozon.php') ?>
    </li>
    <li data-row="4" data-col="4" data-sizex="1" data-sizey="1">
        <header>UNWETTER</header>
        <a href="http://www.dwd.de/dyn/app/ws/html/reports/BIT_warning_de.html"><div data-type="label"
            data-device="DWD_WARNING"
            data-get="text"
            style="margin-top:10px"
        ></div></a>
        <a href="http://www.dwd.de/dyn/app/ws/html/reports/BIT_warning_de.html"><div data-type="label"
            data-device="DWD_WARNING"
            data-get="time"
            style="margin-top:20px"
        ></div></a>
    </li>
</ul>