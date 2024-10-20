<div x-bind:class="{'!opacity-100 !visible pointer-events-auto': modal !== null}" class="overlayed fixed backdrop-blur-[3px] top-0 left-0 w-full h-full z-[2000] bg-[#0D0F17]/[0.85] overflow-auto opacity-0 invisible transition-all duration-200 flex justify-center min-[631px]:px-[1.5rem] min-[631px]:py-[1.5rem] min-[875px]:py-[3rem]">
    <template x-if="modal === 'sign-in'">
        <?php include __DIR__.'/modals/SignIn.php' ?>
    </template>
    <template x-if="modal === 'sign-up'">
        <?php include __DIR__.'/modals/SignUp.php' ?>
    </template>
    <template x-if="modal === 'recover'">
        <?php include __DIR__.'/modals/Recover.php' ?>
    </template>
    <template x-if="modal === 'telegram'">
        <?php include __DIR__.'/modals/Telegram.php' ?>
    </template>
    <template x-if="modal === 'animations'">
        <?php include __DIR__.'/modals/Animations.php' ?>
    </template>
    <?if ($config['auth']): ?>
        <template x-if="modal === 'levels'">
            <?php include __DIR__.'/modals/Levels.php' ?>
        </template>
        <template x-if="modal === 'cashback'">
            <?php include __DIR__.'/modals/Cashback.php' ?>
        </template>
        <template x-if="modal === 'promocode'">
            <?php include __DIR__.'/modals/Promocode.php' ?>
        </template>
        <template x-if="modal === 'wallet'">
            <?php include __DIR__.'/modals/wallet/Index.php' ?>
        </template>
        <?php
            $url = $_SERVER['REQUEST_URI'];
            $url = explode('?', $url);
            $url = $url[0];
        ?>
        <?if ($url === '/support'): ?>
            <template x-if="modal === 'support'">
                <?php include __DIR__.'/modals/Support.php' ?>
            </template>
        <?endif ?>
    <?endif ?>
</div>