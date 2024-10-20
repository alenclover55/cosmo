<div class="w-full min-[861px]:flex grid grid-cols-2 items-stretch justify-between gap-4 z-[1]">
    <div class="flex items-stretch gap-2 max-[650px]:col-span-2">
        <div class="flex flex-col gap-1 max-[860px]:flex-1">
            <div class="min-[861px]:w-[10rem] w-full relative flex-1 flex flex-col bg-[#546aa5]/[0.1] backdrop-blur-[1.875rem] backdrop-blur-sm rounded-lg items-center">
                <span class="absolute left-1/2 top-0 -translate-x-1/2 whitespace-nowrap text-xs pt-2 font-semibold text-[#9E9EAD]">Сумма ставки</span>
                <input type="text" @input="filterBet" x-model="bet" class="bg-transparent text-center h-full border-0 text-2xl w-full pt-4">
            </div>
        </div>
        <div class="flex flex-wrap gap-2 max-w-[13.75rem]">
            <button type="button" aria-label="+10" role="button" @click="addSumm(10)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+10</button>
            <button type="button" aria-label="+50" role="button" @click="addSumm(50)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+50</button>
            <button type="button" aria-label="+100" role="button" @click="addSumm(100)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+100</button>
            <button type="button" aria-label="+500" role="button" @click="addSumm(500)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+500</button>
            <button type="button" aria-label="+1000" role="button" @click="addSumm(1000)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+1000</button>
            <button type="button" aria-label="+5000" role="button" @click="addSumm(5000)" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">+5000</button>
            <button type="button" aria-label="x2" role="button" @click="xBet" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">x2</button>
            <button type="button" aria-label="1/2" role="button" @click="dBet" class="h-[2rem] flex flex-1 items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#a1a4d7]/[0.15] transition-all duration-300 hover:bg-blue">1/2</button>
        </div>
    </div>
    <button aria-label="Сделать ставку" role="button" :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { createBet() }, 100)" class="min-h-[3.438rem] max-[650px]:col-span-2 flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Сделать ставку</span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
</div>