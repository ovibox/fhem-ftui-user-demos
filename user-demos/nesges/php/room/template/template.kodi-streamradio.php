<?
    $kodi['MIST'] = 'B_XBMC';
    $kodi['REVO'] = 'S_XBMC';
    $kodi['WATER'] = 'W_XBMC';
    $kodi['MCP'] = 'MCP_KODI';
    $kodi['FLUX'] = 'FLUX_KODI';
        
    $power['MCP'] = 'K_SWITCH_A3_Boxen';
    $power['FLUX'] = 'S_SWITCH_D2_FLUX';
    
    
    function kodi_streamradio_control($host) {
        global $kodi, $power;    
?>
        <div class="centered">
            <? button_fhem('', "set ".$kodi[$host]." exec skipprevious", 'fa-backward', '#AA6900') ?>
            <div
                data-type="button" 
                data-fhem-cmd="set <?=$kodi[$host]?> exec pause" 
                data-icon="fa-pause" 
                data-on-background-color="#aa6900"
                data-off-background-color="#505050"
                data-device="<?=$kodi[$host]?>"
                data-get="playStatus"
                data-get-on="playing" 
                data-get-off="stopped|paused"
                class="cell"></div>
            <div
                data-type="button" 
                data-fhem-cmd="IF ( [<?=$kodi[$host]?>:playStatus] ne 'stopped' ) ( set <?=$kodi[$host]?> exec play ) ELSE ( {kodi_streamradio('<?=$kodi[$host]?>', ReadingsVal('<?=$kodi[$host]?>','station','dlf'))} )" 
                data-icon="fa-play" 
                data-on-background-color="#FFCC00"
                data-off-background-color="#505050"
                data-device="<?=$kodi[$host]?>"
                data-get="playStatus"
                data-get-on='paused|stopped'
                data-get-off="playing"
                class="cell"></div>
            <div
                data-type="button" 
                data-fhem-cmd="set <?=$kodi[$host]?> exec stop" data-icon="fa-stop" 
                data-on-background-color="#aa6900"
                data-off-background-color="#505050"
                data-device="<?=$kodi[$host]?>"
                data-get="playStatus"
                data-get-on='paused|playing'
                data-get-off="stopped"
                class="cell"></div>
            <? button_fhem('', "set ".$kodi[$host]." exec skipnext", 'fa-forward', '#AA6900') ?>
        </div>
        <div class="centered">
            <div data-type="push" 
                data-fhem-cmd="set <?=$kodi[$host]?> volume 0" data-icon="fa-volume-off" 
                data-off-background-color="#aa3333"
                data-off-color="#2a2a2a"
                data-on-color="#2a2a2a"
                data-background-icon="fa-circle"
                data-device="<?=$kodi[$host]?>"
                class="left"
                onClick="$('#KODIVolumeSlider').data('Powerange').setStart(0)"></div>
            <div id="KODIVolumeSlider"data-type="slider"
                data-device="<?=$kodi[$host]?>"
                data-get="volume"
                data-set="volume"
                class="left horizontal"></div>
            <div data-type="push" 
                data-fhem-cmd="set <?=$kodi[$host]?> volume 100" data-icon="fa-volume-up" 
                data-off-background-color="#aa3333"
                data-off-color="#2a2a2a"
                data-on-color="#2a2a2a"
                data-background-icon="fa-circle"
                data-device="<?=$kodi[$host]?>"
                class="left"
                onClick="$('#KODIVolumeSlider').data('Powerange').setStart(100)"></div>
        </div>
        <div class="centered">
            <div data-type="button"
                data-url="<?= preg_replace('/\.php$/', '-kodilib.php', basename($_SERVER['PHP_SELF'])) ?>"
                data-icon="fa-list"
                data-on-background-color="#FFCC00"
                class="cell"
                ></div>
            <div data-type="multistatebutton"
                data-device="<?=$kodi[$host]?>"
                data-get="repeat"
                data-get-on='["off","one","all"]'
                data-set='["repeat one","repeat all","repeat off"]'
                data-set-default="repeat off"
                data-icons='["fa-long-arrow-right","nesges-repeat-one","nesges-repeat"]'
                data-on-background-color='#339999'
                class="cell"></div>
            <div data-type="multistatebutton"
                data-device="<?=$kodi[$host]?>"
                data-get="shuffle"
                data-get-on='["off","on"]'
                data-set='["shuffle on","shuffle off"]'
                data-set-default="shuffle off"
                data-icons='["nesges-ordered","fa-random"]'
                data-on-background-color="#9933FF"
                class="cell"></div>
        </div>
        <div class="centered">
            <div class="left">
                <div data-type="switch"
                    data-device="<?=$power[$host]?>"
                    data-icon="fa-plug"
                    data-on-background-color="#505050"
                    data-on-color="#aa6900"
                    data-off-background-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>
            </div>
            <div class="left">
                <div
                    data-type="button" 
                    data-fhem-cmd="set <?=$kodi[$host]?> shutdown" data-icon="fa-power-off" 
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    data-device="<?=$host?>"
                    data-get-on='present'
                    data-get-off="absent"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>
            </div>
            <div class="left">
                <div
                    data-type="button" 
                    data-fhem-cmd="set <?=$kodi[$host]?> reboot" data-icon="fa-refresh" 
                    data-on-background-color="#505050"
                    data-off-background-color="#505050"
                    data-device="<?=$host?>"
                    data-get-on='present'
                    data-get-off="absent"
                    data-on-color="#aa6900"
                    data-off-color="#2a2a2a"
                    data-doubleclick="1000"
                    class="cell"></div>
            </div>
            <div class="left">
                <div data-type="button"
                    data-device="<?=$host?>"
                    data-get-on="present"
                    data-get-off="absent"
                    data-fhem-cmd="set <?=$host?> statusRequest"
                    data-icon="nesges-radio-tower"
                    data-background-icon="fa-circle"
                    data-on-color="#2a2a2a"
                    data-off-color="#2a2a2a"
                    class="cell"></div>
            </div>
        </div>
<?
    }
    
    function kodi_streamradio_station($host, $id,$alias,$icon) {
        global $kodi;
        ?>
        <div style="display:table">
            <div id="<?=$id?>" 
                data-type="button" 
                data-fhem-cmd="{kodi_streamradio('<?=$kodi[$host]?>','<?=$id?>')}" data-icon="<?=$icon?>" 
                data-on-color="#ffffff"
                data-on-background-color="#0066FF"
                data-off-background-color="#2E8AE6"
                data-device="<?=$kodi[$host]?>" 
                data-get="station"
                data-set="station"
                data-get-on="<?=$id?>" 
                data-get-off="!on"
                class="cell"></div>
            <div data-type="label" 
                class="inline" 
                onClick="$('#<?=$id?>').click()"><?=$alias?></div>
            <div data-type="symbol" 
                data-device="<?=$kodi[$host]?>" 
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
    
    function kodi_streamradio_stations($host) {
        global $kodi;
        kodi_streamradio_station($host, 'rockantenne',               'RA Heavy Metal',        'fa-bolt');
        kodi_streamradio_station($host, 'rockantenneclassic',        'RA Classic Perlen',     'fa-bolt');
        kodi_streamradio_station($host, 'rockantennealternative',    'RA Alternative',        'fa-bolt');
        kodi_streamradio_station($host, 'tormentedradio',            'tormentedradio',        'fa-cogs');
        kodi_streamradio_station($host, 'dlf',                       'Deutschlandfunk',       'fa-comment-o');
        kodi_streamradio_station($host, 'dkultur',                   'DRadio Kultur',         'fa-comment-o');
        kodi_streamradio_station($host, 'dradiowissen',              'DRadio Wissen',         'fa-comment-o');
        kodi_streamradio_station($host, 'steffi',                    'Awesome Mix Vol.1',     'fa-music');
        kodi_streamradio_station($host, 'dnd',                       'Dungeons & Dragons',    'nesges-skull');
    }
?>