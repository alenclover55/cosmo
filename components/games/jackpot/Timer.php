<div class="relative z-[2] jackpot-line-content transition-[opacity] duration-[500ms]" x-bind:class="{'opacity-0 invisible': state === 'rolling'}">
    <div class="absolute left-0 top-0 w-full h-full z-[2]">
        <div class="absolute left-0 bottom-0 w-full flex flex-col h-0 transition-all duration-[100ms]" id="jackpot-line">
            <div class="h-[.375rem] w-full rounded-full bg-[#30F3FF]"></div>
            <div class="flex-1 bg-gradient-to-b from-[#30F3FF] to-transparent opacity-20"></div>
        </div>
    </div>
    <div class="min-[926px]:w-[12.5rem] w-[6.5rem] min-[926px]:h-[43.75rem] h-[20rem] relative" x-bind:class="{'animate-[flyRocketJackpot_4s_ease-in-out_forwards]': rocketState === 2}">
        <div class="relative w-full h-full" x-bind:class="{'animate-[waitRocketJackpot_1.5s_ease_alternate_infinite]': rocketState === 0, 'animate-[waitRocketJackpot_0.2s_ease_alternate_infinite]': rocketState === 1 || rocketState === 2}">
            <img src="assets/images/games/jackpot/rocket-head.png" class="absolute left-0 top-0 w-full h-full object-contain z-[1]" alt="">
            <img src="assets/images/games/jackpot/rocket-fire.png" class="absolute left-0 top-0 w-full h-full object-contain origin-center" x-bind:class="{'animate-[fireRocketJackpot_1s_ease_alternate_infinite]': rocketState === 0 || rocketState === 1, 'animate-[fireRocketJackpot_0.3s_ease_alternate_infinite]': rocketState === 1 || rocketState === 2, }" alt="">
        </div>
    </div>
</div>