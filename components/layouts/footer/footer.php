<?php
    function menuFooter($filePath, $variables = array(), $print = true)
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
    $auth = true
?>

<footer class="bg-[#222532] flex flex-col min-[1125px]:pl-[17.5rem] max-[1124px]:pb-[5rem]">
    <div class="flex flex-col min-[1125px]:px-[2rem] px-[1rem]">
        <nav class="flex py-4 border-b border-b-[#2F3342] justify-between max-[1570px]:min-[1125px]:[&>li:not(:nth-child(-n+6))]:!hidden max-[1124px]:overflow-auto scroll-0">
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby', 'name' => 'Все игры', 'icon' => 'icon-all-games')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby?category=0', 'name' => 'Слоты', 'icon' => 'icon-slots')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby?category=4', 'name' => 'Bonus buy', 'icon' => 'icon-bonus')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/game?id=225596', 'name' => 'Live игры', 'icon' => 'icon-live-games')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby?category=5', 'name' => 'Instant wins', 'icon' => 'icon-instant-games')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby?category=5', 'name' => 'Рулетка', 'icon' => 'icon-roulette-games')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/lobby?category=8', 'name' => 'Карточные', 'icon' => 'icon-card-games')); ?>
            <?php menuFooter(__DIR__.'/FooterLink.php', array('url' => '/bonus', 'name' => 'Бонусы', 'icon' => 'icon-bonus')); ?>
        </nav>
        <div class="py-7 flex min-[701px]:flex-row min-[701px]:gap-0 gap-4 flex-col items-center justify-between">
            <div class="flex items-center gap-6 max-[700px]:justify-between max-[700px]:w-full">   
                <button aria-label="Главная" role="button" data-href="/" class="maskedLink"><img src="assets/images/logo.svg" class="w-[7rem] h-[2rem] object-contain" alt=""></button>
                <div class="flex items-center gap-3">
                    <a href="/vk_group" aria-label="Группа вк" target="_blank" class="w-[2rem] h-[2rem] flex items-center justify-center text-[#9ca0b5] rounded-[.375rem] bg-[#2d3140] transition-[background_,_color] duration-300 hover:bg-[#343848] hover:text-white">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-vk"></use></svg>
                    </a>
                    <a href="https://t.me/cosmocasino1" aria-label="Телеграмм канал" target="_blank" class="w-[2rem] h-[2rem] flex items-center justify-center text-[#9ca0b5] rounded-[.375rem] bg-[#2d3140] transition-[background_,_color] duration-300 hover:bg-[#343848] hover:text-white">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-telegram"></use></svg>
                    </a>
                    <!-- <a href="javascript:;" target="_blank" class="w-[2rem] h-[2rem] flex items-center justify-center text-[#9ca0b5] rounded-[.375rem] bg-[#2d3140] transition-[background_,_color] duration-300 hover:bg-[#343848] hover:text-white">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-youtube"></use></svg>
                    </a>
                    <a href="javascript:;" target="_blank" class="w-[2rem] h-[2rem] flex items-center justify-center text-[#9ca0b5] rounded-[.375rem] bg-[#2d3140] transition-[background_,_color] duration-300 hover:bg-[#343848] hover:text-white">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-twitch"></use></svg>
                    </a> -->
                </div>
            </div>
            <div class="min-[701px]:flex hidden items-center gap-4">
                <div class="flex items-center gap-2 text-sm text-[#9CA0B5] [&_a]:text-white">
                    <span>Поддержка:</span>
                    <a href="mailto:cosmocas312@gmail.com">cosmocas312@gmail.com</a>
                </div>
                <div class="flex items-center gap-2 text-sm text-[#9CA0B5] [&_a]:text-white">
                    <span>Партнерство:</span>
                    <a href="mailto:cosmocas312@gmail.com">cosmocas312@gmail.com</a>
                </div> 
            </div> 
        </div>
    </div>
</footer>