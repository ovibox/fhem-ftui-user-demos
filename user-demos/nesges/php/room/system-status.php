<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
        <header>KODI</header>
    	<div>
    	    <div data-type="button"
                data-device="W_XBMC"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-kodi"
                data-url="wohnzimmer-xbmc-simple.php"
                class="cell"></div>
            <div data-type="label" class="cell">Wohnzimmer</div>
        </div>
        <div>
    	    <div data-type="button"
                data-device="K_XBMC"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-kodi"
                data-url="kueche-xbmc.php"
                class="cell"></div>
            <div data-type="label" class="cell">K&uuml;che</div>
        </div>
        <div>
    	    <div data-type="button"
                data-device="S_XBMC"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-kodi"
                data-url="schlafzimmer-xbmc-simple.php"
                class="cell"></div>
            <div data-type="label" class="cell">Schlafzimmer</div>
        </div>
        <div>
    	    <div data-type="button"
                data-device="B_XBMC"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-kodi"
                data-url="buero-xbmc-simple.php"
                class="cell"></div>
            <div data-type="label" class="cell">B&uuml;ro</div>
        </div>
    </li>
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="2">
        <header>STREAMRADIO</header>
    	<div>
    	    <div data-type="button"
                data-device="MCP_KODI"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-radio2"
                data-url="kueche-streamradio.php"
                class="cell"></div>
            <div data-type="label" class="cell">K&uuml;che</div>
        </div>
        <div>
    	    <div data-type="button"
                data-device="FLUX_KODI"
                data-get-on="opened"
                data-get-off="disconnected"
                data-icon="nesges-radio2"
                data-url="schlafzimmer-streamradio.php"
                class="cell"></div>
            <div data-type="label" class="cell">Schlafzimmer</div>
        </div>
    </li>
    
    <li data-row="3" data-col="2" data-sizex="1" data-sizey="2">
        <header>FENSTER</header>
    	<div>
    	    <div data-type="symbol" data-device="W_FENSTER_Balkon" class="cell" data-subtype="MAX" data-icons='["ftui-door","ftui-door"]'></div>
            <div data-type="label" class="cell">Wohnzimmer</div>
        </div>
        <div>
    	    <div data-type="symbol" data-device="S_FENSTER_LINKS" class="cell" data-subtype="MAX"></div>
            <div data-type="label" class="cell">Schlafzimmer</div>
        </div>
    </li>
    
    <li data-row="4" data-col="3" data-sizex="2" data-sizey="1">
        <header>HEIZUNG</header>
    	<div class="centered">
    	    <div class="left" style="margin-top:10px">
    	        <div data-type="symbol" 
    	            data-device="W_HEIZUNG" 
    	            data-get="desiredTemperature"
    	            data-get-on="!off"
    	            data-get-off="off"
    	            data-icon='fa-fire'
    	            data-background-icon="fa-circle"
    	            data-on-color="#2a2a2a"
    	            data-off-color="#2a2a2a"></div>
                <div data-type="label" data-device="W_HEIZUNG" data-get="desiredTemperature"></div>
                <div data-type="label">Wohnzimmer</div>
            </div>
            <div class="left" style="margin-left:30px;margin-top:10px">
    	        <div data-type="symbol" 
    	            data-device="B_HEIZUNG" 
    	            data-get="desiredTemperature"
    	            data-get-on="!off"
    	            data-get-off="off"
    	            data-icon='fa-fire'
    	            data-background-icon="fa-circle"
    	            data-on-color="#2a2a2a"
    	            data-off-color="#2a2a2a"></div>
    	        <div data-type="label" data-device="B_HEIZUNG" data-get="desiredTemperature"></div>
                <div data-type="label">B&uuml;ro</div>
            </div>
        </div>
    </li>
    
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="3">
        <header>MILIGHT</header>
        <div>
    	    <div data-type="switch"
                data-subtype="MilightDevice"
                data-device="MILIGHT_Zone1_Wohnzimmer"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Wohnzimmer 1</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-device="MILIGHT_Zone4_Wohnzimmer"
                data-subtype="MilightDevice"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Wohnzimmer 4</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-subtype="MilightDevice"
                data-device="MILIGHT_Zone2_Schlafzimmer"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Schlafzimmer 2</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-subtype="MilightDevice"
                data-device="MILIGHT_Zone3_Kueche"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">K&uuml;che 3</div>
        </div>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="4">
        <header>LEUCHTEN</header>
        <div class="subheader">Wohnzimmer</div>
        <div>
    	    <div data-type="switch"
                data-device="W_LICHT_A1_Stehlampe"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Stehlampe</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-device="W_LICHT_C1_BacklightTV"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">TV</div>
        </div>
        <div class="subheader">Schlafzimmer</div>
        <div>
    	    <div data-type="switch"
                data-device="S_SWITCH_B2_Leselampe"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Leselampe</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-device="S_SWITCH_C2_Sterne"
                data-icon="fa-lightbulb-o"
                class="cell"></div>
            <div data-type="label" class="cell">Sterne</div>
        </div>
    </li>
    
    
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="4">
        <header>SWITCHES</header>
        <div class="subheader">Wohnzimmer</div>
        <div>
    	    <div data-type="switch"
                data-device="W_SWITCH_D1_Monitore"
                data-icon="fa-plug"
                class="cell"></div>
            <div data-type="label" class="cell">Monitore</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-device="W_SWITCH_B1_Boxen"
                data-icon="fa-plug"
                class="cell"></div>
            <div data-type="label" class="cell">Boxen</div>
        </div>
        <div class="subheader">Schlafzimmer</div>
        <div>
    	    <div data-type="switch"
                data-device="S_SWITCH_A2_TV"
                data-icon="fa-plug"
                class="cell"></div>
            <div data-type="label" class="cell">TV</div>
        </div>
        <div>
    	    <div data-type="switch"
                data-device="S_SWITCH_D2_FLUX"
                data-icon="fa-plug"
                class="cell"></div>
            <div data-type="label" class="cell">Streamradio</div>
        </div>
        <div class="subheader">K&uuml;che</div>
        <div>
    	    <div data-type="switch"
                data-device="K_SWITCH_A3_Boxen"
                data-icon="fa-plug"
                class="cell"></div>
            <div data-type="label" class="cell">Streamradio</div>
        </div>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
        <header>OPTIONEN</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="OPT_ALARM" data-subtype="dummy10" data-icon="fa-bullhorn" class="cell"></div>
                <div data-type="label" class="cell">Alarm</div>
            </div>           
            <div>
                <div data-type="switch" data-device="OPT_HEIZUNG" data-subtype="dummy10" data-icon="fa-fire" class="cell"></div>
                <div data-type="label" class="cell">Heizung</div>
            </div>
            <div>
                <div data-type="switch" data-device="HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right" class="cell"></div>
                <div data-type="label" class="cell">Manuell</div>
            </div>
            <div>
                <div data-type="switch" data-device="OMW" data-subtype="dummy10" data-icon="fa-road" class="cell"></div>
                <div data-type="label" class="cell">OMW</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_PARTY" data-subtype="dummy10" data-icon="fa-glass" class="cell"></div>
                <div data-type="label" class="cell">Party</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_SPEAK" data-subtype="dummy10" data-icon="fa-volume-up" class="cell"></div>
                <div data-type="label" class="cell">Sprechen</div>
            </div>
        </div>
    </li>

</ul>