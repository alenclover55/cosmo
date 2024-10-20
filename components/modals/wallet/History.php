<div 
    class="flex flex-col"
    x-data="{
        loader: true,
        loaderDestroy() {
            setTimeout(() => {
                this.loader = false;
            }, 200);
        },
        model: 'Все транзакции',
        show: false,
        transactions: [
            { name: 'Все транзакции', event: 0 },
            { name: 'Пополнения', event: 1 },
            { name: 'Выводы', event: 2 },
        ],
        selectTransaction(data) {
            this.model = data.name;
            this.show = false;
            this.filterTransactions(data.event);
        },
        items: [],
        newItems: [],
        loadTransactions() {
            $.ajax({
                type: 'POST',
                url: 'api/script/scriptController.php',
                data: { type: 'get-transactions' },
                success: (data) => {
                    const obj = jQuery.parseJSON(data);
                    if (obj.success) {
                        this.items = obj.transactions;
                        this.filterTransactions(0);
                        console.log(this.items)
                    } else {
                        showToast('error', 'Ошибка', obj.error_description);
                    }
                }
            });
        },
        filterTransactions(event) {
            this.newItems = [];
            this.$nextTick(() => {
                if(event === 0) {
                    this.newItems = this.items
                }
                if(event === 1) {
                    this.newItems = this.items.filter(el => el.type === 'deposit');
                }
                if(event === 2) {
                    this.newItems = this.items.filter(el => el.type === 'withdraw');
                }
            })
            //if (this.model === 'Все транзакции') {
                //this.newItems = this.items;
            //} else if (this.model === 'Пополнения') {
                //this.newItems = this.items.filter(item => item.type === 'deposit');
            //} else if (this.model === 'Выводы') {
                //this.newItems = this.items.filter(item => item.type === 'withdraw');
            //}
        },
        cancelWithdraw(id) {
            $.ajax({
                type: 'POST',
                url: 'api/script/scriptController.php',
                data: { type: 'delete-withdraw-user', id: id },
                success: (data) => {
                    const obj = jQuery.parseJSON(data);
                    if (obj.success) {
                        showToast('success', 'Успешно', 'Вывод отменен');
                        this.items = this.items.filter(item => item.id !== id);
                        this.filterTransactions();
                    } else {
                        showToast('error', 'Ошибка', obj.error_description);
                    }
                }
            });
        }
    }"
    x-init="
        loaderDestroy();
        loadTransactions();
        $nextTick(() => {
            tippy(document.querySelectorAll('.tooltip'), {
                animation: 'scale-subtle',
                placement: 'top',
            });
        })
    "
>
    <div x-show="loader" x-transition:leave="transition-[opacity]" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute flex items-center justify-center left-0 top-0 w-full h-full flex items-center justify-center">
        <?php include __DIR__.'/../../ui/Loader.php' ?>
    </div>
    <div class="flex flex-col gap-3 opacity-0 transition-[opacity]" x-bind:class="!loader ? '!opacity-100' : ''">
        <div class="flex relative z-[1]">
            <button @click="show = !show" @keydown.esc="show = false" type="button" class="flex items-center gap-2 text-sm font-[500] text-[#9CA0B5] transition-[color] duration-300 hover:text-[#C1C5D8]">
                <span x-text="model"></span>
                <i class="w-1.5 h-1.5 border-r-2 border-b-2 rotate-45 border-current"></i>
            </button>
            <div 
                class="absolute origin-top-left left-0 top-[calc(100%_+_5px)] bg-[#36384f] rounded-[.375rem] overflow-hidden"
                x-show="show"
                x-transition:enter="transition-[transform_,_opacity] duration-150"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition-[transform_,_opacity] duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                x-cloak
                @click.outside="show = false"
            >
                <div class="flex flex-col py-1">
                    <template x-for="(item, index) in transactions" :key="index">
                        <button type="button" @click="selectTransaction(item)" class="flex text-sm py-1 px-3 text-[#858bb1] transition-[color_,_background] hover:bg-[#40435d] duration-300 hover:text-white" x-text="item.name"></button>
                    </template>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <template x-for="(item, index) in newItems" :key="index">
                <div class="flex flex-col" x-data="{ show: false }">
                    <div class="flex items-center justify-between text-sm gap-8 bg-[#272A3C] rounded-[6px] min-[631px]:p-[.625rem_.938rem] p-[.625rem_.75rem]">
                        <div class="shrink-0 flex items-center">
                            <div class="min-[631px]:min-w-[6.875rem] min-w-[7.75rem] font-[600] text-lg flex items-center gap-2">
                                <button @click="show = !show" type="button" class="w-[1.5rem] h-[1.5rem] min-[631px]:hidden flex items-center justify-center bg-[#34374d] rounded-full" x-bind:class="show ? '!bg-blue !text-white' : ''">
                                    <i class="w-1.5 h-1.5 border-r border-b rotate-45 border-current transition-[transform_,_background_,_color]" x-bind:class="show ? 'rotate-[225deg] top-[3px]' : ''"></i>
                                </button>
                                <span x-text="item.sum + ' ₽'"></span>
                            </div>
                            <div class="flex items-center gap-2 min-w-[5rem]">
                                <template x-if="item.status == 0 && item.type == 'withdraw'">
                                    <svg class="animate-spin h-[1rem] w-[1rem] text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"></circle>
                                        <path class="opacity-75" stroke-linecap="round" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </template>
                                <span class="hidden min-[631px]:block" x-bind:class="item.status == 2 ? 'text-[#FF6868]' : '' || item.status == 1 ? 'text-[#91E06C]' : ''" x-text="item.status == 0 ? 'Ожидание' : '' || item.status == 2 ? 'Ошибка' : '' || item.status == 1 ? 'Успешно' : '' "></span>
                                <button @click="cancelWithdraw(item.id)" class="text-[#FF6868] min-[631px]:hidden" x-text="item.status == 0 ? 'Отмена' : ''"></button>
                                <template x-if="item.status == 2 && item.type == 'withdraw'">
                                    <span :data-tippy-content="item.error" class="tooltip w-[1.125rem] cursor-pointer h-[1.125rem] bg-[#3E4255] transition-[background] duration-300 hover:bg-[#4D5168] rounded-full flex items-center justify-center text-xs font-[400]">
                                        ?
                                    </span>
                                </template>
                            </div>
                        </div>
                        <div class="grow max-[630px]:hidden flex items-center justify-between">
                            <template x-if="item.type == 'deposit'">
                                <span class="w-full text-center" x-text="'Депозит: ' + item.deposit"></span>
                            </template>
                            <template x-if="item.type == 'withdraw' && item.status == 0">
                                <button @click="cancelWithdraw(item.id)" class="shrink-0 text-sm font-[500] text-[#FF6868] hidden min-[631px]:block">Отмена</button>
                            </template>
                            <span class="w-full text-center" x-text="item.date"></span>
                        </div>
                        <div class="shrink-0 text-sm font-[500] text-[#8388A5]">
                            <span x-text="'ID: #' + item.id"></span>
                        </div>
                    </div>
                    <div x-show="show" class="flex flex-wrap py-3 px-4 text-xs gap-2.5 bg-[#272a3c] relative -top-[.25rem] rounded-bl-[.375rem] rounded-br-[.375rem] text-[#a5a9c3]">
                        <span x-text="item.type == 'deposit' ? 'Депозит: ' + item.deposit : '' || item.type == 'withdraw' ? 'Вывод: ' + item.deposit : ''"></span>
                        <span x-text="'Дата: ' + item.date"></span>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
