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
        <div data-type="iframe"
            data-check-src="/kodi/flux/addons/webinterface.chorus/"
            data-src="http://<?=$mcp_user?>:<?=$mcp_pass?>@192.168.178.35:80/addons/webinterface.chorus/"
            data-fill="yes"></div>
        <div data-type="button" data-url="schlafzimmer-streamradio.php" data-icon="fa-star" data-on-background-color="transparent" data-background-icon="none" data-on-color="#aa6900" style="position:absolute;z-index:1001;top:-2px;left:-5px"></div>
    </li>
</ul>