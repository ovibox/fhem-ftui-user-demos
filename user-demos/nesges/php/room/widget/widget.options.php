<script type="text/javascript">			
    $(document).ready(function() {
        var path = document.location.pathname;
        var roomname = "room_index";
        if(path.lastIndexOf('.')>-1) {
            roomname = "options_" + path.substring(path.lastIndexOf('-') + 1, path.lastIndexOf('.'));
        }
        $('head').append('<style type="text/css">#'+roomname+' #bg { color: rgb(170,105,0) !important; }</style>');
    });
</script>
<div class="container">
    <? button('room_index',         'index.php',            'fa-home')          ?>
    <? button('options_light',      'system-light.php',     'fa-lightbulb-o')   ?>
    <? button('options_calls',      'system-calls.php',     'fa-phone')         ?>
    <? button('options_timers',     'system-timers.php',    'fa-clock-o')       ?>
    <? button('options_plots',      'system-plots.php?p=HUMID_ALL',     'fa-line-chart')    ?>
    <? button('options_its150',     'system-its150.php',    'fa-mobile')        ?>
    <? button('options_calendar',   'system-calendar.php',  'fa-calendar')      ?>
    <? button('options_options',    'system-options.php',   'fa-gears')         ?>

    <div style="padding-top:80px;font-size:20px;color:rgb(170,105,0);text-shadow: 0px 0px 3px rgb(42,42,42)" data-type="clock" class="cell"></div>
</div>
