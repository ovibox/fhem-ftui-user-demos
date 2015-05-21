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
    
    <li data-row="1" data-col="2" data-sizex="3" data-sizey="4">
        <header>MILIGHT 3</header>
        <? milight('MILIGHT_Zone3_Kueche'); ?>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="2">
        <header>KLIMA</header>
        <? include("widget/widget.kueche-klima.php") ?>
    </li>
    <li data-row="3" data-col="5" data-sizex="3" data-sizey="1">
    	<header>K&Uuml;HLSCHRANK</header>
    	<? include("widget/widget.kuehlschrank-klima.php") ?>
    </li>

    <li data-row="4" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.kueche-more.php") ?>
    </li>
</ul>