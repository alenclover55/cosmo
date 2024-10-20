<div class="relative z-[1] min-[691px]:h-[400px] min-[361px]:h-[380px] h-[360px] w-full max-[690px]:min-[361px]:scale-[0.85] max-[360px]:scale-[0.75]" style="will-change: transform;">
    <div class="absolute left-1/2 top-[54px] -translate-x-1/2 w-[240px] h-[240px] z-[1]">
        <div class="coin w-full h-full relative" x-ref="coin">
            <div class="heads absolute left-0 top-0 w-full h-full backface-invisible flex items-center justify-center">
                <img src="assets/images/games/coinflip/rocket.svg" class="w-full h-full object-contain" alt="">
            </div>
            <div class="tails absolute left-0 top-0 w-full h-full backface-invisible flex items-center justify-center">
                <img src="assets/images/games/coinflip/asteroid.svg" class="w-full h-full object-contain" alt="">
            </div>
        </div>
        <div x-ref="coinShadow" class="w-full opacity-0 -z-[1] h-[300px] top-0 absolute left-0 bg-gradient-to-b from-[#95a0eb] rounded-[50%] to-transparent"></div>
    </div>
    <div class="absolute left-1/2 top-[35px] -translate-x-1/2 w-[280px] h-[280px] -z-[1]" >
        <img src="assets/images/games/radar.svg" class="w-full h-full object-contain opacity-40 group-[:not(.disable-animations)]/body:animate-[radar_3s_infinite_forwards_linear] group-[:not(.disable-animations)]/body:[&.win]:!animate-[radarWin_3s_infinite_forwards_linear] group-[:not(.disable-animations)]/body:[&.win]:opacity-100" x-ref="coinRadar" alt="">
    </div>
    <img src="assets/images/games/coinflip/coinflip.svg" class="max-w-fit absolute left-1/2 -translate-x-1/2 top-0" alt="">
</div>