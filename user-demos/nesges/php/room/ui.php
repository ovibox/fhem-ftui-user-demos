<?
    include('../../secrets.php');
    
    include_once("template/template.button.php");
    include_once("template/template.milight.php");
    include_once("template/template.light.php");
    include_once("template/template.pc.php");
    include_once("template/template.its150.php");
    include_once("template/template.kodi.php");
    include_once("template/template.klima.php");
    include_once("template/template.pollen.php");
    include_once("template/template.weathermap.php");
    include_once("template/template.weatherforecast.php");
    include_once("template/template.battery.php");
    include_once("template/template.kodi-streamradio.php");
    include_once("template/template.mdp.php");

    $ftui="../fhem-tablet-ui/www/tablet/";

    class UI {
        function __construct($fhemweb_url='/fhem', $longpoll=1, $widget_base_width=120, $widget_base_height=131, $daydream=0) {
            global $ftui;
            
            $this->fhemweb_url = $fhemweb_url;
            $this->longpoll = $longpoll;
            $this->widget_base_width = $widget_base_width;
            $this->widget_base_height = $widget_base_height;
            $this->daydream=$daydream;
?>
<!doctype html>
<html>
<head>
    <title>WOPR :: FTUI 
    <?
        $title = basename($_SERVER['PHP_SELF']);
        if($title != 'index.php') {
            print " :: ".ucwords(preg_replace('/-/', ' ', preg_replace('/\.php$/', '', $title)));
        }
    ?>
    </title>
    <?        
        if ($_SERVER['REMOTE_ADDR'] == '192.168.178.88') {
            // monitroid
            ?><meta name="viewport" content="width=device-width, initial-scale=1.15, maximum-scale=1.15 user-scalable=no"><?
        } else if ($_SERVER['REMOTE_ADDR'] == '192.168.178.49' || $_SERVER['REMOTE_ADDR'] == '2003:7a:cf25:f700:4b3:2521:7e23:700a' ) {
            // iPad
            ?><meta name="viewport" content="width=device-width, initial-scale=1.1, maximum-scale=1.1 user-scalable=no"><?
        } else if ($_SERVER['REMOTE_ADDR'] == '192.168.178.51') {
            // handy
            ?><meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes"><?
        } else if ($_SERVER['REMOTE_ADDR'] == '192.168.178.23' || $_SERVER['REMOTE_ADDR'] == '192.168.178.50') {
            // MIST || WATER
            ?>
            <style type="text/css">
                div.gridster {
                     zoom: 1.2;
                     -moz-transform: scale(1.2);
                     -moz-transform-origin: 0 0;
                }
            </style>
            <?  
        } else {
            ?><meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.1 user-scalable=yes"><?
            //print "<pre>";
            //print_r($_SERVER);
            //print "</pre>";
        }
    ?>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="widget_base_width" content="<?=$this->widget_base_width?>">
    <meta name="widget_base_height" content="<?=$this->widget_base_height?>">
    <meta name="fhemweb_url" content="<?=$this->fhemweb_url?>">
    <meta name="longpoll" content="<?=$this->longpoll?>">
    <meta name="request_cache" content="100">
    <meta name="gridster_disable" content="1">
    <meta name="widget_dir" content="../Widgets-for-fhem-tablet-ui/js">
    <meta name="debug" content="0">
    
    <link rel="stylesheet" href="<?= $ftui ?>lib/jquery.gridster.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>css/fhem-tablet-ui.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/openautomation.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/fhemSVG.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/jquery.toast.min.css">
    <link rel="stylesheet" href="<?= $ftui ?>lib/powerange.min.css" />
    <link rel="stylesheet" href="../css/wopr.css">
    
    <script type="text/javascript" src="../pgm2/jquery.min.js"></script>
    <script type="text/javascript" src="../pgm2/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="../css/theme/amber/jquery-ui.structure.css" />
    <link rel="stylesheet" href="../css/theme/amber/jquery-ui.theme.css" />
    <link rel="stylesheet" href="../css/theme/amber/ftui.css" />
    
    <link rel="stylesheet" href="../fonts/nesges/style.css">
    
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.gridster.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.knob.mod.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.toast.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/fa-multi-button.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/powerange.min.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>lib/jquery.circlemenu.js"></script>
    
    <script type="text/javascript" src="../js/subtype-defaults.js"></script>
    <script type="text/javascript" src="<?= $ftui ?>js/fhem-tablet-ui.js"></script>

    <script type="text/javascript" src="../js/colors.js"></script>
<?
            if($daydream) {
?>
    <meta name="daydream_starttime" content="1800000">
    <meta name="daydream_slowdown" content="10000">
    
    <script type="text/javascript" src="../js/daydream.js"></script>
<?
            }
            if ($_SERVER['REMOTE_ADDR'] == '192.168.178.88') {
?>
    <!--script type="text/javascript" src="../js/bubbles.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bubbles.init(1800000,-5,250);
        });
        $(document).mousemove(function(event) {
            bubbles.restart();
        });
        $(document).click(function(event) {
            bubbles.restart();
        });
    </script-->
<?
            }
?>
</head>
<body>
    <div data-type="clicksound"
        data-sound='["ion-tap", "ion-water-droplet-2", "ion-button-tiny", "ion-cd-tray", "ion-water-droplet-3"]'
        data-bind-to='["+knob", "+circlemenu-outer", "+button", "+circlemenu-center", "+slider"]'
        data-length='[200,300,200,1400,200]'
        data-volume="70"
        ></div>
        
        <script type="text/javascript" src="<?= $ftui ?>js/widget_clicksound.js"></script>
        <script type="text/javascript" src="<?= $ftui ?>js/widget_famultibutton.js"></script>
    <div class="gridster">
<?
        }


        function __destruct() {
?>
    </div>
</body>
</html>
<?
        }
    }
?>
