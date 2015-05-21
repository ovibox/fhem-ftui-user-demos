<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "room_" + path.substring(path.lastIndexOf('/') + 1, Math.min(path.lastIndexOf('.'), (path.indexOf('-')>0?path.indexOf('-'):9999)));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <? button('room_index',         'index.php',        'fa-home')      ?>
    
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="90">
        <ul class="menu">
            <li><div data-type="symbol" id="room_wohnzimmer" data-icon="nesges-sofa" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><div data-type="button"
                    data-url="wohnzimmer.php"
                    data-icon="fa-line-chart"
                    data-off-background-color="#aa6900"></div></li>
            <li><div data-type="button"
                    data-device="WATER"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="wohnzimmer-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="W_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="wohnzimmer-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone1_Wohnzimmer"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="wohnzimmer-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="switch" data-device="W_SWITCH_D1_Monitore" data-icon="fa-desktop" data-color="#505050"></div></li>
            <li><div data-type="button" 
                    data-device="WATER"
                    data-get-on="present"
                    data-get-off="absent"
                    data-fhem-cmd="{eventghost('WATER','Winamp Playlist DLF')}" data-icon="fa-comment-o" data-on-background-color="#2E8AE6"></div></li>
        </ul>
    </div>
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="130">
        <ul class="menu">
            <li><div data-type="symbol" id="room_kueche" data-icon="fa-cutlery" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'kueche.php',             'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MCP"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="kueche-mpd.php"
                    data-icon="nesges-radio2"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'kueche-xbmc.php',        'nesges-kodi',      '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone3_Kueche"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="kueche-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'kuehlschrank.php',       'fa-star-o',        '#aa6900', true) ?></li>
            <li><div data-type="button" data-fhem-cmd="{kodi_streamradio('MCP_KODI','rockantenne')}" data-icon="fa-bolt" data-on-background-color="#2E8AE6"></div></li>
            <li><div data-type="button" data-fhem-cmd="{kodi_streamradio('MCP_KODI','steffi')}" data-icon="fa-music" data-on-background-color="#2E8AE6"></div></li>
            <li><div data-type="button" data-fhem-cmd="{kodi_streamradio('MCP_KODI','dlf')}" data-icon="fa-comment-o" data-on-background-color="#2E8AE6"></div></li>
        </ul>
    </div>
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="130">
        <ul class="menu">
            <li><div data-type="symbol" id="room_schlafzimmer" data-icon="fa-bed" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'schlafzimmer.php',               'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="REVO"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="schlafzimmer-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="FLUX"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="schlafzimmer-mpd.php"
                    data-icon="nesges-radio2"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="S_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="schlafzimmer-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="MILIGHT_Zone2_Schlafzimmer"
                    data-get-on="on.*"
                    data-get-off="off"
                    data-url="schlafzimmer-milight.php"
                    data-icon="fa-lightbulb-o"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><? button('', 'schlafzimmer-wecker.php', 'nesges-alarmclock', '#aa6900', true) ?></li>
            <li><div data-type="push" data-device="S_SWITCH_A2_TV" data-set="on-for-timer 3600" data-icon="fa-desktop"></div></li>
            <li><div data-type="push" data-device="S_SWITCH_C2_Sterne" data-set="on-for-timer 900" data-icon="fa-lightbulb-o"></div></li>
        </ul>
    </div>
    
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half">
        <ul class="menu">
            <li><div data-type="symbol" id="room_buero" data-icon="nesges-user-tie" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('', 'buero.php',               'fa-line-chart',    '#aa6900', true) ?></li>
            <li><div data-type="button"
                    data-device="MIST"
                    data-get-on="present"
                    data-get-off="absent"
                    data-url="buero-pc.php"
                    data-icon="fa-laptop"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button"
                    data-device="B_XBMC"
                    data-get-on="opened"
                    data-get-off="disconnected"
                    data-url="buero-xbmc-simple.php"
                    data-icon="nesges-kodi"
                    data-on-color="white"
                    data-off-background-color="rgb(111,69,0)"></div></li>
            <li><div data-type="button" 
                    data-device="MIST"
                    data-get-on="present"
                    data-get-off="absent"
                    data-fhem-cmd="{eventghost('MIST','Winamp Play Toggle')}" 
                    data-icon="fa-play" 
                    data-on-background-color="#FFCC00"></div></li>
            <li><div data-type="button" 
                    data-device="MIST"
                    data-get-on="present"
                    data-get-off="absent"
                    data-fhem-cmd="{eventghost('MIST','Winamp Playlist DLF')}" 
                    data-icon="fa-comment-o" 
                    data-on-background-color="#2E8AE6"></div></li>
        </ul>
    </div>

    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half" data-circle-radius="130">
        <ul class="menu">
            <li><div data-type="symbol" id="room_system" data-icon="fa-info" data-on-background-color="rgb(111,69,0)" data-off-background-color="rgb(111,69,0)" data-on-color="#2a2a2a" data-off-color="#2a2a2a" data-background-icon="fa-circle"></div></li>
            <li><? button('options_status',     'system-status.php',            'fa-info',          '#aa6900', true)     ?></li>
            <li><? button('', 'system-light.php',     'fa-lightbulb-o', '#aa6900', true) ?></li>
            <li><? button('options_calls',      'system-calls.php',             'fa-phone',         '#aa6900', true)     ?></li>
            <li><? button('options_timers',     'system-timers.php',            'fa-clock-o',       '#aa6900', true)     ?></li>
            <li><? button('options_plots',      'system-plots.php?p=HUMID_ALL', 'fa-line-chart',    '#aa6900', true)     ?></li>
            <li><? button('options_calendar',   'system-calendar.php',          'fa-calendar',      '#aa6900', true)     ?></li>
            <li><? button('options_cinema',     'system-kino.php',              'fa-video-camera',  '#aa6900', true)     ?></li>
            <li><? button('', 'system-its150.php',    'fa-mobile',      '#aa6900', true) ?></li>
            <li><? button('', 'system-options.php',   'fa-gears',       '#aa6900', true) ?></li>
        </ul>
    </div>

    <? button('room_aussen',        'aussen.php',       'fa-sun-o')     ?>
    
    <div data-type="circlemenu" class="cell circlemenu" data-direction="right-half">
        <ul class="menu">
            <li><div data-type="symbol" data-icon="fa-check-circle" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
            <li><div data-type="push" data-cmd="{preset('schlafen')}" data-icon="fa-bed" data-off-background-color="#aa6900"></div></li>
            <li><div data-type="push" data-cmd="{preset('kino')}" data-icon="nesges-tv2" data-off-background-color="#aa6900"></div></li>
            <li><div data-type="push" data-cmd="{preset('party')}" data-icon="fa-glass" data-off-background-color="#aa6900"></div></li>
            <li><div data-type="push" data-cmd="{preset('leave')}" data-icon="nesges-exit" data-off-background-color="#aa6900"></div></li>
        </ul>
    </div>

    <div style="padding-top:10px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock"></div>
</div>
