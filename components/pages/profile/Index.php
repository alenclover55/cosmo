<template x-if="tab === 0">
    <div class="flex flex-col">
        <div class="flex self-start flex-wrap -ml-2 -mr-2 min-[945px]:gap-y-6 gap-y-4 w-[calc(100%_+_1rem)] [&>div]:px-2 min-[945px]:[&>div]:w-1/2 [&>div]:w-full">
            <div>
                <div class="rounded-[.5rem] h-full w-full flex flex-col overflow-hidden relative bg-[#1D1F2C] px-6 py-6">
                    <div class="relative min-[481px]:flex-row flex-col z-[2] flex min-[481px]:items-end items-start min-[481px]:gap-0 gap-4 justify-between w-full">
                        <div class="relative z-[2] flex flex-col items-start gap-2">
                            <div class="flex flex-col items-start">
                                <span class="text-[#B3BBDF] text-base font-[500]">Ваш уровень</span>
                                <span class="text-[2rem] font-[600]"><?=$rank?> <?=$perc?>%</span>
                            </div>
                            <span class="text-[#8A91AC] text-sm font-[500]">Получайте уникальные <span class="text-white">ранговые бонусы</span></span>
                        </div>
                        <button type="button" aria-label="Уровни" role="button" @click="modalShow('levels')" class="h-[3.438rem] min-[425px]:w-fit w-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow_,_opacity] duration-300 bg-[#3D415B] hover:bg-[#454968]">
                            <span>Подробнее</span>
                        </button>
                    </div>
                    <div class="absolute w-full h-full left-0 top-0">
                        <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(50%_100%_,_transparent,_#1D1F2C_85%)] z-[1]"></div>
                        <img src="assets/images/backgrounds/circle.jpg" class="w-full h-full object-cover saturate-[0.6]">
                    </div>
                </div>
            </div>
            <div>
                <div class="rounded-[.5rem] w-full h-full flex flex-col overflow-hidden relative bg-[#1D1F2C] px-6 py-6">
                    <div class="relative min-[481px]:flex-row flex-col z-[2] flex min-[481px]:items-end items-start min-[481px]:gap-0 gap-4 justify-between w-full">
                        <div class="relative z-[2] flex flex-col items-start gap-2">
                            <div class="flex flex-col items-start">
                                <span class="text-[#B3BBDF] text-base font-[500]">Ваш кэшбэк</span>
                                <span class="text-[2rem] font-[600]"><span id="cashback"><?=round($cashback, 2)?></span> ₽</span>
                            </div>
                            <button aria-label="Снять кешбек" role="button" onclick="cashback()" type="button" class="text-sm font-[500] transition-[background_,_color] bg-[#737CB2]/[0.15] py-0.5 px-2 rounded-full text-[#CCD5FF] backdrop-blur-[15px] hover:bg-[#737CB2]/[0.25] hover:text-white">
                                Снять
                            </button>
                        </div>
                        <button aria-label="Кешбек" role="button" type="button" @click="modalShow('cashback')" class="h-[3.438rem] min-[425px]:w-fit w-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow_,_opacity] duration-300 bg-[#3D415B] hover:bg-[#454968]">
                            <span>Подробнее</span>
                        </button>
                    </div>
                    <div class="absolute w-full h-full left-0 top-0">
                        <div class="absolute w-full h-full left-0 top-0 bg-[radial-gradient(50%_100%_,_transparent,_#1D1F2C_85%)] z-[1]"></div>
                        <img src="assets/images/backgrounds/cosmos.jpg" class="w-full h-full object-cover saturate-[0.6]">
                    </div>
                </div>
            </div>
            <!-- <div class="!w-full">
                <div class="flex h-full flex-col gap-4">
                    <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
                        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
                        <span>Статистика</span>
                    </div>
                    <div class="min-[525px]:flex grid grid-cols-2 gap-4 p-5 items-center justify-between bg-[#1D1F2C] rounded-[.5rem] border border-[#505575]/[0.3]">
                        <div class="flex flex-col min-[525px]:items-start items-center">
                            <span class="text-[#CCD5FF] font-[500] text-sm">Всего ставок</span>
                            <span class="text-xl font-[600]">3 757</span>
                        </div>
                        <div class="flex flex-col min-[525px]:items-start items-center">
                            <span class="text-[#CCD5FF] font-[500] text-sm">Пополнено</span>
                            <span class="text-xl font-[600]"><?=$depositstotal?>₽</span>
                        </div>
                        <div class="flex flex-col min-[525px]:items-start items-center">
                            <span class="text-[#CCD5FF] font-[500] text-sm">Выплачено</span>
                            <span class="text-xl font-[600]"><?=$withdrawstotal?>₽</span>
                        </div>
                        <div class="flex flex-col min-[525px]:items-start items-center">
                            <span class="text-[#CCD5FF] font-[500] text-sm">Профит</span>
                            <span class="text-xl font-[600]"><?echo $withdrawstotal - $depositstotal; ?>₽</span>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- <div>
                <div class="flex h-full flex-col gap-4">
                    <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
                        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
                        <span>Двухфакторная аутентификация</span>
                    </div>
                    <div class="flex min-[525px]:flex-row flex-col min-[525px]:gap-0 gap-3 min-[525px]:text-left text-center items-center px-4 h-full justify-between bg-[#1D1F2C] min-[945px]:py-0 py-4 rounded-[.5rem] border border-[#505575]/[0.3]">
                        <div class="flex min-[525px]:flex-row flex-col items-center gap-3 text-sm font-[500]">
                            <img src="assets/images/locked.svg" alt="">
                            <p>Защитите свою учетную запись <br> дополнительным уровнем безопасности</p>
                        </div>
                        <button type="button" rel="popup" data-popup="popup--cashback" class="h-[3.438rem] min-[425px]:w-fit w-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow_,_opacity] duration-300 bg-[#3D415B] hover:bg-[#454968]">
                            <span>Подробнее</span>
                        </button>
                    </div>
                </div>
            </div> -->
            <div>
                <div class="flex h-full flex-col gap-4">
                    <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
                        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
                        <span>Общее</span>
                    </div>
                    <div class="grid min-[525px]:grid-cols-2 grid-cols-1 gap-3 px-6 justify-between bg-[#1D1F2C] p-6 rounded-[.5rem]" @keydown.enter="changeSettings()">
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Ваш логин</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input type="text" value="<?=$login?>" x-model="nickname" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите ваш логин" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Почта</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input type="text" value="<?=$email?>" id="email" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите вашу почту" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Номер телефона</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input type="text" id="phone" x-model="phone" x-mask:dynamic="'+79999999999'" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="+<?=$phone?>" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-end">
                            <button aria-label="Сохранить настройки" role="button" @click="changeSettings()" type="button" class="h-[3rem] w-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow_,_opacity] duration-300 bg-[#3D415B] hover:bg-[#454968]">
                                <span>Сохранить</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex h-full flex-col gap-4">
                    <div class="shrink-0 flex items-center gap-3 font-[600] text-xl uppercase">
                        <i class="shrink-0 w-[1.125rem] h-[1.125rem] rounded-full bg-blue shadow-btn-blue"></i>
                        <span>Безопасность</span>
                    </div>
                    <div class="grid min-[525px]:grid-cols-2 grid-cols-1 gap-3 px-6 justify-between bg-[#1D1F2C] p-6 rounded-[.5rem]" @keydown.enter="changePass()">
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Старый пароль</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input x-model="oldPass" type="password" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Старый пароль" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Новый пароль</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input x-model="newPass" type="password" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Новый пароль" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <span class="text-sm font-[500] text-[#8F94AB]">Подтверждения пароля</span>
                            <div class="flex flex-col gap-2">
                                <div class="relative">
                                    <input x-model="newPass2" type="password" class="h-[3rem] px-5 rounded-[.375rem] bg-[#272A39] text-[.938rem] w-full placeholder:text-[#A1A6BE] text-white focus:placeholder:opacity-0 placeholder:transition-[opacity]" placeholder="Введите новый пароль" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="flex items-end">
                            <button aria-label="Изменить пароль" role="button" @click="changePass()" type="button" class="h-[3rem] w-full uppercase relative font-[600] flex rounded-[.375rem] items-center justify-center text-white px-[1.75rem] transition-[background_,_box-shadow_,_opacity] duration-300 bg-[#3D415B] hover:bg-[#454968]">
                                <span>Сохранить</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>