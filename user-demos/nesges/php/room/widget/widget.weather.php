<style>
    div.weather td {
        padding:2px !important;
        text-align:left;
        white-space:nowrap;
    }
    div.weather div[data-type=label] {
        display:inline;
        font-weight:bold;
        white-space:normal;
    }
</style>
<div class="container weather">
    <header>
        <div data-type="label" 
            data-device="Wetter"
            data-get="city"
            style="display:inline"></div>
    </header>
    <table width="100%">
        <tr>
            <td rowspan="5" style="text-align:center;vertical-align:top">
                <div data-type="weather" 
                    data-device="Wetter"
                    data-get="condition"
                    style="font-size:220%"></div>
                    <br>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="condition"
                    style="font-size:90%"></div>
            </td>
            
            <td>Temp:</td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="temperature"
                    data-limits="[-50,0,10,25,30,40]"
                    data-colors='["#9999ff","#ffbdff","#aa6900","#ff6900","#ff3333","#ff0000"]'
                    data-unit=" °C"></div>
            </td>
            
        </tr>
        <tr>
            <td>Feucht:</td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="humidity"
                    data-limits="[0,40,60]"
                    data-colors='["#9999ff","#aa6900","#ff6900"]'
                    data-unit=" %"></div>
            </td>
        </tr>
        <tr>
            <td>Wind:</td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="wind"
                    data-unit="km/h"
                    data-limits="[0,        19,       28,       38,       49,       74,       102,      117]"
                    data-colors='["#ffffff","#dddddd","#aa6900","#aa6900","#ff9999","#ff6666","#ff3333","#ff0000"]'
                    style="display:inline"></div>
                <small>aus</small> <div data-type="label" 
                    data-device="Wetter"
                    data-get="wind_condition"
                    data-part="2"></div>
            </td>
        </tr>
        <tr>
            <td>Druck:</td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="pressure"
                    data-unit=" hPa"
                    data-limits="[0,950,1000]"
                    data-colors='["#ff9999","#aa6900","#9999ff"]'></div>
                 <div data-type="label" 
                    data-device="Wetter"
                    data-get="pressure_trend_sym"></div>
            </td>
        </tr>
        <tr>
            <td>Sicht:</td>
            <td>
                <div data-type="label" 
                    data-device="Wetter"
                    data-get="visibility"
                    data-unit=" km"></div>
            </td>
        </tr>
    </table>
</div>