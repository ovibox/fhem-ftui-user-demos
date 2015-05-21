<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>R&Auml;UME</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="7" data-sizex="1" data-sizey="1">
    	<header>KLIMA</header>
    	<? include("widget/widget.aussen-klima.php") ?>
    </li>
    <li data-row="2" data-col="7" data-sizex="1" data-sizey="3">
        <header>WEITER</header>
        <? include("widget/widget.aussen-more.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="2" data-sizey="3">
        <header>BIOWETTER</header>
        <table class="pollen">
            <tbody>
                <tr>
                    <td><? biowetter('Psychopathie', 0, 1) ?></td>
                    <td><? biowetter('Erkaeltungskrankheiten', 0, 1) ?></td>
                    <td><? biowetter('Migraene', 0, 1) ?></td>
                    <td><? biowetter('Reizbarkeit', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Kopfschmerzen', 0, 1) ?></td>
                    <td><? biowetter('Schizophrenie', 0, 1) ?></td>
                    <td><? biowetter('Blutungen', 0, 1) ?></td>
                    <td><? biowetter('reduz. Schlaftiefe', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('subj. Beschwerden', 0, 1) ?></td>
                    <td><? biowetter('Bronchitis', 0, 1) ?></td>
                    <td><? biowetter('Spasmen', 0, 1) ?></td>
                    <td><? biowetter('Thrombose', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Traumat. Enzephalitis', 0, 1) ?></td>
                    <td><? biowetter('Unfallbereitschaft', 0, 1) ?></td>
                    <td><? biowetter('Embolie', 0, 1) ?></td>
                    <td><? biowetter('Hypotoner Kollaps', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Appendizitis', 0, 1) ?></td>
                    <td><? biowetter('Entzuendliche Prozesse', 0, 1) ?></td>
                    <td><? biowetter('Pneumonie', 0, 1) ?></td>
                    <td><? biowetter('Neurosis', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Glaukom', 0, 1) ?></td>
                    <td><? biowetter('Herzinfarkt', 0, 1) ?></td>
                    <td><? biowetter('Stumpfschmerz', 0, 1) ?></td>
                    <td><? biowetter('Herzinsuffizienz', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Psych. Depressionen', 0, 1) ?></td>
                    <td><? biowetter('Rheumatische Beschwerden', 0, 1) ?></td>
                    <td><? biowetter('Epilepsie', 0, 1) ?></td>
                    <td><? biowetter('Koliken', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? biowetter('Reaktionszeit', 0, 1) ?></td>
                    <td><? biowetter('Tinnitus', 0, 1) ?></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </li>
    <li data-row="4" data-col="2" data-sizex="1" data-sizey="1">
        <header>UV</header>
        <? include('widget/widget.weather-uv.php') ?>
    </li>
    <li data-row="4" data-col="3" data-sizex="1" data-sizey="1">
        <header>OZON</header>
        <? include('widget/widget.weather-ozon.php') ?>
    </li>
    <li data-row="1" data-col="4" data-sizex="3" data-sizey="3">
        <img id="imgmap" src="<?= weathermap('wetteronline_bio') ?>" width='100%' alt="Wetterkarte">
        <? include("widget/widget.circlemenu-biowettermaps.php") ?>
    </li>
    <li data-row="4" data-col="4" data-sizex="2" data-sizey="1">
        <header>Pollen</header>
        <div class="centered">
            <? pollen('Graeser',1) ?>
            <? pollen('Birke',1) ?>
            <? pollen('Buche',1) ?>
            <? pollen('Hafer',1) ?>
            <? pollen('Raps',1) ?>
        </div>
    </li>
    <li data-row="4" data-col="6" data-sizex="1" data-sizey="1">
        <header>MOND</header>
        <? include("widget/widget.moon.php") ?>
    </li>
</ul>