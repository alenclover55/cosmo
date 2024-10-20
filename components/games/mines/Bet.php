<div class="w-full mines-bet translate-y-[1rem] opacity-0 py-4 bg-gradient-to-b from-transparent to-[#161823] min-[1125px]:to-[70%] to-[20%] min-[861px]:flex grid grid-cols-2 items-stretch justify-between px-4 gap-4 z-[1]">
    <div class="flex items-stretch gap-2 max-[650px]:col-span-2">
        <div class="flex flex-col gap-1 max-[860px]:flex-1">
            <div class="min-[861px]:w-[10rem] w-full relative flex-1 flex flex-col bg-[#2a2b3c] rounded-lg items-center">
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
    <div class="flex items-stretch gap-2 max-[650px]:col-span-2" x-data="{ edit: false, }">
        <div class="flex flex-col gap-1 max-[860px]:flex-1">
            <div class="min-[861px]:w-[10rem] w-full relative flex-1 flex flex-col bg-[#2a2b3c] rounded-lg items-center">
                <span class="absolute left-1/2 top-0 -translate-x-1/2 whitespace-nowrap text-xs pt-2 font-semibold text-[#9E9EAD]">Количество бомб</span>
                <input type="text" @input="filterBomb" @focusout="edit = !edit" x-model="bomb" x-trap="edit" class="bg-transparent text-center h-full border-0 text-2xl w-full pt-4">
            </div>
        </div>
        <div class="flex flex-wrap gap-2 max-w-[13.75rem]">
            <button type="button" aria-label="3" @click="state !== 'ingame' ? bombSelect(3) : ''" x-bind:class="bomb === 3 ? 'active' : ''" class="h-[2rem]  w-[calc(50%-0.25rem)] flex items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#2a2b3c] [&.active]:bg-blue transition-all duration-300 hover:bg-blue">3</button>
            <button type="button" aria-label="5" @click="state !== 'ingame' ? bombSelect(5) : ''" x-bind:class="bomb === 5 ? 'active' : ''" class="h-[2rem]  w-[calc(50%-0.25rem)] flex items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#2a2b3c] [&.active]:bg-blue transition-all duration-300 hover:bg-blue">5</button>
            <button type="button" aria-label="15" @click="state !== 'ingame' ? bombSelect(10) : ''" x-bind:class="bomb === 15 ? 'active' : ''" class="h-[2rem]  w-[calc(50%-0.25rem)] flex items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#2a2b3c] [&.active]:bg-blue transition-all duration-300 hover:bg-blue">10</button>
            <button type="button" aria-label="25" @click="state !== 'ingame' ? bombSelect(24) : ''" x-bind:class="bomb === 24 ? 'active' : ''" class="h-[2rem]  w-[calc(50%-0.25rem)] flex items-center font-semibold text-sm justify-center px-2 rounded-lg bg-[#2a2b3c] [&.active]:bg-blue transition-all duration-300 hover:bg-blue">24</button>
        </div>
    </div>
    <button aria-label="Начать игру" :disabled="loader" x-show="state !== 'ingame'" x-data="btn" @click="eventClick(200); setTimeout(() => { startGame()  }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Начать игру</span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
    <button aria-label="Забрать" :disabled="loader" x-show="state === 'ingame'" x-cloak x-data="btn" @click="eventClick(200); setTimeout(() => { endGame()  }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Забрать  <span class="bg-white text-blue py-1 px-1.5 rounded-md" x-text="win ? ' ' + parseInt(win).toFixed(2) : ' 0.00'">0 ₽</span></span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
    <button aria-label="Авто-выбор" :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { randOpen() }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#373850] bg-[#2a2b3c]">
        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Авто-выбор</span>
        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
            <?php include __DIR__.'/../../ui/Loader.php' ?>
        </div>
    </button>
</div>