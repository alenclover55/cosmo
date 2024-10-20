
<template x-if="mobileUserCard">
    <div
        class="min-[1125px]:hidden flex flex-col w-full fixed z-[9] bottom-0 left-0"
    >
        <?php include __DIR__.'/MobileUserCard.php' ?>
        <div class="relative z-[1] flex items-stretch justify-between h-[4.563rem] rounded-tl-xl rounded-tr-xl bg-[#171a24]/[0.7] backdrop-blur-[20px]">
            <button data-href="/bonus" aria-label="Бонусы" role="button" class="maskedLink flex flex-col items-center justify-center flex-1 gap-1 min-[361px]:text-sm text-xs transition-[color] duration-300 text-[#9CA0B5] active:text-white uppercase font-[500]">
                <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg#icon-bonus"></use></svg>
                <span>Бонусы</span>
            </button>
            <button data-href="/tournaments" aria-label="Турниры" role="button" class="maskedLink flex flex-col items-center justify-center flex-1 gap-1 min-[361px]:text-sm text-xs transition-[color] duration-300 text-[#9CA0B5] active:text-white uppercase font-[500]">
                <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg#icon-tournaments"></use></svg>
                <span>Турниры</span>
            </button>
            <button data-href="/lobby" aria-label="Лобби" role="button" class="maskedLink flex flex-col items-center justify-center flex-1 gap-2 min-[361px]:text-sm text-xs transition-[color] duration-300 text-white uppercase font-[500]">
                <span class="shrink-0 -mt-[2.75rem] w-[4rem] h-[4rem] bg-[#36394F] rounded-full flex items-center justify-center relative">
                    <span class="relative z-[1] w-[3rem] h-[3rem] rounded-full flex items-center justify-center text-white">
                        <svg class="w-[2rem] h-[2rem]"><use xlink:href="assets/images/symbols.svg#icon-logotype"></use></svg>
                    </span>
                    <canvas id="gradient" class="w-full h-full rounded-full absolute left-0 top-0 pointer-events-none"></canvas>
                </span>
                <span>Играть</span>
            </button>
            <?if ($config['auth']): ?>
                <button type="button" aria-label="Аккаунт" role="button" @click="changeUser(); menu ? menu = false : ''" x-bind:class="user && 'active'" class="flex flex-col items-center justify-center flex-1 gap-1 min-[361px]:text-sm text-xs transition-[color] duration-300 text-[#9CA0B5] active:text-white [&.active]:text-white uppercase font-[500]">
                    <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg#icon-user"></use></svg>
                    <span>Аккаунт</span>
                </button>
            <?elseif (!$config['auth']): ?>
                <button type="button" aria-label="Аккаунт" role="button" rel="popup" data-popup="popup--sign-in" class="flex flex-col items-center justify-center flex-1 gap-1 min-[361px]:text-sm text-xs transition-[color] duration-300 text-[#9CA0B5] active:text-white [&.active]:text-white uppercase font-[500]">
                    <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg#icon-user"></use></svg>
                    <span>Аккаунт</span>
                </button>
            <?endif ?>
            <button aria-label="Ещё" role="button" @click="changeMenu(); user ? user = false : ''" x-bind:class="menu && 'active'" type="button" class="shrink-0 flex flex-col items-center justify-center flex-1 gap-1 min-[361px]:text-sm text-xs transition-[color] duration-300 text-[#9CA0B5] active:text-white group/burger [&.active]:text-white uppercase font-[500]">
                <svg class="w-[1.5rem] h-[1.5rem] rotate-180 group-[.active]/burger:rotate-0 transition-[transform]"><use xlink:href="assets/images/symbols.svg#icon-menu"></use></svg>
                <span>Ещё</span>
            </button>
        </div>
    </div>
</template>