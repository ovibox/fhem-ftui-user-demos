<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>

    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <iframe src="/kodilib/?client=MCP_KODI&backlink=/tui/room/kueche-streamradio.php&dir=<?=$_GET['dir']?>" width="100%" height="100%"></iframe>
    </li>
</ul>