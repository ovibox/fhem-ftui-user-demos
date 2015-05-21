<?
    function battery($device, $style) {
?>
    <div data-type="symbol" 
        data-device="<?=$device?>" 
        data-get="battery" 
        data-get-on="low" 
        data-on-color="#aa6900" 
        data-off-color="#2a2a2a" 
        data-icon="oa-measure_battery_25" 
        style="<?=$style?>"
        title="<?=$device?>"></div>
<?
    }
?>