x-data="{
    search: false,
    menu: false,
    modal: null,
    mobileUserCard: false,
    changeMenu() {
        if (this.menu) {
            this.menu = false
            document.body.classList.remove('overflow-hidden')
        } else {
            this.menu = true
            document.body.classList.add('overflow-hidden')
        }
    },
    user: false,
    changeUser() {
        if(this.user) {
            this.user = false
        } else {
            this.user = true
        }   
    },
    animations: true,
    initAnimations() {
        if(localStorage.getItem('animations') === 'disabled') {
            this.animations = false
        } else {
            this.animations = true
        }
        if(localStorage.getItem('animations') === null && localStorage.getItem('animations') !== 'enabled') {
            this.modal = 'animations'
        }
    },
    changeAnimations(data) {
        if(this.animations) {
            this.animations = false
            localStorage.setItem('animations', 'disabled')
        } else {
            this.animations = true
            localStorage.setItem('animations', 'enabled')
        }
    },
    enableAnimations() {
        this.animations = true
        localStorage.setItem('animations', 'enabled')
    },
    disableAnimations() {
        this.animations = false
        localStorage.setItem('animations', 'disabled')
    },
    modalShow(data) {
        this.modal = data
    },
    modalClose() {
        this.modal = null
    },
    <?if ($config['auth']): ?>
        balance: <?=$balance?>,
        updateBalance(data) {
            new CountUp('userBalance', data, options).start(); 
            options.startVal = data;
        },
    <?endif ?>
}"

x-on:resize.window="window.innerWidth >= 1125 ? mobileUserCard = false : mobileUserCard = true"

x-init="
    initAnimations(); 
    <?if ($config['auth']): ?> updateBalance(<?=$balance?>); <?endif ?>
    if(window.innerWidth <= 1125) {
        mobileUserCard = true
    } 
"

x-bind:class="{'disable-animations [&_*:not(.animate-event)]:!transition-none [&_*:not(.animate-event)]:!duration-0': animations === false}"

class="
    [&_img]:pointer-events-none [&_img]:select-none group/body
    font-sans bg-[#131521] h-full
    [&_span]:cursor-default [&_p]:cursor-default [&_b]:cursor-default [&_li]:cursor-default [&_h1]:cursor-default [&_h2]:cursor-default [&_h3]:cursor-default [&_h4]:cursor-default [&_h5]:cursor-default [&_h6]:cursor-default
    text-white [&_li]:list-none
    focus:[&_*]:ring-0 focus:[&_*]:ring-inherit focus:[&_*]:outline-0
    overflow-x-hidden min-w-[320px] [&_button_span]:pointer-events-none [&_a_span]:pointer-events-none
    [&_canvas]:pointer-events-none select-none parallax
"