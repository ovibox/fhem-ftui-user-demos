<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="2" data-col="2" data-sizex="3" data-sizey="3" id="streamradioplaylists">
        <header>STATIONS</header>
        <? kodi_streamradio_stations('FLUX') ?>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="2">
        <header>PLAYER</header>
        <? kodi_streamradio_control('FLUX') ?>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="6" data-sizey="1">
        <header>NOW PLAYING</header>
        <div data-type="iframe"
            data-device="FLUX"
            data-check-src="/kodi/flux/addons/webinterface.chorus/"
            data-src="http://<?=$mcp_user?>:<?=$mcp_pass?>@192.168.178.35:8080/addons/webinterface.chorus/"
            data-height="109"
            data-width="765"></div>
        
        <div data-type="button" 
            data-url="schlafzimmer-streamradio-chorus.php" 
            data-icon="fa-star" 
            data-background-icon="none" 
            data-on-background-color="transparent" 
            data-on-color="#aa6900" 
            data-off-background-color="transparent" 
            data-off-color="transparent" 
            data-device="FLUX"
            data-get-on="present"
            data-get-off="absent"
            style="position:absolute;z-index:1001;top:18px;left:-5px"></div>
    </li>
    
    <li data-row="3" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.schlafzimmer-more.php") ?>
    </li>
</ul>