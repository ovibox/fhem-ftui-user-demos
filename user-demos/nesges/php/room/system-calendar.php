<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <header>KALENDER</header>
        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23333333&amp;src=p42of2ni0ti01162qi3vpl3k3g%40group.calendar.google.com&amp;color=%235229A3&amp;src=de.german%23holiday%40group.v.calendar.google.com&amp;color=%23333333&amp;ctz=Europe%2FBerlin" style=" border-width:0; height:100%; width:100%" scrolling="no"></iframe>
    </li>
</ul>

