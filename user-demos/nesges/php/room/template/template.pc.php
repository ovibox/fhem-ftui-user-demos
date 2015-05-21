<?
    function pc($host) {
        $xbmc['MIST'] = 'B_XBMC';
        $xbmc['REVO'] = 'S_XBMC';
        $xbmc['WATER'] = 'W_XBMC';
?>

<li data-row="1" data-col="2" data-sizex="6" data-sizey="2">
	<header>WINAMP</header>
	<div class="centered container">
	    <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Start')}", 'fa-play-circle') ?>
            <div data-type="label">Ein</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Exit')}", 'fa-power-off') ?>
	        <div data-type="label">Aus</div>
	    </div>
	    <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist Rockantenne')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">Rockantenne</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist Beggelfest13')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">BF13</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist Tormentedradio')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">tormented</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist DLF')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">DLF</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist DKultur')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">DKultur</div>
        </div>
        <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Playlist DWissen')}", 'fa-music', '#2E8AE6') ?>
	        <div data-type="label">DWissen</div>
        </div>
    </div>
    <div class="centered container" style="margin-top:40px !important">
	    <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Play Toggle')}", 'fa-play', '#FFCC00') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Previous')}", 'fa-step-backward') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Next')}", 'fa-step-forward') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Volume Down')}", 'fa-volume-down') ?>
	        <? button_fhem('', "{eventghost('".$host."', 'Winamp Volume Up')}", 'fa-volume-up') ?>
	    </div>
    </div>
    <div class="centered container" style="margin-top:40px !important">
	    <div class="left">
	        <div data-type="slider"
	            data-device="WATER_WINAMP"
	            data-cmd="setreading"
	            data-get="volume"
	            data-set="volume"
	            class="horizontal"
	            style="width:200px"></div>
	    </div>
    </div>
</li>

<li data-row="3" data-col="2" data-sizex="6" data-sizey="1">
	<header>KODI</header>
	<div class="centered container">
	    <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="nesges-kodi" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Start')}" data-icon="fa-play-circle" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Focus')}" data-icon="fa-bullseye" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'KODI Exit')}" data-icon="fa-power-off" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
        </div>
	    <div class="left">
	        <? button_fhem('', "{eventghost('".$host."', 'KODI Play')}", 'fa-play', '#FFCC00') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Pause')}", 'fa-pause', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Stop')}", 'fa-stop', 'rgb(170,105,0)') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Down')}", 'fa-angle-down', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Up')}", 'fa-angle-up', '#2E8AE6') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Info')}", 'fa-info') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Back')}", 'fa-arrow-circle-o-left') ?>
            <? button_fhem('', "{eventghost('".$host."', 'KODI Fullscreen')}", 'fa-desktop') ?>
        </div>
    </div>

	<div style="display:none" id="xbmc_playstatus"    data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="playStatus" data-fix=0></div>
	<div style="display:none" id="xbmc_show"    data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentShowtitle" data-fix=0></div>
	<div style="display:none" id="xbmc_season"  data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="season" data-fix=0></div>
	<div style="display:none" id="xbmc_episode" data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="episode" data-fix=0></div>
	<div style="display:none" id="xbmc_title"   data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentTitle" data-fix=0></div>
	<div style="display:none" id="xbmc_artist"  data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentArtist" data-fix=0></div>
	<div style="display:none" id="xbmc_album"   data-type="label" data-device="<?= $xbmc[$host] ?>" data-get="currentAlbum" data-fix=0></div>
    <div class="centered container">
        <div id="xbmc_status" data-type="label" style="margin-top:20px !important"></div>
    </div>
</li>

<li data-row="4" data-col="4" data-sizex="2" data-sizey="1">
	<header>PC</header>
	<div class="centered container">
	    <div class="left">
            <div data-type="circlemenu" class="cell circlemenu keepopen">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-volume-up" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Mute Toggle')}" data-icon="fa-volume-off" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Volume Up')}" data-icon="fa-volume-up" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Volume Down')}" data-icon="fa-volume-down" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Volume</div>
        </div>
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-power-off" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Shutdown')}" data-icon="fa-power-off" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Hibernate')}" data-icon="fa-pause" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{eventghost('<?=$host?>', 'PC Restart')}" data-icon="fa-repeat" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Shutdown</div>
        <div>
    </div>
</li>

<?
    }
?>