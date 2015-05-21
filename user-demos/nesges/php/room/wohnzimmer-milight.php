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
        <header>MILIGHT 1</header>
        <? milight('MILIGHT_Zone1_Wohnzimmer'); ?>
    </li>
    <li data-row="1" data-col="3" data-sizex="2" data-sizey="4">
        <header>MILIGHT 4</header>
        <? milight('MILIGHT_Zone4_Wohnzimmer'); ?>
    </li>
    
    <li data-row="1" data-col="6" data-sizex="2" data-sizey="1">
        <header>STEHLAMPE</header>
        <? light('W_LICHT_A1_Stehlampe'); ?>
    </li>
    <li data-row="2" data-col="6" data-sizex="2" data-sizey="1">
        <header>TV-BACK</header>
        <? light('W_LICHT_C1_BacklightTV'); ?>
    </li>
    <li data-row="3" data-col="6" data-sizex="2" data-sizey="1">
        <header>ALLE</header>
        <div class="centered container">
            <div class="left">
                <div data-type="push"
                    data-device="W_LICHT"
                    data-set="on"
                    ></div>
                <div data-type="label">Ein</div>
            </div>
            <div class="left">
                <div data-type="push"
                    data-device="W_LICHT"
                    data-set="off"
                    ></div>
                <div data-type="label">Aus</div>
            </div>
        </div>
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.wohnzimmer-more.php") ?>
    </li>
</ul>