<div x-data="telegramLogin" class="popup m-[auto_0] relative popup--telegram hidden invisible max-w-[45rem] w-full overflow-hidden min-[631px]:rounded-[.75rem] bg-[#232537] shadow-modal" x-bind:class="{'!block !visible': modal === 'telegram'}">
    <div class="flex items-stretch min-[631px]:flex-row flex-col">
        <div class="min-[631px]:max-w-[20rem] max-w-full w-full relative p-[1.75rem]">
            <div class="relative z-[2] flex items-start text-[1.625rem] font-[600] gap-3">
                <div class="shrink-0 bg-blue h-[.25rem] w-[1.5rem] relative top-3.5"></div>
                <span class="leading-[120%]">Telegram</span>
            </div>
            <div class="absolute min-[631px]:hidden block w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#232537_80%)] z-[1]"></div>
            <img src="assets/images/modal-auth.jpg" class="absolute left-0 top-0 w-full h-full object-cover object-top" alt="">
        </div>
        <div class="min-[631px]:w-[calc(100%_-_20rem)] w-full flex flex-col p-[1.5rem]" @keydown.enter="event()">
            <div class="flex flex-col gap-5 mb-10">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Код</span>
                    <div class="relative">
                        <input x-model="code" type="text" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите код из бота" autocomplete="off">
                    </div>
                </div>
                <button :disabled="loader" x-data="btn" @click="eventClick(300); setTimeout(() => { event() }, 300)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Далее</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../ui/Loader.php' ?>
                    </div>
                </button>
            </div>
            <div class="flex justify-end items-center gap-2">
                <button @click="modalClose(); modalShow('sign-in')" class="flex text-[.813rem] font-[500] transition-[color] duration-300 text-[#656C8D] hover:text-[#A2A9CD]">Войти в аккаунт</button>
                <div class="w-[.063rem] h-2 bg-[#393D54]"></div>
                <button @click="modalClose(); modalShow('sign-up')" class="flex text-[.813rem] font-[500] transition-[color] duration-300 text-[#656C8D] hover:text-[#A2A9CD]">Регистрация</button>
            </div>
        </div>
    </div>
    <button @click="modalClose" class="popup__close absolute right-2 top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
    </button>
</div>