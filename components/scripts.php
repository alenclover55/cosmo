<script src="api/script/countup.js"></script>       
<script src="assets/js/app.js"></script>
<script src="assets/js/modal.js"></script>
<script src="assets/js/smooth-scrollbar.js"></script>
<script src="assets/js/plugins/overscroll.js"></script>
<script src="assets/js/parallax-mouse.min.js"></script>
<script src="assets/js/swiped-events.min.js"></script>
<script src="assets/js/gradient.js" type="module"></script>

<script src="assets/js/core.js"></script>
<script src='assets/js/wNumb.min.js'></script>

<script>
    Scrollbar.use(window.OverscrollPlugin);
    Scrollbar.initAll({
        damping: 1,
        plugins: {
            overscroll: {
                effect: 'glow',
                glowColor: '#3f4255'
            }
        },
    });
</script>

<script src="api/script/script.js?v=<?=time()?>"></script>
