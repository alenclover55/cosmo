<div class="popup m-[auto_0] relative popup--cashback hidden invisible max-w-[23.75rem] w-full rounded-[.75rem] bg-[#202232] shadow-modal" x-bind:class="{'!block !visible': modal === 'cashback'}">
    <div class="w-full h-[9.375rem] relative flex justify-center items-end">
        <div class="relative px-[1.75rem] z-[2] flex flex-col items-center gap-2">
            <img src="assets/images/cashback.svg" class="w-[12.313rem] h-[2.563rem]" alt="">
        </div>
        <div class="absolute left-0 top-0 w-full h-full rounded-tl-[.75rem] rounded-tr-[.75rem] overflow-hidden">
            <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#202232_75%)] z-[1]"></div>
            <img src="assets/images/backgrounds/cosmos.jpg" class="w-full h-full object-cover" alt="">
        </div>
    </div>
    <div class="flex flex-col text-center p-[1.75rem] gap-[1.75rem]">
        <div class="flex flex-col items-center gap-3">
            <div class="text-3xl text-center font-[600]">
                <span><span id="cashbackModal" x-text="parseDecimals(<?=$cashback?>)"></span> <span class="text-blue">₽</span></span>
            </div>
            <button onclick="cashback()" :disabled="loader" x-data="btn" @click="eventClick(300); setTimeout(() => {  }, 300)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Снять кэшбек</span>
                <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                    <?php include __DIR__.'/../ui/Loader.php' ?>
                </div>
            </button>
        </div>
        <p class="text-[.688rem] font-medium text-[#8A91AC] leading-[140%]">* Кэшбэк автоматически рассчитывается в зависимости от проигрыша с момента получения предыдущего кэшбека или с момента регистрации. Кешбэк можно забрать только 3 числа каждого месяца.</p>
    </div>
    <button @click="modalClose" class="popup__close absolute right-2 z-[1] top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
    </button>
    <div class="absolute left-[10%] top-0 z-[1]">
        <img src="assets/images/stone.svg" class="w-[3.375rem] h-[3.375rem] parallax-1" alt="">
    </div>
    <div class="absolute right-[10%] top-[10%] z-[1]">
        <img src="assets/images/big-stone.svg" class="w-[3.375rem] h-[3.375rem] parallax-2" alt="">
    </div>
</div>