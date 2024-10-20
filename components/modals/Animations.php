<div x-bind:class="{'!block !visible': modal === 'animations'}" class="popup m-[auto_0] relative popup--animations hidden invisible max-w-[23.75rem] w-full rounded-[.75rem] bg-[#202232] shadow-modal">
    <div class="flex flex-col p-4 gap-4">
        <div class="flex justify-center flex-col gap-2 items-center text-center">
            <span class="text-2xl font-bold">Включить анимации?</span>
            <p class="text-sm text-[#a1a3b7] font-medium">Внимание! Требуется достаточно мощное устройство, на более слабых устройствах возможно наблюдение фризов, мелких лагов.</p>
        </div>
        <div class="flex-1 flex items-stretch justify-between gap-3">
            <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { enableAnimations(); modal = null  }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#2399EF] bg-blue hover:shadow-btn-blue">
                <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Включить</span>
                <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                    <?php include __DIR__.'/../../ui/Loader.php' ?>
                </div>
            </button>
            <button :disabled="loader" x-data="btn" @click="eventClick(200); setTimeout(() => { disableAnimations(); modal = null }, 100)" class="min-h-[3.438rem] flex-1 uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow] duration-300 hover:bg-[#373850] bg-[#2a2b3c]">
                <span class="transition-[opacity] opacity-100" x-bind:class="loader ? '!opacity-0' : ''">Выключить</span>
                <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 opacity-0 transition-[opacity]" x-bind:class="loader ? '!opacity-100' : ''">
                    <?php include __DIR__.'/../../ui/Loader.php' ?>
                </div>
            </button>
        </div>
    </div>
</div>