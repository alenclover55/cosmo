<div 
    class="flex flex-col max-[630px]:h-full max-[630px]:justify-between"
    x-data="{
        loader: true,
        currentMethod: null,
        sum: null,
        value: '',
        methods: [
            { image: 'assets/images/methods/mir.svg', name: 'МИР', comission: 3, parameters: { min: 2000, max: 20000 }, mask: '9999 9999 9999 9999', placeholder: 'XXXX XXXX XXXX XXXX' },
            { image: 'assets/images/methods/sbp.svg', name: 'СБП', comission: 3, sbp: true, parameters: { min: 1000, max: 50000 }, mask: '79999999999', placeholder: '+7 XXXXXXXXXX' },
            { image: 'assets/images/methods/fkwallet.svg', name: 'FKWallet', comission: 3, parameters: { min: 300, max: 20000 }, mask: 'F9999999999999999', placeholder: 'FXXXXXXXXXXXXXXXX' },
            { image: 'assets/images/methods/usdt.png', name: 'USDT TRC-20', comission: 3, parameters: { min: 1000, max: 200000 }, mask: '', placeholder: 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX' },
        ],
        currentBank: {
            name: 'Сбербанк',
            image: 'assets/images/banks/sber.svg',
            holder: 'sberbank'
        },
        banks: [
            { name: 'Сбербанк', image: 'assets/images/banks/sber.svg', holder: 'sberbank' },
            { name: 'Тинькофф Банк', image: 'assets/images/banks/tinkoff.svg', holder: 'tinkoff' },
            { name: 'Альфа Банк', image: 'assets/images/banks/alfa.svg', holder: 'alfa' },
            { name: 'ВТБ Банк', image: 'assets/images/banks/vtb.svg', holder: 'vtb' },
            { name: 'Любой банк', image: null, holder: 0 },
        ],
        selectBank(data) {
            this.currentBank = data
        },
        selectMethod(data) {
            this.currentMethod = data;
            this.sum = data.parameters.min;
            this.value = '';
        },
        withdraw() {
            if (this.value.length >= (this.currentMethod.mask ? this.currentMethod.mask.replace(/[^A-Za-z0-9]/g, '').length : 34)) {
                if (this.sum >= this.currentMethod.parameters.min) {
                    if (this.sum <= this.currentMethod.parameters.max) {
                        $.ajax({
                            type: 'POST',
                            url: 'api/script/scriptController.php',
                            data: {
                                type: 'withdraw-user-modal',
                                wallet: this.value,
                                sum: this.sum,
                                method: this.currentMethod.name, // Add method here
                                bank: this.currentMethod.sbp ? this.currentBank.holder !== 0 ? this.currentBank.holder : 0 : null,
                            },
                            success: function(data) {
                                var obj = jQuery.parseJSON(data);
                                if (obj.success == true) {
                                    new CountUp('userBalance', obj.balance, options).start(); 
                                    options.startVal = obj.balance;
                                    showToast('success', 'Успешно', 'Заявка на вывод была оформлена');
                                } else {
                                    showToast('error', 'Ошибка', obj.error_description);
                                }
                            }
                        });
                    } else {
                        showToast('error', 'Ошибка', 'Максимальная сумма вывода ' + parseDecimals(this.currentMethod.parameters.max) + ' ₽');
                    }
                } else {
                    showToast('error', 'Ошибка', 'Минимальная сумма вывода ' + parseDecimals(this.currentMethod.parameters.min) + ' ₽');
                }
            } else {
                showToast('error', 'Ошибка', 'Укажите ваши реквизиты корректно');
            }
        },
        loaderDestroy() {
            setTimeout(() => {
                this.loader = false;
            }, 200);
        },
        parseDecimals(value) {
            return value.toLocaleString('ru-RU', { minimumFractionDigits: 0 });
        }
    }"
    x-init="
        currentMethod = methods[0];
        sum = methods[0].parameters.min;
        loaderDestroy();
    "
>
    <div x-show="loader" x-transition:leave="transition-[opacity]" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute flex items-center justify-center left-0 top-0 w-full h-full flex items-center justify-center">
        <?php include __DIR__.'/../../ui/Loader.php' ?>
    </div>
    <div class="flex flex min-[631px]:flex-row flex-col min-[631px]:items-stretch justify-between gap-6 opacity-0 transition-[opacity]" x-bind:class="!loader ? '!opacity-100' : ''">
        <div class="min-[631px]:max-w-[13.75rem] max-w-full w-full flex flex-col gap-2">
            <span class="shrink-0 text-sm font-[500] text-[#8F94AB]">Выберите метод</span>
            <div
                class="flex min-[631px]:flex-col flex-row max-[630px]:overflow-auto scroll-0 gap-2 min-[631px]:h-[28.75rem] [&_div.scroll-content]:flex [&_div.scroll-content]:flex-col [&_div.scroll-content]:gap-2 [&_div.scrollbar-thumb]:!bg-[#b9bfeb]/[0.25] [&_div.scrollbar-thumb]:backdrop-blur-[10px]"
                x-init="Scrollbar.init($refs.scrollbar, {
                    damping: 0.09,
                    plugins: {
                        overscroll: {
                            effect: 'bounce',
                            glowColor: '#494E67'
                        }
                    },
                })"
                x-ref="scrollbar"
            >
                <div class="w-full h-full max-[630px]:!hidden" x-ref="scrollbar">
                    <template x-for="(item, index) in methods" :key="index">
                        <button type="button" @click="selectMethod(item)" x-bind:class="currentMethod.name === item.name ? 'active' : ''" class="shrink-0 w-full rounded-[.375rem] gap-3 flex items-center px-4 relative h-[4.375rem] transition-[background_,_color_,_border_,_box-shadow] border border-transparent duration-300 bg-[#2E3245] hover:bg-[#393C54] hover:border-[#545874] [&.active]:bg-[#393C54] [&.active]:border-[#545874]">
                            <img :src="item.image" class="shrink-0 w-[2rem] h-[2rem]" alt="">
                            <div class="flex flex-col items-start">
                                <span class="font-[600] text-base" x-text="item.name"></span>
                                <span class="font-[500] text-[.813rem] text-[#A1A7C7]" x-text="'Мин. ' + parseDecimals(item.parameters.min) + ' ₽'"></span>
                            </div>
                            <span class="absolute text-xs font-[500] right-2 top-2 text-[#A1A7C7]" x-text="item.comission + '%'"></span>
                        </button>
                    </template>
                </div>
                <div class="w-full min-[631px]:hidden flex gap-3">
                    <template x-for="(item, index) in methods" :key="index">
                        <button type="button" @click="selectMethod(item)" x-bind:class="currentMethod.name === item.name ? 'active' : ''" class="shrink-0 pr-[2.5rem] rounded-[.375rem] gap-3 flex items-center px-4 relative h-[4.375rem] transition-[background_,_color_,_border_,_box-shadow] border border-transparent duration-300 bg-[#2E3245] hover:bg-[#393C54] hover:border-[#545874] [&.active]:bg-[#393C54] [&.active]:border-[#545874]">
                            <img :src="item.image" class="shrink-0 w-[2rem] h-[2rem]" alt="">
                            <div class="flex flex-col items-start">
                                <span class="font-[600] text-base" x-text="item.name"></span>
                                <span class="font-[500] text-[.813rem] text-[#A1A7C7]" x-text="'Мин. ' + parseDecimals(item.parameters.min) + ' ₽'"></span>
                            </div>
                            <span class="absolute text-xs font-[500] right-2 top-2 text-[#A1A7C7]" x-text="item.comission + '%'"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
        <div class="min-[631px]:w-[calc(100%_-_220px)] w-full flex flex-col justify-between gap-6 max-[630px]:h-full">
            <div class="flex flex-col gap-5">
                <template x-if="currentMethod.sbp">
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-[500] text-[#8F94AB]">Выберите банк</span>
                        <div class="flex flex-wrap gap-2">
                            <template x-for="(item, index) in banks" :key="index">
                                <button @click="selectBank(item)" type="button" role="button" x-bind:class="{'active': currentBank.name === item.name}" class="flex py-1 [&.active]:border-blue [&.active]:bg-blue/[0.15] px-2 rounded-lg bg-[#2e3245] border border-transparent items-center gap-2 font-bold text-sm [&:not(.active)]:hover:bg-[#3c4159] group-[:not(.disable-animations)]/body:transition-colors group-[:not(.disable-animations)]/body:duration-300">
                                    <template x-if="item.image">
                                        <img :src="item.image" class="max-w-[1.25rem]">
                                    </template>
                                    <span x-text="item.name"></span>
                                </button>
                            </template>
                        </div>
                    </div>
                </template>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[500] text-[#8F94AB]">Укажите реквизиты</span>
                    <div class="flex flex-col gap-2">
                        <div class="relative">
                            <input type="text" x-model="value" x-mask:dynamic="currentMethod.mask" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2E3245] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" :placeholder="currentMethod.placeholder" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[500] text-[#8F94AB]">Укажите сумму вывода</span>
                    <div class="flex flex-col gap-2">
                        <div class="relative">
                            <input type="text" x-model="sum" x-mask:dynamic="$money($input, '.', '')" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2E3245] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите сумму" autocomplete="off">
                        </div>
                        <div class="flex items-stretch justify-between gap-2">
                            <button x-text="currentMethod.parameters.min" @click="sum = currentMethod.parameters.min" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">
                                
                            </button>
                            <button @click="sum = 500" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">
                                500 ₽
                            </button>
                            <button @click="sum = 1000" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">
                                1 000 ₽
                            </button>
                            <button @click="sum = 5000" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">
                                5 000 ₽
                            </button>
                            <button @click="sum = currentMethod.parameters.max" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">
                                Макс
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col">
                    <div class="w-full h-[8.75rem] text-white relative flex items-center px-[1.25rem]">
                        <div class="relative w-full z-[2] flex flex-col items-center justify-end h-full gap-1.5">
                            <div class="flex flex-col items-center pb-2">
                                <span class="text-sm text-[#B2BAE8] font-[500]">К зачислению</span>
                                <div class="flex items-center font-[600] text-[2.5rem] gap-2 drop-shadow-2xl">
                                    <svg class="w-[2rem] h-[2rem]"><use xlink:href="assets/images/symbols.svg#icon-rub"></use></svg>
                                    <span x-text="sum - (sum * currentMethod.comission / 100)">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="absolute w-full h-full left-0 top-0">
                            <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#202333_75%)] z-[1]"></div>
                            <img src="assets/images/backgrounds/night.jpg" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { withdraw() }, 200)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Оформить заявку</span>
                        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                            <?php include __DIR__.'/../../ui/Loader.php' ?>
                        </div>
                    </button>
                </div>
                <div class="flex justify-center text-center flex-wrap gap-1 min-[361px]:flex-row flex-col text-xs text-[#8A91AC] font-[500] [&_span_span]:text-white">
                    <span>Комиссия: <span x-text="currentMethod.comission + '%'"></span></span> <span class="max-[360px]:hidden">/</span> <span>Лимит одного пополнения: <span><span x-text="parseDecimals(currentMethod.parameters.min) + ' ₽'"></span> − <span x-text="parseDecimals(currentMethod.parameters.max) + ' ₽'"></span></span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function parseDecimals(value) {
        return value.toLocaleString('ru-RU', { minimumFractionDigits: 0 });
    }
</script>
