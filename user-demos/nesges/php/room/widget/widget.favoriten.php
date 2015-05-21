    <div class="centered">
        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-clock-o" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',600)}" data-icon="" data-off-background-color="#aa6900">10</div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',900)}" data-icon="" data-off-background-color="#aa6900">15</div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',1800)}" data-icon="" data-off-background-color="#aa6900">30</div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice handy" data-icon="fa-mobile" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice monitroid" data-icon="fa-tablet" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="setreading TIMER1 signaldevice fritz" data-icon="fa-phone" data-off-background-color="#9933FF"></div></li>
                    <li><div data-type="push" data-cmd="{pizzatimer('TIMER1',300)}" data-icon="" data-off-background-color="#aa6900">5</div></li>
                </ul>
            </div>
            <div data-type="label" class="cell" data-device="TIMER1" data-get="signaldevice"></div>
        </div>

        <div class="left">
            <div data-type="circlemenu" class="cell circlemenu">
                <ul class="menu">
                    <li><div data-type="symbol" data-icon="fa-check-circle" data-off-color="#aa6900" data-background-icon="fa-circle-thin"></div></li>
                    <li><div data-type="push" data-cmd="{preset('schlafen')}" data-icon="fa-bed" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('kino')}" data-icon="nesges-tv2" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('party')}" data-icon="fa-glass" data-off-background-color="#aa6900"></div></li>
                    <li><div data-type="push" data-cmd="{preset('leave')}" data-icon="nesges-exit" data-off-background-color="#aa6900"></div></li>
                </ul>
            </div>
            <div data-type="label" class="cell">Presets</div>
        </div>
    </div>
