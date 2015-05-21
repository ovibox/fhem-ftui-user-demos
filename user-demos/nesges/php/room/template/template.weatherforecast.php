<?
    function weatherforecast($day) {
        $condition_d        = 'Wetter';
        $condition_r        = 'fc'.($day+1).'_condition';
        $temp_low_d         = 'Wetter';
        $temp_low_r         = 'fc'.($day+1).'_low_c';
        $temp_high_d        = 'Wetter';
        $temp_high_r        = 'fc'.($day+1).'_high_c';
        $chofrain_d         = 'WETTER_PROPLANTA';
        $chofrain_r         = 'fc'.($day).'_chOfRainDay';
        $windspeed_d        = 'WETTER_COM';
        $windspeed_r        = 'fc'.($day).'_wind';
        $winddir_d          = 'WETTER_COM';
        $winddir_r          = 'fc'.($day).'_windDir';
        $winddir_speed_r    = 'fc'.($day).'_wind';
        
?>
            <table>
                <tr>
                    <td colspan="2">
                            <div data-type="weather" 
                                data-device="<?= $condition_d ?>"
                                data-get="<?= $condition_r ?>"
                                data-imageset="kleinklima"
                                style="width:110px;padding:0;margin:0;margin-bottom:-6px;"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                            <div data-type="label" 
                                data-device="<?= $condition_d ?>"
                                data-get="<?= $condition_r ?>"
                                style="font-size:90%"></div>
                        <div style="padding-bottom:40px !important"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                            <div data-type="symbol" data-icon="1" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                    </td>
                    <td>
                            <div data-type="label" 
                                data-device="<?= $temp_low_d ?>"
                                data-get="<?= $temp_low_r ?>"
                                data-limits="[-50,0,10,25,30,40]"
                                data-colors='["#9999ff","#ffbdff","#aa6900","#ff6900","#ff3333","#ff0000"]'
                                data-unit=" °C"
                                  class="inline"></div>
                                -
                            <div data-type="label" 
                                data-device="<?= $temp_high_d ?>"
                                data-get="<?= $temp_high_r ?>"
                                data-limits="[-50,0,10,25,30,40]"
                                data-colors='["#9999ff","#ffbdff","#aa6900","#ff6900","#ff3333","#ff0000"]'
                                data-unit=" °C"
                                class="inline"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                            <div data-type="symbol" data-icon="8" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                    </td>
                    <td>
                            <div data-type="label" 
                                data-device="<?= $chofrain_d ?>"
                                data-get="<?= $chofrain_r ?>"
                                data-unit=" %"></div>
                    </td>
                </tr>
                <?
                    if($day<3) {
                ?>
                <tr>
                    <td>
                            <div data-type="symbol" data-icon="9" class="meteocons" style="font-size:14px" data-off-color="#aa6900"></div>
                    </td>
                    <td>
                            <div data-type="label" 
                                data-device="<?= $windspeed_d ?>"
                                data-get="<?= $windspeed_r ?>"
                                data-unit=" km/h"
                                data-limits="[0,        19,       28,       38,       49,       74,       102,      117]"
                                data-colors='["#ffffff","#dddddd","#aa6900","#aa6900","#ff9999","#ff6666","#ff3333","#ff0000"]'
                                style="display:inline"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div style="text-align:center">
                            <div data-type="wind_direction" 
                                data-device="<?= $winddir_d ?>"
                                data-direction="<?= $winddir_r ?>"
                                data-speed="<?= $winddir_speed_r ?>"
                                data-size="80"
                                class="cell"
                                style="padding-top:85px"></div>
                        </div>
                    </td>
                </tr>
                <?
                }
                ?>
            </table>
<?
    }
?>