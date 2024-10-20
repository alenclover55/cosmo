<div class="w-full rounded-[.75rem] bg-[#222532] flex-col overflow-hidden min-[1381px]:flex hidden">
    <div class="shrink-0 flex items-center gap-3 font-[600] p-[1.75rem] text-xl uppercase">
        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
        <span>Общие вопросы</span>
    </div>
    <div 
        class="flex flex-col h-full gap-6"
        x-init="Scrollbar.init($refs.questions, {
            damping: 1,
            plugins: {
                overscroll: {
                    effect: 'glow',
                    glowColor: '#494E67'
                }
            },
        })"
        x-ref="questions"
    >
        <div class="shrink-0 flex flex-col gap-5 px-[1.75rem] mb-5 last:mb-0 pb-5 border-b border-b-[#2a2d3c] last:border-b-0">
            <div class="flex items-center gap-3">
                <div class="shrink-0 w-[3rem] h-[3rem] rounded-full flex items-center justify-center bg-[#313444]">
                    <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-user"></use></svg>
                </div>
                <div class="flex flex-col items-start">
                    <span class="text-lg font-[600]">Аккаунт</span>
                    <span class="text-sm font-[500] text-[#787C8F]">5 записей</span>
                </div>
            </div>
            <div class="flex flex-col gap-3 [&_a]:text-sm [&_a]:font-[400] [&_a]:duration-300 [&_a]:text-[#C9CDE3] [&_a]:transition-[color] hover:[&_a]:text-white">
                <a href="/info#registration">Как мне зарегестрироваться?</a>
                <a href="/info#multiaccount">Могу ли я зарегистрировать несколько аккаунтов?</a>
                <a href="/info#timezone">Как используется моя временная зона?</a>
                <a href="/info#historyoperation">Где находится история моих операций?</a>
                <a href="/info#blocked">Мой аккаунт заблокировали, что делать?</a>
            </div>
            <button data-href="/info#account" class="maskedLink flex gap-2 items-center text-base font-[600] text-[#C9CDE3] transition-[color] duration-300 hover:text-white">
                <span>Показать все</span>
                <i class="w-2 h-2 border-r-2 border-b-2 -rotate-45 border-current"></i>
            </button>
        </div>
        <div class="shrink-0 flex flex-col gap-5 px-[1.75rem] mb-5 last:mb-0 pb-5 border-b border-b-[#2a2d3c] last:border-b-0">
            <div class="flex flex-col gap-[1.5rem]">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-[3rem] h-[3rem] rounded-full flex items-center justify-center bg-[#313444]">
                        <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-wallet"></use></svg>
                    </div>
                    <div class="flex flex-col items-start">
                        <span class="text-lg font-[600]">Платежи и выплаты</span>
                        <span class="text-sm font-[500] text-[#787C8F]">6 записей</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3 [&_a]:text-sm [&_a]:font-[400] [&_a]:duration-300 [&_a]:text-[#C9CDE3] [&_a]:transition-[color] hover:[&_a]:text-white">
                    <a href="/info#howpay">Как пополнить баланс?</a>
                    <a href="/info#withhelp">Как вывести средства?</a>
                    <a href="/info#methodpay">Какие способы доступны для пополнения и вывода?</a>
                    <a href="/info#historyoperation">Как быстро зачисляются деньги на баланс?</a>
                    <a href="/info#howlongwith">Как быстро происходит вывод средств?</a>
                    <a href="/info#nopay">Произвел оплату, но деньги на баланс не зачислились, что делать?</a>
                </div>
            </div>
            <button data-href="/info#wallet" class="maskedLink flex gap-2 items-center text-base font-[600] text-[#C9CDE3] transition-[color] duration-300 hover:text-white">
                <span>Показать все</span>
                <i class="w-2 h-2 border-r-2 border-b-2 -rotate-45 border-current"></i>
            </button>
        </div>
        <div class="shrink-0 flex flex-col gap-5 px-[1.75rem] mb-5 last:mb-0 pb-5 border-b border-b-[#2a2d3c] last:border-b-0">
            <div class="flex flex-col gap-[1.5rem]">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-[3rem] h-[3rem] rounded-full flex items-center justify-center bg-[#313444]">
                        <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-bonus"></use></svg>
                    </div>
                    <div class="flex flex-col items-start">
                        <span class="text-lg font-[600]">Бонусная программа</span>
                        <span class="text-sm font-[500] text-[#787C8F]">5 записей</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3 [&_a]:text-sm [&_a]:font-[400] [&_a]:duration-300 [&_a]:text-[#C9CDE3] [&_a]:transition-[color] hover:[&_a]:text-white">
                    <a href="/info#bonus">Какие бонусы я могу получить?</a>
                    <a href="/info#promocodeactivate">Как активировать промо-код?</a>
                    <a href="/info#searchpromo">Где можно найти актуальные промо-коды?</a>
                    <a href="/info#bonusvk">Как получить бонус за вступление в группу ВКонтакте?</a>
                    <a href="/info#bonusvkmessages">Как получить бонус за подписку на рассылку от группы ВКонтакте?</a>
                </div>
            </div>
            <button data-href="/info#bonus" class="maskedLink flex gap-2 items-center text-base font-[600] text-[#C9CDE3] transition-[color] duration-300 hover:text-white">
                <span>Показать все</span>
                <i class="w-2 h-2 border-r-2 border-b-2 -rotate-45 border-current"></i>
            </button>
        </div>
        <div class="shrink-0 flex flex-col gap-5 px-[1.75rem] mb-5 last:mb-0 pb-5 border-b border-b-[#2a2d3c] last:border-b-0">
            <div class="flex flex-col gap-[1.5rem]">
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-[3rem] h-[3rem] rounded-full flex items-center justify-center bg-[#313444]">
                        <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-partners"></use></svg>
                    </div>
                    <div class="flex flex-col items-start">
                        <span class="text-lg font-[600]">Партнерка</span>
                        <span class="text-sm font-[500] text-[#787C8F]">4 записи</span>
                    </div>
                </div>
                <div class="flex flex-col gap-3 [&_a]:text-sm [&_a]:font-[400] [&_a]:duration-300 [&_a]:text-[#C9CDE3] [&_a]:transition-[color] hover:[&_a]:text-white">
                    <a href="/info#partner">Как происходят выплаты комиссионных начислений?</a>
                    <a href="/info#stats">Как часто обновляется статистика?</a>
                    <a href="/info#linkref">Будет ли работать рекламная ссылка, если домен сайта заблокируют?</a>
                    <a href="/info#blogers">Есть ли альтернативные варианты сотрудничества с сайтом?</a>
                </div>
            </div>
            <button data-href="/info#partner" class="maskedLink flex gap-2 items-center text-base font-[600] text-[#C9CDE3] transition-[color] duration-300 hover:text-white">
                <span>Показать все</span>
                <i class="w-2 h-2 border-r-2 border-b-2 -rotate-45 border-current"></i>
            </button>
        </div>
    </div>
</div>