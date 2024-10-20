<div class="popup m-[auto_0] relative popup--support hidden invisible max-w-[45rem] w-full overflow-hidden min-[631px]:rounded-[.75rem] bg-[#1D202D] shadow-modal" x-bind:class="{'!block !visible': modal === 'support'}">
    <div class="flex min-[631px]:flex-row flex-col items-stretch">
        <div class="min-[631px]:max-w-[20rem] max-w-full w-full relative p-[1.75rem]">
            <div class="relative z-[2] flex items-start text-[1.625rem] font-[600] gap-3">
                <div class="shrink-0 bg-blue h-[.25rem] w-[1.5rem] relative top-3.5"></div>
                <span class="leading-[120%]">Создать <br> обращение</span>
            </div>
            <div class="absolute min-[631px]:hidden block w-full h-full left-0 top-0 bg-[radial-gradient(transparent,_#232537_80%)] z-[1]"></div>
            <img src="assets/images/faq-modal.png" class="absolute left-0 top-0 w-full h-full object-cover object-top" alt="">
        </div>
        <div class="min-[631px]:w-[calc(100%_-_20rem)] w-full flex flex-col p-[1.5rem]">
            <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Тема обращения</span>
                    <div class="relative">
                        <input type="text" x-model="theme" class="h-[3rem] px-5 rounded-[.375rem] bg-[#313444] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите тему обращения" autocomplete="off">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-sm font-[600] text-[#8F94AB]">Сообщение</span>
                    <div class="relative">
                        <textarea type="text" x-model="message" class="h-[8.125rem] min-h-[8.125rem] max-h-[8.125rem] resize-none pt-3 px-5 rounded-[.375rem] bg-[#313444] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите сообщение" autocomplete="off"></textarea>
                    </div>
                </div>
                <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { createTicket() }, 200)" class="h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Создать обращение</span>
                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                        <?php include __DIR__.'/../ui/Loader.php' ?>
                    </div>
                </button>
                <div class="flex justify-center text-center text-xs text-[#6c759b]">
                    <p>* Пожалуйста, прежде чем создавать обращение, посмотрите, есть ли ответ на ваш вопрос в F.A.Q</p>
                </div>
            </div>
        </div>
    </div>
    <button @click="modalClose" class="popup__close absolute right-2 top-2 w-[2rem] h-[2rem] flex items-center justify-center transition-[color] duration-300 text-[#43485B] hover:text-white" type="button">
        <svg class="w-3 h-3"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
    </button>
</div>