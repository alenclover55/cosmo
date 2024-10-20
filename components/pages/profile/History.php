<template x-if="tab === 1">
    <div class="flex flex-col gap-4">
        <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
            <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
            <span>История действий</span>
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-3 max-[780px]:overflow-auto scroll-0">
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/partners.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Перевод на баланс</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Сумма операции</span>
                        <span class="text-base font-[600]">5 878 ₽</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/wallet.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Пополнение средств</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Сумма операции</span>
                        <span class="text-base font-[600]">1 500 ₽</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/tournament.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Победа</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Сумма операции</span>
                        <span class="text-base font-[600]">1 500 ₽</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/wallet.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Вывод средств</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Сумма операции</span>
                        <span class="text-base font-[600]">1 500 ₽</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/account.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Смена пароля</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Статус</span>
                        <span class="text-base font-[600]">Успешно</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/account.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Подключение 2FA</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Статус</span>
                        <span class="text-base font-[600]">Успешно</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
                </div>
                <div class="flex max-[992px]:min-w-[992px] items-center justify-between bg-[#222432] rounded-[.5rem] h-[4.5rem] overflow-hidden">
                    <div class="shrink-0 flex flex-col items-center justify-center h-full">
                        <img src="assets/images/history/bonuses.png" class="max-h-full object-contain" alt="">
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">ID операции</span>
                        <span class="text-base font-[600]">#128128</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Действие операции </span>
                        <span class="text-base font-[600]">Подписка на группу вк</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Сумма операции</span>
                        <span class="text-base font-[600]">25 ₽</span>
                    </div>
                    <div class="flex-1 flex flex-col items-start px-6">
                        <span class="text-xs text-[#9CA0B5]">Дата операции</span>
                        <span class="text-base font-[600]">3 января 2024</span>
                    </div>
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