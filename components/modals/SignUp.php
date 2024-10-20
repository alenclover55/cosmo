<div x-data="signUp" x-init="init" class="popup m-[auto_0] relative popup--sign-up hidden invisible max-w-[45rem] w-full overflow-hidden min-[631px]:rounded-[.75rem] bg-[#232537] shadow-modal" x-bind:class="{'!block !visible': modal === 'sign-up'}">
    <div class="flex min-[631px]:flex-row flex-col items-stretch">
        <div class="min-[631px]:max-w-[20rem] w-full relative p-[1.75rem]">
            <div class="relative z-[2] flex items-start text-[1.625rem] font-[600] gap-3">
                <div class="shrink-0 bg-blue h-[.25rem] w-[1.5rem] relative top-3.5"></div>
                <span class="leading-[120%]">Регистрация</span>
            </div>
            <div class="absolute min-[631px]:hidden block w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#232537_80%)] z-[1]"></div>
            <img src="assets/images/modal-auth.jpg" class="absolute left-0 top-0 w-full h-full object-cover object-top" alt="">
        </div>
        <div @keydown.enter="event" class="min-[631px]:w-[calc(100%_-_20rem)] w-full flex flex-col p-[1.5rem]">
            <div class="flex flex-col gap-5 mb-10">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Логин</span>
                    <div class="relative">
                        <input x-model="login" type="text" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите логин" autocomplete="off">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Почта</span>
                    <div class="relative">
                        <input x-model="email" type="text" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите почту" autocomplete="off">
                    </div>
                </div>
                <div class="flex flex-col gap-2" x-data="{ show: false }">
                    <span class="text-sm font-[600] text-[#8F94AB]">Пароль</span>
                    <div class="relative">
                        <button @click="show = !show" type="button" class="absolute right-0 top-0 w-[3rem] h-[3rem] flex items-center justify-center transition-[color] duration-300 text-[#565978] hover:text-[#777AA3]">
                            <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-view"></use></svg>
                            <span class="w-[1.25rem] h-[.125rem] bg-current absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 rotate-45 opacity-0 transition-[opacity] duration-150" x-bind:class="show && 'opacity-100'"></span>
                        </button>
                        <input x-model="password" :type="show ? 'text' : 'password'" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите пароль" autocomplete="off">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Капча</span>
                    <div class="flex items-stretch gap-3">
                        <div class="flex items-center justify-center text-lg font-bold" x-text="placeholderCaptcha"></div>
                        <div class="relative flex-1">
                            <input type="text" class="h-[3rem] px-5 rounded-[.375rem] bg-[#2C2E43] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" x-model="captcha" placeholder="Введите ответ" autocomplete="off">
                        </div>
                    </div>
                </div>
                <button :disabled="loader" x-data="btn" @click="eventClick(300); setTimeout(() => { event() }, 300)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Зарегестрироваться</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../ui/Loader.php' ?>
                    </div>
                </button>
                <div class="flex justify-center">
                    <span class="py-0.5 font-[600] px-2 rounded-full bg-[#33364B] text-[#8992BB] text-[.813rem]">или</span>
                </div>
                <div class="flex gap-3">
                    <button onclick="javascript:location.href='/auth/vk'" class="flex-1 flex items-center justify-center h-[3rem] rounded-[.375rem] transition-[background_,_color] duration-300 text-[#8389B5] bg-[#2C2E43] hover:bg-[#454969] hover:text-white">
                        <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-vk"></use></svg>
                    </button>
                    <button  @click="window.open('https://t.me/CosmocasinoBot?start=welcome'); modalClose(); modalShow('telegram')" class="flex-1 flex items-center justify-center h-[3rem] rounded-[.375rem] transition-[background_,_color] duration-300 text-[#8389B5] bg-[#2C2E43] hover:bg-[#454969] hover:text-white">
                        <svg class="w-5 h-5"><use xlink:href="assets/images/symbols.svg#icon-telegram"></use></svg>
                    </button>
                </div>
            </div>
            <div class="flex justify-end items-center gap-2">
                <button @click="modalClose(); modalShow('sign-in')" class="flex text-[.813rem] font-[500] transition-[color] duration-300 text-[#656C8D] hover:text-[#A2A9CD]">Войти в аккаунт</button>
            </div>
        </div>
    </div>
    <button @click="modalClose" class="popup__close absolute right-2 top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
    </button>
</div>