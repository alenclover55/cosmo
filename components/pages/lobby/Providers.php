<template x-if="show">
    <div 
        class="flex flex-col min-[1125px]:px-[2rem] px-[1rem]"
        x-data="{
            loader: true,
            destroy() {
                setTimeout(() => { this.loader = false }, 1000)
            },
            providers: [
                { image: '41.webp', games: 36, provider: 'Evolution'}, { image: '43.webp', games: 410, provider: 'Pragmatic Play' }, { image: '1.webp', games: 63, provider: '3oaks' }, { image: '2.webp', games: 272, provider: 'netent' }, { image: '4.webp', games: 4, provider: 'YggDrasil'},
                { image: '13.webp', games: 63, provider: 'Novomatic Deluxe'}, { image: '15.webp', games: 41, provider: 'igrosoft' },
                { image: 'relax1.webp', games: 69, provider: 'relax'}, { image: 'spinomenal.webp', games: 82, provider: 'spinomenal'},
                { image: 'amatic.webp', games: 79, provider: 'amatic'}, { image: 'egt.webp', games: 55, provider: 'egt'},  { image: 'habanero.webp', games: 7, provider: 'habanero'},
                { image: 'merkur.webp', games: 3, provider: 'merkur'}, { image: 'pgsoft.webp', games: 59, provider: 'pgsoft'}, { image: 'playngo.webp', games: 72, provider: 'Playn GO'},
                { image: 'push.webp', games: 14, provider: 'pushgaming'}, { image: 'quickspin.webp', games: 15, provider: 'quickspin'}, { image: 'redtiger.webp', games: 171, provider: 'redtiger'},
                { image: 'ruby.webp', games: 27, provider: 'rubyplay'}, { image: 'wazdan.webp', games: 76, provider: 'wazdan'},
            ],
        }" x-init="destroy"
    >
        <div class="-ml-[.375rem] -mr-[.375rem] flex flex-wrap gap-y-[.75rem] w-[calc(100%_+_.75rem)] [&>div]:px-[.375rem] min-[1591px]:[&>div]:w-[calc(100%_/_8)] min-[848px]:[&>div]:w-[calc(100%_/_7)] min-[591px]:[&>div]:w-[calc(100%_/_5)] [&>div]:w-[calc(100%_/_3)]">
            <div>
                <button @click="navigateToLobby" data-href="/lobby" class="w-full grid before:pt-[100%] rounded-[.375rem] group/provider overflow-hidden relative bg-[#1D1F2C] hover:bg-[#272939] hover:shadow-slot-card hover:-translate-y-[5px] transition-[background_,_box-shadow_,_transform] duration-300">
                    <template x-if="loader">
                        <div class="absolute loading left-0 top-0 w-full h-full"></div>
                    </template>
                    <div class="absolute left-0 top-0 w-full h-full flex items-center text-2xl font-[500] justify-center p-4 transition-[opacity] duration-300 opacity-0" x-bind:class="!loader && '!opacity-100'">
                        <span>Все</span>
                        <span class="absolute right-3 top-3 text-sm font-[500] text-[#A7AFBF]">2727 игр</span>
                    </div>
                </button>
            </div>

            <script>
                function navigateToLobby() {
                    window.location.href = '/lobby';
                }
            </script>

            <template x-for="(item, index) in providers" :key="index">
                <div>
                    <button :aria-label="item.provider" role="button" @click="loadGamesProvider(item)" class="w-full grid before:pt-[100%] rounded-[.375rem] group/provider overflow-hidden relative bg-[#1D1F2C] hover:bg-[#272939] hover:shadow-slot-card hover:-translate-y-[5px] transition-[background_,_box-shadow_,_transform] duration-300">
                        <template x-if="loader">
                            <div class="absolute loading left-0 top-0 w-full h-full"></div>
                        </template>
                        <div @click="loadProvider(item.provider)" class="absolute left-0 top-0 w-full h-full flex items-center justify-center p-4 transition-[opacity] duration-300 opacity-0" x-bind:class="!loader && '!opacity-100'">
                            <img :src="'assets/images/providers/' + item.image" class="transition-[filter] duration-300" alt="">
                            <span class="absolute right-3 top-3 text-sm font-[500] text-[#A7AFBF]" x-text="item.games + ' игр'"></span>
                        </div>
                    </button>
                </div>
            </template>
        </div>
    </div>
</template>