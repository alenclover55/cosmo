

<div class="min-[1461px]:max-w-[23.438rem] min-[751px]:max-w-[18.125rem] max-w-full w-full flex flex-col shrink-0 gap-3 overflow-hidden">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3 font-[600] text-xl uppercase">
            <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
            <span>Ваши обращения</span>
        </div>
        <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { modalShow('support') }, 200)" class="w-[2.75rem] relative flex items-center justify-center h-[2.75rem] bg-blue transition-[color_,_background] rounded-[.375rem] duration-300 shadow-btn-blue hover:bg-[#2399EF]">
            <svg class="w-4 h-4 transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">
                <use xlink:href="assets/images/symbols.svg#icon-plus"></use>
            </svg>
            <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity] scale-[0.8]" x-bind:class="loader ? '!opacity-100' : ''">
                <?php include __DIR__.'/../../ui/Loader.php' ?>
            </div>
        </button>
    </div>
    <div class="h-full flex flex-col gap-6" x-init="const scrollbar = Scrollbar.init($refs.tickets, { damping: 1, plugins: { overscroll: { effect: 'glow', glowColor: '#494E67' } }, })" x-ref="tickets" >
        <div class="mt-2 mb-2">
            <h2 class="text-xl font-semibold mb-4">Открытые обращения</h2>
            <template x-if="openTickets.length">
                <div class="flex flex-col gap-3">
                    <template x-for="(item, index) in openTickets" :key="index">
                        <button :aria-label="item.theme" role="button" @click="selectTicket(item)" x-bind:class="ticketSelect !== null && item.theme === ticketSelect.theme ? 'active' : ''" type="button" class="flex w-full flex-col items-start gap-1 rounded-[.375rem] px-5 py-4 bg-[#222532] border border-[#222532] transition duration-300 hover:bg-[#383B4C] hover:border-[#626680] [&.active]:bg-[#383B4C] [&.active]:border-[#626680]">
                            <span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap break-all text-[.938rem] font-[600]" x-text="item.theme"></span>
                            <span class="text-xs text-[#9CA0B5] font-[500]" x-text="item.date"></span>
                        </button>
                    </template>
                </div>
            </template>
            <template x-if="!openTickets.length">
                <div class="text-gray-400 text-center">Нет открытых обращений</div>
            </template>
        </div>
        
        <div class="mt-2 mb-2">
            <h2 class="text-xl font-semibold mb-4">Закрытые обращения</h2>
            <template x-if="closedTickets.length">
                <div class="flex flex-col gap-3">
                    <template x-for="(item, index) in closedTickets" :key="index">
                        <button :aria-label="item.theme" role="button" @click="selectTicket(item)" x-bind:class="ticketSelect !== null && item.theme === ticketSelect.theme ? 'active' : ''" type="button" class="flex w-full flex-col items-start gap-1 rounded-[.375rem] px-5 py-4 bg-[#222532] border border-[#222532] transition duration-300 hover:bg-[#383B4C] hover:border-[#626680] [&.active]:bg-[#383B4C] [&.active]:border-[#626680]">
                            <span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap break-all text-[.938rem] font-[600]" x-text="item.theme"></span>
                            <span class="text-xs text-[#9CA0B5] font-[500]" x-text="item.date"></span>
                        </button>
                    </template>
                </div>
            </template>
            <template x-if="!closedTickets.length">
                <div class="text-gray-400 text-center">Нет закрытых обращений</div>
            </template>
        </div>
    </div>
</div>
