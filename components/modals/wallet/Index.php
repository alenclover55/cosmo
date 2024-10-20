<div
    class="popup m-[auto_0] relative popup--wallet hidden invisible min-[631px]:max-w-[42.5rem] max-w-full w-full max-[630px]:h-full"
    x-data="{ 
        tab: 0,
    }"
    @click.outside="setTimeout(() => { tab = 0 }, 300)"
    x-bind:class="{'!block !visible': modal === 'wallet'}"
>
    <div class="flex flex-col gap-3 h-full">        
        <div class="flex flex-col relative min-[631px]:rounded-[.75rem] bg-[#202232] h-full shadow-modal w-full">
            <div class="flex items-stretch justify-between h-[3.5rem] bg-[#272A3C] min-[631px]:rounded-tl-[.75rem] min-[631px]:rounded-tr-[.75rem] overflow-hidden">
                <div class="flex items-stretch">
                    <button type="button" @click="tab = 0" x-bind:class="tab === 0 ? 'active' : ''" class="flex items-center justify-center px-5 gap-2 transition-[background_,_color] font-[600] text-[.938rem] duration-300 text-[#8A91AC] [&.active]:bg-[#2F3346] [&.active]:text-white hover:text-[#BAC2E0] group/tab">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-plus"></use></svg>
                        <span class="max-[360px]:hidden max-[360px]:group-[.active]/tab:!block">Депозит</span>
                    </button>   
                    <button type="button" @click="tab = 1" x-bind:class="tab === 1 ? 'active' : ''" class="flex items-center justify-center px-5 gap-2 transition-[background_,_color] font-[600] text-[.938rem] duration-300 text-[#8A91AC] [&.active]:bg-[#2F3346] [&.active]:text-white hover:text-[#BAC2E0] group/tab">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-minus"></use></svg>
                        <span class="max-[360px]:hidden max-[360px]:group-[.active]/tab:!block">Вывод</span>
                    </button>
                    <button type="button" @click="tab = 2" x-bind:class="tab === 2 ? 'active' : ''" class="flex items-center justify-center px-5 gap-2 transition-[background_,_color] font-[600] text-[.938rem] duration-300 text-[#8A91AC] [&.active]:bg-[#2F3346] [&.active]:text-white hover:text-[#BAC2E0] group/tab">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-history"></use></svg>
                        <span class="max-[360px]:hidden max-[360px]:group-[.active]/tab:!block">История</span>
                    </button>
                </div>
                <button @click="modalClose(); setTimeout(() => { tab = 0 }, 300)" class="z-[1] w-[3.5rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
                    <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
                </button>
            </div>
            <div class="w-full flex flex-col p-5 max-[630px]:h-full max-[630px]:overflow-auto">
                <template x-if="tab === 0">
                    <div class="h-full w-full">
                        <?php include __DIR__.'/Deposit.php' ?>
                    </div>
                </template>
                <template x-if="tab === 1">
                    <div class="h-full w-full">
                        <?php include __DIR__.'/Withdraw.php' ?>
                    </div>
                </template>
                <template x-if="tab === 2">
                    <div class="h-full w-full">
                        <?php include __DIR__.'/History.php' ?>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>