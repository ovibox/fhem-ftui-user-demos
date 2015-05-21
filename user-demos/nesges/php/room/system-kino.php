<?
    include("ui.php");
    $ui = new UI();
    
    function kino($device) {
        ?>
            <div data-type="label"
                data-subtype="KINO"
                data-device="<?=$device?>"
                data-get="movies"
                style="text-align:left;padding-left:10px;padding-top:10px;"></div>
        <?
            switch($device) {
                case 'KINO_PRUEM':      $url = "http://www.kino.de/kinoprogramm/pruem/eifel-kinocenter-k13842/"; break;
                case 'KINO_DAUN':       $url = "http://www.kino.de/kinoprogramm/daun/kinopalast-vulkaneifel-k46568/"; break;
                case 'KINO_HILLESHEIM': $url = "http://www.kino.de/kinoprogramm/hillesheim/eifel-film-buehne-k13776/"; break;
                case 'KINO_BITBURG':    $url = "http://www.kino.de/kinoprogramm/bitburg/skala-kinocenter-k14890/"; break;
                case 'KINO_TRIER':      $url = "http://www.kino.de/kinoprogramm/trier/cinemaxx-trier-k32975/"; break;
            }
        ?>
            <div data-type="button"
                data-url="<?= $url ?>"
                data-icon="fa-info"
                data-background-icon="fa-circle-thin"
                data-on-color="#aa6900"
                data-on-background-color="#505050"
                style="position:absolute;bottom:10px;right:10px"></div>
        <?
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    <li data-row="1" data-col="2" data-sizex="3" data-sizey="1">
        <header><a target='_blank' href='http://www.kino.de/kinoprogramm/pruem/eifel-kinocenter-k13842/'>PRÜM</a></header>
        <? kino('KINO_PRUEM') ?>
    </li>
    <li data-row="2" data-col="2" data-sizex="3" data-sizey="2">
        <header>DAUN</header>
        <? kino('KINO_DAUN') ?>
    </li>
    <li data-row="4" data-col="2" data-sizex="3" data-sizey="1">
        <header>BITBURG</header>
        <? kino('KINO_BITBURG') ?>
    </li>
    
    <li data-row="1" data-col="5" data-sizex="3" data-sizey="1">
        <header>HILLESHEIM</header>
        <? kino('KINO_HILLESHEIM') ?>
    </li>
    <li data-row="2" data-col="5" data-sizex="3" data-sizey="3">
        <header>TRIER</header>
        <? kino('KINO_TRIER') ?>
    </li>
</ul>

<script>
    $( document ).ready(function() {
        $('div').each(function(index) {
        	$(this).bind("DOMSubtreeModified", function(event) {
        	    var elem = $(event.target);
        	    if(elem.data('subtype') == 'KINO' && elem.html().match(/, /)) {
        	        elem.html(elem.html().replace(/, /, '<br>'));
        	    }
        	});
        });
    });
</script>