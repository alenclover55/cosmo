<div 
    class="relative flex flex-col -mb-[.625rem]" x-show="user" x-cloak
    data-swipe-threshold="15" data-swipe-unit="vw" data-swipe-timeout="250"
    x-transition:enter="transition-[transform_,_opacity] duration-300"
    x-transition:enter-start="translate-y-full opacity-0"
    x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition-[transform_,_opacity] duration-300"
    x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="translate-y-full opacity-0"
    x-init="
    document.addEventListener('swiped-down', function(e) {
        user = false
    });
    document.addEventListener('swiped-up', function(e) {
        user = false
    });">
    <div class="flex flex-col pb-[3.5rem] pt-7 bg-[#2E3144] rounded-tl-xl rounded-tr-xl">
        <div class="w-[4.688rem] h-[.375rem] rounded-full bg-[#4B5070] absolute left-1/2 -translate-x-1/2 top-4"></div>
        <div class="flex flex-col px-5 gap-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button aria-label="Профиль" role="button" data-href="/profile" class="maskedLink flex shrink-0 items-center p-1 rounded-full bg-[#383A4E] border border-[#4A4D64]">
                        <div class="shrink-0 w-[2.813rem] h-[2.813rem] rounded-full relative pointer-events-none">
                            <img class="w-full h-full object-cover rounded-full" src="<?=$img?>" alt="">
                        </div>
                    </button>
                    <div class="flex flex-col items-start">
                        <button data-href="/profile" class="maskedLink font-[500] flex">@<?=$login?></button>
                        <button data-href="/auth/logout" class="maskedLink font-[500] text-sm transition-[color] hover:text-[#DDE1F1] text-[#9CA0B5]">Выйти</button>
                    </div>
                </div>
                <button type="button" aria-label="Уровни" role="button" rel="popup" data-popup="popup--levels" class="flex flex-col items-start -space-y-2 relative top-[.125rem] group/level">
                    <div class="h-[1.125rem] flex flex-col overflow-hidden">
                        <div class="relative transition-[transform] duration-300 group-hover/level:-translate-y-[1.125rem] flex flex-col items-start">
                            <div class="h-[1.125rem] transition-[opacity] duration-300 group-hover/level:opacity-0">
                                <span class="text-[.813rem] font-[500] text-[#9CA0B5]"><?=$rank?>  <span class="text-white"><?=$perc?>%</span></span>
                            </div>
                            <div class="h-[1.125rem] flex items-center transition-[opacity] duration-300">
                                <span class="text-[.688rem] h-[1.063rem] flex leading-[100%] items-center justify-center px-2 rounded-full bg-[#484c66] text-[#c5c9f9] font-[500]">Подробнее</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="absolute w-[5.625rem] h-[.5rem] rounded-full bg-[#222432] left-[.375rem] top-[1.25rem]">
                            <div class="absolute left-0 top-0 h-full bg-gradient-to-b from-[#0083E1] to-[#0049B6] rounded-full" style="width: <?=$perc?>%"></div>
                        </div>
                        <div class="absolute right-0 top-0 w-[2.25rem] h-[2.75rem] flex items-center justify-center">
                            <img src="assets/images/gift.svg" class="w-6 h-6" alt="">
                        </div>
                        <svg class="w-[8.313rem] h-[2.813rem]" viewBox="0 0 159 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_888_137" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M137.4 43C149.275 43 158.9 33.3741 158.9 21.5C158.9 9.62588 149.275 0 137.4 0C128.164 0 120.288 5.82403 117.245 14L9.5 14C4.25329 14 -2.38419e-07 18.2533 0 23.5C2.38419e-07 28.7467 4.2533 33 9.5 33L119.231 33C123.044 39.0105 129.756 43 137.4 43Z"/>
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M137.4 43C149.275 43 158.9 33.3741 158.9 21.5C158.9 9.62588 149.275 0 137.4 0C128.164 0 120.288 5.82403 117.245 14L9.5 14C4.25329 14 -2.38419e-07 18.2533 0 23.5C2.38419e-07 28.7467 4.2533 33 9.5 33L119.231 33C123.044 39.0105 129.756 43 137.4 43Z" fill="#383A4E"/>
                            <path d="M117.245 14L117.245 15L117.94 15L118.182 14.3489L117.245 14ZM9.5 14L9.5 15L9.5 15L9.5 14ZM0 23.5L-1 23.5L0 23.5ZM9.5 33L9.5 34H9.5L9.5 33ZM119.231 33L120.076 32.4644L119.781 32L119.231 32L119.231 33ZM157.9 21.5C157.9 32.8218 148.722 42 137.4 42V44C149.827 44 159.9 33.9264 159.9 21.5H157.9ZM137.4 1C148.722 1 157.9 10.1782 157.9 21.5H159.9C159.9 9.07359 149.827 -1 137.4 -1V1ZM118.182 14.3489C121.085 6.55164 128.595 1 137.4 1V-1C127.733 -1 119.492 5.09643 116.308 13.6511L118.182 14.3489ZM9.5 15L117.245 15L117.245 13L9.5 13L9.5 15ZM1 23.5C1 18.8056 4.80558 15 9.5 15V13C3.70101 13 -1 17.701 -1 23.5L1 23.5ZM9.5 32C4.80558 32 1 28.1944 1 23.5L-1 23.5C-1 29.299 3.70101 34 9.5 34V32ZM119.231 32L9.5 32L9.5 34L119.231 34L119.231 32ZM137.4 42C130.113 42 123.712 38.1979 120.076 32.4644L118.387 33.5356C122.375 39.8231 129.399 44 137.4 44V42Z" fill="#4A4D64" mask="url(#path-1-inside-1_888_137)"/>
                        </svg>
                    </div>
                </button>
            </div>
            <div class="flex items-center gap-3">
                <button aria-label="Профиль" role="button" :disabled="loader" x-data="btn" @click="eventClick(100); setTimeout(() => { document.location.href = '/profile' }, 100)" class="h-[2.5rem] w-full uppercase relative font-[600] text-xs flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Профиль</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../ui/Loader.php' ?>
                    </div>
                </button>
                <button aria-label="Выход" role="button" :disabled="loader" x-data="btn" @click="eventClick(100); setTimeout(() => { document.location.href = '/auth/logout' }, 100)" class="h-[2.5rem] w-full uppercase relative font-[600] text-xs flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#454a66] bg-[#3a3e56]">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Выйти</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../ui/Loader.php' ?>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>