<?
    function pollen($type, $container=0, $small=0) {
        if($container) {
            print '<div class="left">';
        }
?>
<div data-type="symbol" data-subtype="POLLEN" data-device="POLLEN" data-get="<?=$type?>"  <?= $small?'style="font-size:18px"':'' ?>></div>
<div data-type="label" <?= $small?'style="font-size:10px"':'' ?>><?=$type?></div>
<?
        if($container) {
            print '</div>';
        }
    }
    
    function biowetter($type, $container=0, $small=0) {
        switch($type) {
            case "Migraene":                $typelabel = "Migr&auml;ne"; break;
            case "Kopfschmerzen":           $typelabel = "Kopf"; break;
            case "Erkaeltungskrankheiten":  $typelabel = "Erk&auml;ltung"; break;
            case "reduz. Schlaftiefe":      $typelabel = "Schlaf"; break;
            case "Reizbarkeit":             $typelabel = "Reizbar"; break;
            case "Psych. Depressionen":     $typelabel = "Depri"; break;
            case "Psychopathie":            $typelabel = "Psycho"; break;
            case "Schizophrenie":           $typelabel = "Schizo"; break;
            case "subj. Beschwerden":       $typelabel = "Beschwerden"; break;
            case "Traumat. Enzephalitis":   $typelabel = "Enzephalitis"; break;
            case "Unfallbereitschaft":      $typelabel = "Unfall"; break;
            case "Hypotoner Kollaps":       $typelabel = "Hyp Kollaps"; break;
            case "Entzuendliche Prozesse":  $typelabel = "Entz&uuml;ndung"; break;
            case "Stumpfschmerz":           $typelabel = "Stumpf"; break;
            case "Rheumatische Beschwerden":$typelabel = "Rheuma"; break;
            case "Reaktionszeit":           $typelabel = "Reaktion"; break;
            case "Herzinfarkt":             $typelabel = "H-Infarkt"; break;
            default: $typelabel = substr($type,0,10); break;
        }
        
        if($container) {
            print '<div class="left">';
        }
?>
<div data-type="symbol" data-subtype="BIOWETTER" data-device="BIOWETTER" data-get="<?=$type?>" <?= $small?'style="font-size:18px"':'' ?>></div>
<div data-type="label" <?= $small?'style="font-size:10px"':'' ?> title="<?=$type?>"><?=$typelabel?></div>
<?
        if($container) {
            print '</div>';
        }
    }
?>