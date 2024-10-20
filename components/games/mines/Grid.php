<div class="flex-1 min-[545px]:px-8 flex items-center justify-center [&.wait]:pointer-events-none max-[860px]:order-[1] max-[860px]:col-span-2" x-bind:class="state === 'pending' ? 'wait' : ''">
    <div class="min-[1391px]:w-1/2 min-[861px]:w-[70%] min-[745px]:w-[60%] min-[546px]:w-[80%] w-full flex flex-col min-[861px]:py-3">
        <div class="grid grid-cols-5 gap-3">
            <template x-for="(item, index) in grid" :key="index">
                <button aria-label="Играть" @click="mine(index + 1)" type="button" x-bind:class="{'win': item.status === 1, 'lose': item.status === 2, 'win !opacity-40': item.status === 3 }" class="grid mines-grid-item opacity-0 scale-[0.85] relative before:pt-[100%] border-[.188rem] border-[#53588d]/[0.3] [&:not(.lose):not(.win)]:hover:border-[#8990d5] [&:not(.lose):not(.win)]:hover:!scale-105 rounded-xl transition-all duration-300 backdrop-blur-sm [&.win]:border-[#39bc3c] [&.lose]:border-[#ff4a51]">
                    <template x-if="item.status === 2">
                        <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center text-[#586887] p-2">
                            <img src="assets/images/games/mines/mines.png" class="animate-[mineIconInner_1s_infinite_alternate]" alt="">
                        </div>
                    </template>
                    <template x-if="item.status === 3">
                        <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center text-[#586887] p-2">
                            <img src="assets/images/games/mines/sphere.png" class="animate-[mineIconInner_1s_infinite_alternate]" alt="">
                        </div>
                    </template>
                    <template x-if="item.status === 1">
                        <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center text-[#586887] p-2">
                            <img src="assets/images/games/mines/sphere.png" class="animate-[mineIconInner_1s_infinite_alternate]" alt="">
                        </div>
                    </template>
                    <template x-if="item.status === 0">
                        <div class="absolute left-0 top-0 w-full h-full flex items-center justify-center text-[#586887]">
                            <svg class="w-8 h-8"><use xlink:href="assets/images/symbols.svg#icon-logotype"></use></svg>
                        </div>
                    </template>
                </button>
            </template>
        </div>
    </div>
</div>