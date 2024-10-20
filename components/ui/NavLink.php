<li class="relative">
    <div x-show="state" class="flex w-full h-full absolute left-0 items-center gap-[.5rem]">
        <div class="shrink-0 w-[1.5rem] h-[1.5rem] rounded-[.375rem] bg-[#373a4c] relative loading"></div>
        <span class="w-full h-[8px] rounded-full relative bg-[#373a4c] loading"></span>
    </div>
    <button aria-label="<?php echo $name ?>" role="button" data-href="<?php echo $url ?>" x-init="console.log(window.location.href)" x-bind:class="window.location.pathname === '<?php echo $url ?>' ? 'active' : '' || !state && 'opacity-100'" class="maskedLink opacity-0 flex h-full justify-center items-center gap-[.5rem] text-base font-[600] text-[#9E9EAD] transition-[color_,_opacity] duration-300 [&.active]:!opacity-100 hover:text-[#B9B9CA] group/link [&.active]:text-white">
        <svg class="shrink-0 w-[1.5rem] h-[1.5rem] text-[#75798C] transition-[color] duration-300 group-hover/link:text-[#9196AA] group-[.active]/link:text-blue"><use xlink:href="assets/images/symbols.svg#<?php echo $icon ?>"></use></svg>
        <span><?php echo $name ?></span>
        <div class="absolute left-0 bottom-0 w-full h-[3px] bg-blue opacity-0 w-0 group-[.active]/link:!w-full group-[.active]/link:!opacity-100"></div>
    </button>
</li>