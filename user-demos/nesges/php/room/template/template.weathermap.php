<?
    function weathermap($id) {
        $year = gmdate("Y");
        $month = gmdate("m");
        $day = gmdate("d");
        $hour = gmdate("H");
        
        switch($id) {
            case "moon":
                $url = "http://api.usno.navy.mil/imagery/moon.png?sequence=6";
                break;
            case "meteogram":
                $url = "http://www.yr.no/place/Germany/Rhineland-Palatinate/L%C3%BCnebach/avansert_meteogram.png"; 
                break;
            case "austro_sat":      $url = "https://www.austrocontrol.at/jart/met/radar/satloop.gif"; break;
            case "kontor_de":       $url = "http://img.wetterkontor.de/karten/deutschland0.jpg"; break;
            case "dwd_de":          
                $url = "http://www.dwd.de/wundk/wetter/de/Deutschland.jpg"; 
                break;
            case "dwd_de_nacht":    
                $url = "http://www.dwd.de/wundk/wetter/de/Deutschland_heute_nacht.jpg"; 
                break;
            case "dwd_de_morgen":   
                $url = "http://www.dwd.de/wundk/wetter/de/Deutschland_morgen_spaet.jpg"; 
                break;
            case "dwd_radar":       
                $url = "http://www.dwd.de/wundk/radar/Radarfilm_WEB_DL.gif"; 
                break;
            case "wetteronline_radar":
                $url = "http://www.wetteronline.de/?pid=p_radar_map&amp;ireq=true&amp;src=radar/vermarktung/p_radar_map_forecast/forecastLoop/DL/latestForecastLoop.gif";
                break;
            case "wetteronline_wolken":
                $url = "http://www.wetteronline.de/?pid=p_sat_image&amp;ireq=true&amp;src=sat/vermarktung/p_sat_image/geostationary/createImages/wom/$year/$month/$day/CloudMask/DL/".$year.$month.$day.$hour."00_DL_CloudMask.jpeg&amp;version=0";
                break;
            case "wetteronline_blitze":
                $url = "http://www.wetteronline.de/?ireq=true&amp;pid=p_blitze_map&amp;src=blitze/vermarktung/p_blitze_map/www/Track/DL/green_flat/DL_Track.gif";
                break;
            case "wetteronline_pegel":
                $url = "http://www.wetteronline.de/?pid=p_pegel_data&amp;src=pegel/vermarktung/products/pegelmap/de/pegelkarte-deutschland.gif";
                break;
            case "wetteronline_bio":
                $url = "http://www.wetteronline.de/?fcdatstr=".$year.$month.$day."&amp;gid=DL&amp;iid=DL&amp;img=true&amp;pid=p_city_bio&amp;sid=Map";
                break;
            case "wetteronline_uv":
                $url = "http://www.wetteronline.de/?fcdatstr=".$year.$month.$day."&amp;gid=DL&amp;iid=DL&amp;img=true&amp;pid=p_city_uv&amp;sid=Map";
                break;
            case "wetteronline_pollen":
                $url = "http://www.wetteronline.de/?fcdatstr=".$year.$month.$day."&amp;gid=DL&amp;iid=DL&amp;img=true&amp;paraid=Max&amp;pid=p_city_pollen&amp;sid=Map";
                break;
        }
        return $url;
    }
?>