<?
    function temperature($device) {
?>
    <div data-type="label" 
        data-subtype="Temperature"
        data-device="<?=$device?>" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="<?=$device?>" 
        data-subtype="statTemperatureTendency" 
        class="cell small"></div>
<?
    }

    function humidity($device) {
?>
    <div data-type="label" 
        data-subtype="Humidity"
        data-device="<?=$device?>" 
        class="cell big"></div>
    <div data-type="klimatrend" 
        data-device="<?=$device?>" 
        data-get="statHumidityTendency" 
        class="cell small"></div>
<?
    }
    
    function temperature_humidity($device) {
        temperature($device);
        humidity($device);
    }
    
    function thermostat($device, $device_valve=-1) {
        if($device_valve<0) {
            $device_valve = $device;
        }
?>
    <div data-type="thermostat" 
        data-subtype="MAX"
        data-get="desiredTemperature"
        data-set="desiredTemperature auto"
        data-temp="temperature"
        data-off="off"
        data-boost="boost"
        data-min="5"
        data-max="30"
        data-device="<?=$device?>" 
        class="cell"></div>

    <div style="margin-top:-27px !important;margin-bottom:20px !important">
        <div data-type="label" data-device="<?=$device_valve?>" data-get="valveposition" data-unit=" %" class="cell" data-fix="0" style="display:inline;margin:0 !important;"></div>
    </div>
    
    <div data-type="switch" data-device="<?=$device?>_OVERRIDE" data-subtype="dummy10" data-icon="fa-hand-o-right" class="bold"></div>
<?        
    }
?>