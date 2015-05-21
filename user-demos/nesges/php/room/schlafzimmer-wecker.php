<?
    include("ui.php");
    $ui = new UI();
    
    function wecker_preset($time, $device="WECKER") {
?>
        <div class="left" style="margin-left:10px">
            <div data-type="switch" 
                data-device="<?=$device?>"
                data-get-on="<?=$time?>"
                data-get-off="!on"
                data-set-on="<?=$time?>"
                data-set-of="off"
                data-icon="fa-clock-o"></div>
            <div data-type="label"><?=$time?></div>
        </div>
<?
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="3" data-sizey="1">
        <header>WECKER 1</header>
        <div data-type="settimer"
            data-device="WECKER"></div>
    </li>
    
    <li data-row="2" data-col="2" data-sizex="3" data-sizey="2">
        <header>SCHNELLWAHL</header>
        <div class="centered container" style="margin-top:10px">
            <div class="left" style="margin-left:40px;margin-right:25px">
                <div data-type="switch"
                    data-device="WECKER"
                    data-get="sendtohandy"
                    data-get-on="yes"
                    data-get-off="no"
                    data-cmd="setreading"
                    data-set-on="sendtohandy yes"
                    data-set-off="sendtohandy no"
                    data-icon="fa-mobile"></div>
                <div data-type="label">an Handy</div>
            </div>
        <?
            wecker_preset('03:00');
            wecker_preset('04:00');
            wecker_preset('05:00');
            wecker_preset('05:30');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('06:00');
            wecker_preset('06:30');
            wecker_preset('07:00');
            wecker_preset('07:30');
            wecker_preset('08:00');
            wecker_preset('08:30');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('09:00');
            wecker_preset('10:00');
            wecker_preset('11:00');
            wecker_preset('12:00');
            wecker_preset('13:00');
            wecker_preset('14:00');
        ?>
        </div>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="1">
        <header>WECKER 2</header>
        <div data-type="settimer"
            data-device="WECKER2"></div>
    </li>
    
    <li data-row="2" data-col="5" data-sizex="3" data-sizey="2">
        <header>SCHNELLWAHL</header>
        <div class="centered container" style="margin-top:10px">
            <div class="left" style="margin-left:40px;margin-right:25px">
                <div data-type="switch"
                    data-device="WECKER2"
                    data-get="sendtohandy"
                    data-get-on="yes"
                    data-get-off="no"
                    data-cmd="setreading"
                    data-set-on="sendtohandy yes"
                    data-set-off="sendtohandy no"
                    data-icon="fa-mobile"></div>
                <div data-type="label">an Handy</div>
            </div>
        <?
            wecker_preset('03:00', 'WECKER2');
            wecker_preset('04:00', 'WECKER2');
            wecker_preset('05:00', 'WECKER2');
            wecker_preset('05:30', 'WECKER2');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('06:00', 'WECKER2');
            wecker_preset('06:30', 'WECKER2');
            wecker_preset('07:00', 'WECKER2');
            wecker_preset('07:30', 'WECKER2');
            wecker_preset('08:00', 'WECKER2');
            wecker_preset('08:30', 'WECKER2');
        ?>
        </div>
        <div class="centered container" style="margin-top:20px">
        <?
            wecker_preset('09:00', 'WECKER2');
            wecker_preset('10:00', 'WECKER2');
            wecker_preset('11:00', 'WECKER2');
            wecker_preset('12:00', 'WECKER2');
            wecker_preset('13:00', 'WECKER2');
            wecker_preset('14:00', 'WECKER2');
        ?>
        </div>
    </li>
    
    <li data-row="4" data-col="2" data-sizex="3" data-sizey="1">
    	<header>SCHLAFZIMMER</header>
        <? include("widget/widget.schlafzimmer-switches.php") ?>
    </li>
    
    <li data-row="4" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.schlafzimmer-more.php") ?>
    </li>
</ul>