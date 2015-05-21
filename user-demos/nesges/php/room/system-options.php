<?
    include("ui.php");
    $ui = new UI();
?>
<style>
    div.subheader {
        padding-top:0px !important;
        margin-top:8px !important;
    }
    div[type=label] {
        margin-bottom:10px;
    }
</style>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
        <header>OPTIONEN</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="OPT_ALARM" data-subtype="dummy10" data-icon="fa-bullhorn"></div>
                <div data-type="label">Alarm</div>
            </div>           
            <div>
                <div data-type="switch" data-device="OPT_HEIZUNG" data-subtype="dummy10" data-icon="fa-fire"></div>
                <div data-type="label">Heizung</div>
            </div>
            <div>
                <div data-type="switch" data-device="HEIZUNG_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right"></div>
                <div data-type="label">Manuell</div>
            </div>
            <div>
                <div data-type="switch" data-device="ATHOME" data-subtype="dummy10" data-icon="fa-users" class="readonly"></div>
                <div data-type="label">Zuhause</div>
            </div>
            <div>
                <div data-type="switch" data-device="OMW" data-subtype="dummy10" data-icon="fa-road"></div>
                <div data-type="label">OMW</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_PARTY" data-subtype="dummy10" data-icon="fa-glass"></div>
                <div data-type="label">Party</div>
            </div>
            <div>
                <div data-type="switch" data-device="OPT_SPEAK" data-subtype="dummy10" data-icon="fa-volume-up"></div>
                <div data-type="label">Sprechen</div>
            </div>
        </div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="3">
        <header>INFO</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="FREI" data-subtype="dummy10" data-icon="fa-heart-o" class="readonly"></div>
                <div data-type="label">Frei</div>
            </div>
            <div>
                <div data-type="switch" data-device="LICHT_INFO" data-subtype="dummy10" data-icon="fa-lightbulb-o" class="readonly"></div>
                <div data-type="label">Licht</div>
            </div>
            <div>
                <div data-type="switch" data-device="HANDY" data-subtype="PRESENCE" data-icon="fa-user" class="readonly"></div>
                <div data-type="label">Thomas</div>
            </div>
            <div>
                <div data-type="switch" data-device="STEFF" data-subtype="PRESENCE" data-icon="fa-user" class="readonly"></div>
                <div data-type="label">Steff</div>
            </div>
            <div>
                <div data-type="switch" data-device="IPAD" data-subtype="PRESENCE" data-icon="fa-tablet" class="readonly"></div>
                <div data-type="label">iPad</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="3" data-sizex="2" data-sizey="1">
        <header>SERVER</header>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" data-device="SKY" data-subtype="PRESENCE" data-icon="fa-server" class="readonly"></div>
                <div data-type="label">SKY</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="HAILSTORM" data-subtype="PRESENCE" data-icon="fa-server" class="readonly"></div>
                <div data-type="label">HAILSTORM</div>
            </div>
        </div>
    </li>

    <li data-row="1" data-col="3" data-sizex="1" data-sizey="3">
        <header>TEMPERATUR</header>
        <div class="subheader">Frostschutz</div>
        <div data-type="thermostat" 
            data-device="T_FROST"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Nacht</div>
        <div data-type="thermostat" 
            data-device="T_NIGHT"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Party</div>
        <div data-type="thermostat" 
            data-device="T_PARTY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="4">
        <header>TEMPERATUR</header>
        <div class="subheader">Büro</div>
        <div data-type="thermostat" 
            data-device="T_B_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Küche</div>
        <div data-type="thermostat" 
            data-device="T_K_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Schlafzimmer</div>
        <div data-type="thermostat" 
            data-device="T_S_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
        
        <div class="subheader">Wohnzimmer</div>
        <div data-type="thermostat" 
            data-device="T_W_DAY"
            data-min="4"
            data-max="30"
            data-set=" "
            data-get="STATE"
            data-temp="STATE"
            style="margin-top:8px"></div>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="1" data-sizey="3">
        <header>ANTENNEN</header>
        <div class="centered container">
            <div>
                <div data-type="switch" data-device="CUL1" data-get-on="Initialized" data-icon="fa-wifi" class="readonly"></div>
                <div data-type="label">CUL 868</div>
            </div>
            <div>
                <div data-type="switch" data-device="CUL433" data-get-on="Initialized" data-icon="fa-wifi" class="readonly"></div>
                <div data-type="label">CUL 433</div>
            </div>
            <div>
                <div data-type="switch" data-device="JEELINK" data-get-on="Initialized" data-icon="fa-wifi" class="readonly"></div>
                <div data-type="label">JEELINK</div>
            </div>
            <div>
                <div data-type="switch" data-device="MILIGHT" data-get-on="ok" data-icon="fa-wifi" class="readonly"></div>
                <div data-type="label">MILIGHT</div>
            </div>
        </div>
    </li>

    <li data-row="4" data-col="5" data-sizex="2" data-sizey="1">
        <header>DATENBANK</header>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" data-device="DBLOG1" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY1</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="DBLOG2" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY2</div>
            </div>
            <div class="left">
                <div data-type="switch" data-device="DBLOG3" data-get-on="connected" data-icon="fa-database" class="readonly"></div>
                <div data-type="label">SKY3</div>
            </div>
        </div>
    </li>

    <li data-row="1" data-col="5" data-sizex="1" data-sizey="3">
        <header>BATTERIE</header>
        <div class="centered container">
            <div data-type="symbol" title="A_HUMID"          data-device="A_HUMID"            data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="A_HUMID"          data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="BAD_HUMID"        data-device="BAD_HUMID"          data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="BAD_HUMID"        data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="B_HEIZUNG"        data-device="B_HEIZUNG"          data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="B_HEIZUNG"        data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="B_THERMO"         data-device="B_THERMO"           data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="B_THERMO"         data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="KUEHL_THERMO"     data-device="KUEHL_THERMO"       data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="KUEHL_THERMO"     data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="S_FENSTER_LINKS"  data-device="S_FENSTER_LINKS"    data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="S_FENSTER_LINKS"  data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="S_THERMO"         data-device="S_THERMO"           data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="S_THERMO"         data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="W_FENSTER_Balkon" data-device="W_FENSTER_Balkon"   data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="W_FENSTER_Balkon" data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="W_HEIZUNG"        data-device="W_HEIZUNG"          data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="W_HEIZUNG"        data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="W_HEIZUNG_BALKON" data-device="W_HEIZUNG_BALKON"   data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="W_HEIZUNG_BALKON" data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="W_HEIZUNG_COUCH"  data-device="W_HEIZUNG_COUCH"    data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="W_HEIZUNG_COUCH"  data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
            <div data-type="symbol" title="W_HUMID"          data-device="W_HUMID"            data-get="battery" data-get-on='["low","ok"]' data-icons='["oa-measure_battery_25","oa-measure_battery_100"]' data-on-colors='["#505050","#aa6900"]' title="W_HUMID"          data-background-icon="fa-circle-thin" data-off-background-color="#505050"></div>
        </div>
    </li>
</ul>

<script 