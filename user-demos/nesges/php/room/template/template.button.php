<?
    function button($id, $url, $icon='fa-power-off', $color='rgb(111,69,0)', $nocell=false) {
?>
<div id="<?=$id?>" data-type="button" data-url="<?=$url?>" data-icon="<?= $icon ?>" data-on-background-color="<?=$color?>" class="<?=($nocell?'':'cell')?>"></div>
<?
    }
    
    function button_fhem($id, $cmd, $icon='fa-power-off', $color='rgb(111,69,0)', $nocell=false) {
        global $ui;
?>
<div id="<?=$id?>" data-type="button" data-fhem-cmd="<?=$cmd?>" data-icon="<?= $icon ?>" data-on-background-color="<?=$color?>" class="<?=($nocell?'':'cell')?>"></div>
<?
    }
?>