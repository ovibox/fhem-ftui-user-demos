<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <? pc('WATER') ?>
   
    <li data-row="4" data-col="2" data-sizex="2" data-sizey="1">
        <header>SWITCHES</header>
        <div class="centered container">
            <div class="right">
                <div data-type="switch" data-device="W_SWITCH_D1_Monitore" class="cell" data-icon="fa-desktop"></div>
                <div data-type="label" class="cell">Monitore</div>
            </div>
            <div class="right">
                <div data-type="switch" data-device="W_SWITCH_B1_Boxen" class="cell" data-icon="fa-volume-up"></div>
                <div data-type="label" class="cell">Boxen</div>
            </div>
        </div>
    </li>
   
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.wohnzimmer-more.php") ?>
    </li>
</ul>