<div class="relative min-[926px]:w-[32rem] min-[926px]:h-[24rem] min-[391px]:w-[25rem] min-[391px]:h-[18rem] w-[20rem] h-[14rem]">
    <div class="absolute left-0 top-0 w-full h-full">
        <div class="absolute left-0 top-0 w-full h-full group-[:not(.disable-animations)]/body:animate-[upgradeFly_1s_alternate_infinite]" x-bind:class="{'animate-[upgradeFly_0.25s_alternate_infinite]': state === 'roll' }">
            <div class="absolute left-0 top-0 absolute w-full h-full transition-all duration-[500ms]" x-bind:class="{'opacity-0': state !== 'default' && state !== 'roll'}">
                <img src="assets/images/games/upgrade/3d/default/shadows.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1] group-[:not(.disable-animations)]/body:animate-[upgradeShadows_0.8s_infinite_alternate]" x-bind:class="{'animate-[upgradeShadows_0.1s_infinite_alternate]': state === 'roll' }" alt="">
                <img src="assets/images/games/upgrade/3d/default/model.png" class="absolute left-0 top-0 w-full h-full object-contain" alt="">
            </div>
            <div class="absolute left-0 top-0 absolute w-full h-full opacity-0 transition-all duration-[500ms]" x-bind:class="{'!opacity-100': state === 'lose'}">
                <img src="assets/images/games/upgrade/3d/lose/shadows.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1] group-[:not(.disable-animations)]/body:animate-[upgradeShadows_0.8s_infinite_alternate]" x-bind:class="{'animate-[upgradeShadows_0.1s_infinite_alternate]': state === 'roll' }" alt="">
                <img src="assets/images/games/upgrade/3d/lose/model.png" class="absolute left-0 top-0 w-full h-full object-contain" alt="">
            </div>
            <div class="absolute left-0 top-0 absolute w-full h-full opacity-0 transition-all duration-[500ms]" x-bind:class="{'!opacity-100': state === 'win'}">
                <img src="assets/images/games/upgrade/3d/win/shadows.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1] group-[:not(.disable-animations)]/body:animate-[upgradeShadows_0.8s_infinite_alternate]" x-bind:class="{'animate-[upgradeShadows_0.1s_infinite_alternate]': state === 'roll' }" alt="">
                <img src="assets/images/games/upgrade/3d/win/model.png" class="absolute left-0 top-0 w-full h-full object-contain" alt="">
            </div>
        </div>
        <div class="absolute w-full flex justify-center left-1/2 font-['Roboto_Condensed'] font-bold *:leading-[100%] -translate-x-1/2 min-[926px]:-top-16 min-[426px]:-top-8 text-[calc(90px_+_(140_-_90)_*_((100vw_-_320px)_/_(990_-_320)))] z-[2]">
            <span x-text="chance + '%'" x-show="!winValue" class="leading-[100%] flex upgrade-result">50%</span>
            <span x-text="winValue ? winValue : '0.00%'" x-show="winValue" x-cloak class="leading-[100%] flex upgrade-result" x-bind:class="{'animate-[upgradeScaleProcent_0.5s_alternate_infinite]': state === 'roll', 'lose': state === 'lose', 'win': state === 'win' }">50%</span>
        </div>
        <div class="absolute left-0 -bottom-7 w-full bg-[#08111e] h-[7.25rem] rounded-[50%] -z-[1] group-[:not(.disable-animations)]/body:animate-[upgradeFlyShadow_1s_infinite_alternate]" x-bind:class="{'animate-[upgradeFlyShadow_0.25s_infinite_alternate]': state === 'roll' }"></div>
    </div>
    <div class="w-full h-full absolute left-0 top-0">
        <template x-for="(item, index) in dots" :key="index">
            <div class="upgrade-dot absolute top-1/2 -translate-y-1/2 bg-[#8fc2ff]/[0.2] backdrop-blur-[.938rem] rounded-[50%] overflow-hidden group/item text-blue" x-bind:class="{'active': item === 1, '!text-[#24ff7d] active': state === 'win', '!text-[#ff3650] active': state === 'lose'}">
                <div class="absolute left-0 top-0 w-full h-full bg-current rounded-[50%] opacity-0 group-[.active]/item:opacity-100"></div>
                <div class="absolute left-0 top-0 w-full h-full bg-current rounded-[50%] opacity-0 group-[.active]/item:opacity-70 blur-[.5rem] scale-[1.1]"></div>
            </div>
        </template>
    </div>
</div>