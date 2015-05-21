<div class="centered container">
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="nesges-map" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de" data-icon="nesges-satellite"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_nacht" data-icon="fa-moon-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_de_morgen" data-icon="fa-forward"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=dwd_radar" data-icon="nesges-radio"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=meteogram" data-icon="fa-line-chart"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Karten DWD</div>
    </div>
    <div>
        <div data-type="circlemenu" data-direction="left-half" class="cell circlemenu" data-circle-radius="100">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="nesges-map" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_radar" data-icon="fa-umbrella"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_pegel" data-icon="fa-ship"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_pollen" data-icon="fa-pagelines"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_wolken" data-icon="fa-cloud"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_blitze" data-icon="fa-bolt"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_bio" data-icon="fa-smile-o"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wetteronline_uv" data-icon="fa-sun-o"></div></li>
                
            </ul>
        </div>
        <div data-type="label" class="cell">Karten WO</div>
    </div>
    <div>
        <div data-type="circlemenu" class="cell circlemenu" data-direction="left-half" data-circle-radius="140">
            <ul class="menu">
                <li><div data-type="symbol" data-icon="fa-line-chart" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_TEMP&nonav&dark&nolegend")?>" data-icon="1" class="meteocons" data-background-icon="fa-circle-thin" title="Temperatur"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_CHOFRAIN&nonav&dark&nolegend")?>" data-icon="8" class="meteocons" data-background-icon="fa-circle-thin" title="Regenwahrscheinlichkeit"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_BEWOELKUNG&nonav&dark&nolegend")?>" data-icon="fa-cloud" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Bew&ouml;lkung"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_WINDSPEED&nonav&dark&nolegend")?>" data-icon="9" class="meteocons" data-background-icon="fa-circle-thin" title="Windgeschwindigkeit"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_VIS&nonav&dark&nolegend")?>" data-icon="fa-binoculars" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Sicht"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_PRESSURE&nonav&dark&nolegend")?>" data-icon="fa-cloud-download" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Luftdruck"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_HUM&nonav&dark&nolegend")?>" data-icon="fa-tint" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Luftfeuchtigkeit"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=wind_direction_pie" data-icon="fa-compass" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Hauptwindrichtung"></div></li>
                <li><div data-type="button" data-url="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN&nonav&dark&nolegend")?>" data-icon="fa-plus-circle" data-background-icon="fa-circle-thin" data-on-color="#aa6900" title="Alles"></div></li>
            </ul>
        </div>
        <div data-type="label" class="cell">Plots</div>
    </div>
    <div style="position:relative;z-index:1000">
        <?
            if(preg_match('/aussen-bio.php/', $_SERVER['PHP_SELF'])) {
        ?>
        <div data-type="button" data-url="aussen-pollen.php" data-icon="fa-pagelines"></div>
        <div data-type="label" class="cell">Pollen</div>
        <?
            } else {
        ?>
        <div data-type="button" data-url="aussen-bio.php" data-icon="fa-smile-o"></div>
        <div data-type="label" class="cell">Biowetter</div>
        <?
            }
        ?>
    </div>
</div>