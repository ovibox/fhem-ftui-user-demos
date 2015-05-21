<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <? pc('MIST') ?>
    
    <li data-row="4" data-col="2" data-sizex="2" data-sizey="1">
    </li>
    
    <li data-row="4" data-col="6" data-sizex="2" data-sizey="1">
        <header>WEITER</header>
        <div class="centered container">
    	    <div class="left">
    	        <? include("widget/widget.buero-more.php") ?>
    	    </div>
    	    <div class="left">
    	        <? button('xbmc',  'buero-xbmc-simple.php', 'nesges-kodi') ?>
    	        <div data-type="label">KODI</div>
    	    </div>
        </div>
    </li>
</ul>
