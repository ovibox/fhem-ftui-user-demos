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
        <header>POLLEN</header>
        <table class="pollen">
            <tbody>
                <tr>
                    <td><? pollen('Ahorn', 0, 1) ?></td>
                    <td><? pollen('Ambrosia', 0, 1) ?></td>
                    <td><? pollen('Beifuss', 0, 1) ?></td>
                    <td><? pollen('Birke', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Brennessel', 0, 1) ?></td>
                    <td><? pollen('Buche', 0, 1) ?></td>
                    <td><? pollen('Eiche', 0, 1) ?></td>
                    <td><? pollen('Erle', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Esche', 0, 1) ?></td>
                    <td><? pollen('Fichte', 0, 1) ?></td>
                    <td><? pollen('Flieder', 0, 1) ?></td>
                    <td><? pollen('Gaensefuss', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Graeser', 0, 1) ?></td>
                    <td><? pollen('Hafer', 0, 1) ?></td>
                    <td><? pollen('Hasel', 0, 1) ?></td>
                    <td><? pollen('Holunder', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Hopfen', 0, 1) ?></td>
                    <td><? pollen('Kiefer', 0, 1) ?></td>
                    <td><? pollen('Linde', 0, 1) ?></td>
                    <td><? pollen('Loewenzahn', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Mais', 0, 1) ?></td>
                    <td><? pollen('Nessel', 0, 1) ?></td>
                    <td><? pollen('Pappel', 0, 1) ?></td>
                    <td><? pollen('Platane', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Raps', 0, 1) ?></td>
                    <td><? pollen('Roggen', 0, 1) ?></td>
                    <td><? pollen('Rotbuche', 0, 1) ?></td>
                    <td><? pollen('Spitzwegerich', 0, 1) ?></td>
                </tr>
                <tr>
                    <td><? pollen('Tanne', 0, 1) ?></td>
                    <td><? pollen('Ulme', 0, 1) ?></td>
                    <td><? pollen('Weide', 0, 1) ?></td>
                    <td><? pollen('Weizen', 0, 1) ?></td>
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
        <img id="imgmap" src="<?= weathermap('wetteronline_pollen') ?>" width='100%' alt="Wetterkarte">
        <? include("widget/widget.circlemenu-biowettermaps.php") ?>
    </li>
    <li data-row="4" data-col="4" data-sizex="2" data-sizey="1">
        <header>BIOWETTER</header>
        <div class="centered">
            <? biowetter('Migraene',1) ?>
            <? biowetter('Kopfschmerzen',1) ?>
            <? biowetter('reduz. Schlaftiefe',1) ?>
            <? biowetter('Reizbarkeit',1) ?>
            <? biowetter('Psych. Depressionen',1) ?>
        </div>
    </li>
    <li data-row="4" data-col="6" data-sizex="1" data-sizey="1">
        <header>MOND</header>
        <? include("widget/widget.moon.php") ?>
    </li>
</ul>