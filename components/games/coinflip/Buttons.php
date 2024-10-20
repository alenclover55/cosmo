<div class="min-[691px]:absolute min-[1576px]:left-0 min-[691px]:left-1/2 max-[1575px]:min-[691px]:-translate-x-1/2 min-[691px]:top-1/2 min-[691px]:-translate-y-1/2 flex min-[1576px]:justify-around justify-between min-[521px]:gap-5 gap-2 z-[1] min-[1576px]:w-full min-[1430px]:w-[75%] min-[1241px]:w-[90%] w-full">
    <button type="button" aria-label="На ракетку" role="button" @click="play('rocket')" class="relative min-[521px]:h-[6rem] min-[371px]:h-[5rem] max-[370px]:pt-4 max-[370px]:pb-6 max-[370px]:w-1/2 min-[521px]:px-8 px-4 group/btn min-[691px]:mt-[5rem]">
        <div class="relative z-[2] flex items-center min-[371px]:gap-4 gap-2 min-[371px]:flex-row flex-col-reverse">
            <div class="flex min-[371px]:items-start items-center flex-col *:leading-[100%] relative -top-0.5 gap-1 whitespace-nowrap">
                <span class="min-[521px]:text-base text-sm font-medium text-[#87BCFF] group-hover/btn:text-white transition-all duration-300">Поставить</span>
                <span class="min-[521px]:text-xl text-lg font-bold">На ракетку</span>
            </div>
            <img src="assets/images/games/coinflip/rocket.svg" class="min-[521px]:max-w-[4rem] max-w-[2.5rem]" alt="">
        </div>
        <div class="absolute left-0 top-0 w-full h-full bg-blue opacity-0 group-hover/btn:opacity-100 btn-clip transition-all duration-300"></div>
        <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-r backdrop-blur-[15px] from-transparent to-blue/[0.5] from-[5%] btn-clip transition-all duration-300"></div>
    </button>
    <button type="button" aria-label="На астероид" role="button" @click="play('asteroid')" class="relative min-[521px]:h-[6rem] min-[371px]:h-[5rem] max-[370px]:pt-4 max-[370px]:pb-6 max-[370px]:w-1/2 min-[521px]:px-8 px-3 group/btn min-[691px]:mt-[5rem]">
        <div class="relative z-[2] flex items-center min-[371px]:gap-4 gap-2 min-[371px]:flex-row flex-col">
            <img src="assets/images/games/coinflip/asteroid.svg" class="min-[521px]:max-w-[4rem] max-w-[2.5rem]" alt="">
            <div class="flex min-[371px]:items-start items-center flex-col *:leading-[100%] relative -top-0.5 gap-1 whitespace-nowrap">
                <span class="min-[521px]:text-base text-sm font-medium text-[#e95252] group-hover/btn:text-white transition-all duration-300">Поставить</span>
                <span class="min-[521px]:text-xl text-lg font-bold">На астероид</span>
            </div>
        </div>
        <div class="absolute left-0 top-0 w-full h-full bg-[#e95252] opacity-0 group-hover/btn:opacity-100 btn-clip-reverse transition-all duration-300"></div>
        <div class="absolute left-0 top-0 w-full h-full bg-gradient-to-l backdrop-blur-[15px] from-transparent to-[#e95252]/[0.5] from-[5%] btn-clip-reverse transition-all duration-300"></div>
    </button>
</div>