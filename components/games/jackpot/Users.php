<div class="flex flex-col min-[626px]:w-1/3 gap-4">
    <div class="flex items-center gap-3 font-[600] text-xl uppercase">
        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
        <span>В раунде</span>
    </div>
    <div class="flex flex-col flex-1 rounded-xl bg-[#546aa5]/[0.1] backdrop-blur-[1.875rem] p-5">
        <template x-if="users.length">
            <div class="min-[626px]:grid flex flex-row grid-cols-2 gap-5 max-[625px]:overflow-auto scroll-0">
                <?php include __DIR__.'/User.php' ?>
            </div>
        </template>
        <template x-if="!users.length">
            <div class="flex items-center justify-center flex-1">
                <span class="loader-wheel-txt font-[500] whitespace-nowrap text-[#A7B2E7]">Ожидание игроков...</span>
            </div>
        </template>
    </div>
</div>