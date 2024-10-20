<div class="absolute left-0 top-0 w-full h-full flex justify-center items-center z-[1] opacity-0 invisible pointer-events-none transition-all duration-300" x-bind:class="{'opacity-100 !visible pointer-events-auto': modalShow}">
    <div x-show="modalShow" x-transition:enter="transition-all duration-300" x-transition:enter-start="opacity-0 translate-y-[1.25rem]" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition-all duration-300" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-[1.25rem]" class="flex flex-col relative z-[1]">
        <div class="w-[23.75rem] flex flex-col rounded-[1.25rem] overflow-hidden relative shadow-[0_0_35px_rgba(0,0,0,0.1)]">
            <div class="relative z-[1] p-[2rem] w-full h-full rounded-[1.25rem] bg-[#41496B]/[0.25] border border-[#41496B]/[0.5] gap-5 flex flex-col items-center justify-center">
                <div class="flex flex-col items-center gap-2">
                    <span class="text-[#ADB8EB] text-lg font-semibold leading-[100%]">Поздравляем!</span>
                    <span class="text-2xl font-bold leading-[100%]">Вы выиграли</span>
                </div>
                <div class="flex items-center justify-center gap-2 text-xl font-medium text-[#ADB8EB]">   
                    <span class="text-white" x-text="win ? ' ' + parseInt(win).toFixed(2) + ' ₽' : ' 0.00'">0.00 ₽</span>
                </div>
                <div class="flex relative items-center justify-center text-4xl font-medium">
                    <span x-text="currX ? currX + 'x' : '0x'">x0.00</span>
                    <span class="absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 whitespace-nowrap scale-[1.25] opacity-10" x-text="currX ? currX + 'x' : '0x'">x0.00</span>
                </div>
                <button aria-label="Продолжить игру" :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { reset() }, 200)" class="shrink-0 h-[3rem] max-[944px]:w-full min-w-[18.75rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Продолжить игру</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../../ui/Loader.php' ?>
                    </div>
                </button>
            </div>
            <div class="absolute left-0 top-0 w-[4.688rem] h-[4.688rem] rounded-full bg-[#0083E1] blur-[60px] animate-[blurEllipse_3s_infinite_alternate]"></div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[4.688rem] h-[4.688rem] rounded-full bg-[#003FE1] blur-[60px] animate-[blurEllipse_6s_0.5s_infinite_alternate]"></div>
            <div class="absolute left-0 bottom-0 w-[4.688rem] h-[4.688rem] rounded-full bg-[#00ABE1] blur-[60px] animate-[blurEllipse_4s_1s_infinite_alternate]"></div>
        </div>
    </div>
    <div x-show="modalShow" @click="reset()" x-transition:enter="transition-all duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-all duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute left-0 top-0 w-full h-full bg-[#131521]/[0.8] backdrop-blur-[.313rem]"></div>
</div>