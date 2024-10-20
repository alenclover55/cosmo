<div class="relative" x-bind:class="state && 'load'" x-data="loader" x-init="destroy">
    <template x-if="state">
        <div class="absolute left-0 top-0 gap-[.75rem] w-full h-full rounded-[.375rem] bg-transparent flex z-[1] items-center pl-[.75rem] pr-[1.125rem] h-[2.875rem]">
            <div class="w-[1.5rem] h-[1.5rem] bg-[#313444] loading relative rounded-[.25rem]"></div>
            <div class="shrink-0 relative w-[.063rem] h-[1rem] bg-[#313444] loading"></div>
            <span class="w-[100px] h-[8px] bg-[#313444] relative loading rounded-full"></span>
        </div>
    </template>
    <? if ($url && !$modal): ?>
        <button aria-label="<?php echo $name ?>" role="button" data-href="<?php echo $url; ?>" x-bind:class="!state && 'opacity-100'" class="maskedLink opacity-0 flex w-full whitespace-nowrap font-[600] items-center text-[#9CA0B5] hover:text-white justify-between pl-[.75rem] pr-[1.125rem] h-[2.875rem] bg-transparent rounded-[.375rem] transition-[background_,_color_,_opacity] duration-300 hover:bg-[#313444] [&.active]:bg-blue [&.active]:text-white [&.active]:shadow-btn-blue">
            <div class="flex pointer-events-none items-center gap-[.75rem]">
                <svg class="shrink-0 w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg?v=1#<?php echo $icon; ?>"></use></svg>
                <div class="shrink-0 w-[.063rem] h-[1rem] bg-current opacity-20"></div>
                <span><?php echo $name; ?></span>
            </div>
        </button>
    <? elseif ($modal && !$url): ?>
        <button aria-label="<?php echo $name ?>" role="button" type="button" @click="modalShow('<?php echo $modal; ?>')" x-bind:class="!state && 'opacity-100'" class="flex w-full opacity-0 whitespace-nowrap font-[600] items-center text-[#9CA0B5] hover:text-white justify-between pl-[.75rem] pr-[1.125rem] h-[2.875rem] bg-transparent rounded-[.375rem] transition-[background_,_color_,_opacity] duration-300 hover:bg-[#313444] [&.active]:bg-blue [&.active]:text-white [&.active]:shadow-btn-blue">
            <div class="flex pointer-events-none items-center gap-[.75rem]">
                <svg class="shrink-0 w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg?v=1#<?php echo $icon; ?>"></use></svg>
                <div class="shrink-0 w-[.063rem] h-[1rem] bg-current opacity-20"></div>
                <span><?php echo $name; ?></span>
            </div>
        </button>
    <? endif; ?>
</div>
