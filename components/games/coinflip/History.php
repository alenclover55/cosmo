<div class="flex items-stretch gap-4 coinflip-history">
    <div class="flex-1 flex flex-col rounded-[1.25rem] overflow-hidden relative shadow-[0_0_35px_rgba(0,0,0,0.1)]">
        <div x-ref="history" class="relative z-[1] px-2 py-3 w-full h-full rounded-[1.25rem] bg-[#41496B]/[0.25] border border-[#41496B]/[0.5] flex min-[861px]:flex-col items-stretch justify-center">
            <div class="swiper-wrapper !flex items-stretch">
                <template x-for="(item, index) in coeffs" :key="index">
                    <div class="swiper-slide !h-auto flex items-center justify-center group/item opacity-30 transition-all duration-300 [&.active]:opacity-100 [&.played]:opacity-100" x-bind:class="{'!opacity-100': item.status === 'rocket' || item.status === 'asteroid', 'active': item.status === 'active'}">
                        <div class="w-full flex flex-col items-center text-center font-semibold gap-1.5">
                            <template x-if="item.status === null || item.status === 'active'">
                                <img src="assets/images/games/coinflip/hidden.svg" class="max-w-[2.625rem]" alt="">
                            </template>
                            <template x-if="item.status === 'rocket'">
                                <img src="assets/images/games/coinflip/rocket.svg" class="max-w-[2.625rem]" alt="">
                            </template>
                            <template x-if="item.status === 'asteroid'">
                                <img src="assets/images/games/coinflip/asteroid.svg" class="max-w-[2.625rem]" alt="">
                            </template>
                            <span x-text="'x' + item.x"></span>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <div class="absolute left-0 top-0 w-[4.688rem] h-[4.688rem] rounded-full bg-[#0083E1] blur-[60px] animate-[blurEllipse_3s_infinite_alternate]"></div>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 w-[4.688rem] h-[4.688rem] rounded-full bg-[#003FE1] blur-[60px] animate-[blurEllipse_6s_0.5s_infinite_alternate]"></div>
        <div class="absolute right-0 bottom-0 w-[4.688rem] h-[4.688rem] rounded-full bg-[#00ABE1] blur-[60px] animate-[blurEllipse_4s_1s_infinite_alternate]"></div>
    </div>
    <div 
        class="bg-[#FFAC1A]/[0.15] border-[.125rem] gap-1.5 border-[#FFAC1A] flex flex-col justify-between p-2 rounded-3xl"
        x-data="{
            balance: <?=$bonusCoinflip?>,
            init() {
                $.post('api/coinflip/coinflipController.php', {
                    type: 'getBonusCoinflip'
                }).done(data => {
                    data = $.parseJSON(data)
                    if(data.success == true) {
                        this.balance = data.bonusCoinflip
                        setTimeout(() => {
                            this.init();
                        }, 10000)
                    }
                });
            }
        }" x-init="init">
        <div class="flex items-center gap-4 px-3">
            <img src="assets/images/crown.svg" class="shrink-0 max-w-[3rem]">
            <div class="flex flex-col *:leading-[100%] gap-1">
                <span class="text-[#FFAC1A] font-semibold">Джекпот</span>
                <span class="text-xl font-semibold" x-text="balance + ' ₽'"><?=$bonusCoinflip?></span>
            </div>
        </div>
        <button type="button" aria-label="Информация" role="button" data-tippy-content="Соберите серию из 10 побед и выиграйте банк джекпота. В банк отчисляется 5% от суммы ставки." class="tooltip w-full text-xs font-bold py-1 px-2 bg-white/[0.06] rounded-xl hover:bg-[#FFAC1A]/[0.3] hover:text-white transition-all duration-300">Что это такое?</button>
    </div>
</div>