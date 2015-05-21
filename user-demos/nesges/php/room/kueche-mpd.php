<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="2" data-col="2" data-sizex="3" data-sizey="4" id="streamradioplaylists" style="overflow:auto">
        <header>STATIONS</header>
        <? mpd_streamradio_stations('MCP') ?>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="3">
        <header>PLAYER</header>
        <? mpd_streamradio_control('MCP') ?>
    </li>
    
    <li data-row="4" data-col="5" data-sizex="3" data-sizey="1">
        <header>WEITER</header>
    	<? include("widget/widget.kueche-more.php") ?>
    </li>
</ul>