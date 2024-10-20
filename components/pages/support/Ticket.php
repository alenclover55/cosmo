<div class="flex min-[1625px]:max-w-[49.375rem] min-[1381px]:max-w-[39.063rem] min-[1125px]:max-w-[calc(100%_-_20.125rem)] min-[751px]:max-w-[calc(100%_-_19.125rem)] max-w-full max-[750px]:transition-[transform] max-[750px]:duration-300 max-[750px]:translate-x-full w-full min-[751px]:rounded-[.75rem] min-[751px]:bg-[#222532] bg-[#1e202c] shrink-0 overflow-hidden max-[750px]:absolute max-[750px]:left-0 max-[750px]:top-0 max-[750px]:p-4 max-[750px]:h-full" x-bind:class="ticketSelect !== null ? 'max-[750px]:translate-x-0' : ''">
    <button type="button" @click="ticketSelect = null" class="absolute z-[2] left-0 top-0 w-full h-[2.25rem] text-sm  shrink-0 font-[500] gap-2 w-full bg-[#393D53] transition-[background_,_color] text-[#9CA0B5] hover:text-white duration-300 hover:bg-[#3D4158] min-[751px]:hidden flex items-center justify-center">
        <i class="w-2.5 h-2.5 border-l-2 border-b-2 rotate-45 border-current"></i>
        <span class="min-[992px]:hidden">Назад</span>
    </button>    
    <template x-if="ticketSelect !== null">
        <div 
            class="flex h-full flex-col w-full relative max-[750px]:pt-[2.25rem]"
            x-data="{ 
                loader: true,
                scrollbar: null,
                msg: '',
                destroy() {
                    setTimeout(() => {
                        this.loader = false
                    }, 300);
                }
            }" x-init="destroy"
        >
            <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center opacity-100 transition-[opacity]" x-bind:class="!loader && '!opacity-0 invisible'">
                <?php include __DIR__.'/../../ui/Loader.php' ?> 
            </div>
            <div 
                class="w-full h-full flex flex-col justify-between opacity-0 transition-[opacity]" x-bind:class="!loader && '!opacity-100'"
                x-init="scrollbar = Scrollbar.init($refs.messages, {
                    damping: 1,
                    plugins: {
                        overscroll: {
                            effect: 'glow',
                            glowColor: '#494E67'
                        }
                    },
                })
                $nextTick(() => {
                    scrollbar.setPosition(0, scrollbar.contentEl.clientHeight)
                    scrollbar.update()
                    $(window).resize(function() {
                        scrollbar.setPosition(0, scrollbar.contentEl.clientHeight)
                    });
                    function resizeScrollbar() {
                        console.log(true)
                    }
                })
                " @scrollbarUpdate.window="

                    setTimeout(() => { scrollbar.update(); scrollbar.setPosition(0, scrollbar.contentEl.clientHeight) }, 1)
                "
            >
                <div class="flex items-center justify-between min-[751px]:px-6 min-[751px]:h-[4.438rem] min-[751px]:pb-0">
                    <div class="flex flex-col max-w-full">
                        <span class="max-w-full overflow-hidden text-ellipsis whitespace-nowrap break-all min-[426px]:text-lg text-base font-[600]" x-text="ticketSelect.theme"></span>
                        <span class="min-[426px]:text-sm text-xs text-[#9CA0B5] font-[500]" x-text="ticketSelect.date"></span>
                    </div>
                    <template x-if="!ticketSelect.closed">
                        <button aria-label="Закрыть тикет" role="button" :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { closeTicket(ticketSelect.id) }, 200)" class="shrink-0 h-[3.438rem] uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2c3040]">
                            <span class="transition-[opacity] opacity-100 flex items-center gap-2" x-bind:class="loader ? '!opacity-0' : ''">
                                <svg class="w-4 h-4 text-[#4E5269]"><use xlink:href="assets/images/symbols.svg#icon-lock"></use></svg>
                                <span>Закрыть <span class="max-[425px]:hidden">тикет</span></span>
                            </span>
                            <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                                <?php include __DIR__.'/../../ui/Loader.php' ?>
                            </div>
                        </button>
                    </template>
                </div>
                <div class="min-[751px]:h-[calc(100%_-_4.438rem_-_4.688rem)] h-[calc(100%_-_4.438rem_-_3.438rem)] flex-col flex">
                    <div 
                        class="h-full w-full"
                        x-ref="messages"
                    >
                        <div class="flex flex-col gap-[1.5rem] p-[1.5rem]">
                            <template x-for="(item, index) in ticketSelect.messages" :key="index">
                                <div class="flex justify-end group/msg [&.agent]:justify-start" x-bind:class="item.isAgent && 'agent'">
                                    <div class="flex items-end gap-4 max-w-[80%] w-full justify-end group-[.agent]/msg:items-start group-[.agent]/msg:flex-row-reverse">
                                        <div class="flex flex-col items-end gap-2 group-[.agent]/msg:items-start">
                                            <div class="relative rounded-[1rem] bg-[#383B4D]">
                                                <div class="relative z-[1] p-[.75rem_1rem] text-sm" x-show="item.message">
                                                    <span x-text="item.message"></span>
                                                </div>
                                                <template x-if="item.fileUrl">
                                                    <div class="p-[.75rem_1rem]">
                                                        <img :src="item.fileUrl" alt="Вложение" class="max-w-[450px] max-h-[450px] object-cover rounded-lg block mx-auto" />
                                                    </div>
                                                </template>
                                                <img src="assets/images/arrow-msg.svg" class="absolute right-[-0.813rem] group-[.agent]/msg:right-auto group-[.agent]/msg:left-[-0.813rem] group-[.agent]/msg:rotate-180 group-[.agent]/msg:bottom-[.563rem] bottom-[.25rem]" alt="">
                                            </div>
                                            <span x-text="item.date" class="text-xs text-[#9CA0B5] font-[500]"></span>
                                        </div>
                                        <div class="shrink-0 w-[3rem] h-[3rem] rounded-full overflow-hidden">
                                            <img :src="item.avatar" class="w-full h-full object-cover">
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="shrink-0 min-[751px]:h-[4.688rem] h-[3.438rem] min-[751px]:p-3 !pt-0">
                    <template x-if="ticketSelect.closed">
                        <div class="bg-[#2D303F] rounded-[.5rem] flex items-center h-full w-full gap-3 text-lg font-[600] px-5">
                            <span>Тикет закрыт</span>
                        </div>
                    </template>
                    <template x-if="!ticketSelect.closed">
                        <div class="bg-[#2D303F] rounded-[.5rem] flex items-center h-full w-full gap-3">
                            <input type="text" x-model="msg" class="w-full h-full bg-transparent border-0 text-white text-base px-5 focus:placeholder:opacity-0 placeholder:transition-[opacity] placeholder:text-[#9CA0B5]" placeholder="Введите сообщение" autocomplete="off">
                            <div>
                                <label for="file-input-support">
                                    <svg width="28" height="28" viewBox="0 0 64 64" fill="#99c" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.9057 15.5859C44.0598 17.4299 45.6997 22.4675 43.4272 26.4035L32.1243 45.9807C30.0532 49.5679 25.4663 50.797 21.8791 48.7259C18.2919 46.6548 17.0629 42.0679 19.1339 38.4807L29.2589 20.9437C30.5706 18.6718 33.4757 17.8934 35.7476 19.2051C38.0194 20.5167 38.7978 23.4218 37.4862 25.6937L27.3612 43.2307C27.085 43.709 26.4734 43.8729 25.9951 43.5967C25.5169 43.3206 25.353 42.709 25.6291 42.2307L35.7541 24.6937C36.5135 23.3784 36.0629 21.6965 34.7476 20.9371C33.4322 20.1777 31.7504 20.6284 30.991 21.9437L20.866 39.4807C19.3472 42.1113 20.2485 45.4751 22.8791 46.9938C25.5097 48.5126 28.8735 47.6113 30.3923 44.9807L41.6951 25.4035C43.3735 22.4965 42.1623 18.7758 39.0942 17.4139L39.9057 15.5859Z" fill="currentColor"/>
                                    </svg>
                                </label>
                                <input type="file" id="file-input-support" accept="image/*" style="display:none;" @change="handleFileInput">
                            </div>
                            <div class="shrink-0 p-2 h-full">
                                <button aria-label="Отправить сообщение" role="button" :disabled="loader" @keyup.enter="eventClick(200); setTimeout(() => { sendMessage(msg, ticketSelect.id); msg = ''; }, 200)" x-data="btn" @click="eventClick(200); setTimeout(() => { sendMessage(msg, ticketSelect.id); msg = ''; }, 200)" class="h-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                                    <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Отправить</span>
                                    <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                                        <?php include __DIR__.'/../../ui/Loader.php' ?>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </template>
    <template x-if="ticketSelect === null">
        <div class="flex h-full font-[500] gap-2 w-full items-center text-center justify-center flex-col">
            <img src="assets/images/faq.svg" alt="">
            <span>Пожалуйста, выберите обращение <br> в левом списке</span>
        </div>
    </template>
</div>