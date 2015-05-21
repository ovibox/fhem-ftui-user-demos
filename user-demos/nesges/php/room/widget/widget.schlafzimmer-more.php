<div class="centered container">
    <? if(basename($_SERVER['PHP_SELF']) != 'schlafzimmer-pc.php') { ?>
    <div class="left">
	    <? button('pc',         'schlafzimmer-pc.php', 'fa-laptop') ?>
	    <div data-type="label">PC</div>
    </div>
    <? } ?>
    <div class="left">
	    <? button('pc',         'schlafzimmer-mpd.php', 'nesges-radio2') ?>
	    <div data-type="label">Radio</div>
    </div>
    <? if(basename($_SERVER['PHP_SELF']) != 'schlafzimmer-xbmc-simple.php') { ?>
    <div class="left">
	    <? button('xbmc',       'schlafzimmer-xbmc-simple.php', 'nesges-kodi') ?>
	    <div data-type="label">KODI</div>
    </div>
    <? } ?>
    <? if(basename($_SERVER['PHP_SELF']) != 'schlafzimmer-milight.php') { ?>
    <div class="left">
	    <? button('milight',    'schlafzimmer-milight.php', 'fa-lightbulb-o') ?>
	    <div data-type="label">LICHT</div>
    </div>
    <? } ?>
</div>
