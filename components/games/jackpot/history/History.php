<div class="min-[1376px]:fixed right-0 min-[1376px]:top-[4.5rem] min-[1376px]:h-[calc(100%_-_4.5rem)] h-[100px] min-[1376px]:max-w-[16rem] shrink-0 w-full min-[1376px]:rounded-[1rem_0_0_1rem] bg-[#8BA4E5]/[0.05] backdrop-blur-[.938rem] z-[2] flex flex-col">
    <div class="flex items-center justify-between gap-2 px-4 py-3">
        <span class="font-[500] text-xl">История</span>
        <span class="text-[.813rem] font-medium text-[#A7B2E7]">Последние 30 игр</span>
    </div>
    <div
        class="w-full flex-1"
        x-ref="scrollbarJackpotHistory"
        x-init="Scrollbar.init($refs.scrollbarJackpotHistory, {
            damping: 0.1,
            plugins: {
                overscroll: {
                    effect: 'glow',
                    glowColor: '#494E67'
                }
            },
        })
        "
    >
        <div class="flex-col flex relative z-[1]">
            <div class="flex min-[1376px]:flex-col flex-row pb-[0.5rem] px-[1rem] gap-[.625rem] w-full [&_div.scrollbar-thumb]:!bg-[#b9bfeb]/[0.25] [&_div.scrollbar-thumb]:backdrop-blur-[10px]" id="jackpot-history">
                <?php include __DIR__.'/Item.php' ?>
            </div>
        </div>
    </div>
</div>