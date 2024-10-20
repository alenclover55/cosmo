<template x-for="(item, index) in users" :key="index">
    <div class="flex flex-col gap-3 max-[625px]:shrink-0 max-[625px]:min-w-[110px]">
        <div class="flex items-center gap-2">
            <img :src="item.photo_200" class="w-[2rem] h-[2rem] shrink-0 rounded-full object-cover" alt="">
            <div class="flex flex-col text-sm">
                <span class="font-semibold max-w-[4rem] overflow-hidden break-all text-ellipsis whitespace-nowrap" x-text="item.username"></span>
                <span class="text-[#A7B2E7] font-bold text-xs" x-text="(item.chance).toFixed() + '%'">0%</span>
            </div>
        </div>
        <div class="flex w-full relative rounded-full h-[.25rem] bg-[#546aa5]/[0.25]">
            <div class="absolute left-0 top-0 h-full bg-blue rounded-full" :style="'width:' + item.chance + '%'"></div>
        </div>
    </div>
</template>