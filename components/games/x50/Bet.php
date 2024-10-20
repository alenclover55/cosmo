<div class="flex items-stretch justify-between min-[861px]:gap-4 gap-3 min-[861px]:flex-row flex-col">
    <div class="flex items-stretch gap-2">
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
    <div class="min-[591px]:flex grid grid-cols-2 flex-1 items-stretch min-[861px]:gap-4 gap-3">
        <button @click="addBet(1)" aria-label="Поставить на x2" role="button" type="button" class="flex-1 h-full px-6 min-[861px]:py-0 py-2 overflow-hidden relative rounded-lg group/btn text-white font-bold text-3xl hover:-translate-y-[0.25rem] transition-all duration-200 hover:shadow-[0px_30px_33px_rgba(0,0,0,0.15)]">
            <div class="relative z-[3] w-full flex flex-col items-center text-center *:leading-[100%] gap-1">
                <span class="drop-shadow-[0rem_.25rem_0rem_#384665]">x2</span>
                <span class="text-sm py-1 px-2 rounded-full bg-black/[0.4]" x-text="userBet.x2 ? (userBet.x2).toFixed() + ' ₽' : '0.00 ₽'">0.00 ₽</span>
            </div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#95C0D9] from-[25%] to-[#7682AC] transition-all duration-300 opacity-0 group-hover/btn:opacity-100 z-[1]"></div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#67739B] from-[25%] to-[#81AAC0] transition-all duration-300"></div>
            <img src="assets/images/games/x50/btn-pattern.svg" class="absolute left-0 top-0 w-full h-full object-contain z-[2]" alt="">
        </button>
        <button @click="addBet(2)" aria-label="Поставить на x3" role="button" type="button" class="flex-1 h-full px-6 min-[861px]:py-0 py-2 overflow-hidden relative rounded-lg group/btn text-white font-bold text-3xl hover:-translate-y-[0.25rem] transition-all duration-200 hover:shadow-[0px_30px_33px_rgba(0,0,0,0.15)]">
            <div class="relative z-[3] w-full flex flex-col items-center text-center *:leading-[100%] gap-1">
                <span class="drop-shadow-[0rem_.25rem_0rem_#1B3D7E]">x3</span>
                <span class="text-sm py-1 px-2 rounded-full bg-black/[0.4]" x-text="userBet.x3 ? (userBet.x3).toFixed() + ' ₽' : '0.00 ₽'">0.00 ₽</span>
            </div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#605CFC] from-[25%] to-[#87B7FF] transition-all duration-300 opacity-0 group-hover/btn:opacity-100 z-[1]"></div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#4743FF] from-[25%] to-[#67A4FF] transition-all duration-300"></div>
            <img src="assets/images/games/x50/btn-pattern.svg" class="absolute left-0 top-0 w-full h-full object-contain z-[2]" alt="">
        </button>
        <button @click="addBet(3)" aria-label="Поставить на x5" role="button" type="button" class="flex-1 h-full px-6 min-[861px]:py-0 py-2 overflow-hidden relative rounded-lg group/btn text-white font-bold text-3xl hover:-translate-y-[0.25rem] transition-all duration-200 hover:shadow-[0px_30px_33px_rgba(0,0,0,0.15)]">
            <div class="relative z-[3] w-full flex flex-col items-center text-center *:leading-[100%] gap-1">
                <span class="drop-shadow-[0rem_.25rem_0rem_#970B34]">x5</span>
                <span class="text-sm py-1 px-2 rounded-full bg-black/[0.4]" x-text="userBet.x5 ? (userBet.x5).toFixed() + ' ₽' : '0.00 ₽'">0.00 ₽</span>
            </div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#E45A63] from-[25%] to-[#FF72A5] transition-all duration-300 opacity-0 group-hover/btn:opacity-100 z-[1]"></div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#D1474F] from-[25%] to-[#F14B87] transition-all duration-300"></div>
            <img src="assets/images/games/x50/btn-pattern.svg" class="absolute left-0 top-0 w-full h-full object-contain z-[2]" alt="">
        </button>
        <button @click="addBet(4)" aria-label="Поставить на x50" role="button" type="button" class="flex-1 h-full px-6 min-[861px]:py-0 py-2 overflow-hidden relative rounded-lg group/btn text-white font-bold text-3xl hover:-translate-y-[0.25rem] transition-all duration-200 hover:shadow-[0px_30px_33px_rgba(0,0,0,0.15)]">
            <div class="relative z-[3] w-full flex flex-col items-center text-center *:leading-[100%] gap-1">
                <span class="drop-shadow-[0rem_.25rem_0rem_#116547]">x50</span>
                <span class="text-sm py-1 px-2 rounded-full bg-black/[0.4]" x-text="userBet.x50 ? (userBet.x50).toFixed() + ' ₽' : '0.00 ₽'">0.00 ₽</span>
            </div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#5FE765] from-[25%] to-[#AEED5E] transition-all duration-300 opacity-0 group-hover/btn:opacity-100 z-[1]"></div>
            <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r from-[#47D14C] from-[25%] to-[#94D147] transition-all duration-300"></div>
            <img src="assets/images/games/x50/btn-pattern.svg" class="absolute left-0 top-0 w-full h-full object-contain z-[2]" alt="">
        </button>
    </div>
</div>