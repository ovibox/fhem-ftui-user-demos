<div class="centered container">
    <a href="wohnzimmer.php"><?
        temperature('W_HUMID');
        humidity('W_HUMID');
    ?></a>
    <div style="padding-top:33px !important">
    <?
        thermostat('W_HEIZUNG', 'W_HEIZUNG_BALKON');
    ?>
    </div>
    <div data-type="symbol" data-device="W_FENSTER_Balkon" class="cell" data-subtype="MAX" data-icons='["ftui-door","ftui-door"]'></div>
    
    <? battery('W_FENSTER_Balkon ', 'position:absolute;bottom:0;right:0;') ?>
    <? battery('W_HEIZUNG_COUCH', 'position:absolute;bottom:0;left:0;') ?>
    <? battery('W_HEIZUNG_BALKON', 'position:absolute;bottom:30px;left:0;') ?>
    <? battery('W_HEIZUNG', 'position:absolute;bottom:60px;left:0;') ?>
</div>