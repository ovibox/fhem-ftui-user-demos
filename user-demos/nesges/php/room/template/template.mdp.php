<?
    $mpd['FLUX'] = 'MPD_FLUX';
    $mpd['MCP'] = 'MPD_MCP';
    $power['MCP'] = 'K_SWITCH_A3_Boxen';
    $power['FLUX'] = 'S_SWITCH_D2_FLUX';
    
    function mpd_streamradio_control($host) {
        global $mpd, $power;    
?>
        <div class="centered">
            <? button_fhem('', "set ".$mpd[$host]." previous", 'fa-backward', '#AA6900') ?>
            <div
                data-type="button" 
                data-fhem-cmd="set <?=$mpd[$host]?> pause" 
                data-icon="fa-pause" 
                data-on-background-color="#aa6900"
                class="cell"></div>
            <div
                data-type="button" 
                data-fhem-cmd="set <?=$mpd[$host]?> play" 
                data-icon="fa-play" 
                data-on-background-color="#FFCC00"
                class="cell"></div>
            <div
                data-type="button" 
                data-fhem-cmd="set <?=$mpd[$host]?> stop" data-icon="fa-stop" 
                data-on-background-color="#aa6900"
                class="cell"></div>
            <? button_fhem('', "set ".$mpd[$host]." next", 'fa-forward', '#AA6900') ?>
        </div>
        
        <div id="mpdinfo" class="centered" style="margin-top:20px;margin-bottom:25px">
            <div data-type="symbol" data-icon="fa-spinner fa-spin" style="height:1px;margin-top:-40px;"></div>
        </div>
        <script>
            $(document).ready(function() {
                $.get('http://<?=$host?>/mpdinfo/')
                    .success(function(data) {
                        if(data.length>0) {
                            $("#mpdinfo").html(data);
                        }
                    });
                setInterval(function() { $.get('http://<?=$host?>/mpdinfo/')
                    .success(function(data) {
                        if(data.length>0) {
                            $("#mpdinfo").html(data);
                        } else {
                            $("#mpdinfo").empty();
                            spinner = $('<div data-icon="fa-cog fa-spin" style="height:1px;margin-top:-40px;"></div>');
                            spinner.famultibutton({
                                    mode:'signal',
                                    offBackgroundColor:'#2a2a2a',
                                    offColor:'#505050'
                            });
                            spinner.appendTo("#mpdinfo");
                        }
                    }); }, 5000);
            });
        </script>
        
        <div class="centered" style="margin-bottom:25px">
            <div data-type="push" 
                data-set="volume 0" 
                data-icon="fa-volume-off" 
                data-off-background-color="#aa3333"
                data-off-color="#2a2a2a"
                data-on-color="#2a2a2a"
                data-background-icon="fa-circle"
                data-device="<?=$mpd[$host]?>"
                class="left"
                onClick="$('#VolumeSlider').data('Powerange').setStart(0)"></div>
            <div id="VolumeSlider"data-type="slider"
                data-device="<?=$mpd[$host]?>"
                data-get="volume"
                data-set="volume"
                data-min="70"
                data-max="100"
                class="left horizontal"></div>
            <div data-type="push" 
                data-set="volume 100" 
                data-icon="fa-volume-up" 
                data-off-background-color="#aa3333"
                data-off-color="#2a2a2a"
                data-on-color="#2a2a2a"
                data-background-icon="fa-circle"
                data-device="<?=$mpd[$host]?>"
                class="left"
                onClick="$('#VolumeSlider').data('Powerange').setStart(100)"></div>
        </div>
        <div class="centered">
            <div data-type="button"
                data-url="<?= preg_replace('/\.php$/', '-kodilib.php', basename($_SERVER['PHP_SELF'])) ?>"
                data-icon="fa-music"
                data-on-background-color="#FFCC00"
                class="cell"
                ></div>
            <div data-type="push"
                data-device="<?=$mpd[$host]?>"
                data-get="repeat"
                data-get-on="0"
                data-get-off="1"
                data-set="mpdCMD repeat 0;set <?=$mpd[$host]?> mpdCMD single 0"
                data-icon="fa-long-arrow-right"
                data-background-icon="fa-circle"
                data-on-color="white"
                data-off-color="#2a2a2a"
                data-off-background-color='#339999'
                class="cell"></div>
            <div data-type="push"
                data-device="<?=$mpd[$host]?>"
                data-get="single"
                data-get-on="1"
                data-get-off="0"
                data-set="mpdCMD single 1;set <?=$mpd[$host]?> mpdCMD repeat 1"
                data-icon="nesges-repeat-one"
                data-background-icon="fa-circle"
                data-on-color="white"
                data-off-color="#2a2a2a"
                data-off-background-color='#339999'
                class="cell"></div>
            <div data-type="push"
                data-device="<?=$mpd[$host]?>"
                data-get="repeat"
                data-get-on="1"
                data-get-off="0"
                data-set="mpdCMD single 0;set <?=$mpd[$host]?> mpdCMD repeat 1"
                data-icon="nesges-repeat"
                data-background-icon="fa-circle"
                data-on-color="white"
                data-off-color="#2a2a2a"
                data-off-background-color='#339999'
                class="cell"></div>
            <div data-type="button"
                data-url="http://<?=$host?>:8066/static/index.html"
                data-icon="fa-star"
                data-on-background-color='#0066FF'
                class="cell"></div>
        </div>
        <div class="centered">
            <div data-type="button"
                data-url="<?= preg_replace('/\.php$/', '-kodilib.php?dir=audiobooks', basename($_SERVER['PHP_SELF'])) ?>"
                data-icon="nesges-books"
                data-on-background-color="#FFCC00"
                class="cell"
                ></div>
            <div data-type="push"
                data-device="<?=$mpd[$host]?>"
                data-get="random"
                data-get-on="1"
                data-get-off="0"
                data-set="mpdCMD random 0"
                data-icon="nesges-ordered"
                data-background-icon="fa-circle"
                data-on-color="white"
                data-off-color="#2a2a2a"
                data-off-background-color='#9933FF'
                class="cell"></div>

            <div data-type="push"
                data-device="<?=$mpd[$host]?>"
                data-get="random"
                data-get-on="0"
                data-get-off="1"
                data-set="mpdCMD random 1"
                data-icon="fa-random"
                data-background-icon="fa-circle"
                data-on-color="white"
                data-off-color="#2a2a2a"
                data-off-background-color='#9933FF'
                class="cell"></div>

            <div data-type="multistatebutton"
                data-device="<?=$mpd[$host]?>"
                data-get="xfade"
                data-get-on='["0","5", "10"]'
                data-set='["mpdCMD crossfade 5","mpdCMD crossfade 10","mpdCMD crossfade 0"]'
                data-set-default="mpdCMD crossfade 0"
                data-icons='["fa-exchange","fa-exchange warn","fa-exchange warn"]'
                data-background-colors='["#dd99dd","#aa66aa","#993399"]'
                data-on-background-color="white"
                class="cell"></div>
        </div>
        <div class="centered">
                <div data-type="switch"
                    data-device="<?=$power[$host]?>"
                    data-icon="fa-plug"
                    data-on-background-color="#505050"
                    data-on-color="#aa6900"
                    data-off-background-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>

                <div
                    data-type="button" 
                    data-fhem-cmd="{sshcmd('<?=$host?>','shutdown -h now',2)}" data-icon="fa-power-off" 
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    data-device="<?=$host?>"
                    data-get-on='present'
                    data-get-off="absent"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>

                <div
                    data-type="button" 
                    data-fhem-cmd="{sshcmd('<?=$host?>','shutdown -r now',2)}" data-icon="fa-refresh" 
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    data-device="<?=$host?>"
                    data-get-on='present'
                    data-get-off="absent"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>
            
                <div data-type="button"
                    data-device="<?=$host?>"
                    data-get-on="present"
                    data-get-off="absent"
                    data-fhem-cmd="set <?=$host?> statusRequest"
                    data-icon="nesges-radio-tower"
                    data-background-icon="fa-circle"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    class="cell"></div>
            
            <div data-type="symbol"
                data-device="<?=$mpd[$host]?>"
                data-get-on='["play","pause", "stop"]'
                data-get-off="not conected"
                data-icons='["fa-play","fa-pause","fa-stop"]'
                data-background-icon='fa-circle'
                data-on-background-color='#505050'
                data-off-background-color="#505050"
                data-on-color="#aa6900"
                data-off-color="#2a2a2a"
                class="cell"></div>
        </div>
<?
    }
    
    function mpd_streamradio_station($host, $id,$alias,$icon) {
        global $mpd;
        ?>
        <div style="display:table">
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="{mpd_streamradio('<?=$mpd[$host]?>','<?=$id?>')}" data-icon="<?=$icon?>" 
                data-on-color="#ffffff"
                data-on-background-color="#0066FF"
                data-off-background-color="#2E8AE6"
                data-device="<?=$mpd[$host]?>" 
                data-get="station"
                data-set="station"
                data-get-on="<?=$id?>" 
                data-get-off="!on"
                class="cell"></div>
            <div data-type="label" 
                class="inline" 
                onClick="$('#<?=$id?>').click()"><?=$alias?></div>
            <div data-type="symbol" 
                data-device="<?=$mpd[$host]?>" 
                data-get="station"
                data-set="station"
                data-get-on="<?=$id?>" 
                data-get-off="!on"
                data-icon="fa-chevron-left" 
                data-on-color="#aa6900" 
                data-off-color="#2a2a2a" 
                class="right"></div>
        </div>
        <?
    }
    
    function mpd_streamradio_stations($host) {
        global $mpd;
        mpd_streamradio_station($host, 'rockantenne',               'RA Heavy Metal',        'fa-bolt');
        mpd_streamradio_station($host, 'rockantenneclassic',        'RA Classic Perlen',     'fa-bolt');
        mpd_streamradio_station($host, 'rockantennealternative',    'RA Alternative',        'fa-bolt');
        mpd_streamradio_station($host, 'rockradiodeathmetal',       'Rockradio Deathmetal',  'fa-bolt');
        mpd_streamradio_station($host, 'dlf',                       'Deutschlandfunk',       'fa-comment-o');
        mpd_streamradio_station($host, 'dkultur',                   'DRadio Kultur',         'fa-comment-o');
        mpd_streamradio_station($host, 'dradiowissen',              'DRadio Wissen',         'fa-comment-o');
        mpd_streamradio_station($host, 'tormentedradio',            'tormentedradio',        'fa-cogs');
        mpd_streamradio_station($host, 'digitalgunfire',            'Digital Gunfire',       'fa-cogs');
        mpd_streamradio_station($host, 'ebmradio',                  'EBM Radio',             'fa-cogs');
        mpd_streamradio_station($host, 'steffi',                    'Awesome Mix Vol.1',     'fa-music');
        mpd_streamradio_station($host, 'dnd',                       'Dungeons & Dragons',    'nesges-skull');
    }
?>