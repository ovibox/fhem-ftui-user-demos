<?
    include("ui.php");
    $ui = new UI();
    
    function fb_entry($number) {
?>
        <tr>
            <td>
                <div data-type="label" data-device="FritzBox" data-get="B<?=$number?>" data-part="2"></div>
                <div data-type="label" data-device="FritzBox" data-get="B<?=$number?>" data-part="1"></div>
            </td>
            <td>
                <div data-type="label" data-device="FritzBox" data-get="D<?=$number?>" style="font-size:x-large;color:#aa6900;"></div>
                <div data-type="label" data-device="FritzBox" data-get="C<?=$number?>"></div>
            </td>
            <td class="r"><div data-type="label" data-device="FritzBox" data-get="E<?=$number?>"></div></td>
            <td class="r">
                <div data-type="symbol" 
                    data-device="FritzBox" 
                    data-get="A<?=$number?>"
                    data-get-on='["in_connected","in_notconnected","out_connected","out_notconnected"]'
                    data-icons='["fa-angle-left","fa-angle-left","fa-angle-right","fa-angle-right"]'
                    data-color="#aa6900"
                    data-on-colors='["#aa6900","#aa6900","#505050","#505050"]'
                    data-background-icon="fa-circle-thin"
                    data-on-background-color="#aa6900"
                    data-off-background-color="#aa6900"
                ></div>
                <div data-type="button" 
                    data-device="FritzBox" 
                    data-get="A<?=$number?>"
                    data-icon='fa-phone'
                    data-on-color='#aa6900'
                    data-off-color='#aa6900'
                    data-fhem-cmd='{call(<?=$number?>)}'
                    data-background-icon="fa-circle-thin"
                    data-on-background-color="#aa6900"
                    data-off-background-color="#aa6900"
                ></div>
            </td>
        </tr>
<?        
    }
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="6" data-sizey="4">
        <header>ANRUFE</header>
        <table class="calls">
            <? fb_entry(0) ?>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            <? fb_entry(1) ?>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            <? fb_entry(2) ?>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            <? fb_entry(3) ?>
            <tr><td colspan="4" class="ruler"><div>&nbsp;</div></td></tr>
            <? fb_entry(4) ?>
        </table>
    </li>
</ul>