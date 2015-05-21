<?
    function kodi($host) {
        $xbmc['MIST'] = 'B_XBMC';
        $xbmc['REVO'] = 'S_XBMC';
        $xbmc['WATER'] = 'W_XBMC';
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <li data-row="1" data-col="2" data-sizex="4" data-sizey="4">
        <header>KODI REMOTE</header>
        <div class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Reverse')}", 'fa-backward', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Play')}", 'fa-play', '#FFCC00') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Forward')}", 'fa-forward', 'rgb(170,105,0)') ?>
        </div>
        
        <div data-type="kodinowplaying" data-device="<?= $xbmc[$host] ?>"></div>
        
        <div style="margin-top:18px" class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Back')}", 'fa-arrow-circle-o-left', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Close')}", 'fa-times', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Up')}", 'fa-angle-up', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI OSD')}", 'fa-bars', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Info')}", 'fa-info', 'rgb(170,105,0)') ?>
        </div>
        <div class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Left')}", 'fa-angle-left', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Ok')}", 'fa-check-circle', '#0066FF') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Right')}", 'fa-angle-right', '#2E8AE6') ?>
        </div>
        <div class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Fullscreen')}", 'fa-desktop', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Down')}", 'fa-angle-down', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Subtitle')}", 'fa-pencil', 'rgb(170,105,0)') ?>
        </div>
        
        <div style="margin-top:30px" class="centered container">
            <? if($host=='WATER') { button('', preg_replace('/-xbmc-simple/', '-streamradio', $_SERVER['PHP_SELF']), 'nesges-radio2', '#0066FF'); } ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Mute')}", 'fa-volume-off', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Volume Down')}", 'fa-volume-down', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Volume Up')}", 'fa-volume-up', 'rgb(170,105,0)') ?>
            <? button('', preg_replace('/-simple/', '', $_SERVER['PHP_SELF']), 'fa-star', '#0066FF') ?>
        </div>
        <div class="centered container">
            <div data-type="slider"
                data-device="<?= $xbmc[$host] ?>"
                data-get="volume"
                data-cmd="set"
                data-set="volume"
                class="horizontal"
                style="margin-top:20px !important;margin-bottom:0px !important;"></div>
        </div>
        
        <div style="margin-top:25px" class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Home')}", 'fa-home', '#9933FF') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Video')}", 'fa-film', '#9933FF') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Music')}", 'fa-music', '#9933FF') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Pictures')}", 'fa-picture-o', '#9933FF') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI TV')}", 'fa-desktop', '#9933FF') ?>
        </div>
        
        <div class="centered container">
            <? button_fhem('', "{eventghost('".$host."', 'KODI Keyboard')}", 'fa-keyboard-o', 'rgb(80,80,80)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Files')}", 'fa-files-o', 'rgb(80,80,80)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Weather')}", 'fa-sun-o', 'rgb(80,80,80)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Systemsettings')}", 'fa-gears', 'rgb(80,80,80)') ?>
        </div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="2" data-sizey="1">
	    <header>KODI</header>
	    <div class="centered container">
	        <div class="left">
	            <? button_fhem('', "{eventghost('".$host."', 'KODI Start')}", 'fa-play-circle') ?>
	            <div data-type="label">Start</div>
	        </div>
	        <div class="left">
                <? button_fhem('', "{eventghost('".$host."', 'KODI Exit')}", 'fa-power-off') ?>
                <div data-type="label">Exit</div>
            </div>
	        <div class="left">
	            <? button_fhem('', "{eventghost('".$host."', 'KODI Focus')}", 'fa-bullseye') ?>
	            <div data-type="label">Focus</div>
            </div>
        </div>
    </li>
    
    <li data-row="2" data-col="6" data-sizex="2" data-sizey="1">
    	<header>PC SHUTDOWN</header>
    	<div class="centered container">
	        <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Shutdown')}", 'fa-power-off') ?>
    	        <div data-type="label">Shutdown</div>
    	    </div>
	        <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Hibernate')}", 'fa-pause') ?>
    	        <div data-type="label">Ruhe</div>
    	    </div>
	        <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Restart')}", 'fa-repeat') ?>
    	        <div data-type="label">Reboot</div>
            </div>
        </div>
    </li>
    
    <li data-row="3" data-col="6" data-sizex="2" data-sizey="1">
    	<header>PC VOLUME</header>
    	<div class="centered container">
	        <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Mute Toggle')}", 'fa-volume-off') ?>
    	        <div data-type="label">Mute</div>
    	    </div>
    	    <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Volume Down')}", 'fa-volume-down') ?>
    	        <div data-type="label">-</div>
    	    </div>
    	    <div class="left">
    	        <? button_fhem('', "{eventghost('".$host."', 'PC Volume Up')}", 'fa-volume-up') ?>
    	        <div data-type="label">+</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.".preg_replace('/(?:-.*)?\.php$/', '', basename($_SERVER['PHP_SELF']))."-more.php") ?>
    </li>

</ul>
<?
    }
?>