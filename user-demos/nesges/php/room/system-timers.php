<?
    include("ui.php");
    $ui = new UI();
    
    function timercmd($seconds) {
        return "{pizzatimer(}";
    }
    
    function timerui($timer,$minutes=array(5,10,15,30,60)) {
?>
        <div class="centered container">
            <div data-type="label" data-device="<?= $timer ?>" style="font-size:180%;margin-top:10px !important"></div>
            <div data-type="label" data-device="<?= $timer ?>" data-get="signaldevice" style="margin-bottom:10px !important"></div>
            <div>
                <? button_fhem('', "{pizzatimer('$timer', ".(60*$minutes[0]).")}", 'fa-clock-o', '#aa6900') ?>
                <div data-type="label"><?=$minutes[0]?>m</div>
            </div>
            <div>
                <? button_fhem('', "{pizzatimer('$timer', ".(60*$minutes[1]).")}", 'fa-clock-o', '#aa6900') ?>
                <div data-type="label"><?=$minutes[1]?>m</div>
            </div>
            <div>
                <? button_fhem('', "{pizzatimer('$timer', ".(60*$minutes[2]).")}", 'fa-clock-o', '#aa6900') ?>
                <div data-type="label"><?=$minutes[2]?>m</div>
            </div>
            <div>
                <? button_fhem('', "{pizzatimer('$timer', ".(60*$minutes[3]).")}", 'fa-clock-o', '#aa6900') ?>
                <div data-type="label"><?=$minutes[3]?>m</div>
            </div>
            <div>
                <? button_fhem('', "{pizzatimer('$timer', 0)}", 'fa-power-off', '#aa3333') ?>
            </div>
            <div style="margin-top:15px !important">
                <div data-type="button" 
                    data-fhem-cmd="{timer_signaldevice_next('<?=$timer?>', 1)}"
                    data-icon="fa-angle-left" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
                <div data-type="button" 
                    data-fhem-cmd="{timer_signaldevice_next('<?=$timer?>', 1)}"
                    data-icon="fa-angle-right" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
        </div>
<?
    }
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
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="4">
        <header>TIMER 1</header>
        <? timerui("TIMER1") ?>
    </li>
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="4">
        <header>TIMER 2</header>
        <? timerui("TIMER2") ?>
    </li>
    
    <li data-row="1" data-col="4" data-sizex="2" data-sizey="4">
        <header>TIMER 3</header>
        <div data-type="label" data-device="TIMER3" style="font-size:180%;margin-top:10px !important"></div>
        <div data-type="label" data-device="TIMER3" data-get="signaldevice" style="margin-bottom:30px !important"></div>
               
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="TIMER3_m" 
                    data-device="TIMER3"
                    data-cmd=" "
                    data-type="volume"
                    data-min="0"
                    data-max="60"
                    data-initvalue="0"
                    data-tickstep="20"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Minuten</div>
            </div>
            <div class="left">
                <div id="TIMER3_h"  
                    data-device="TIMER3"
                    data-cmd=" "
                    data-type="volume"
                    data-min="0"
                    data-max="24"
                    data-initvalue="0"
                    data-tickstep="10"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Stunden</div>
            </div>
        </div>

        <div class="centered container" style="margin-top:30px !important">
            <div data-type="button" 
                data-url="javascript:$.get(($('meta[name=fhemweb_url]').attr('content') || '../fhem/') + '?cmd=%7Bpizzatimer%28%22TIMER3%22%2C' + ($('#TIMER3_m input').val()*60 + $('#TIMER3_h input').val()*60*60) + '%29%7D');false" 
                data-icon="fa-clock-o" 
                class="left" style="margin-right:16px"></div>
            <div data-type="button" 
                data-fhem-cmd="{pizzatimer('TIMER3', 0)}" 
                data-icon="fa-power-off" 
                data-on-background-color="#aa3333" 
                class="left"></div>
        </div>
        
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER3', ".(60*5).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">5m</div>
            </div>
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER3', ".(60*10).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">10m</div>
            </div>
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER3', ".(60*15).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">15m</div>
            </div>
        </div>

        
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="handy|all"
                    data-get-off="!on"
                    data-set-on="signaldevice handy" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-mobile" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="monitroid|all"
                    data-get-off="!on"
                    data-set-on="signaldevice monitroid" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-tablet" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="fritz|all"
                    data-get-off="!on"
                    data-set-on="signaldevice fritz" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-phone" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
        </div>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="water|all"
                    data-get-off="!on"
                    data-set-on="signaldevice water" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-desktop" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER3"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="all"
                    data-get-off="!on"
                    data-set-on="signaldevice all" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-plus-circle" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
        </div>
    </li>
    
    
    <li data-row="1" data-col="6" data-sizex="2" data-sizey="4">
        <header>TIMER 4</header>
        <div data-type="label" data-device="TIMER4" style="font-size:180%;margin-top:10px !important"></div>
        <div data-type="label" data-device="TIMER4" data-get="signaldevice" style="margin-bottom:30px !important"></div>
               
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <div id="TIMER4_m" 
                    data-device="TIMER4"
                    data-cmd=" "
                    data-type="volume"
                    data-min="0"
                    data-max="60"
                    data-initvalue="0"
                    data-tickstep="20"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Minuten</div>
            </div>
            <div class="left">
                <div id="TIMER4_h"  
                    data-device="TIMER4"
                    data-cmd=" "
                    data-type="volume"
                    data-min="0"
                    data-max="24"
                    data-initvalue="0"
                    data-tickstep="10"
                    class="small"
                    style="margin:10px !important"></div>
                <div data-type="label" style="margin-top:-20px !important">Stunden</div>
            </div>
        </div>

        <div class="centered container" style="margin-top:30px !important">
            <div data-type="button" 
                data-url="javascript:$.get(($('meta[name=fhemweb_url]').attr('content') || '../fhem/') + '?cmd=%7Bpizzatimer%28%22TIMER4%22%2C' + ($('#TIMER4_m input').val()*60 + $('#TIMER4_h input').val()*60*60) + '%29%7D');false" 
                data-icon="fa-clock-o" 
                class="left" style="margin-right:16px"></div>
            <div data-type="button" 
                data-fhem-cmd="{pizzatimer('TIMER4', 0)}" 
                data-icon="fa-power-off" 
                data-on-background-color="#aa3333" 
                class="left"></div>
        </div>
        
        <div class="centered container" style="margin-bottom:40px !important">
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER4', ".(60*5).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">5m</div>
            </div>
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER4', ".(60*10).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">10m</div>
            </div>
            <div class="left">
                <? button_fhem('', "{pizzatimer('TIMER4', ".(60*15).")}", 'fa-clock-o', '#6f4509') ?>
                <div data-type="label">15m</div>
            </div>
        </div>

        
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="handy|all"
                    data-get-off="!on"
                    data-set-on="signaldevice handy" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-mobile" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="monitroid|all"
                    data-get-off="!on"
                    data-set-on="signaldevice monitroid" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-tablet" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="fritz|all"
                    data-get-off="!on"
                    data-set-on="signaldevice fritz" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-phone" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
        </div>
        <div class="centered container">
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="water|all"
                    data-get-off="!on"
                    data-set-on="signaldevice water" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-desktop" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
            <div class="left">
                <div data-type="switch" 
                    data-device="TIMER4"
                    data-get="signaldevice"
                    data-cmd="setreading"
                    data-get-on="all"
                    data-get-off="!on"
                    data-set-on="signaldevice all" 
                    data-set-off="signaldevice monitroid" 
                    data-icon="fa-plus-circle" 
                    data-on-background-color="#9933FF"
                    data-off-background-color="#505050"
                    class="left"></div>
            </div>
        </div>        
    </li>
</ul>