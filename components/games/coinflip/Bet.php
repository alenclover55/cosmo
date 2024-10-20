<div class="flex justify-center min-[521px]:mt-8 mt-4 w-full max-w-[40rem] gap-4 mx-auto min-[861px]:flex-row flex-col">
    <div class="flex items-stretch gap-2 max-[475px]:w-full">
        <div class="flex flex-col gap-1 max-[860px]:flex-1">
            <div class="min-[861px]:w-[10rem] w-full relative flex-1 flex flex-col bg-[#a1a4d7]/[0.15] rounded-lg items-center">
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
    <button aria-label="Начать игру" role="button" :disabled="loader" x-show="state === 'pending'" x-data="btn" @click="eventClick(200); setTimeout(() => { startGame()  }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Начать игру</span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
    <div aria-label="Загрузка" role="button" x-show="state === 'wait' || state === 'result-wait'" x-cloak class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center max-[650px]:col-span-2 text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 bg-[#2a2b3c] pointer-events-none">
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </div>
    <button aria-label="Забрать" role="button" :disabled="loader" x-show="state === 'ingame'" x-cloak x-data="btn" @click="eventClick(200); setTimeout(() => { endGame()  }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Забрать  <span class="bg-white text-blue py-1 px-1.5 rounded-md" x-text="win ? ' ' + parseInt(win).toFixed(2) : ' 0.00'">0 ₽</span></span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
</div>