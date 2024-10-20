<div class="min-[1581px]:max-w-[31.25rem] min-[926px]:max-w-[25rem] w-full relative">
    <div class="w-full flex flex-col h-full min-[926px]:rounded-[0_2.25rem_2.25rem_0] rounded-[0_0_2.25rem_2.25rem] overflow-hidden relative shadow-[0_0_35px_rgba(0,0,0,0.1)]">
        <div class="relative z-[1] py-4 max-[925px]:px-4 w-full h-full min-[926px]:rounded-[0_2.25rem_2.25rem_0] rounded-[0_0_2.25rem_2.25rem] bg-[#41496B]/[0.25] flex flex-col items-center justify-center">
            <?php include __DIR__.'/Timer.php' ?>
            <?php include __DIR__.'/Slider.php' ?>
            <div class="flex flex-col min-[926px]:absolute max-[925px]:-order-[1] max-[925px]:w-full min-[926px]:left-6 min-[926px]:top-6 *:leading-[100%] gap-1 z-[2] transition-all duration-[500ms]">
                <span class="font-medium text-[#A7B2E7] min-[926px]:text-sm text-xs uppercase" x-show="state !== 'rolling'">Начало через</span>
                <span class="min-[926px]:text-2xl text-xl font-bold">
                    <template x-if="timer === null">
                        <span class="loader-wheel-txt" x-text="state === 'pending' ? 'Ожидание...' : 'Поиск победителя...'">Ожидание...</span>
                    </template>
                    <template x-if="timer !== null">
                        <span><span x-text="timer">0</span> секунд</span>
                    </template>
                </span>
            </div>
            <?php include __DIR__.'/Smoke.php' ?>
        </div>
        <div class="absolute left-0 top-0 min-[926px]:w-[8rem] min-[926px]:h-[8rem] w-[6rem] h-[6rem] rounded-full bg-[#0083E1] min-[926px]:blur-[6.25rem] blur-[6rem] animate-[blurEllipse_3s_infinite_alternate]"></div>
        <div class="absolute right-0 top-1/2 -translate-y-1/2 min-[926px]:w-[8rem] min-[926px]:h-[8rem] w-[6rem] h-[6rem] rounded-full bg-[#003FE1] min-[926px]:blur-[6.25rem] blur-[6rem] animate-[blurEllipse_6s_0.5s_infinite_alternate]"></div>
        <div class="absolute left-0 bottom-0 min-[926px]:w-[8rem] min-[926px]:h-[8rem] w-[6rem] h-[6rem] rounded-full bg-[#00ABE1] min-[926px]:blur-[6.25rem] blur-[6rem] animate-[blurEllipse_4s_1s_infinite_alternate]"></div>
    </div>
</div>