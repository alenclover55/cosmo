<div x-bind:class="{'!block !visible': modal === 'promocode'}" class="popup m-[auto_0] relative popup--promo hidden invisible max-w-[23.75rem] w-full">
    <div class="flex flex-col gap-3">
        <span class="w-fit mx-auto text-[.813rem] font-[500] text-[#FFAF38] py-0.5 px-2 rounded-full bg-[#FFAF38]/[0.15]">Промокоды можно найти в ВК группе и в тг канале</span>
        <div class="flex flex-col relative rounded-[.75rem] bg-[#202232] shadow-modal w-full">
            <div class="w-full h-[9.375rem] relative flex justify-center items-end">
                <div class="relative px-[1.75rem] z-[2] flex flex-col items-center gap-2">
                    <img src="assets/images/promocode.svg" class="w-[15.313rem] h-[3rem]" alt="">
                </div>
                <div class="absolute left-0 top-0 w-full h-full rounded-tl-[.75rem] rounded-tr-[.75rem] overflow-hidden">
                    <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#202232_75%)] z-[1]"></div>
                    <img src="assets/images/backgrounds/cosmos.jpg" class="w-full h-full object-cover" alt="">
                </div>
            </div>
            <div class="flex flex-col p-[1.75rem] gap-[1.75rem]">
                <div class="flex flex-col max-w-[80%] w-full mx-auto gap-5">
                    <div class="flex flex-col gap-2">
                        <span class="text-sm font-[600] text-[#8F94AB]">Промокод</span>
                        <div class="relative">
                            <input type="text" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите промокод" autocomplete="off">
                        </div>
                    </div>
                    <button :disabled="loader" x-data="btn" @click="eventClick(500); setTimeout(() => { }, 500)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                        <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Активировать</span>
                        <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                            <?php include __DIR__.'/../ui/Loader.php' ?>
                        </div>
                    </button>
                </div>
            </div>
            <div class="absolute left-[10%] top-[5%] z-[1]">
                <img src="assets/images/stone.svg" class="w-[3.375rem] h-[3.375rem] parallax-1" alt="">
            </div>
            <div class="absolute right-[10%] top-[10%] z-[1]">
                <img src="assets/images/big-stone.svg" class="w-[3.375rem] h-[3.375rem] parallax-2" alt="">
            </div>
            <button @click="modalClose" class="popup__close absolute right-2 z-[1] top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
                <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
            </button>
        </div>
    </div>
</div>