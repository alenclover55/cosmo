<?php
    function menu($filePath, $variables = array(), $print = true)
    {
        extract($variables);

        ob_start();

        include $filePath;

        $output = ob_get_clean();
        if (!$print) {
            return $output;
        }
        echo $output;
    }
?>

<header x-data="loader" x-init="destroy" class="fixed right-0 top-0 min-[1125px]:w-[calc(100%_-_17.5rem)] w-full h-[4.5rem] bg-[#222432] border-b border-b-[#2A2C3D] gap-4 flex items-stretch justify-between min-[1125px]:pl-[1.875rem] pl-[1rem] z-[10]">
    <div class="flex items-center gap-8">
        <div class="min-[1125px]:hidden flex items-center gap-3">
            <button data-href="/" aria-label="Главная" role="button" class="maskedLink max-[360px]:w-[1.625rem] max-[360px]:overflow-hidden"><img src="assets/images/logo.svg" class="min-[361px]:w-[7rem] h-[2rem] max-[360px]:max-w-fit object-contain" alt=""></button>
            <button @click="search = !search" type="button" aria-label="Поиск игр" role="button" class="shrink-0 flex gap-0.5 flex-col justify-center text-[.688rem] items-center w-[2.813rem] h-[2.813rem] text-[#A2A8B0] transition-[background_,_color] duration-300 hover:bg-[#2f3140] rounded-[.438rem] hover:text-white">
                <svg x-show="!search" class="w-4 h-4 mt-1"><use xlink:href="assets/images/symbols.svg#icon-search"></use></svg>
                <svg x-show="search" x-cloak class="w-3 h-3 mt-1"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
                <span x-text="search ? 'Отмена' : 'Поиск'">Поиск</span>
            </button>
        </div>
        <ul class="min-[1125px]:flex hidden h-full items-stretch gap-[1.875rem]">
            <?php menu(__DIR__.'/../../../components/ui/NavLink.php', array('url' => '/lobby', 'name' => 'Слоты', 'icon' => 'icon-slots')); ?>
            <?php menu(__DIR__.'/../../../components/ui/NavLink.php', array('url' => '/game?id=225597', 'name' => 'Live игры', 'icon' => 'icon-live-games')); ?>
            <?php if($_SESSION['login']) { menu(__DIR__.'/../../../components/ui/NavLink.php', array('url' => '/bonus', 'name' => 'Бонусы', 'icon' => 'icon-bonus')); } ?>
            <?php menu(__DIR__.'/../../../components/ui/NavLink.php', array('url' => '/tournaments', 'name' => 'Турниры', 'icon' => 'icon-tournaments')); ?>
        </ul>
    </div>
    <div class="flex items-center gap-4">
        <?if ($config['auth']): ?>
            <?php include 'UserCard.php' ?>
        <?elseif (!$config['auth']): ?>
            <div class="flex items-center gap-3 min-[1125px]:pr-[1.875rem] pr-[1rem]">
                <button :disabled="loader" aria-label="Войти" role="button" x-data="btn" @click="eventClick(200); setTimeout(() => { modalShow('sign-in') }, 200)" type="button" class="relative flex items-center font-[500] text-[#A7AFBF] justify-center h-[2.5rem] rounded-[.375rem] bg-[#313343] transition-[color_,_background] duration-300 hover:bg-[#383a4d] hover:text-white px-5">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Войти</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../../ui/Loader.php' ?>
                    </div>
                </button>
                <button :disabled="loader" aria-label="Регистрация" role="button" x-data="btn" @click="eventClick(200); setTimeout(() => { modalShow('sign-up') }, 200)" type="button" class="relative flex items-center font-[500] text-white justify-center h-[2.5rem] rounded-[.375rem] shadow-btn-blue bg-blue transition-[color_,_background_,_border] duration-300 hover:bg-[#2399EF] px-5">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Регистрация</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../../ui/Loader.php' ?>
                    </div>
                </button>
            </div>
        <?endif ?>
    </div>
</header>