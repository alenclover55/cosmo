
<template>
    <button class="relative bg-gradient-to-br from-[#1B2138] to-[#2F3754] from-[50%] grid min-[551px]:before:pt-[100%] before:pt-[50%] rounded-xl overflow-hidden maskedLink transition-all duration-300 hover:-translate-y-[0.25rem]">
        <div class="absolute left-0 top-0 w-full h-full p-2 pointer-events-none">
            <div class="absolute left-0 top-0 w-full h-full z-[1] bg-gradient-to-b from-transparent to-[#2F3754] to-[80%] from-[40%]"></div>
            <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center">
                <div class="relative z-[2] transition-[opacity] duration-[500ms] -rotate-[60deg]">
                    <div class="min-[1025px]:w-[9rem] min-[1025px]:h-[24rem] w-[7rem] h-[18rem] relative">
                        <div class="relative w-full h-full">
                            <img src="assets/images/games/jackpot/rocket-head.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1]" alt="">
                            <img src="assets/images/games/jackpot/rocket-fire.png" class="absolute left-0 top-0 w-full h-full object-contain origin-center"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-0 top-0 w-full h-full p-[1.25rem_1.563rem] flex items-end text-2xl font-bold z-[1] pointer-events-none">
            <span>Джекпот</span>
        </div>
    </button>
</template>