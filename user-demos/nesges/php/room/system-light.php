<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="4" data-sizey="1">
    	<header>MILIGHT 1 (Wohnzimmer)</header>
        <div class="left">
            <? milight("MILIGHT_Zone1_Wohnzimmer", 1) ?>
        </div>
    </li>
    <li data-row="2" data-col="2" data-sizex="4" data-sizey="1">
    	<header>MILIGHT 4 (Wohnzimmer)</header>
        <div class="left">
            <? milight("MILIGHT_Zone4_Wohnzimmer", 1) ?>
        </div>
    </li>
    
    <li data-row="3" data-col="2" data-sizex="4" data-sizey="1">
    	<header>MILIGHT 2 (Schlafzimmer)</header>
        <div class="left">
            <? milight("MILIGHT_Zone2_Schlafzimmer", 1) ?>
        </div>
    </li>


    <li data-row="1" data-col="6" data-sizex="2" data-sizey="1">
        <header>STEHLAMPE (Wohnzimmer)</header>
        <? light('W_LICHT_A1_Stehlampe'); ?>
    </li>
    <li data-row="2" data-col="6" data-sizex="2" data-sizey="1">
        <header>TV-BACK (Wohnzimmer)</header>
        <? light('W_LICHT_C1_BacklightTV'); ?>
    </li>
    
    <li data-row="3" data-col="6" data-sizex="2" data-sizey="1">
        <header>STERNE (Schlafzimmer)</header>
        <? light('S_SWITCH_C2_Sterne', array("30m","1h")); ?>
    </li>
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>LESELAMPE (Schlafzimmer)</header>
        <? light('S_SWITCH_B2_Leselampe', array("30m","1h")); ?>
    </li>


    <li data-row="4" data-col="2" data-sizex="4" data-sizey="1">
    	<header>MILIGHT 3 (K&uuml;che)</header>
        <div class="left">
            <? milight("MILIGHT_Zone3_Kueche", 1) ?>
        </div>
    </li>
</ul>