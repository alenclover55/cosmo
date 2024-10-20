<div 
    class="flex flex-col max-[630px]:h-full max-[630px]:justify-between"
    x-data="paymentData()"
    x-init="
        loaderDestroy();
    "
>
    <div x-show="loader" x-transition:leave="transition-[opacity]" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute flex items-center justify-center left-0 top-0 w-full h-full">
        <?php include __DIR__.'/../../ui/Loader.php' ?>
    </div>
    <div class="flex flex min-[631px]:flex-row flex-col min-[631px]:items-stretch justify-between gap-6 opacity-0 transition-[opacity] max-[630px]:h-full" x-bind:class="!loader ? '!opacity-100' : ''">
        <div class="min-[631px]:max-w-[13.75rem] max-w-full w-full flex flex-col gap-2">
            <span class="shrink-0 text-sm font-[500] text-[#8F94AB]">Выберите метод</span>
            <div
                class="flex min-[631px]:flex-col flex-row max-[630px]:overflow-auto scroll-0 gap-2 min-[631px]:h-[28.75rem] [&_div.scroll-content]:flex [&_div.scroll-content]:flex-col [&_div.scroll-content]:gap-2 [&_div.scrollbar-thumb]:!bg-[#b9bfeb]/[0.25] [&_div.scrollbar-thumb]:backdrop-blur-[10px]"
                x-init="const scrollbar = Scrollbar.init($refs.scrollbar, {
                    damping: 0.09,
                    plugins: {
                        overscroll: {
                            effect: 'bounce',
                            glowColor: '#494E67'
                        }
                    },
                })"
            >
                <div class="w-full h-full max-[630px]:!hidden" x-ref="scrollbar">
                    <template x-for="(item, index) in methods" :key="index">
                        <button type="button" @click="selectMethod(item)" x-bind:class="currentMethod ? currentMethod.name === item.name ? 'active' : '' : ''" class="shrink-0 w-full rounded-[.375rem] gap-3 flex items-center px-4 relative h-[4.375rem] transition-[background_,_color_,_border_,_box-shadow] border border-transparent duration-300 bg-[#2E3245] hover:bg-[#393C54] hover:border-[#545874] [&.active]:bg-[#393C54] [&.active]:border-[#545874]">
                            <img :src="item.image" class="shrink-0 w-[2rem] h-[2rem]" alt="">
                            <div class="flex flex-col items-start">
                                <span class="font-[600] text-base" x-text="item.name ? item.name : ''"></span>
                                <span class="font-[500] text-[.813rem] text-[#A1A7C7]" x-text="item.parameters.min ? 'Мин. ' + parseDecimals(item.parameters.min) + ' ₽' : ''"></span>
                            </div>
                            <span class="absolute text-xs font-[500] right-2 top-2 text-[#A1A7C7]" x-text="item.comission ? item.comission + '%' : ''"></span>
                        </button>
                    </template>
                </div>
                <div class="w-full min-[631px]:hidden flex gap-3">
                    <template x-for="(item, index) in methods" :key="index">
                        <button type="button" @click="selectMethod(item)" x-bind:class="currentMethod ? currentMethod.name === item.name ? 'active' : '' : ''" class="shrink-0 pr-[2.5rem] rounded-[.375rem] gap-3 flex items-center px-4 relative h-[4.375rem] transition-[background_,_color_,_border_,_box-shadow] border border-transparent duration-300 bg-[#2E3245] hover:bg-[#393C54] hover:border-[#545874] [&.active]:bg-[#393C54] [&.active]:border-[#545874]">
                            <img :src="item.image" class="shrink-0 w-[2rem] h-[2rem]" alt="">
                            <div class="flex flex-col items-start">
                                <span class="font-[600] text-base" x-text="item.name ? item.name : ''"></span>
                                <span class="font-[500] text-[.813rem] text-[#A1A7C7]" x-text="item.parameters.min ? 'Мин. ' + parseDecimals(item.parameters.min) + ' ₽' : ''"></span>
                            <span class="absolute text-xs font-[500] right-2 top-2 text-[#A1A7C7]" x-text="item.comission ? item.comission + '%' : ''"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
        <div class="min-[631px]:w-[calc(100%_-_220px)] w-full flex flex-col justify-between gap-6 max-[630px]:h-full">
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[500] text-[#8F94AB]">Укажите сумму пополнения</span>
                    <div class="flex flex-col gap-2">
                        <div class="relative">
                            <input type="text" x-model="sum" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2E3245] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите сумму" autocomplete="off">
                        </div>
                        <div class="flex items-stretch justify-between gap-2">
                            <button x-text="currentMethod.parameters.min + ' ₽'" @click="sum = currentMethod.parameters.min" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button"></button>
                            <button @click="sum = 500" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">500 ₽</button>
                            <button @click="sum = 1000" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">1 000 ₽</button>
                            <button @click="sum = 5000" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">5 000 ₽</button>
                            <button @click="sum = currentMethod.parameters.max" class="grow flex items-center justify-center rounded-[.375rem] transition-[border_,_background_,_color] duration-300 border border-transparent bg-[#2E3245] hover:bg-[#393C54] text-[#8991B8] hover:text-white hover:border-[#545874] h-[2.375rem] font-[500] text-[.813rem]" type="button">Макс</button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[500] text-[#8F94AB]">Введите промокод (если есть)</span>
                    <div class="flex flex-col gap-2">
                        <div class="relative">
                            <input type="text" x-model="promo" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2E3245] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите промокод" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col">
                    <div class="w-full h-[8.75rem] text-white relative flex items-center px-[1.25rem]">
                        <div class="relative w-full z-[2] flex flex-col items-center justify-end h-full gap-1.5">
                            <div class="flex items-center gap-3 pb-4">
                                <div class="flex items-center font-[600] text-[2.5rem] gap-2 drop-shadow-2xl">
                                    <svg class="w-[2rem] h-[2rem] text-[#7B87AA]"><use xlink:href="assets/images/symbols.svg#icon-ticket"></use></svg>
                                    <span x-text="Math.floor(sum / 500)">0</span>
                                </div>
                                <span class="text-sm text-[#B2BAE8] font-[500]">(1 тикет = 500₽)</span>
                            </div>
                        </div>
                        <div class="absolute w-full h-full left-0 top-0">
                            <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#202333_75%)] z-[1]"></div>
                            <img src="assets/images/backgrounds/night.jpg" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { pay() }, 200)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Пополнить баланс</span>
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
    function paymentData() {
        return {
            loader: true,
            currentMethod: null,
            sum: 500,
            promo: '',
            methods: [],
            
            init() {
                this.fetchPaymentMethods();
            },
            
            fetchPaymentMethods() {
                $.ajax({
                    type: 'POST',
                    url: 'api/script/scriptController.php',
                    data: { type: 'methods-modal-user' },
                    success: (response) => {
                        const data = JSON.parse(response);
                        console.log(data);
                        if (data.success) {
                            this.methods = data.methods;
                            if (this.methods.length > 0) {
                                this.currentMethod = this.methods[0];
                                this.sum = this.currentMethod.parameters.min;
                            }
                            this.loader = false;
                        } else {
                            showToast('error', 'Ошибка!', 'Не удалось загрузить методы оплаты.');
                        }
                    }
                });
            },

            selectMethod(data) {
                this.currentMethod = data;
                this.sum = data.parameters.min;
            },

            pay() {
                let min = parseFloat(this.currentMethod.parameters.min);
                let max = parseFloat(this.currentMethod.parameters.max);
                let sum = parseFloat(this.sum);

                if (isNaN(sum) || isNaN(min) || isNaN(max)) {
                    showToast('error', 'Ошибка', 'Некорректные данные для суммы или лимитов.');
                    return;
                }

                if (sum < min) {
                    showToast('error', 'Ошибка', 'Минимальная сумма пополнения ' + min + ' ₽');
                } else if (sum > max) {
                    showToast('error', 'Ошибка', 'Максимальная сумма пополнения ' + max + ' ₽');
                } else {
                    showToast('info', 'Ожидание', 'Перенаправляем вас на страницу оплаты...');
                    this.deposit();
                }
            },

            deposit() {
                $.ajax({
                    type: 'POST',
                    url: 'api/script/scriptController.php',
                    data: {
                        type: "deposit-modal-user",
                        size: this.sum,
                        system: this.currentMethod.holder,
                        promo: this.promo
                    },
                    success: function(data) {
                        var obj = jQuery.parseJSON(data);
                        if (obj.success == true) {
                            showToast('success', 'Успешно!', 'Переходим...');
                            setTimeout(function() {
                                window.location.href = obj.locations;
                            }, 800);
                        } else {
                            return showToast('error', 'Ошибка!', obj.error_description);
                        } 
                    }
                });
            },

            parseDecimals(value) {
                return parseFloat(value).toFixed(0);
            }
        }
    }
</script>
