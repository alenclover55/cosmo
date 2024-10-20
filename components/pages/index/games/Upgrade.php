<template x-if="animations">
    <button 
        class="relative bg-gradient-to-br from-[#1B2138] to-[#2F3754] from-[50%] grid min-[551px]:before:pt-[100%] before:pt-[50%] rounded-xl overflow-hidden maskedLink transition-all duration-300 hover:-translate-y-[0.25rem]"
        data-href="/upgrade"
        aria-label="Апгрейд" role="button"
        type="button">
        <div class="absolute left-0 top-0 w-full h-full p-2 pointer-events-none">
            <div class="absolute left-0 top-0 w-full h-full z-[1] bg-gradient-to-b from-transparent to-[#2F3754] from-[40%] z-[3]"></div>
            <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                <div class="relative min-[551px]:w-[22rem] min-[551px]:h-[16rem] w-[16rem] h-[12rem]">
                    <div class="absolute left-0 top-0 w-full h-full">
                        <div class="absolute left-0 top-0 w-full h-full animate-[upgradeFly_1s_alternate_infinite] z-[2]">
                            <div class="absolute left-0 top-0 absolute w-full h-full transition-all duration-[500ms]">
                                <img src="assets/images/games/upgrade/3d/default/shadows.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1] animate-[upgradeShadows_0.8s_infinite_alternate]" alt="">
                                <img src="assets/images/games/upgrade/3d/default/model.png" class="absolute left-0 top-0 w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="absolute left-0 -bottom-7 w-full bg-[#131521] h-[7.25rem] rounded-[50%] z-[1] animate-[upgradeFlyShadow_1s_infinite_alternate]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-0 top-0 w-full h-full p-[1.25rem_1.563rem] flex items-end text-2xl font-bold z-[4] pointer-events-none">
            <span>Апгрейд</span>
        </div>
    </button>
</template>

<template x-if="!animations">
    <button 
        class="relative bg-gradient-to-br from-[#1B2138] to-[#2F3754] from-[50%] grid min-[551px]:before:pt-[100%] before:pt-[50%] rounded-xl overflow-hidden maskedLink transition-all duration-300 hover:-translate-y-[0.25rem]"
        data-href="/upgrade"
        type="button">
        <div class="absolute left-0 top-0 w-full h-full p-2 pointer-events-none">
            <div class="absolute left-0 top-0 w-full h-full z-[1] bg-gradient-to-b from-transparent to-[#2F3754] from-[40%] z-[3]"></div>
            <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                <div class="relative min-[551px]:w-[22rem] min-[551px]:h-[16rem] w-[16rem] h-[12rem]">
                    <div class="absolute left-0 top-0 w-full h-full">
                        <div class="absolute left-0 top-0 w-full h-full z-[2]">
                            <div class="absolute left-0 top-0 absolute w-full h-full transition-all duration-[500ms]">
                                <img src="assets/images/games/upgrade/3d/default/shadows.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1]" alt="">
                                <img src="assets/images/games/upgrade/3d/default/model.png" class="absolute left-0 top-0 w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="absolute left-0 -bottom-7 w-full bg-[#131521] h-[7.25rem] rounded-[50%] z-[1]"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-0 top-0 w-full h-full p-[1.25rem_1.563rem] flex items-end text-2xl font-bold z-[4] pointer-events-none">
            <span>Апгрейд</span>
        </div>
    </button>
</template>