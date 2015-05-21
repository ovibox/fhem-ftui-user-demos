<div class="centered container">
    <a href="buero.php"><?
        temperature('B_THERMO');
    ?></a>
    <div style="padding-top:84px !important">
    <?
        thermostat('B_HEIZUNG');
    ?>
    </div>
    <? battery('B_HEIZUNG', 'position:absolute;bottom:0;left:0;') ?>
</div>