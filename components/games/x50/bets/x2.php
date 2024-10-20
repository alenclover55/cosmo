<div class="flex flex-col gap-3">
    <div class="flex flex-col py-3 gap-3 px-4 bg-gradient-to-r from-[#67739B]/[0.2] from-[25%] to-[#81AAC0]/[0.2] rounded-lg">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-3 font-bold">
                <img src="assets/images/games/x50/x2.svg" class="max-w-[3rem]" alt="">
                <span>Серый</span>
            </div>
            <span class="text-[#9CA0B5] font-medium">x2</span>
        </div>
        <div class="flex items-center justify-between text-sm font-medium">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-[#9CA0B5]"><use xlink:href="assets/images/symbols.svg#icon-partners"></use></svg>
                <span class="" x-text="users.x2 ? users.x2 : '0'">0</span>
            </div>
            <div class="flex items-center gap-1">
                <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                <span class="" x-text="banks.x2 ? banks.x2 : '0.00'">0.00</span>
            </div>
        </div>
    </div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-html="bets.x2" x-show="bets.x2" x-cloak></div>
    <div class="min-[801px]:flex hidden flex-col h-full border border-white/[0.05] rounded-lg text-sm" x-show="!bets.x2">
        <div class="flex flex-1 items-center justify-center py-8">
            <span class="loader-wheel-txt">Ожидание игроков...</span>
        </div>
    </div>
</div>