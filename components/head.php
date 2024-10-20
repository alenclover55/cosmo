<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="verification" content="7e83722522e8aeb7512b7075311316b7" />
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <link rel="preload" href="assets/css/styles.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/css/toastr.min.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="assets/fonts/OpenSansCondensed/stylesheet.css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <script defer src="assets/js/alpine@3.10.5/mask@3.11.1/cdn.min.js"></script>
    <script defer src="assets/js/alpine@3.10.5/cdn.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <link rel="preload" href="assets/css/swiper-bundle.min.css" as="style" onload="this.rel='stylesheet'"/>
    <script src="assets/js/smooth-scrollbar.js"></script>
    <link rel="preload" href="assets/css/simple-scrollbar.min.css" as="style" onload="this.rel='stylesheet'">
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/tippy-bundle.umd.min.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <link rel="preload" href="assets/css/scale-subtle.css" as="style" onload="this.rel='stylesheet'">
    <script src="assets/js/socket.io-1.4.5.js"></script>
    <title>Крути и зарабатывай | <?=$sitename?></title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blue: '#0083E1',
                    },
                    fontFamily: {
                        sans: ['Rubik'],
                        opensans: ['Open Sans Condensed']
                    },
                    boxShadow: {
                        'btn-blue': '0px 12px 19px -4px rgba(7, 119, 200, 0.16)',
                        'slot-card': '0px 3px 85px 30px rgba(0,0,0,0.25)',
                        'modal': '0px 0px 73px 6px #11131C'
                    }
                }
            }
        }
    </script>
    <style>
        body {
            user-select: text !important; /* Разрешаем выделение текста */
        }
    </style>
    <script>
        document.onselectstart = null; 
        window.oncontextmenu = null; 
    </script>
</head>