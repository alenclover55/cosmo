<div class="flex items-stretch px-4 pt-4 mines-history -translate-y-[1rem] opacity-0 gap-2 mask-right" x-ref="history">
    <div class="swiper-wrapper">
        <template x-for="(item, index) in coeffMinesList" :key="index">
            <div class="swiper-slide mines-history-item flex items-center group/item" x-bind:class="{'active': item.status === 'active', 'win': item.status === 'win', 'lose': item.status === 'lose' }">
                <div class="bg-[#2a2b3c] px-4 rounded-2xl h-[4.063rem] flex items-center gap-4 justify-between w-[90%] border border-2 border-transparent group-[.win]/item:border-[#3dcb3d] group-[.active]/item:border-blue group-[.lose]/item:border-[#ff3535]">
                    <div class="flex flex-col *:leading-[100%] gap-1.5">
                        <span class="text-sm font-medium text-[#8f91bf] group-[.win]/item:text-[#3dcb3d] group-[.active]/item:text-blue group-[.lose]/item:text-[#ff3535]" x-text="(index + 1) + ' шаг'"></span>
                        <span class="text-lg font-bold" x-text="'x' + item.x"></span>
                    </div>
                    <div class="w-6 h-6 flex items-center justify-center text-white text-sm font-bold relative">
                        <span class="relative z-[1]" x-text="index + 1"></span>
                        <div class="absolute left-0 top-0 w-full h-full rounded-md bg-[#484968] group-[.win]/item:bg-[#3dcb3d] group-[.active]/item:bg-blue group-[.lose]/item:bg-[#ff3535] -skew-x-[12deg]"></div>
                    </div>
                </div>
                <div class="w-[10%] h-[4px] bg-[#2a2b3c] group-[.win]/item:bg-[#3dcb3d] group-[.active]/item:bg-blue group-[.lose]/item:bg-[#ff3535] group-last/item:hidden"></div>
            </div>
        </template>
    </div>
</div>