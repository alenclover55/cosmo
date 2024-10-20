<div 
    class="popup m-[auto_0] relative popup--levels hidden invisible max-w-[32.5rem] w-full overflow-hidden rounded-[.75rem] bg-[#202232] shadow-modal"
    x-bind:class="{'!block !visible': modal === 'levels'}">
    <div class="w-full h-[9.375rem] relative flex items-center">
        <div class="relative px-[1.75rem] z-[2] flex flex-col items-start gap-2">
            <div class="flex flex-col items-start">
                <span class="text-[#B3BBDF] text-base font-[500]">Ваш ранг</span>
                <span class="text-[2rem] font-[600]"><?=$rank?></span>
            </div>
            <span class="text-[#8A91AC] text-sm font-[500]">Совершайте депозиты что-бы повысить уровень. <br> 1 рубль депозита = <span class="text-white">1 XP</span></span>
        </div>
        <div class="absolute left-0 top-0 w-full h-full">
            <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#202232_75%)] z-[1]"></div>
            <img src="assets/images/backgrounds/circle.jpg" class="w-full h-full object-cover" alt="">
        </div>
    </div>
    <div class="flex flex-col px-[1.75rem] pb-[1.75rem] gap-[1.75rem]">
        <div class="rounded-[.5rem] h-[3rem] bg-gradient-to-r from-[#2E3044] from-[50%] to-[#3F425C] p-2 flex items-center justify-between gap-4">
            <div class="flex-1 h-full rounded-[.5rem] bg-[#202232] relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 font-[600] text-base"><?=$perc?>%</span>
                <div class="bg-gradient-to-b from-[#0083E1] from-[25%] to-[#0049B6] h-full rounded-[.5rem] shadow-btn-blue" style="width: <?=$perc?>%;"></div>
            </div>
            <? $xp = round($depositstotal); if ($xp < 10000) {  ?> 
            <svg class="shrink-0 w-4 h-4 text-[#7B7FA7]"><use xlink:href="assets/images/symbols.svg#icon-two-arrows"></use></svg>
            <div class="shrink-0 flex items-center gap-2 uppercase text-sm font-[600] pr-4">
                <img src="assets/images/gift.svg" class="w-[1.75rem] h-[1.75rem]" alt="">
                <span>Подарок</span>
            </div>
            <? } ?>
        </div>
        <div
            class="flex items-stretch gap-3 relative"
            x-data="{ swiper: null }"
            x-init="swiper = new Swiper($refs.container, {
                slidesPerView: 1.5,
                spaceBetween: 12,
                speed: 600,
                navigation: {
                    prevEl: $refs.prev,
                    nextEl: $refs.next
                },
                breakpoints: {
                    414: {
                        slidesPerView: 1.5
                    },
                    355: {
                        slidesPerView: 1.2
                    },
                    0: {
                        slidesPerView: 1.05
                    }
                }
            })"
        >
            <div class="absolute -left-[1.75rem] w-[30%] pointer-events-none top-0 h-full z-[2] bg-gradient-to-r from-[#202232] to-transparent"></div>
            <div class="w-[2.5rem] shrink-0 bg-[#2E3144] rounded-[.5rem] flex flex-col relative z-[3]">
                <button x-ref="prev" class="flex-1 flex items-center justify-center transition-[color] duration-300 text-[#8A91AC] [&:not(.swiper-button-disabled)]:hover:text-white [&.swiper-button-disabled]:pointer-events-none [&.swiper-button-disabled]:opacity-30">
                    <svg class="w-4 h-4 rotate-180"><use xlink:href="assets/images/symbols.svg#icon-arrow-x"></use></svg>
                </button>
                <button x-ref="next" class="flex-1 flex items-center justify-center transition-[color] duration-300 text-[#8A91AC] [&:not(.swiper-button-disabled)]:hover:text-white [&.swiper-button-disabled]:pointer-events-none [&.swiper-button-disabled]:opacity-30">
                    <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-arrow-x"></use></svg>
                </button>
            </div>
            <div class="w-[calc(100%_-_2.5rem)]" x-ref="container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col items-start gap-1.5">
                        <div class="w-full rounded-[.5rem] bg-[#2E3144] flex flex-col p-4 gap-2">
                            <div class="flex items-center justify-between text-base font-[600]">
                                <span>Новичок</span>
                                <span class="text-[#8A91AC] text-[.813rem]"><? $xp = round($depositstotal); if ($xp > 1000) { $xp = '1000'; } echo $xp; ?> из 1000XP</span>
                            </div>
                            <div class="flex flex-wrap gap-2 text-[.813rem] [&_span]:py-0.5 [&_span]:px-1.5 [&_span]:font-[500] [&_span]:rounded-[.188rem] [&_span]:bg-[#444865]">
                                <img src="assets/images/gift.svg" class="w-5 h-5" alt="">
                                <span x-text="parseDecimals(25) + ' ₽'"></span>
                                <span>+2% к кэшбеку</span>
                            </div>
                        </div>
                       <? $xp = round($depositstotal); if ($xp > 1000 and $xp < 5000) {  ?> 
                            <span class="text-xs font-[600] text-[#8A91AC]">текущий</span>
                       <? } ?>
                    </div>
                    <div class="swiper-slide flex flex-col items-start gap-1.5">
                        <div class="w-full rounded-[.5rem] bg-[#2E3144] flex flex-col p-4 gap-2">
                            <div class="flex items-center justify-between text-base font-[600]">
                                <span>Опытный</span>
                                <span class="text-[#8A91AC] text-[.813rem]"><? $xp = round($depositstotal); if ($xp > 5000) { $xp = '5000'; } if ($xp < 1000) { $xp = '0'; } echo $xp; ?> из 5000XP</span>
                            </div>
                            <div class="flex flex-wrap gap-2 text-[.813rem] [&_span]:py-0.5 [&_span]:px-1.5 [&_span]:font-[500] [&_span]:rounded-[.188rem] [&_span]:bg-[#444865]">
                                <img src="assets/images/gift.svg" class="w-5 h-5" alt="">
                                <span x-text="parseDecimals(50) + ' ₽'"></span>
                                <span>+4% к кэшбеку</span>
                            </div>
                        </div>
                        <? $xp = round($depositstotal); if ($xp > 5000 and $xp < 10000) {  ?> 
                            <span class="text-xs font-[600] text-[#8A91AC]">текущий</span>
                        <? } ?>
                    </div>
                    <div class="swiper-slide flex flex-col items-start gap-1.5">
                        <div class="w-full rounded-[.5rem] bg-[#2E3144] flex flex-col p-4 gap-2">
                            <div class="flex items-center justify-between text-base font-[600]">
                                <span>Игроман</span>
                                <span class="text-[#8A91AC] text-[.813rem]"><? $xp = round($depositstotal); if ($xp > 10000) { $xp = '10000'; } if ($xp < 5000) { $xp = '0'; } echo $xp; ?> из 10000XP</span>
                            </div>
                            <div class="flex flex-wrap gap-2 text-[.813rem] [&_span]:py-0.5 [&_span]:px-1.5 [&_span]:font-[500] [&_span]:rounded-[.188rem] [&_span]:bg-[#444865]">
                                <img src="assets/images/gift.svg" class="w-5 h-5" alt="">
                                <span x-text="parseDecimals(100) + ' ₽'"></span>
                                <span>+6% к кэшбеку</span>
                            </div>
                        </div>
                        <? $xp = round($depositstotal); if ($xp > 10000 and $xp < 100000) {  ?> 
                            <span class="text-xs font-[600] text-[#8A91AC]">текущий</span>
                        <? } ?>
                    </div>
                    <div class="swiper-slide flex flex-col items-start gap-1.5">
                        <div class="w-full rounded-[.5rem] bg-[#2E3144] flex flex-col p-4 gap-2">
                            <div class="flex items-center justify-between text-base font-[600]">
                                <span>Легенда</span>
                                <span class="text-[#8A91AC] text-[.813rem]"><? $xp = round($depositstotal); if ($xp > 100000) { $xp = '100000'; } if ($xp < 10000) { $xp = '0'; } echo $xp; ?> из 100000XP</span>
                            </div>
                            <div class="flex flex-wrap gap-2 text-[.813rem] [&_span]:py-0.5 [&_span]:px-1.5 [&_span]:font-[500] [&_span]:rounded-[.188rem] [&_span]:bg-[#444865]">
                                <img src="assets/images/gift.svg" class="w-5 h-5" alt="">
                                <span x-text="parseDecimals(250) + ' ₽'"></span>
                                <span>+8% к кэшбеку</span>
                            </div>
                        </div>
                        <? $xp = round($depositstotal); if ($xp > 100000 and $xp < 200000) {  ?> 
                            <span class="text-xs font-[600] text-[#8A91AC]">текущий</span>
                        <? } ?>
                    </div>
                    <div class="swiper-slide flex flex-col items-start gap-1.5">
                        <div class="w-full rounded-[.5rem] bg-[#2E3144] flex flex-col p-4 gap-2">
                            <div class="flex items-center justify-between text-base font-[600]">
                                <span>Нвутимен</span>
                                <span class="text-[#8A91AC] text-[.813rem]"><? $xp = round($depositstotal); if ($xp > 200000) { $xp = '200000'; } if ($xp < 100000) { $xp = '0'; } echo $xp; ?> из 200000XP</span>
                            </div>
                            <div class="flex flex-wrap gap-2 text-[.813rem] [&_span]:py-0.5 [&_span]:px-1.5 [&_span]:font-[500] [&_span]:rounded-[.188rem] [&_span]:bg-[#444865]">
                                <img src="assets/images/gift.svg" class="w-5 h-5" alt="">
                                <span x-text="parseDecimals(500) + ' ₽'"></span>
                                <span>+15% к кэшбеку</span>
                            </div>
                        </div>
                        <? $xp = round($depositstotal); if ($xp > 200000) {  ?> 
                            <span class="text-xs font-[600] text-[#8A91AC]">текущий</span>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button @click="modalClose()" class="popup__close absolute right-2 z-[1] top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
    </button>
</div>