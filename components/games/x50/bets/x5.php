<div class="flex flex-col gap-3">
    <div class="flex flex-col py-3 gap-3 px-4 bg-gradient-to-r from-[#D1474F]/[0.2] from-[25%] to-[#F14B87]/[0.2] rounded-lg">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3 font-bold">
                <img src="assets/images/games/x50/x5.svg" class="max-w-[3rem]" alt="">
                <span>Красный</span>
            </div>
            <span class="text-[#D1474F] font-medium">x5</span>
        </div>
        <div class="flex items-center justify-between text-sm font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#D1474F]"><use xlink:href="assets/images/symbols.svg#icon-partners"></use></svg>
                <span class="" x-text="users.x5 ? users.x5 : '0'">0</span>
            </div>
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                <span class="" x-text="banks.x5 ? banks.x5 : '0.00'">0.00</span>
            </div>
        </div>
    </div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-html="bets.x5" x-show="bets.x5" x-cloak></div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-show="!bets.x5">
        <div class="flex flex-1 items-center justify-center py-8">
            <span class="loader-wheel-txt">Ожидание игроков...</span>
        </div>
    </div>
</div>