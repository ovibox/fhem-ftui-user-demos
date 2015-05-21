<?
    function milight($device, $horizontal=0) {
        if($horizontal) {
?>
<div class="centered container" style="margin-top:10px !important">
    <div style="margin-left:20px !important;" data-type="volume" 
        data-device="<?= $device ?>"
        data-get="brightness"
        data-set="dim"
        data-min="2"
        data-max="100"
        class="small left dim-back"
        ></div>
    <div  style="margin-left:20px !important;" data-type="volume" 
        data-device="<?= $device ?>"
        data-get="hue"
        data-set="hue"
        data-min="0"
        data-max="360"
        data-height="110"
        data-width="110"
        class="small left hue-back"
        ></div>
    <div class="left" style="margin-left:20px !important;">
        <div data-type="switch" 
            data-device="<?= $device ?>"
            data-get-on="on.*"
            data-get-off="off"
            data-set-on="on"
            data-set-off="off"
            ></div>
        <div data-type="switch" 
            data-device="<?= $device ?>"
            data-get="saturation"
            data-get-on="0"
            data-get-off="100"
            data-set-on="saturation 0"
            data-set-off="saturation 100"
            data-icon="fa-sun-o"
            ></div>
    </div>
</div>
<?
        } else {
?>
<div class="centered container" style="margin-top:10px !important">
    <div data-type="volume" 
        data-device="<?= $device ?>"
        data-step="0.5"
        data-get="brightness"
        data-set="dim"
        data-min="2"
        data-max="100"
        class="dim-back"
        ></div>
    <div data-type="volume" 
        data-device="<?= $device ?>"
        data-get="hue"
        data-set="hue"
        data-min="0"
        data-max="360"
        class="hue-back"
        ></div>
    <div class="centered">
        <div data-type="switch" 
            data-device="<?= $device ?>"
            data-get-on="on.*"
            data-get-off="off"
            data-set-on="on"
            data-set-off="off"
            ></div>
        <div data-type="switch" 
            data-device="<?= $device ?>"
            data-get="saturation"
            data-get-on="0"
            data-get-off="100"
            data-set-on="saturation 0"
            data-set-off="saturation 100"
            data-icon="fa-sun-o"
            ></div>
    </div>
    <div class="centered" style="margin-top:20px !important">
        <? button_fhem('orange', 'set '.$device.' hue 50', 'fa-paint-brush', 'hsl(50,100%,50%)') ?>
        <? button_fhem('green', 'set '.$device.' hue 130', 'fa-paint-brush', 'hsl(130,100%,50%)') ?>
        <? button_fhem('lblue', 'set '.$device.' hue 190', 'fa-paint-brush', 'hsl(190,100%,50%)') ?>
        <? button_fhem('blue', 'set '.$device.' hue 240',  'fa-paint-brush', 'hsl(240,100%,50%)') ?>
        <? button_fhem('pink', 'set '.$device.' hue 320',  'fa-paint-brush', 'hsl(320,100%,50%)') ?>
        <? button_fhem('red', 'set '.$device.' hue 360',   'fa-paint-brush', 'hsl(360,100%,50%)') ?>
    </div>
</div>
<?
        }
    }
?>