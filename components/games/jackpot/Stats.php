<div class="flex items-center justify-between">
    <div class="flex flex-col gap-3">
        <div class="flex flex-col *:leading-[100%] gap-2 z-[2]">
            <span class="font-medium text-[#A7B2E7] text-sm uppercase">Ваш шанс</span>
            <span class="font-bold text-3xl" x-text="(chance).toFixed() + '%'">0%</span>
        </div>
        <div class="w-[8.75rem] h-[.25rem] relative rounded-full bg-[#2a2b3c] relative overflow-hidden">
            <div class="absolute left-0 top-0 h-full bg-blue transition-all duration-300" :style="'width:' + chance + '%'"></div>
        </div>
    </div>
    <div class="flex flex-col *:leading-[100%] gap-1.5 z-[2] items-end">
        <span class="font-medium text-[#A7B2E7] text-sm uppercase">Общий банк</span>
        <div class="flex items-center gap-2">
            <span class="font-bold text-3xl" x-text="(bank).toFixed() + ' ₽'">0</span>
            <svg class="w-6 h-6"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
        </div>
    </div>
</div>