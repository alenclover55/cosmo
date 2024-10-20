<template x-for="(item, index) in bets.slice().reverse()" :key="index">
    <div class="flex p-2 flex items-center justify-between rounded-xl bg-[#8BA4E5]/[0.15] backdrop-blur-[.938rem] transition-all duration-300 hover:bg-[#8BA4E5]/[0.25]">
        <div class="flex-1 flex items-center gap-2">
            <div class="shrink-0 w-[2.25rem] h-[2.25rem] rounded-full flex items-center justify-center">
                <img :src="item.img" class="w-full h-full rounded-full object-cover" alt="">
            </div>
            <div class="flex flex-col *:leading-[100%] gap-0.5">
                <span class="font-semibold text-white/[0.65] min-[381px]:text-[.688rem] text-[.625rem] whitespace-nowrap"><span x-text="'#' + item.ticket_from + ' - #' + item.ticket_to"></span></span>
                <span class="font-bold text-sm max-w-[6rem] whitespace-nowrap text-ellipsis overflow-hidden" x-text="item.login"></span>
            </div>
        </div>
        <div class="flex-1 flex items-center justify-center">
            <div class="flex flex-col *:leading-[100%] gap-1">
                <span class="font-semibold text-white/[0.65] text-[.688rem]">Шанс</span>
                <span class="font-bold text-sm" x-text="(item.chance).toFixed() + '%'">0%</span>
            </div>
        </div>
        <div class="flex flex-1 justify-end pr-2">
            <div class="flex flex-col items-end gap-0.5">
                <span class="font-semibold text-white/[0.65] text-[.688rem]">Сумма</span>
                <div class="flex items-center *:leading-[100%] gap-1">
                    <span class="font-bold text-sm" x-text="item.amount">0.00</span>
                    <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                </div>
            </div>
        </div>
    </div>
</template>