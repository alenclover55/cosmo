<div class="flex flex-col gap-3">
    <div class="flex flex-col py-3 gap-3 px-4 bg-gradient-to-r from-[#4743FF]/[0.2] from-[25%] to-[#67A4FF]/[0.2] rounded-lg">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3 font-bold">
                <img src="assets/images/games/x50/x3.svg" class="max-w-[3rem]" alt="">
                <span>Синий</span>
            </div>
            <span class="text-[#688eff] font-medium">x3</span>
        </div>
        <div class="flex items-center justify-between text-sm font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#688eff]"><use xlink:href="assets/images/symbols.svg#icon-partners"></use></svg>
                <span class="" x-text="users.x3 ? users.x3 : '0'">0</span>
            </div>
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                <span class="" x-text="banks.x3 ? banks.x3 : '0.00'">0.00</span>
            </div>
        </div>
    </div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-html="bets.x3" x-show="bets.x3" x-cloak></div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-show="!bets.x3">
        <div class="flex flex-1 items-center justify-center py-8">
            <span class="loader-wheel-txt">Ожидание игроков...</span>
        </div>
    </div>
</div>