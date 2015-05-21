<div class="centered container">
    <div>
    <a href="schlafzimmer.php"><?
        temperature("S_THERMO");
        humidity("S_THERMO");
    ?></a>
    </div>
    
    <div data-type="symbol" data-device="S_FENSTER_LINKS" class="cell" data-subtype="MAX" style="margin-top:46px !important"></div>
    <? battery('S_FENSTER_LINKS', 'position:absolute;bottom:0;right:0;') ?>
</div>