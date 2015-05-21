<?
    include("ui.php");
    include_once("template/template.milight.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="2" data-sizey="4">
        <header>MILIGHT 2</header>
        <? milight('MILIGHT_Zone2_Schlafzimmer'); ?>
    </li>
    
    <li data-row="1" data-col="4" data-sizex="4" data-sizey="1">
        <header>STERNE</header>
        <? light('S_SWITCH_C2_Sterne', array("5m","15m","30m","1h","2h")); ?>
    </li>
    <li data-row="2" data-col="4" data-sizex="4" data-sizey="1">
        <header>LESELAMPE</header>
        <? light('S_SWITCH_B2_Leselampe', array("5m","15m","30m","1h","2h")); ?>
    </li>
    <li data-row="3" data-col="4" data-sizex="4" data-sizey="1">
        <header>TV</header>
        <? light('S_SWITCH_A2_TV', array("30m","1h","2h","4h",0)); ?>
    </li>
    <li data-row="4" data-col="4" data-sizex="2" data-sizey="1">
        <header>ALLE</header>
        <div class="centered container">
            <div class="left">
                <div data-type="push"
                    data-device="S_LICHT"
                    data-set="on"
                    ></div>
                <div data-type="label">Ein</div>
            </div>
            <div class="left">
                <div data-type="push"
                    data-device="S_LICHT"
                    data-set="off"
                    ></div>
                <div data-type="label">Aus</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.schlafzimmer-more.php") ?>
    </li>
</ul>