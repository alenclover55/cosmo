<li>
    <button aria-label="<?php echo $name ?>" role="button" data-href="<?php echo $url; ?>" class="maskedLink flex w-full whitespace-nowrap font-[600] items-center text-[#9CA0B5] hover:text-white justify-between pl-[.75rem] pr-[1.125rem] h-[2.875rem] bg-transparent rounded-[.375rem] transition-[background_,_color_,_opacity] duration-300 hover:bg-[#313444] [&.active]:bg-blue [&.active]:text-white [&.active]:shadow-btn-blue">
        <div class="flex pointer-events-none items-center gap-[.75rem]">
            <svg class="shrink-0 w-[1.5rem] h-[1.5rem]"><use xlink:href="assets/images/symbols.svg#<?php echo $icon; ?>"></use></svg>
            <div class="shrink-0 w-[.063rem] h-[1rem] bg-current opacity-20"></div>
            <span><?php echo $name; ?></span>
        </div>
    </button>
</li>