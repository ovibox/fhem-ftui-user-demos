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
        <iframe src="/plots/?p=P_SCHLAFZIMMER&amp;nonav&amp;dark&amp;nolegend" width='680' height='410' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="2">
        <header>KLIMA</header>
        <? include("widget/widget.schlafzimmer-klima.php") ?>
    </li>
    
    <li data-row="3" data-col="7" data-sizex="1" data-sizey="1">
        <header>WECKER</header>
        <? button('wecker',     'schlafzimmer-wecker.php', 'nesges-alarmclock') ?>
        <div data-type="label">Wecker</div>
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