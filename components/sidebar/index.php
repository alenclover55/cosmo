<?php
    function SidebarLink($filePath, $variables = array(), $print = true)
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

<div class="fixed left-0 min-[1125px]:top-0 top-[4.5rem] min-[1125px]:h-full h-[calc(100%_-_4.5rem)] z-[10] w-full pointer-events-none flex flex-col justify-between group/sidebar [&.active]:z-[9]" x-bind:class="menu && 'active'">
    <div class="flex flex-col justify-between min-[425px]:max-w-[17.5rem] max-w-full bg-[#1D1F2C] w-full h-full pointer-events-auto transition-[transform] duration-300 max-[1124px]:-translate-x-full max-[1124px]:group-[.active]/sidebar:translate-x-0 max-[1124px]:pb-[4rem]">
        <div class="h-[4.5rem] shrink-0 bg-[#222432] border-b border-b-[#2A2C3D] min-[1125px]:flex hidden items-center px-[1.25rem] gap-[1.25rem]">
            <button aria-label="Поиск игр" role="button" @click="search = !search" type="button" class="flex gap-0.5 flex-col justify-center text-[.688rem] items-center w-[2.813rem] h-[2.813rem] text-[#A2A8B0] transition-[background_,_color] duration-300 hover:bg-[#2f3140] rounded-[.438rem] hover:text-white">
                <svg x-show="!search" class="w-4 h-4 mt-1"><use xlink:href="assets/images/symbols.svg?v=1#icon-search"></use></svg>
                <svg x-show="search" x-cloak class="w-3 h-3 mt-1"><use xlink:href="assets/images/symbols.svg?v=1#icon-close"></use></svg>
                <span x-text="search ? 'Отмена' : 'Поиск'">Поиск</span>
            </button>
            <button aria-label="Главная" role="button" data-href="/" class="maskedLink"><img src="assets/images/logo.svg" class="w-[7rem] h-[2rem] object-contain" alt=""></button>
        </div>
        <div class="w-full min-[1125px]:h-[calc(100%_-_4.5rem)] h-full flex flex-col">
            <div
                class="w-full flex-1"
                x-ref="scrollbar"
                x-init="Scrollbar.init($refs.scrollbar, {
                    damping: 1,
                    plugins: {
                        overscroll: {
                            effect: 'glow',
                            glowColor: '#494E67'
                        }
                    },
                })
                "
            >
                <div class="flex-col flex relative z-[1]">
                    <div class="w-full h-[7.5rem] text-white relative flex items-center px-[1.25rem]">
                        <div class="relative z-[2] flex flex-col items-start gap-1.5">
                            <span class="uppercase font-[600] text-xl drop-shadow-xl">Luckywheel</span>
                            <button aria-label="luckywheel" role="button" data-href="/bonus" class="maskedLink flex text-sm py-0.5 px-2 rounded-[.25rem] bg-[#8b8bb9]/[0.1] backdrop-blur-[10px] text-[#b2b7e1] transition-[background_,_color] duration-300 hover:bg-[#8b8bb9]/[0.15] hover:text-white shadow-md font-[400]">Испытать удачу</button>
                        </div>
                        <div class="absolute w-full h-full left-0 top-0">
                            <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#1d1f2c_75%)] z-[1]"></div>
                            <img src="assets/images/backgrounds/cosmos.jpg" class="w-full h-full object-cover" alt="">
                        </div>
                    </div>
                    <div class="px-[1.25rem] py-4">
                        <div class="flex items-center justify-between px-4 py-3 text-sm rounded-lg bg-[#262838]">
                            <span class="font-semibold text-[#9e9ead]">Анимации:</span>
                            <button @click="changeAnimations" type="button" class="flex items-center text-xs gap-2 group/toggle" x-bind:class="{'active': animations}">
                                <span x-text="animations ? 'Вкл.' : 'Выкл.'">Вкл.</span>
                                <div class="relative w-8 h-5 rounded-full bg-[#151620] group-hover/toggle:bg-[#1d1f2c] group-[.active]/toggle:bg-blue transition-all duration-300">
                                    <div class="absolute left-1 top-1/2 -translate-y-1/2 transition-all duration-300 w-3 h-3 rounded-full bg-[#4b4e66] group-[.active]/toggle:bg-white group-[.active]/toggle:left-4"></div>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col pb-[1.25rem] px-[1.25rem] gap-[.625rem] w-full">
                        <div 
                            class="flex flex-col gap-[.625rem] border-b border-b-[#2A2C3D] last:border-0"
                            x-data="{ 
                                show: true,
                                change() {
                                    if (this.show) {
                                        this.show = false
                                        localStorage.setItem('gamesPvpList', false)
                                    } else {
                                        this.show = true
                                        localStorage.removeItem('gamesPvpList')
                                    }
                                },
                                init() {
                                    if (localStorage.getItem('gamesPvpList') === 'false') {
                                        this.show = false
                                    } else {
                                        this.show = true
                                    }
                                }
                            }"
                        >
                            <button aria-label="Наши игры" role="button" @click="change" x-bind:class="show && 'active'" type="button" class="flex group/btn font-[600] items-center text-[#9CA0B5] hover:text-white justify-between pl-[.75rem] pr-[1.125rem] h-[2.875rem] bg-transparent rounded-[.375rem] transition-[background_,_color] duration-300 hover:bg-[#313444] [&.active]:bg-blue [&.active]:text-white [&.active]:shadow-btn-blue">
                                <div class="flex items-center gap-[.75rem]">
                                    <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg?v=1#icon-games"></use></svg>
                                    <div class="w-[1.008px] h-[1rem] bg-current opacity-20"></div>
                                    <span>Наши игры</span>
                                </div>
                                <i class="w-2 h-2 border-r-2 transition-[transform_,_top] duration-300 border-b-2 rotate-45 border-current relative -top-[.125rem] group-[.active]/btn:rotate-[225deg] group-[.active]/btn:top-[2px]"></i>
                            </button>
                            <div x-ref="container" class="flex overflow-hidden flex-col gap-[.313rem] max-h-0 transition-[max-height]" x-bind:style="show ? 'max-height:' + $refs.container.scrollHeight + 'px' : 'max-height: 0px;'">
                                <div class="flex flex-col gap-[.313rem] pb-[.625rem]">
                                    
                                    <?php SidebarLink('LinkItem.php', array('url' => '/mines', 'name' => 'Мины', 'icon' => 'icon-mines', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/dice', 'name' => 'Дайс', 'icon' => 'icon-dice', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/coinflip', 'name' => 'Коинфлип', 'icon' => 'icon-coinflip', 'modal' => '')); ?>
                                    <?php // SidebarLink('LinkItem.php', array('url' => '/weather', 'name' => 'Ставки на погоду', 'icon' => 'icon-weather', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/x50', 'name' => 'Колесо', 'icon' => 'icon-x50', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/jackpot', 'name' => 'Джекпот', 'icon' => 'icon-jackpot', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/upgrade', 'name' => 'Апгрейд', 'icon' => 'icon-upgrade', 'modal' => '')); ?>
                                </div>
                            </div>
                        </div>
                        <div 
                            class="flex flex-col gap-[.625rem] border-b border-b-[#2A2C3D] last:border-0"
                            x-data="{ 
                                show: true,
                                change() {
                                    if (this.show) {
                                        this.show = false
                                        localStorage.setItem('gamesList', false)
                                    } else {
                                        this.show = true
                                        localStorage.removeItem('gamesList')
                                    }
                                },
                                init() {
                                    if (localStorage.getItem('gamesList') === 'false') {
                                        this.show = false
                                    } else {
                                        this.show = true
                                    }
                                }
                            }"
                        >
                            <button aria-label="Казино" role="button" @click="change" x-bind:class="show && 'active'" type="button" class="flex group/btn font-[600] items-center text-[#9CA0B5] hover:text-white justify-between pl-[.75rem] pr-[1.125rem] h-[2.875rem] bg-transparent rounded-[.375rem] transition-[background_,_color] duration-300 hover:bg-[#313444] [&.active]:bg-blue [&.active]:text-white [&.active]:shadow-btn-blue">
                                <div class="flex items-center gap-[.75rem]">
                                    <svg class="w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg?v=1#icon-slot"></use></svg>
                                    <div class="w-[1.008px] h-[1rem] bg-current opacity-20"></div>
                                    <span>Казино</span>
                                </div>
                                <i class="w-2 h-2 border-r-2 transition-[transform_,_top] duration-300 border-b-2 rotate-45 border-current relative -top-[.125rem] group-[.active]/btn:rotate-[225deg] group-[.active]/btn:top-[2px]"></i>
                            </button>
                            <div x-ref="container" class="flex overflow-hidden flex-col gap-[.313rem] max-h-0 transition-[max-height]" x-bind:style="show ? 'max-height:' + $refs.container.scrollHeight + 'px' : 'max-height: 0px;'">
                                <div class="flex flex-col gap-[.313rem] pb-[.625rem]">
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?favorites=true', 'name' => 'Избранное', 'icon' => 'icon-favorite-stroke', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=1', 'name' => 'Популярные', 'icon' => 'icon-new-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby', 'name' => 'Все игры', 'icon' => 'icon-all-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=0', 'name' => 'Слоты', 'icon' => 'icon-slots', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/game?id=225597', 'name' => 'Лайвы', 'icon' => 'icon-live-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=4', 'name' => 'Bonus buy', 'icon' => 'icon-bonus-games', 'modal' => '')); ?>
                                    <?php // SidebarLink('LinkItem.php', array('url' => '/lives?category=9', 'name' => 'Live игры', 'icon' => 'icon-live-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=5', 'name' => 'Instant wins', 'icon' => 'icon-instant-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=7', 'name' => 'Рулетка', 'icon' => 'icon-roulette-games', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/lobby?category=8', 'name' => 'Карточные', 'icon' => 'icon-card-games', 'modal' => '')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col border-b border-b-[#2A2C3D] last:border-0">
                            <div class="flex flex-col gap-[.313rem] pb-[.625rem]">
                                <?php SidebarLink('LinkItem.php', array('url' => '/tournaments', 'name' => 'Турниры', 'icon' => 'icon-tournaments', 'modal' => '')); ?>
                                <?if ($config['auth']): ?>
                                <?php SidebarLink('LinkItem.php', array('url' => '/bonus', 'name' => 'Бонусы', 'icon' => 'icon-bonus', 'modal' => '')); ?>
                                <?php SidebarLink('LinkItem.php', array('url' => '/partners', 'name' => 'Партнёрка', 'icon' => 'icon-partners', 'modal' => '')); ?>
                                <?endif ?>
                                <?php if($_SESSION['login']) { SidebarLink('LinkItem.php', array('url' => '/support', 'name' => 'Поддержка', 'icon' => 'icon-support', 'modal' => '')); } ?>
                                <?php SidebarLink('LinkItem.php', array('url' => '/faq', 'name' => 'F.A.Q', 'icon' => 'icon-faq', 'modal' => '')); ?>
                            </div>
                        </div>
                        <?if ($config['auth']): ?>
                            <div class="flex flex-col border-b border-b-[#2A2C3D] last:border-0">
                                <div class="flex flex-col gap-[.313rem] pb-[.625rem]">
                                    <?php SidebarLink('LinkItem.php', array('url' => '', 'name' => 'Кешбек', 'icon' => 'icon-cashback', 'modal' => 'cashback')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/bonus', 'name' => 'Промокоды', 'icon' => 'icon-promocode', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/profile', 'name' => 'Профиль', 'icon' => 'icon-user', 'modal' => '')); ?>
                                    <?php SidebarLink('LinkItem.php', array('url' => '/auth/logout', 'name' => 'Выйти', 'icon' => 'icon-logout', 'modal' => '')); ?>
                                </div>
                            </div>
                        <?endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'Search.php' ?>
