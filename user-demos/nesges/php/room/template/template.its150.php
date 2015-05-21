<?
    function it($device, $label_on="Ein", $label_off="Aus") {
?>
<div class="centered">
    <div class="left">
        <div data-type="push" data-device="<?=$device?>" data-set="on" data-icon="fa-check-circle"></div>
        <div data-type="label"><?=$label_on?></div>
    </div>
    <div class="left">
        <div data-type="push" data-device="<?=$device?>" data-set="off" data-icon="fa-times-circle"></div>
        <div data-type="label"><?=$label_off?></div>
    </div>
</div>
<?
    }
?>