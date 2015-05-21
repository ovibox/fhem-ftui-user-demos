<?
    include("ui.php");
    $ui = new UI();
    
    // max iframe size
    $width='';
    $height=553;

    $img=1;
    if($_GET['content']) {
        $url = $_GET['content'];
    } else {
        $url = 'dwd_de';
    }
    switch($url) {
        default:
            $img=0;
            if($_GET['img']) {
                $img=$_GET['img'];
            } else {
                $width=680;
            }
            $_url = weathermap($url);
            if($_url) {
                $url = $_url;
            }
            break;
        case "wind_direction_pie":
            $img=0;
            $width=700;
            $height=570;
            $url = '/plots/wind_direction.php';
            break;
        case "moon":
            $url = weathermap($url);
            $imgstyle="zoom:1.7;margin:-100px";
            break;
        case "meteogram":
            $url = weathermap($url);
            $width=680;
            $height='';
            break;
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="5" data-sizey="4">
        <?
            if($img) {
        ?>
        <img src="<?=$url?>" width='<?=$width?>' height='<?=$height?>' style='<?=$imgstyle?>'>
        <?
            } else {
        ?>
        <iframe id="aussen_iframe" src="<?=$url?>" width='<?=$width?>' height='<?=$height?>' scrolling='auto' allowtransparency='true' frameborder='0'></iframe>
        <?
            }
        ?>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="1">
    	<header>KLIMA</header>
    	<? include("widget/widget.aussen-klima.php") ?>
    </li>
    <li data-row="2" data-col="7" data-sizex="1" data-sizey="3">
        <header>WEITER</header>
        <? include("widget/widget.aussen-more.php") ?>
    </li>
</ul>