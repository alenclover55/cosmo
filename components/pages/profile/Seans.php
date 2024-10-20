<template x-if="tab === 2">
    <div class="flex flex-col gap-4">
        <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
            <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
            <span>Сеансы</span>
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-3 max-[1390px]:overflow-auto scroll-0">
                <div class="flex max-[1390px]:min-w-[1390px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full relative">
                        <div class="absolute left-0 top-0 w-full h-full flex flex-col justify-center items-start px-5">
                            <span class="text-sm font-[500] text-[#9CA0B5]">Google Chrome</span>
                            <span class="text-base font-[600]">192.168.0.1</span>
                        </div>
                        <img src="assets/images/history/seans.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Регион</span>
                        <span class="text-base font-[600]">Московская обл</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Вход</span>
                        <span class="text-base font-[600]">03.02.2024 6:56</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">В сеансе</span>
                        <span class="text-base font-[600]">3 д. 5 ч. 25 м.</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Последний заход</span>
                        <span class="text-base font-[600]">Вчера</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Статус</span>
                        <span class="text-base font-[600]">Текущая</span>
                    </div>
                    <div class="shrink-0 px-6">
                        <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => {  }, 200)" class="w-[2.75rem] flex items-center justify-center h-[2.75rem] relative text-[#7C82A5] bg-[#323546] transition-[color_,_background] rounded-[.375rem] duration-300 hover:text-white hover:bg-[#3B3E52]">
                            <svg class="w-4 h-4 transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''"><use xlink:href="assets/images/symbols.svg#icon-lock"></use></svg>
                            <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity] scale-[0.8]" x-bind:class="loader ? '!opacity-100' : ''">
                                <?php include __DIR__.'/../../ui/Loader.php' ?>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="flex max-[1390px]:min-w-[1390px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full relative">
                        <div class="absolute left-0 top-0 w-full h-full flex flex-col justify-center items-start px-5">
                            <span class="text-sm font-[500] text-[#9CA0B5]">Google Chrome</span>
                            <span class="text-base font-[600]">192.168.0.1</span>
                        </div>
                        <img src="assets/images/history/seans.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Регион</span>
                        <span class="text-base font-[600]">Московская обл</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Вход</span>
                        <span class="text-base font-[600]">03.02.2024 6:56</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">В сеансе</span>
                        <span class="text-base font-[600]">3 д. 5 ч. 25 м.</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Последний заход</span>
                        <span class="text-base font-[600]">Позавчера</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Статус</span>
                        <span class="text-base font-[600]">Активная</span>
                    </div>
                    <div class="shrink-0 px-6">
                        <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => {  }, 200)" class="w-[2.75rem] flex items-center justify-center h-[2.75rem] relative text-[#7C82A5] bg-[#323546] transition-[color_,_background] rounded-[.375rem] duration-300 hover:text-white hover:bg-[#3B3E52]">
                            <svg class="w-4 h-4 transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''"><use xlink:href="assets/images/symbols.svg#icon-lock"></use></svg>
                            <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity] scale-[0.8]" x-bind:class="loader ? '!opacity-100' : ''">
                                <?php include __DIR__.'/../../ui/Loader.php' ?>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="flex max-[1390px]:min-w-[1390px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full relative">
                        <div class="absolute left-0 top-0 w-full h-full flex flex-col justify-center items-start px-5">
                            <span class="text-sm font-[500] text-[#9CA0B5]">Google Chrome</span>
                            <span class="text-base font-[600]">192.168.0.1</span>
                        </div>
                        <img src="assets/images/history/seans.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Регион</span>
                        <span class="text-base font-[600]">Московская обл</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Вход</span>
                        <span class="text-base font-[600]">03.02.2024 6:56</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">В сеансе</span>
                        <span class="text-base font-[600]">3 д. 5 ч. 25 м.</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Последний заход</span>
                        <span class="text-base font-[600]">Позавчера</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Статус</span>
                        <span class="text-base font-[600]">Закрытая</span>
                    </div>
                    <div class="shrink-0 px-6"><div class="w-[2.75rem] flex"></div></div>
                </div>
            </div>
            <div class="flex justify-end gap-2 flex-wrap">
                <button type="button" disabled="" class="text-sm font-[500] transition-[background_,_color] bg-[#222432] py-0.5 px-2 rounded-full text-[#CCD5FF] hover:bg-[#2E3040] hover:text-white disabled:opacity-50 disabled:pointer-events-none">
                    Предыдущая страница
                </button>
                <button type="button" class="text-sm font-[500] transition-[background_,_color] bg-[#222432] py-0.5 px-2 rounded-full text-[#CCD5FF] hover:bg-[#2E3040] hover:text-white disabled:opacity-50 disabled:pointer-events-none">
                    Следующая страница
                </button>
            </div>
        </div>
    </div>
</template>