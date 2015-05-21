<?
    $plot = $_GET['p'];
?>
<style>
    #plot_<?=$plot?> #bg {
        color: rgb(170,105,0) !important;
        border: 3px 
    }
</style>
<div class="container">
    <? button('plot_HUMID_ALL',     '?p=HUMID_ALL', 'fa-tint')      ?>
    <? button('plot_VALVE',         '?p=VALVE',     'fa-steam')     ?>
    <? button('plot_SYSMON',        '?p=SYSMON',    'fa-server')    ?>
    <? button('plot_CUL',           '?p=CUL',       'fa-rss')       ?>
    <? button('plot_FRITZ',         '?p=FRITZ',     'fa-globe')     ?>
</div>
