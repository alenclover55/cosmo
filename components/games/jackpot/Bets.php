<div class="flex flex-col min-[626px]:w-2/3  gap-4">
    <div class="flex items-center gap-3 font-[600] text-xl uppercase">
        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
        <span>Ставки игроков</span>
    </div>
    <div class="flex flex-col flex-1 rounded-xl bg-[#546aa5]/[0.1] backdrop-blur-[1.875rem] relative">
        <template x-if="bets.length">
            <div class="min-[926px]:absolute left-0 top-0 min-[926px]:w-full min-[926px]:h-full  p-3 overflow-auto scroll-0">
                <div class="grid grid-cols-1 gap-2">
                    <?php include __DIR__.'/BetUser.php' ?>
                </div>
            </div>
        </template>
        <template x-if="!bets.length">
            <div class="flex items-center justify-center flex-1 min-[926px]:absolute left-0 top-0 min-[926px]:w-full min-[926px]:h-full">
                <span class="loader-wheel-txt font-[500] whitespace-nowrap text-[#A7B2E7]">Ожидание игроков...</span>
            </div>
        </template>
    </div>
</div>