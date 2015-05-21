<?
    function light($device, $times=array("1h","2h")) {
?>
<div class="centered container">
    <div class="left">
        <div data-type="switch" data-device="<?= $device ?>" class="cell"></div>
    </div>
    <?
        if(!is_array($times)) {
            $times = array($times);
        }
        foreach ($times as $time) {
            if(preg_match('/(\d+)([smh])/', $time, $matches)) {
                switch($matches[2]) {
                    case "s":   $time = $matches[1]; break;
                    case "m":   $time = $matches[1]*60; break;
                    case "h":   
                    default:    $time = $matches[1]*3600; break;
                }
            } else {
                $time = 3600*$time;
            }
            
            if($time == 0) {
                $_time = "<span style='font-size:140%'>&infin;</span>";
            } else if($time < 120) {
                $_time = "1 Minute";
            } else if($time < 3600) {
                $_time = floor($time / 60)." Minuten";
            } else if($time == 3600) {
                $_time = "1 Stunde";
            } else {
                $_time = floor($time/3600)." Stunden";
            }
    ?>
            <div class="left">
                <div data-type="push" data-device="<?= $device ?>" class="cell" data-set="on-for-timer <?= $time ?>"></div>
                <div data-type="label" class="cell"><?= $_time ?></div>
            </div>
    <?
        }
    ?>
</div>
<?
    }
?>