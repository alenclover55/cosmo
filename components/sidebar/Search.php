<template x-if="search">
    <div 
        class="fixed right-0 min-[1125px]:top-0 top-[4.5rem] min-[1125px]:w-[calc(100%_-_17.5rem)] w-full min-[1125px]:h-full h-[calc(100%_-_4.5rem)] z-[10] flex justify-start pointer-events-none opacity-0 transition-[opacity] duration-300"
        x-bind:class="searchInner && 'pointer-events-auto opacity-100'"
        x-data="{
            model: '',
            slots: [],
            searchInner: false,
            timeout: null,
            loader: false,
            input() {
                clearTimeout(this.timeout);
                this.loader = true;
                this.timeout = setTimeout(() => {
                    if (this.model.trim() !== '') {
                        this.loadSlots();
                    } else {
                        this.slots = []; // Reset or set default state when the search is cleared
                    }
                    this.loader = false;
                }, 600);
                console.log(this.model);
            },
            loadSlots() {
                worker.postMessage({url: 'script/search.php', type: 'load-slots-user', value: this.model});
                worker.onmessage = (event) => {
                    var obj = event.data
                    if (obj.success === true) {
                        this.slots = obj.massive;
                    } else {
                        showToast('error', 'Ошибка!', obj.error_description);
                    }
                }
            },
            init() {
                setTimeout(() => {
                    this.searchInner = true
                },150)
            }
        }" x-init="init"
    >
        <div
            x-show="searchInner" x-cloak
            x-transition:enter="transition-[transform_,_opacity] duration-300"
            x-transition:enter-start="opacity-0 -translate-x-[1.5rem]"
            x-transition:enter-end="opacity-100 translate-x-0"
            x-transition:leave="transition-[transform_,_opacity] duration-300"
            x-transition:leave-start="opacity-100 translate-x-0"
            x-transition:leave-end="opacity-0 -translate-x-[1.5rem]"
            class="relative gap-4 justify-between h-full text-white max-w-[26.25rem] w-full bg-[#262836] z-[1] min-[1125px]:rounded-tr-[.75rem] min-[1125px]:rounded-br-[.75rem] flex flex-col px-[1.563rem] pt-[1.563rem]"
        >
            <div class="shrink-0 flex font-[500] text-xl items-center justify-between">
                <span>Поиск игр</span>
                <button aria-label="Закрыть поиск игр" role="button" @click="search = false; model = ''" type="button" class="flex transition-[color] duration-300 text-[#6B7089] hover:text-white">
                    <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-close"></use></svg>
                </button>
            </div>
            <div class="w-full h-[calc(100%_-_1.75rem_-_1rem)] flex flex-col gap-4">
                <div class="relative">
                    <div class="w-[3rem] h-[3rem] text-[#82869F] absolute left-0 top-0 flex items-center justify-center">
                        <svg class="w-4 h-4"><use xlink:href="assets/images/symbols.svg#icon-search"></use></svg>
                    </div>
                    <input x-model="model" @input="input" class="h-[3rem] pl-[3rem] rounded-[.375rem] bg-[#1e202c] font-medium text-sm w-full placeholder:text-[#82869F] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" type="text" autocomplete="off" placeholder="Например: Sweet Bonanza">
                </div>
                <template x-if="model">
                    <div class="w-full h-[calc(100%_-_3rem_-_1rem)] [&_div.scrollbar-thumb]:!bg-[#b9bfeb]/[0.5] [&_div.scrollbar-thumb]:backdrop-blur-[10px]">
                        <template x-if="!loader">
                            <div 
                                class="w-full h-full rounded-[.375rem]"
                                x-init="Scrollbar.init($refs.scrollbar, {
                                    damping: 1,
                                    plugins: {
                                        overscroll: {
                                            effect: 'glow',
                                            glowColor: '#494E67'
                                        }
                                    },
                                })"
                                x-ref="scrollbar"
                            >
                                <div class="flex pb-[1.875rem] flex-wrap -ml-2 -mr-2 gap-y-4 w-[calc(100%_+_1rem)] [&>div]:px-2 [&>div]:w-1/3">
                                    <template x-for="(item, index) in slots" :key="index">
                                        <div>
                                        <div class="w-full relative h-[9.375rem] group/slot hover:z-[2]">
                                                <div class="absolute left-0 top-0 w-full h-full group-hover/slot:!h-[calc(100%_+_1.5rem)] bg-[#494E67] rounded-[.375rem] transition-[height_,_box-shadow] duration-300 hover:shadow-slot-card">
                                                    <button :aria-label="item.name" role="button" @click="document.location.href = item.url" type="button" class="absolute left-0 top-0 w-full h-full flex items-start rounded-[.375rem] overflow-hidden">
                                                        <template x-if="item.badge">
                                                            <span class="absolute uppercase z-[1] border-r-[.25rem] border-b-[.25rem] -skew-x-[10deg] border-r-[#2b2d3c] border-b-[#2b2d3c] -left-[.125rem] top-0 rounded-tl-[6px] text-[.688rem] px-2 font-[500] rounded-br-[.625rem]" x-text="item.badge.name" :style="'background:' + item.badge.color"></span>
                                                        </template>
                                                        <div class="absolute left-0 top-0 rounded-[.375rem] w-full h-full bg-[#494E67]/[0.8] backdrop-blur-[10px] z-[1] transition-[opacity] duration-300 opacity-0 group-hover/slot:opacity-100"></div>
                                                        <img :src="item.image" class="w-full object-cover object-top group-hover/slot:grayscale transition-[filter] duration-300">
                                                    </button>
                                                    <div class="absolute left-0 top-0 z-[2] p-[.5rem] pointer-events-none w-full h-full flex flex-col rounded-[.375rem] justify-between opacity-0 transition-[opacity_,_border] border-transparent border group-hover/slot:border-[#535664] group-hover/slot:!opacity-100 rounded-[.375rem]">
                                                        <button aria-label="Играть" role="button" type="button" @click="document.location.href = item.url" class="flex-1 flex items-center justify-center pointer-events-auto">
                                                            <svg class="w-[2rem] h-[2rem] hover:scale-110 transition-[transform] duration-300"><use xlink:href="assets/images/symbols.svg#icon-play"></use></svg>
                                                        </button>
                                                        <div class="shrink-0 flex flex-col text-[.813rem] gap-2">
                                                            <div class="flex items-end justify-between">
                                                                <div class="flex flex-col max-w-full items-start">
                                                                    <span class="font-[500] whitespace-nowrap max-w-full text-ellipsis overflow-hidden break-all" x-text="item.name"></span>
                                                                    <span class="text-[.688rem] opacity-70 whitespace-nowrap max-w-full text-ellipsis overflow-hidden break-all" x-text="item.provider"></span>
                                                                </div>
                                                            </div>
                                                            <button aria-label="Играть" role="button" type="button" @click="document.location.href = item.url" class="w-full flex items-center justify-center pointer-events-auto text-xs h-[1.5rem] transition-[background] hover:text-white hover:shadow-btn-blue duration-300 hover:bg-blue rounded-[.25rem] text-black font-[600] bg-white">
                                                                Играть
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </template>
                        <template x-if="loader">
                            <div class="w-full h-full flex items-center justify-center">
                                <?php include __DIR__.'/../../components/ui/Loader.php' ?>
                            </div>
                        </template>
                    </div>
                </template>
                <template x-if="!model">
                    <div class="flex h-full font-[500] gap-2 w-full items-center justify-center flex-col">
                        <svg class="w-[3.375rem] h-[3.375rem]"><use xlink:href="assets/images/symbols.svg#icon-warning"></use></svg>
                        <span>Начните вводить название игры</span>
                    </div>
                </template>
            </div>
        </div>
        <div @click="searchInner = false; setTimeout(() => { search = false }, 150)" class="absolute left-0 top-0 w-full h-full bg-[#0D0F17]/[0.75] backdrop-blur-[5px]"></div>
    </div>
</template>