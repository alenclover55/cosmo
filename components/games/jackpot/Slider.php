<div class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 w-full pointer-events-none min-[926px]:mt-[4.375rem] max-[925px]:[&:not(.winner)]:mt-[6rem] max-[925px]:[&.winner]:mt-[2rem] max-[925px]:transition-all max-[925px]:duration-300" x-bind:class="{'pointer-events-auto': state === 'rolling', 'winner': winner}"> 
    <div class="flex flex-col items-center w-full gap-5" x-show="state === 'rolling'" x-cloak x-transition:leave="transition-all duration-[0s]" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-[1rem]" x-transition:enter="transition-all duration-[2s]" x-transition:enter-start="opacity-0 -translate-y-[1rem]" x-transition:enter-end="opacity-100 translate-y-0">
        <img src="assets/images/games/jackpot/cursor.svg" class="absolute left-1/2 -translate-x-1/2 -top-6 z-[1] w-[2.063rem] h-[2.5rem]" alt="">
        <div class="mask-left flex w-full relative min-[1625px]:h-[100px] h-[75px]">
            <div class="w-full flex relative h-full mask-right">
                <div class="max-w-[1920px] flex items-stretch absolute left-1/2 -translate-x-1/2 jackpot-wrapper">
                    <div class="flex animate-event" id="jackpot-wheel">
                        <template x-for="(item, index) in avatars" :key="index">
                            <div :id="index" class="jackpot-avatar ml-[4px] min-[1625px]:min-w-[100px] min-[1625px]:h-[100px] min-w-[75px] h-[75px] rounded-lg overflow-hidden [&.win]:border-[.25rem] [&.win]:border-[#67C8FF]" x-bind:class="{'win': item.win}">
                                <img :src="item" class="w-full h-full object-cover" alt="">
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center min-h-[8.75rem]">
            <div class="flex flex-col items-center gap-2" x-show="winner" x-cloak x-transition:leave="transition-all duration-[0s]" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-[1rem]" x-transition:enter="transition-all duration-[1s]" x-transition:enter-start="opacity-0 translate-y-[1rem]" x-transition:enter-end="opacity-100 translate-y-0">
                <span class="font-bold text-lg">Победитель</span>
                <div class="flex items-center gap-4 justify-between pl-1.5 pr-4 py-1.5 rounded-xl bg-[#7b90e9]/[0.1] backdrop-blur-[30px]">
                    <div class="flex items-center gap-3">
                        <img :src="winner ? winner.avatar : ''" class="w-[3rem] h-[3rem] object-cover rounded-full">
                        <div class="flex flex-col *:leading-[100%] gap-1">
                            <span class="text-sm" x-text="winner ? winner.username : ''"></span>
                            <span class="text-xs font-semibold text-[#B7C1F1]" x-text="winner ? winner.chance + '%' : ''">0%</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 py-0.5 px-2 rounded-full text-sm border border-[#7b90e9]/[0.25]">
                        <span x-text="winner ? parseDecimals(winner.sum) : ''">0.00</span>
                        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                    </div>
                </div>
                <span class="font-medium text-xs text-[#6672a5]">Победный билет: <span x-text="'#' + winner.ticket">#0</span></span>
            </div>
        </div>
    </div>
</div>