<!-- css in wopr.css -->       
<div class="centered container weather">
    <table>
        <tr>
            <td colspan="2">
                <a href="aussen.php">
                    <div data-type="weather" 
                        data-device="Wetter"
                        data-get="condition"
                        data-imageset="kleinklima"
                        style="width:110px;padding:0;margin:0;margin-bottom:-6px;"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="aussen.php">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="condition"
                        style="font-size:90%"></div>
                </a>
                <div style="height:40px;"></div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_TEMP&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="1" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_TEMP&nonav&dark&nolegend")?>">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="temperature"
                        data-limits="[-50,0,10,25,30,40]"
                        data-colors='["#9999ff","#ffbdff","#aa6900","#ff6900","#ff3333","#ff0000"]'
                        data-unit=" °C"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_HUM&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="fa-tint" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_HUM&nonav&dark&nolegend")?>">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="humidity"
                        data-limits="[0,40,60]"
                        data-colors='["#9999ff","#aa6900","#ff6900"]'
                        data-unit=" %"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_CHOFRAIN&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="8" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_CHOFRAIN&nonav&dark&nolegend")?>">
                    <div data-type="label" 
                        data-device="WETTER_PROPLANTA"
                        data-get="now_chOfRain"
                        data-unit=" %"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_WINDSPEED&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="9" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_WINDSPEED&nonav&dark&nolegend")?>">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="wind_speed"
                        data-unit=" km/h"
                        data-limits="[0,        19,       28,       38,       49,       74,       102,      117]"
                        data-colors='["#ffffff","#dddddd","#aa6900","#aa6900","#ff9999","#ff6666","#ff3333","#ff0000"]'
                        style="display:inline"></div>
                </a>
            </td>
        </tr>
        <!--tr>
            <td><div data-type="symbol" data-icon="fa-arrows" style="font-size:14px" data-off-color="#aa6900"></td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="wind_condition"
                    data-part="2"></div>
            </td>
        </tr-->
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_PRESSURE&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="fa-cloud-download" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_PRESSURE&nonav&dark&nolegend")?>">
                    <div data-type="symbol" 
                        data-device="Wetter"
                        data-get="pressure_trend_sym"
                        data-get-on='["+", "-"]'
                        data-icons='["fa-chevron-up", "fa-chevron-down"]'
                        style="font-size:12px"></div>
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="pressure"
                        data-unit=" hPa"
                        data-limits="[0,950,1000]"
                        data-colors='["#ff9999","#aa6900","#9999ff"]'></div>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_VIS&nonav&dark&nolegend")?>">
                    <div data-type="symbol" data-icon="fa-binoculars" style="font-size:14px" data-off-color="#aa6900"></div>
                </a>
            </td>
            <td>
                <a href="aussen-iframe.php?content=<?=urlencode("/plots/?p=P_AUSSEN_VIS&nonav&dark&nolegend")?>">
                    <div data-type="label" 
                        data-device="Wetter"
                        data-get="visibility"
                        data-unit=" km"></div>
                </a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="aussen-iframe.php?content=wind_direction_pie"><div style="text-align:center">
                    <div data-type="wind_direction" 
                        data-device="Wetter"
                        data-direction="wind_direction"
                        data-speed="wind_speed"
                        data-size="80"
                        class="cell"
                        style="padding-top:15px"></div>
                </div></a>
            </td>
        </tr>
    </table>
</div>