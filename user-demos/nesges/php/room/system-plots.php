<?
    include("ui.php");
    $ui = new UI();
    
    // max iframe size
    $width=680;
    $height=553;
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <iframe id="plot_iframe" src="/plots/?p=<?=$_GET['p']?>&amp;dark&amp;nonav&amp;nolegend" width='<?=$width?>' height='<?=$height?>' scrolling='no' allowtransparency='true' frameborder='0'></iframe>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="4">
        <header>PLOTS</header>
    	<? include("widget/widget.plots.php") ?>
    </li>
</ul>