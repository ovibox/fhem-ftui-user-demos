<?
    include("ui.php");
    $ui = new UI();
?>
<ul>
    <li data-row="1" data-col="1" data-sizex="1" data-sizey="4">
        <header>SYSTEM</header>
    	<? include("widget/widget.rooms.php") ?>
    </li>
    
    <li data-row="1" data-col="2" data-sizex="1" data-sizey="4">
        <header>I</header>
        <div class="subheader">Licht</div>
        <? it("ITS150_I1") ?>
        <div class="subheader">Milight</div>
        <? it("ITS150_I2") ?>
        <div class="subheader">Milight Weiss</div>
        <? it("ITS150_I3") ?>
        <div class="subheader">Monitore</div>
        <? it("ITS150_I4") ?>
    </li>
    
    
    <li data-row="1" data-col="3" data-sizex="1" data-sizey="4">
        <header>II</header>
        <div class="subheader">Kodi</div>
        <? it("ITS150_II1", "Play", "Pause") ?>
        <div class="subheader">Kodi</div>
        <? it("ITS150_II2", "Down", "Up") ?>
        <div class="subheader">Kodi</div>
        <? it("ITS150_II3", "Ok", "Back") ?>
        <div class="subheader">Kodi</div>
        <? it("ITS150_II4", "Info", "Full") ?>
    </li>
    
    
    <li data-row="1" data-col="4" data-sizex="1" data-sizey="4">
        <header>III</header>
        <div class="subheader">MCP</div>
        <? it("ITS150_III1", "Play", "Stop") ?>
        <div class="subheader">MCP</div>
        <? it("ITS150_III2", "Vol 0/60", "Vol +10") ?>
        <div class="subheader">MCP</div>
        <? it("ITS150_III3", "Prev", "Next") ?>
        <div class="subheader">MCP - Power</div>
        <? it("ITS150_III4") ?>
    </li>
    
    
    <li data-row="1" data-col="5" data-sizex="1" data-sizey="4">
        <header>IV</header>
        <div class="subheader">Film</div>
        <? it("ITS150_IV1") ?>
        <div class="subheader">Rockantenne</div>
        <? it("ITS150_IV2") ?>
        <div class="subheader">DLF</div>
        <? it("ITS150_IV3") ?>
        <div class="subheader">EBM</div>
        <? it("ITS150_IV4") ?>
    </li>
    
</ul>