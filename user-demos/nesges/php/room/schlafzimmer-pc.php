<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <? pc('REVO') ?>
    
    <li data-row="4" data-col="2" data-sizex="2" data-sizey="1">
    </li>

    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.schlafzimmer-more.php") ?>
    </li>
</ul>