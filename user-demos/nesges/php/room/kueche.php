<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="3">
        <iframe src="/plots/?p=P_KUECHE&amp;nonav&amp;dark&amp;nolegend" width='680' height='410' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="2">
        <header>KLIMA</header>
        <? include("widget/widget.kueche-klima.php") ?>
    </li>
    <li data-row="3" data-col="7" data-sizex="1" data-sizey="1">
    	<header>K&Uuml;HLSCHRANK</header>
    	<? include("widget/widget.kuehlschrank-klima.php") ?>
    </li>

    <li data-row="4" data-col="2" data-sizex="3" data-sizey="1">
    	<header>MILIGHT 3</header>
        <div class="left">
            <? milight("MILIGHT_Zone3_Kueche", 1) ?>
        </div>
    </li>
    
    <li data-row="4" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.kueche-more.php") ?>
    </li>
</ul>