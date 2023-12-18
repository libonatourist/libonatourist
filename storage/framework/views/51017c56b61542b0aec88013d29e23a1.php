<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title><?php echo e($place->name); ?> - Libona Tour</title>
    <meta name='robots' content='max-image-preview:large' />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-WLqgxwNKR7Ur8XM+uBxpY2OXm7mRWcxX9l5X37AZ5b5KV8SdYY9Qqg9k1zGhiZL1IIuz2KtO3Q6vwRJ5f1OInw=="
        crossorigin="anonymous" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/libonatourist.x10.mx\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://libonatour.x10.mx/wp-includes/css/dist/block-library/style.min.css?ver=6.3.2' type='text/css'
        media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='https://libonatour.x10.mx/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.1'
        type='text/css' media='all' />
    <link rel='stylesheet' id='listeo_core-frontend-css'
        href='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/css/frontend.css?ver=1.8.09'
        type='text/css' media='all' />
    <link rel='stylesheet' id='listeo-core-fullcalendar-css'
        href='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/css/fullcalendar.min.css?ver=1.0'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='wpcf-swiper-css'
        href='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/css/swiper-bundle.min.css?ver=2.5.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-carousel-free-fontawesome-css'
        href='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/css/font-awesome.min.css?ver=2.5.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wpcf-fancybox-popup-css'
        href='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/css/jquery.fancybox.min.css?ver=2.5.8'
        type='text/css' media='all' />
    <link rel='stylesheet' id='wp-carousel-free-css'
        href='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/css/wp-carousel-free-public.min.css?ver=2.5.8'
        type='text/css' media='all' />
    <style id='wp-carousel-free-inline-css' type='text/css'>
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .wpcp-single-item {
            border: 1px solid #dddddd;
        }

        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-prev,
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-next,
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-prev:hover,
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-next:hover {
            background: none;
            border: none;
            font-size: 30px;
        }

        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-prev i,
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-next i {
            color: #aaa;
        }

        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-prev i:hover,
        #sp-wp-carousel-free-id-417.sp-wpcp-417 .swiper-button-next i:hover {
            color: #178087;
        }

        #sp-wp-carousel-free-id-417.sp-wpcp-417 .wpcp-swiper-dots .swiper-pagination-bullet {
            background-color: #cccccc;
        }

        #sp-wp-carousel-free-id-417.sp-wpcp-417 .wpcp-swiper-dots .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: #178087;
        }

        @media screen and (max-width: 479px) {
            #sp-wp-carousel-free-id-417.nav-vertical-center {
                padding: 0;
                margin: 0;
            }

            #sp-wp-carousel-free-id-417.nav-vertical-center .wpcp-next-button,
            #sp-wp-carousel-free-id-417.nav-vertical-center .wpcp-prev-button {
                display: none;
            }
        }

        #sp-wp-carousel-free-id-417 .wpcpro-row>[class*="wpcpro-col-"] {
            padding: 0 10px;
            padding-bottom: 20px;
        }

        @media (min-width: 480px) {
            .wpcpro-row .wpcpro-col-sm-1 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .wpcpro-row .wpcpro-col-sm-2 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .wpcpro-row .wpcpro-col-sm-2-5 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .wpcpro-row .wpcpro-col-sm-3 {
                flex: 0 0 33.333%;
                max-width: 33.333%;
            }

            .wpcpro-row .wpcpro-col-sm-4 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .wpcpro-row .wpcpro-col-sm-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .wpcpro-row .wpcpro-col-sm-6 {
                flex: 0 0 16.66666666666667%;
                max-width: 16.66666666666667%;
            }

            .wpcpro-row .wpcpro-col-sm-7 {
                flex: 0 0 14.28571428%;
                max-width: 14.28571428%;
            }

            .wpcpro-row .wpcpro-col-sm-8 {
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }
        }

        @media (max-width: 480px) {
            .wpcpro-row .wpcpro-col-xs-1 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .wpcpro-row .wpcpro-col-xs-2 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .wpcpro-row .wpcpro-col-xs-3 {
                flex: 0 0 33.222%;
                max-width: 33.222%;
            }

            .wpcpro-row .wpcpro-col-xs-4 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .wpcpro-row .wpcpro-col-xs-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .wpcpro-row .wpcpro-col-xs-6 {
                flex: 0 0 16.6667%;
                max-width: 16.6667%;
            }

            .wpcpro-row .wpcpro-col-xs-7 {
                flex: 0 0 14.28571428%;
                max-width: 14.28571428%;
            }

            .wpcpro-row .wpcpro-col-xs-8 {
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }
        }

        @media (min-width: 736px) {
            .wpcpro-row .wpcpro-col-md-1 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .wpcpro-row .wpcpro-col-md-2 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .wpcpro-row .wpcpro-col-md-2-5 {
                flex: 0 0 75%;
                max-width: 75%;
            }

            .wpcpro-row .wpcpro-col-md-3 {
                flex: 0 0 33.333%;
                max-width: 33.333%;
            }

            .wpcpro-row .wpcpro-col-md-4 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .wpcpro-row .wpcpro-col-md-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .wpcpro-row .wpcpro-col-md-6 {
                flex: 0 0 16.66666666666667%;
                max-width: 16.66666666666667%;
            }

            .wpcpro-row .wpcpro-col-md-7 {
                flex: 0 0 14.28571428%;
                max-width: 14.28571428%;
            }

            .wpcpro-row .wpcpro-col-md-8 {
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }
        }

        @media (min-width: 980px) {
            .wpcpro-row .wpcpro-col-lg-1 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .wpcpro-row .wpcpro-col-lg-2 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .wpcpro-row .wpcpro-col-lg-3 {
                flex: 0 0 33.222%;
                max-width: 33.222%;
            }

            .wpcpro-row .wpcpro-col-lg-4 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .wpcpro-row .wpcpro-col-lg-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .wpcpro-row .wpcpro-col-lg-6 {
                flex: 0 0 16.6667%;
                max-width: 16.6667%;
            }

            .wpcpro-row .wpcpro-col-lg-7 {
                flex: 0 0 14.28571428%;
                max-width: 14.28571428%;
            }

            .wpcpro-row .wpcpro-col-lg-8 {
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }
        }

        @media (min-width: 1200px) {
            .wpcpro-row .wpcpro-col-xl-1 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .wpcpro-row .wpcpro-col-xl-2 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .wpcpro-row .wpcpro-col-xl-3 {
                flex: 0 0 33.22222222%;
                max-width: 33.22222222%;
            }

            .wpcpro-row .wpcpro-col-xl-4 {
                flex: 0 0 25%;
                max-width: 25%;
            }

            .wpcpro-row .wpcpro-col-xl-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }

            .wpcpro-row .wpcpro-col-xl-6 {
                flex: 0 0 16.66667%;
                max-width: 16.66667%;
            }

            .wpcpro-row .wpcpro-col-xl-7 {
                flex: 0 0 14.28571428%;
                max-width: 14.28571428%;
            }

            .wpcpro-row .wpcpro-col-xl-8 {
                flex: 0 0 12.5%;
                max-width: 12.5%;
            }
        }
    </style>
    <link rel='stylesheet' id='bootstrap-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/css/bootstrap-grid.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/css/all.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-shims-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/css/v4-shims.min.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='simple-line-icons-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/css/simple-line-icons.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='listeo-woocommerce-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/css/woocommerce.min.css?ver=6.3.2' type='text/css'
        media='all' />
    <link rel='stylesheet' id='listeo-style-css'
        href='https://libonatour.x10.mx/wp-content/themes/listeo/style.css?ver=2' type='text/css' media='all' />
    <style id='listeo-style-inline-css' type='text/css'>
        input[type='checkbox'].switch_1:checked,
        .time-slot input:checked~label:hover,
        div.datedropper:before,
        div.datedropper .pick-submit,
        div.datedropper .pick-lg-b .pick-sl:before,
        div.datedropper .pick-m,
        body.no-map-marker-icon .face.front,
        body.no-map-marker-icon .face.front:after,
        div.datedropper .pick-lg-h {
            background-color: #f91942 !important;
        }

        #booking-date-range-enabler:after,
        .nav-links div a:hover,
        #posts-nav li a:hover,
        .hosted-by-title a:hover,
        .sort-by-select .select2-container--default .select2-selection--single .select2-selection__arrow b:after,
        .claim-badge a i,
        .search-input-icon:hover i,
        .listing-features.checkboxes a:hover,
        div.datedropper .pick-y.pick-jump,
        div.datedropper .pick li span,
        div.datedropper .pick-lg-b .pick-wke,
        div.datedropper .pick-btn,
        #listeo-coupon-link,
        .total-discounted_costs span,
        .widget_meta ul li a:hover,
        .widget_categories ul li a:hover,
        .widget_archive ul li a:hover,
        .widget_recent_comments ul li a:hover,
        .widget_recent_entries ul li a:hover,
        .booking-estimated-discount-cost span {
            color: #f91942 !important;
        }

        .comment-by-listing a:hover,
        .browse-all-user-listings a i,
        .hosted-by-title h4 a:hover,
        .style-2 .trigger.active a,
        .style-2 .ui-accordion .ui-accordion-header-active:hover,
        .style-2 .ui-accordion .ui-accordion-header-active,
        #posts-nav li a:hover,
        .plan.featured .listing-badge,
        .post-content h3 a:hover,
        .add-review-photos i,
        .show-more-button i,
        .listing-details-sidebar li a,
        .star-rating .rating-counter a:hover,
        .more-search-options-trigger:after,
        .header-widget .sign-in:hover,
        #footer a,
        #footer .footer-links li a:hover,
        #navigation.style-1 .current,
        #navigation.style-1 ul li:hover a,
        .user-menu.active .user-name:after,
        .user-menu:hover .user-name:after,
        .user-menu.active .user-name,
        .user-menu:hover .user-name,
        .main-search-input-item.location a:hover,
        .chosen-container .chosen-results li.highlighted,
        .input-with-icon.location a i:hover,
        .sort-by .chosen-container-single .chosen-single div:after,
        .sort-by .chosen-container-single .chosen-default,
        .panel-dropdown a:after,
        .post-content a.read-more,
        .post-meta li a:hover,
        .widget-text h5 a:hover,
        .about-author a,
        button.button.border.white:hover,
        a.button.border.white:hover,
        .icon-box-2 i,
        button.button.border,
        a.button.border,
        .style-2 .ui-accordion .ui-accordion-header:hover,
        .style-2 .trigger a:hover,
        .plan.featured .listing-badges .featured,
        .list-4 li:before,
        .list-3 li:before,
        .list-2 li:before,
        .list-1 li:before,
        .info-box h4,
        .testimonial-carousel .slick-slide.slick-active .testimonial:before,
        .sign-in-form .tabs-nav li a:hover,
        .sign-in-form .tabs-nav li.active a,
        .lost_password:hover a,
        #top-bar .social-icons li a:hover i,
        .listing-share .social-icons li a:hover i,
        .agent .social-icons li a:hover i,
        #footer .social-icons li a:hover i,
        .headline span i,
        vc_tta.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active a,
        .vc_tta.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active a,
        .tabs-nav li.active a,
        .wc-tabs li.active a.custom-caption,
        #backtotop a,
        .trigger.active a,
        .post-categories li a,
        .vc_tta.vc_tta-style-tabs-style-3.vc_general .vc_tta-tab a:hover,
        .vc_tta.vc_tta-style-tabs-style-3.vc_general .vc_tta-tab.vc_active a,
        .wc-tabs li a:hover,
        .tabs-nav li a:hover,
        .tabs-nav li.active a,
        .wc-tabs li a:hover,
        .wc-tabs li.active a,
        .testimonial-author h4,
        .widget-button:hover,
        .widget-text h5 a:hover,
        a,
        a.button.border,
        a.button.border.white:hover,
        button.button.border,
        button.button.border.white:hover,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active>a,
        #add_payment_method .cart-collaterals .cart_totals tr th,
        .woocommerce-cart .cart-collaterals .cart_totals tr th,
        .woocommerce-checkout .cart-collaterals .cart_totals tr th,
        #add_payment_method table.cart th,
        .woocommerce-cart table.cart th,
        .woocommerce-checkout table.cart th,
        .woocommerce-checkout table.shop_table th,
        .uploadButton .uploadButton-button:before,
        .time-slot input~label:hover,
        .time-slot label:hover span,
        #titlebar.listing-titlebar span.listing-tag a,
        .booking-loading-icon {
            color: #f91942;
        }

        .listing-details li i {
            background-color: #f9194226;
            color: #f91942;
        }

        body .icon-box-2 svg g,
        body .icon-box-2 svg circle,
        body .icon-box-2 svg rect,
        body .icon-box-2 svg path,
        body .listeo-svg-icon-box-grid svg g,
        body .listeo-svg-icon-box-grid svg circle,
        body .listeo-svg-icon-box-grid svg rect,
        body .listeo-svg-icon-box-grid svg path,
        .listing-type:hover .listing-type-icon svg g,
        .listing-type:hover .listing-type-icon svg circle,
        .listing-type:hover .listing-type-icon svg rect,
        .listing-type:hover .listing-type-icon svg path,
        .marker-container .front.face svg g,
        .marker-container .front.face svg circle,
        .marker-container .front.face svg rect,
        .marker-container .front.face svg path {
            fill: #f91942;
        }

        .qtyTotal,
        .mm-menu em.mm-counter,
        .mm-counter,
        .category-small-box:hover,
        .option-set li a.selected,
        .pricing-list-container h4:after,
        #backtotop a,
        .chosen-container-multi .chosen-choices li.search-choice,
        .select-options li:hover,
        button.panel-apply,
        .layout-switcher a:hover,
        .listing-features.checkboxes li:before,
        .comment-by a.comment-reply-link:hover,
        .add-review-photos:hover,
        .office-address h3:after,
        .post-img:before,
        button.button,
        .booking-confirmation-page a.button.color,
        input[type="button"],
        input[type="submit"],
        a.button,
        a.button.border:hover,
        button.button.border:hover,
        table.basic-table th,
        .plan.featured .plan-price,
        mark.color,
        .style-4 .tabs-nav li.active a,
        .style-5 .tabs-nav li.active a,
        .dashboard-list-box .button.gray:hover,
        .change-photo-btn:hover,
        .dashboard-list-box a.rate-review:hover,
        input:checked+.slider,
        .add-pricing-submenu.button:hover,
        .add-pricing-list-item.button:hover,
        .custom-zoom-in:hover,
        .custom-zoom-out:hover,
        #geoLocation:hover,
        #streetView:hover,
        #scrollEnabling:hover,
        .code-button:hover,
        .category-small-box-alt:hover .category-box-counter-alt,
        #scrollEnabling.enabled,
        #mapnav-buttons a:hover,
        #sign-in-dialog .mfp-close:hover,
        .button.listeo-booking-widget-apply_new_coupon:before,
        #small-dialog .mfp-close:hover,
        .daterangepicker td.end-date.in-range.available,
        .radio input[type='radio']+label .radio-label:after,
        .radio input[type='radio']:checked+label .radio-label,
        .daterangepicker .ranges li.active,
        .day-slot-headline,
        .add-slot-btn button:hover,
        .daterangepicker td.available:hover,
        .daterangepicker th.available:hover,
        .time-slot input:checked~label,
        .daterangepicker td.active,
        .daterangepicker td.active:hover,
        .daterangepicker .drp-buttons button.applyBtn,
        .uploadButton .uploadButton-button:hover {
            background-color: #f91942;
        }

        .rangeslider__fill,
        span.blog-item-tag,
        .testimonial-carousel .slick-slide.slick-active .testimonial-box,
        .listing-item-container.list-layout span.tag,
        .tip,
        .search .panel-dropdown.active a,
        #getDirection:hover,
        .home-search-slide h3 a:before,
        .home-search-slide h3 strong:before,
        .loader-ajax-container,
        .mfp-arrow:hover {
            background: #f91942;
        }

        .icon-box-v3 .ibv3-icon i,
        .icon-box-v3 .ibv3-icon svg g,
        .icon-box-v3 .ibv3-icon svg circle,
        .icon-box-v3 .ibv3-icon svg rect,
        .icon-box-v3 .ibv3-icon svg path {
            fill: #f91942;
        }

        #titlebar.listing-titlebar span.listing-tag {
            background: #f9194212;
        }

        .ibv3-icon {
            background: #f9194210;
        }

        .icon-box-v3:hover .ibv3-icon {
            background: #f91942;
            box-shadow: 0 3px 8px #f9194250;
        }

        .radio input[type='radio']:checked+label .radio-label,
        .rangeslider__handle {
            border-color: #f91942;
        }

        .layout-switcher a.active {
            color: #f91942;
            border-color: #f91942;
        }

        #titlebar.listing-titlebar span.listing-tag a,
        #titlebar.listing-titlebar span.listing-tag {
            border-color: #f91942;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .single-service .qtyInc:hover,
        .single-service .qtyDec:hover,
        .services-counter,
        .listing-slider .slick-next:hover,
        .listing-slider .slick-prev:hover {
            background-color: #f91942;
        }

        .single-service .qtyInc:hover,
        .single-service .qtyDec:hover {
            -webkit-text-stroke: 1px #f91942;
        }

        .listing-nav-container.cloned .listing-nav li:first-child a.active,
        .listing-nav-container.cloned .listing-nav li:first-child a:hover,
        .listing-nav li:first-child a,
        .listing-nav li a.active,
        .listing-nav li a:hover {
            border-color: #f91942;
            color: #f91942;
        }

        .pricing-list-container h4 {
            color: #f91942;
            border-color: #f91942;
        }

        .sidebar-textbox ul.contact-details li a {
            color: #f91942;
        }

        button.button.border,
        a.button.border {
            color: #f91942;
            border-color: #f91942;
        }

        .trigger.active a,
        .ui-accordion .ui-accordion-header-active:hover,
        .ui-accordion .ui-accordion-header-active {
            background-color: #f91942;
            border-color: #f91942;
        }

        .numbered.color ol>li::before {
            border-color: #f91942;
            ;
            color: #f91942;
        }

        .numbered.color.filled ol>li::before {
            border-color: #f91942;
            background-color: #f91942;
        }

        .info-box {
            border-top: 2px solid #f91942;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.95));
            background-color: #f91942;
            color: #f91942;
        }

        .info-box.no-border {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.96), rgba(255, 255, 255, 0.93));
            background-color: #f91942;
        }

        .tabs-nav li a:hover {
            border-color: #f91942;
        }

        .tabs-nav li a:hover,
        .tabs-nav li.active a {
            border-color: #f91942;
            color: #f91942;
        }

        .style-3 .tabs-nav li a:hover,
        .style-3 .tabs-nav li.active a {
            border-color: #f91942;
            background-color: #f91942;
        }

        .woocommerce-cart .woocommerce table.shop_table th,
        .vc_tta.vc_general.vc_tta-style-style-1 .vc_active .vc_tta-panel-heading,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-2 .vc_tta-tab:hover>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab.vc_active>a,
        .wpb-js-composer .vc_tta.vc_general.vc_tta-style-tabs-style-1 .vc_tta-tab:hover>a {
            border-bottom-color: #f91942
        }

        .checkboxes input[type=checkbox]:checked+label:before {
            background-color: #f91942;
            border-color: #f91942;
        }

        .listing-item-container.compact .listing-item-content span.tag {
            background-color: #f91942;
        }

        .dashboard-nav ul li.current_page_item,
        .dashboard-nav ul li.active,
        .dashboard-nav ul li:hover {
            border-color: #f91942;
        }

        .dashboard-list-box .comment-by-listing a:hover {
            color: #f91942;
        }

        .opening-day:hover h5 {
            color: #f91942 !important;
        }

        .map-box h4 a:hover {
            color: #f91942;
        }

        .infoBox-close:hover {
            background-color: #f91942;
            -webkit-text-stroke: 1px #f91942;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice,
        body .select2-container--default .select2-results__option--highlighted[aria-selected],
        body .select2-container--default .select2-results__option--highlighted[data-selected],
        body .woocommerce .cart .button,
        body .woocommerce .cart input.button,
        body .woocommerce #respond input#submit,
        body .woocommerce a.button,
        body .woocommerce button.button,
        body .woocommerce input.button,
        body .woocommerce #respond input#submit.alt:hover,
        body .woocommerce a.button.alt:hover,
        body .woocommerce button.button.alt:hover,
        body .woocommerce input.button.alt:hover,
        .marker-cluster-small div,
        .marker-cluster-medium div,
        .marker-cluster-large div,
        .cluster-visible {
            background-color: #f91942 !important;
        }

        .marker-cluster div:before {
            border: 7px solid #f91942;
            opacity: 0.2;
            box-shadow: inset 0 0 0 4px #f91942;
        }

        .cluster-visible:before {
            border: 7px solid #f91942;
            box-shadow: inset 0 0 0 4px #f91942;
        }

        .marker-arrow {
            border-color: #f91942 transparent transparent;
        }

        .face.front {
            border-color: #f91942;
            color: #f91942;
        }

        .face.back {
            background: #f91942;
            border-color: #f91942;
        }

        .custom-zoom-in:hover:before,
        .custom-zoom-out:hover:before {
            -webkit-text-stroke: 1px #f91942;
        }

        .category-box-btn:hover {
            background-color: #f91942;
            border-color: #f91942;
        }

        .message-bubble.me .message-text {
            color: #f91942;
            background-color: rgba(249, 25, 66, 0.05);
        }

        .time-slot input~label:hover {
            background-color: rgba(249, 25, 66, 0.08);
        }

        .message-bubble.me .message-text:before {
            color: rgba(249, 25, 66, 0.05);
        }

        .booking-widget i,
        .opening-hours i,
        .message-vendor i {
            color: #f91942;
        }

        .opening-hours.summary li:hover,
        .opening-hours.summary li.total-costs span {
            color: #f91942;
        }

        .payment-tab-trigger>input:checked~label::before {
            border-color: #f91942;
        }

        .payment-tab-trigger>input:checked~label::after {
            background-color: #f91942;
        }

        #navigation.style-1>ul>li.current-menu-ancestor>a,
        #navigation.style-1>ul>li.current-menu-item>a,
        #navigation.style-1>ul>li:hover>a {
            background: rgba(249, 25, 66, 0.06);
            color: #f91942;
        }

        .img-box:hover span {
            background-color: #f91942;
        }

        body #navigation.style-1 ul ul li:hover a:after,
        body #navigation.style-1 ul li:hover ul li:hover a,
        body #navigation.style-1 ul li:hover ul li:hover li:hover a,
        body #navigation.style-1 ul li:hover ul li:hover li:hover li:hover a,
        body #navigation.style-1 ul ul li:hover ul li a:hover {
            color: #f91942;
        }

        .headline.headline-box span:before {
            background: #f91942;
        }

        .main-search-inner .highlighted-category {
            background-color: #f91942;
            box-shadow: 0 2px 8px rgba(249, 25, 66, 0.2);
        }

        .category-box:hover .category-box-content span {
            background-color: #f91942;
        }

        .user-menu ul li a:hover {
            color: #f91942;
        }

        .icon-box-2 i {
            background-color: #f91942;
        }

        @keyframes iconBoxAnim {

            0%,
            100% {
                box-shadow: 0 0 0 9px rgba(249, 25, 66, 0.08);
            }

            50% {
                box-shadow: 0 0 0 15px rgba(249, 25, 66, 0.08);
            }
        }

        .listing-type:hover {
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
            background-color: #f91942;
        }

        .listing-type:hover .listing-type-icon {
            color: #f91942;
        }

        .listing-type-icon {
            background-color: #f91942;
            box-shadow: 0 0 0 8px rgb(249, 25, 66, 0.1);
        }

        #chart-date-range span:after,
        #footer ul.menu li a:hover {
            color: #f91942;
        }

        #booking-date-range span::after,
        .time-slot label:hover span,
        .daterangepicker td.in-range,
        .time-slot input~label:hover,
        .booking-estimated-cost span,
        .time-slot label:hover span {
            color: #f91942;
        }

        .daterangepicker td.in-range {
            background-color: rgba(249, 25, 66, 0.05);
            color: #f91942;
        }

        .leaflet-control-zoom-in:hover,
        .leaflet-control-zoom-out:hover {
            background-color: #f91942;
            ;
            -webkit-text-stroke: 1px #f91942;
        }

        .transparent-header #header:not(.cloned) #navigation.style-1>ul>li.current-menu-ancestor>a,
        .transparent-header #header:not(.cloned) #navigation.style-1>ul>li.current-menu-item>a,
        .transparent-header #header:not(.cloned) #navigation.style-1>ul>li:hover>a {
            background: #f91942;
        }

        .transparent-header #header:not(.cloned) .header-widget .button:hover,
        .transparent-header #header:not(.cloned) .header-widget .button.border:hover {
            background: #f91942;
        }

        .transparent-header.user_not_logged_in #header:not(.cloned) .header-widget .sign-in:hover {
            background: #f91942;
        }

        .category-small-box-alt i,
        .category-small-box i {
            color: #f91942;
        }

        .account-type input.account-type-radio:checked~label {
            background-color: #f91942;
        }

        .category-small-box:hover {
            box-shadow: 0 3px 12px rgba(249, 25, 66, 0.22);
        }

        .transparent-header.user_not_logged_in #header.cloned .header-widget .sign-in:hover,
        .user_not_logged_in .header-widget .sign-in:hover {
            background: #f91942;
        }

        .nav-links div.nav-next a:hover:before,
        .nav-links div.nav-previous a:hover:before,
        #posts-nav li.next-post a:hover:before,
        #posts-nav li.prev-post a:hover:before {
            background: #f91942;
        }

        .slick-current .testimonial-author h4 span {
            background: rgba(249, 25, 66, 0.06);
            color: #f91942;
        }

        body .icon-box-2 i {
            background-color: rgba(249, 25, 66, 0.07);
            color: #f91942;
        }

        .headline.headline-box:after,
        .headline.headline-box span:after {
            background: #f91942;
        }

        .listing-item-content span.tag {
            background: #f91942;
        }

        .message-vendor div.wpcf7 .ajax-loader,
        body .message-vendor input[type='submit'],
        body .message-vendor input[type='submit']:focus,
        body .message-vendor input[type='submit']:active {
            background-color: #f91942;
        }

        .message-vendor .wpcf7-form .wpcf7-radio input[type=radio]:checked+span:before {
            border-color: #f91942;
        }

        .message-vendor .wpcf7-form .wpcf7-radio input[type=radio]:checked+span:after {
            background: #f91942;
        }

        #show-map-button,
        .slider-selection {
            background-color: #f91942;
        }

        .listeo-cart-container:hover .mini-cart-button {
            color: #f91942;
            background: #f919421f;
        }

        .listeo-cart-container .mini-cart-button .badge {
            background: #f91942;
        }

        .transparent-header #header:not(.cloned) .header-widget .woocommerce-mini-cart__buttons a.button.checkout,
        .listeo-cart-container .woocommerce-mini-cart__buttons a.button.checkout {
            background: #f91942;
        }

        .slider-handle {
            border-color: #f91942;
        }

        .bookable-services .single-service:hover h5,
        .bookable-services .single-service:hover .single-service-price {
            color: #f91942;
        }

        .bookable-services .single-service:hover .single-service-price {
            background-color: rgba(249, 25, 66, 0.08);
            color: #f91942;
        }

        .classifieds-widget-buttons a.call-btn {
            border: 1px solid #f91942;
            color: #f91942;
        }

        .bookable-services input[type='checkbox']+label:hover {
            background-color: rgba(249, 25, 66, 0.08);
            color: #f91942;
        }

        .services-counter,
        .bookable-services input[type='checkbox']:checked+label {
            background-color: #f91942;
        }

        .bookable-services input[type='checkbox']:checked+label .single-service-price {
            color: #f91942;
        }

        input[type='submit'].dokan-btn-theme:hover,
        a.dokan-btn-theme:hover,
        .dokan-btn-theme:hover,
        input[type='submit'].dokan-btn-theme:focus,
        a.dokan-btn-theme:focus,
        .dokan-btn-theme:focus,
        input[type='submit'].dokan-btn-theme:active,
        a.dokan-btn-theme:active,
        .dokan-btn-theme:active,
        input[type='submit'].dokan-btn-theme.active,
        a.dokan-btn-theme.active,
        .dokan-btn-theme.active,
        .open .dropdown-toggleinput[type='submit'].dokan-btn-theme,
        .open .dropdown-togglea.dokan-btn-theme,
        .open .dropdown-toggle.dokan-btn-theme {
            background-color: #f91942 !important;
            border-color: #f91942 !important;
        }

        body.dokan-dashboard input[type='submit'].dokan-btn-theme,
        body.dokan-dashboard a.dokan-btn-theme,
        body.dokan-dashboard .dokan-btn-theme {
            background-color: #f91942 !important;
            ;
            border-color: #f91942 !important;
            ;
        }

        body input[type='submit'].dokan-btn-theme,
        body a.dokan-btn-theme,
        body .dokan-btn-theme {
            background-color: #f91942;
            border-color: #f91942;
        }

        #dokan-store-listing-filter-wrap .right .toggle-view .active {
            color: #f91942;
        }

        body #dokan-store-listing-filter-wrap .right .toggle-view .active {
            border-color: #f91942;
        }

        .photo-box:hover .photo-box-content span {
            background: #f91942;
        }

        #dokan-store-listing-filter-wrap .right .toggle-view .active {
            color: #f91942;
        }

        .dokan-store-products-ordeby-select .select2-container--default .select2-selection--single .select2-selection__arrow b:after {
            color: #f91942;
        }

        .main-search-inner {
            text-align: center;
        }

        body .main-search-container:not(.elementor-main-search-container):before {
            background: linear-gradient(to right, rgba(51, 51, 51, 0.99) 20%, rgba(51, 51, 51, 0.7) 70%, rgba(51, 51, 51, 0) 95%)
        }

        .solid-bg-home-banner .main-search-container:before,
        body.transparent-header .main-search-container:not(.elementor-main-search-container):before {
            background: rgba(51, 51, 51, 0.75);
        }

        .loader-ajax-container {
            box-shadow: 0 0 20px rgba(249, 25, 66, 0.4);
        }

        .main-search-inner {
            text-align: center;
        }

        @media (min-width: 1240px) {

            #header:not(.sticky) ul.menu,
            #header:not(.sticky) .header-widget {
                margin-top: 15px;
                margin-bottom: 12px;
            }
        }

        .range-output:after {
            content: 'km';
        }

        .template-file.main-search-container.plain-color {
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%23fffaf5' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23fff5ec' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23ffefe2' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%23ffead9' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23ffe5cf' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%23ffead9' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23ffefe2' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23fff5ec' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23fffaf5' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23ffffff' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <link rel='stylesheet' id='google-fonts-raleway-css'
        href='//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-open-sans-css'
        href='//fonts.googleapis.com/css?family=Open+Sans:500,600,700' type='text/css' media='all' />
    <link rel='stylesheet' id='forget-about-shortcode-buttons-css'
        href='https://libonatour.x10.mx/wp-content/plugins/forget-about-shortcode-buttons/public/css/button-styles.css?ver=2.1.3'
        type='text/css' media='all' />
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/leaflet.js?ver=6.3.2' id='leaflet.js-js'>
    </script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/jquery.min.js?ver=3.7.0'
        id='jquery-core-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/leaflet-googlemutant.js?ver=1.8.09'
        id='listeo_core-leaflet-google-maps-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/control.geocoder.js?ver=1.8.09'
        id='listeo_core-leaflet-geocoder-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/leaflet.markercluster.js?ver=1.8.09'
        id='listeo_core-leaflet-markercluster-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/leaflet-gesture-handling.min.js?ver=1.8.09'
        id='listeo_core-leaflet-gesture-handling-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/listeo.leaflet.js?ver=1.8.09'
        id='listeo_core-leaflet-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/pwstrength-bootstrap.min.js?ver=1.8.09'
        id='listeo_core-pwstrength-bootstrap-min-js'></script>
    <script type='text/javascript' id='listeo_core-frontend-js-extra'>
        /* <![CDATA[ */
        var listeo_core = {
            "ajax_url": "\/wp-admin\/admin-ajax.php",
            "payout_not_valid_email_msg": "The email address is not valid. Please add a valid email address.",
            "is_rtl": "0",
            "lang": "",
            "_price_min": null,
            "_price_max": null,
            "currency": "USD",
            "currency_position": "before",
            "currency_symbol": "$",
            "submitCenterPoint": "-34.397,150.644",
            "centerPoint": "-34.397,150.644",
            "country": "",
            "upload": "https:\/\/libonatour.x10.mx\/wp-admin\/admin-ajax.php?action=handle_dropped_media",
            "delete": "https:\/\/libonatour.x10.mx\/wp-admin\/admin-ajax.php?action=handle_delete_media",
            "color": "#f91942",
            "dictDefaultMessage": "Drop files here to upload",
            "dictFallbackMessage": "Your browser does not support drag'n'drop file uploads.",
            "dictFallbackText": "Please use the fallback form below to upload your files like in the olden days.",
            "dictCancelUpload": "Cancel upload",
            "dictCancelUploadConfirmation": "Are you sure you want to cancel this upload?",
            "dictRemoveFile": "Remove file",
            "dictMaxFilesExceeded": "You can not upload any more files.",
            "areyousure": "Are you sure?",
            "maxFiles": "15",
            "maxFilesize": "15",
            "clockformat": "",
            "prompt_price": "Set price for this date",
            "menu_price": "Price (optional)",
            "menu_desc": "Description",
            "menu_title": "Title",
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "clearLabel": "Clear",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "mmenuTitle": "Menu",
            "pricingTooltip": "Click to make this item bookable in booking widget",
            "today": "Today",
            "yesterday": "Yesterday",
            "last_7_days": "Last 7 Days",
            "last_30_days": "Last 30 Days",
            "this_month": "This Month",
            "last_month": "Last Month",
            "map_provider": "osm",
            "address_provider": "osm",
            "mapbox_access_token": "",
            "mapbox_retina": "on",
            "mapbox_style_url": "https:\/\/api.mapbox.com\/styles\/v1\/mapbox\/streets-v11\/tiles\/{z}\/{x}\/{y}@2x?access_token=",
            "bing_maps_key": "",
            "thunderforest_api_key": "",
            "here_app_id": "",
            "here_app_code": "",
            "maps_reviews_text": "reviews",
            "maps_noreviews_text": "Not rated yet",
            "category_title": "Category Title",
            "day_short_su": "Su",
            "day_short_mo": "Mo",
            "day_short_tu": "Tu",
            "day_short_we": "We",
            "day_short_th": "Th",
            "day_short_fr": "Fr",
            "day_short_sa": "Sa",
            "radius_state": "disabled",
            "maps_autofit": "on",
            "maps_autolocate": "",
            "maps_zoom": "9",
            "maps_single_zoom": "9",
            "autologin": "",
            "no_results_text": "No results match",
            "no_results_found_text": "No results found",
            "placeholder_text_single": "Select an Option",
            "placeholder_text_multiple": "Select Some Options ",
            "january": "January",
            "february": "February",
            "march": "March",
            "april": "April",
            "may": "May",
            "june": "June",
            "july": "July",
            "august": "August",
            "september": "September",
            "october": "October",
            "november": "November",
            "december": "December",
            "opening_time": "Opening Time",
            "closing_time": "Closing Time",
            "remove": "Remove",
            "extra_services_options_type": [],
            "onetimefee": "One time fee",
            "bookable_quantity_max": "Max quantity",
            "multiguest": "Multiply by guests",
            "multidays": "Multiply by days",
            "multiguestdays": "Multiply by guest & days",
            "quantitybuttons": "Quantity Buttons",
            "booked_dates": "Those dates are already booked",
            "replied": "Replied",
            "recaptcha_status": "",
            "recaptcha_version": "v3",
            "recaptcha_sitekey3": "",
            "review_criteria": "overall-rating"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/frontend.js?ver=1.8.09'
        id='listeo_core-frontend-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/bookings.js?ver=1.8.09'
        id='listeo_core-bookings-js'></script>
    <script type='text/javascript' id='listeo_core-ajax-login-js-extra'>
        /* <![CDATA[ */
        var listeo_login = {
            "ajaxurl": "https:\/\/libonatour.x10.mx\/wp-admin\/admin-ajax.php",
            "redirecturl": "https:\/\/libonatour.x10.mx",
            "loadingmessage": "Sending user info, please wait..."
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/ajax-login-script.js?ver=1.0'
        id='listeo_core-ajax-login-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/select2.min.js?ver=2'
        id='select2-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/counterup.min.js?ver=2'
        id='counterup-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/datedropper.js?ver=2'
        id='datedropper-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/dropzone.js?ver=2'
        id='dropzone-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/magnific-popup.min.js?ver=2'
        id='magnific-popup-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/slick.min.js?ver=2'
        id='slick-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/quantityButtons.js?ver=2'
        id='quantityButtons-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/rangeslider.min.js?ver=2'
        id='rangeslider-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/timedropper.js?ver=2'
        id='timedropper-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/jquery.scrollto.js?ver=2'
        id='jquery-scrollto-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/tooltips.min.js?ver=2'
        id='tooltips-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/waypoints.min.js?ver=2'
        id='waypoints-min-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/dist/vendor/moment.min.js?ver=2.29.4'
        id='moment-js'></script>
    <script id="moment-js-after" type="text/javascript">
        moment.updateLocale('en_US', {
            "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "week": {
                "dow": 1
            },
            "longDateFormat": {
                "LT": "g:i a",
                "LTS": null,
                "L": null,
                "LL": "F j, Y",
                "LLL": "F j, Y g:i a",
                "LLLL": null
            }
        });
    </script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/daterangepicker.js?ver=2'
        id='daterangerpicker-js'></script>
    <script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/bootstrap-slider.min.js?ver=2'
        id='bootstrap-slider-min-js'></script>
    <link rel="https://api.w.org/" href="https://libonatour.x10.mx/wp-json/" />
    <link rel="alternate" type="application/json" href="https://libonatour.x10.mx/wp-json/wp/v2/listing/115" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://libonatour.x10.mx/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.3.2" />
    <meta name="generator" content="WooCommerce 8.2.0" />
    <link rel="canonical" href="https://www.libonatourist.x10.mx/cowboys.html" />
    <link rel='shortlink' href='https://www.libonatourist.x10.mx/cowboys.html' />
    <link rel="alternate" type="application/json+oembed"
        href="https://libonatour.x10.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibonatour.x10.mx%2Flisting%2Fiphone-12-pro-mint-condition%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://libonatour.x10.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibonatour.x10.mx%2Flisting%2Fiphone-12-pro-mint-condition%2F&#038;format=xml" />
    <meta property="og:image"
        content="https://libonatour.x10.mx/wp-content/uploads/2021/09/IMG_20231004_064848_1080_x_810_pixel-520x397.jpg" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.16.5; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <link rel="icon"
        href="https://libonatour.x10.mx/wp-content/uploads/2023/10/cropped-Orange-Carrot-Point-Logo_20231015_232545_0000-fotor-bg-remover-2023101523303-32x32.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://libonatour.x10.mx/wp-content/uploads/2023/10/cropped-Orange-Carrot-Point-Logo_20231015_232545_0000-fotor-bg-remover-2023101523303-192x192.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://libonatour.x10.mx/wp-content/uploads/2023/10/cropped-Orange-Carrot-Point-Logo_20231015_232545_0000-fotor-bg-remover-2023101523303-180x180.png" />
    <meta name="msapplication-TileImage"
        content="https://libonatour.x10.mx/wp-content/uploads/2023/10/cropped-Orange-Carrot-Point-Logo_20231015_232545_0000-fotor-bg-remover-2023101523303-270x270.png" />
    <style id="kirki-inline-styles">
        #logo img {
            max-height: 90px;
        }

        #header.cloned #logo img {
            max-width: 58px;
        }

        body {
            font-family: Raleway;
            font-size: 15px;
            font-weight: 400;
            line-height: 27px;
            text-align: left;
            text-transform: none;
            color: #707070;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Raleway;
            font-weight: 400;
        }

        #navigation ul>li>a {
            font-family: Raleway;
            font-size: 16px;
            font-weight: 400;
            line-height: 32px;
            text-align: left;
            text-transform: none;
            color: #444;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCFPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCMPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCHPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCGPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrcVIT9d4cw.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCFPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCMPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCHPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCGPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrcVIT9d4cw.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCFPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCMPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCHPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCGPrcVIT9d4cydYA.woff) format('woff');
            unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Raleway';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://libonatour.x10.mx/wp-content/fonts/raleway/1Ptxg8zYS_SKggPN4iEgvnHyvveLxVvaorCIPrcVIT9d4cw.woff) format('woff');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>

</head>

<body
    class="listing-template-default single single-listing postid-115 theme-listeo woocommerce-no-js user_not_logged_in solid-header full-width-header listeo elementor-default elementor-kit-309">

    <div class="clearfix"></div>

    <!-- Wrapper -->

    <!-- Mobile Navigation -->
    <?php echo $__env->make('layout.mobileNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Mobile Navigation / End-->

    <div id="wrapper">

        <!-- Header Container
================================================== -->
        <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Header Container / End -->
        <!-- Content
================================================== -->

        <!-- Slider -->
        <div class="listing-slider mfp-gallery-container margin-bottom-0">
            <?php $__currentLoopData = $place->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $placeImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(asset('uploads/places/' . $placeImage->image_url)); ?>"
                    data-background-image="<?php echo e(asset('uploads/places/' . $placeImage->image_url)); ?>"
                    class="item mfp-gallery"></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Content
================================================== -->

        <div class="container rental">
            <div class="row sticky-wrapper">
                <!-- Sidebar
  ================================================== -->
                <!-- " -->

                <!--  -->
                <div class="col-lg-8 col-md-8 listeo-single-listing-content  padding-right-30">

                    <!-- Titlebar -->
                    <div id="titlebar" class="listing-titlebar">
                        <div class="listing-titlebar-title">
                            <div class="listing-titlebar-tags">
                                <span class="listing-tag">
                                    <a href="https://www.libonatourist.x10.mx/adventure.html">
                                        <?php echo e($place->category->name); ?>

                                    </a>
                                </span>

                            </div>
                            <h1><?php echo e($place->name); ?></h1>
                            <span>
                                <a href="#listing-location" class="listing-address">
                                    <i class=""></i>
                                    <?php echo e($place->address); ?>

                                </a>
                            </span> <br>

                        </div>

                    </div>

                    <!-- Content
   ================================================== -->

                    <!-- Listing Nav -->
                    <div id="listing-nav" class="listing-nav-container">
                        <ul class="listing-nav">
                            <li><a href="#listing-overview" class="active">Overview</a></li>
                            <li><a href="#listing-location">Location</a></li>

                            <li><a href="#add-review">Add Review</a></li>

                        </ul>
                    </div>
                    <!-- Overview -->
                    <div id="listing-overview" class="listing-section">
                        <!-- Main Details -->

                        <!-- Description -->
                        <?php echo $place->description; ?>


                        <p><a href="http://" data-wplink-url-error="true">
                                <div class="wpcp-carousel-wrapper wpcp-wrapper-417">
                                    <div id="wpcp-preloader-417" class="wpcp-carousel-preloader"><img
                                            src="https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/css/spinner.svg"
                                            alt="Preloader Image" /></div>
                                    <div class="wpcp-carousel-content-wrapper">
                                        <div id="sp-wp-carousel-free-id-417"
                                            class="wpcp-carousel-section sp-wpcp-417  nav-vertical-center wpcp-image-carousel wpcp-preloader wpcp-standard"
                                            data-swiper='{ "accessibility":true, "spaceBetween":20, "arrows":true, "freeMode": false, "autoplay":true, "autoplaySpeed":3000, "dots":true, "infinite":true, "speed":600, "pauseOnHover":true,
			"slidesToShow":{"lg_desktop":2, "desktop": 2, "laptop": 2, "tablet": 1, "mobile": 1}, "responsive":{"desktop":1200, "laptop": 980, "tablet": 736, "mobile": 480}, "rtl":false, "lazyLoad": "false", "swipe": true, "draggable": true, "swipeToSlide":false }'
                                            dir="ltr">
                                            <div class="swiper-wrapper">
                                                <?php $__currentLoopData = $place->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $placeImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="swiper-slide">
                                                        <div class="wpcp-single-item">
                                                            <a class="wcp-light-box" data-buttons='["close"]'
                                                                data-wpc_url='<?php echo e(asset('uploads/places/' . $placeImage->image_url)); ?>'
                                                                href="<?php echo e(asset('uploads/places/' . $placeImage->image_url)); ?>"
                                                                data-fancybox="wpcp_view">
                                                                <figure>
                                                                    <img class="skip-lazy"
                                                                        src="<?php echo e(asset('uploads/places/' . $placeImage->image_url)); ?>"
                                                                        alt="IMG_20231004_070014_(1080_x_810_pixel)"
                                                                        width="1080" height="810">
                                                                </figure>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                            <div class="wpcp-swiper-dots swiper-pagination"></div>
                                            <!-- If we need navigation buttons -->
                                            <div class="wpcp-prev-button swiper-button-prev"><i
                                                    class="fa fa-angle-left"></i></div>
                                            <div class="wpcp-next-button swiper-button-next"><i
                                                    class="fa fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a></p>
                        <p style="text-align: center;"><a
                                class="fasc-button fasc-size-large fasc-type-glossy fasc-rounded-medium ico-fa fasc-ico-before fasc-style-italic"
                                style="background-color: #33809e; color: #ffffff;"
                                href="<?php echo e(route('place.360view', $place->id)); ?>">View
                                360°</a>&nbsp; &nbsp; &nbsp;<a
                                class="fasc-button fasc-size-large fasc-type-glossy fasc-rounded-medium fasc-style-italic"
                                style="background-color: #33809e; color: #ffffff;"
                                href="<?php echo e(asset('uploads/guidelines/' . $place->guideline)); ?>">Guidelines</a></p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p></p>
                        <div class="clearfix"></div>

                        <!-- Location -->
                        <!-- Location -->
                        <div id="listing-location" class="listing-section">
                            <h3 class="listing-desc-headline margin-top-60 margin-bottom-30">Location</h3>
                            <div id="singleListingMap-container" class=" ">
                                <div id="singleListingMap" data-latitude="<?php echo e($place->latitude); ?>"
                                    data-longitude="<?php echo e($place->longitude); ?>" data-map-icon="empty"
                                    data-map-icon-svg="<?php if($place->category_id == 1): ?> <?php echo e(\App\Enums\CategoryIcons::Icon1); ?>

                                <?php elseif($place->category_id == 2): ?>
                                    <?php echo e(\App\Enums\CategoryIcons::Icon2); ?>

                                <?php elseif($place->category_id == 3): ?>
                                    <?php echo e(\App\Enums\CategoryIcons::Icon3); ?>

                                <?php elseif($place->category_id == 4): ?>
                                    <?php echo e(\App\Enums\CategoryIcons::Icon4); ?>

                                <?php else: ?>
                                    <?php echo e(\App\Enums\CategoryIcons::Icon5); ?> <?php endif; ?>">
                                </div>
                                <a target="_blank"
                                    href="<?php echo e(url('https://www.google.com/maps/dir/?api=1&destination=' . $place->latitude . ',' . $place->longitude)); ?>"
                                    id="getDirection">Get Directions</a>
                            </div>
                        </div>

                        <div id="listing-reviews" class="listing-section">
                            <h3 class="listing-desc-headline margin-top-75 margin-bottom-20"> <span
                                    class="reviews-amount"></span></h3>

                            <!-- Rating Overview -->

                            <!-- Rating Overview / End -->

                            <div class="clearfix"></div>

                            <!-- Reviews -->

                            <div class="container">
                                <div class="card">
                                    <div id="add-review"></div>
                                    <div class="card-header">Review</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <h1 class="text-warning mt-4 mb-4">
                                                    <b>
                                                        <span id="average_rating">
                                                            <?php if($place->reviews->count() > 0): ?>
                                                                <?php echo e($place->reviews->avg('rating')); ?>

                                                            <?php else: ?>
                                                                0.0
                                                            <?php endif; ?>
                                                        </span>
                                                        / 5
                                                    </b>
                                                </h1>
                                                <div class="mb-3">

                                                </div>
                                                <h3><span id="total_review"><?php echo e($place->reviews->count()); ?></span>
                                                    Review</h3>
                                            </div>
                                            <div class="col-sm-4">
                                                <p>
                                                <div class="progress-label-left"><b>5</b> <span
                                                        class="text-warning"></span></div>

                                                <div class="progress-label-right">(<span
                                                        id="total_five_star_review"><?php echo e($place->reviews->where('rating', 5)->count()); ?></span>)
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="<?php echo e($place->reviews->where('rating', 5)->count()); ?>"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        id="five_star_progress"></div>
                                                </div>
                                                </p>
                                                <p>
                                                <div class="progress-label-left"><b>4</b> <span
                                                        class="text-warning"></span></div>

                                                <div class="progress-label-right">(<span
                                                        id="total_four_star_review"><?php echo e($place->reviews->where('rating', 4)->count()); ?></span>)
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="<?php echo e($place->reviews->where('rating', 4)->count()); ?>"
                                                        aria-valuemin="0" aria-valuemax="100"
                                                        id="four_star_progress"></div>
                                                </div>
                                                </p>
                                                <p>
                                                <div class="progress-label-left"><b>3</b> <span
                                                        class="text-warning"></span></i></div>

                                                <div class="progress-label-right">(<span
                                                        id="total_three_star_review"><?php echo e($place->reviews->where('rating', 3)->count()); ?></span>)
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                        id="three_star_progress"></div>
                                                </div>
                                                </p>
                                                <p>
                                                <div class="progress-label-left"><b>2</b> <span
                                                        class="text-warning"></span></div>

                                                <div class="progress-label-right">(<span
                                                        id="total_two_star_review"><?php echo e($place->reviews->where('rating', 2)->count()); ?></span>)
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                        id="two_star_progress"></div>
                                                </div>
                                                </p>
                                                <p>
                                                <div class="progress-label-left"><b>1</b> <span
                                                        class="text-warning"></span></div>

                                                <div class="progress-label-right">(<span
                                                        id="total_one_star_review"><?php echo e($place->reviews->where('rating', 1)->count()); ?></span>)
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                        id="one_star_progress"></div>
                                                </div>
                                                </p>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <h3 class="mt-4 mb-3">Write Review Here</h3>
                                                <button type="button" name="add_review" id="add_review"
                                                    class="btn btn-primary">Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5" id="review_content">

                                    <?php $__currentLoopData = $place->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row mb-3">

                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <b>
                                                            <?php echo e($review->user->name); ?>

                                                        </b>
                                                    </div>
                                                    <div class="card-body">
                                                        <?php for($i = 0; $i < $review->rating; $i++): ?>
                                                            <span class=" text-warning "></span>
                                                        <?php endfor; ?>
                                                        <br>
                                                        <?php echo e($review->review); ?>

                                                    </div>
                                                    <div class="card-footer text-right">
                                                        <?php echo e(date('l jS \of F Y h:i:s A', strtotime($review->created_at))); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
</body>

</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submit Review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(auth()->check() == true && auth()->user()->is_admin == false): ?>
                    <form action="<?php echo e(route('place.details', $place->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="place_id" name="place_id" value="<?php echo e($place->id); ?>">
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <select class="form-control" name="rating" id="rating" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                <?php else: ?>
                    <center>
                        <a href="<?php echo e(route('google-auth')); ?>" id=""
                            class="btn btn-primary flex justify-content-center align-content-center" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50px"
                                height="50px">
                                <path
                                    d="M 25.996094 48 C 13.3125 48 2.992188 37.683594 2.992188 25 C 2.992188 12.316406 13.3125 2 25.996094 2 C 31.742188 2 37.242188 4.128906 41.488281 7.996094 L 42.261719 8.703125 L 34.675781 16.289063 L 33.972656 15.6875 C 31.746094 13.78125 28.914063 12.730469 25.996094 12.730469 C 19.230469 12.730469 13.722656 18.234375 13.722656 25 C 13.722656 31.765625 19.230469 37.269531 25.996094 37.269531 C 30.875 37.269531 34.730469 34.777344 36.546875 30.53125 L 24.996094 30.53125 L 24.996094 20.175781 L 47.546875 20.207031 L 47.714844 21 C 48.890625 26.582031 47.949219 34.792969 43.183594 40.667969 C 39.238281 45.53125 33.457031 48 25.996094 48 Z" />
                            </svg>
                            <h3>
                                Login with Google
                            </h3>
                        </a>
                    </center>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<style>
    .progress-label-left {
        float: left;
        margin-right: 0.5em;
        line-height: 1em;
    }

    .progress-label-right {
        float: right;
        margin-left: 0.3em;
        line-height: 1em;
    }

    .text-warning::before {
        content: "★";
        color: #f8d100;
    }
</style>
<script>
    $(document).ready(function() {

        var totalReviews = <?php echo e($place->reviews->count()); ?>

        var fiveReviews = <?php echo e($place->reviews->where('rating', 5)->count()); ?>

        var fourReviews = <?php echo e($place->reviews->where('rating', 4)->count()); ?>

        var threeReviews = <?php echo e($place->reviews->where('rating', 3)->count()); ?>

        var twoReviews = <?php echo e($place->reviews->where('rating', 2)->count()); ?>

        var oneReviews = <?php echo e($place->reviews->where('rating', 1)->count()); ?>


        $('#five_star_progress').css('width', (fiveReviews / totalReviews) * 100 + '%');

        $('#four_star_progress').css('width', (fourReviews / totalReviews) * 100 + '%');

        $('#three_star_progress').css('width', (threeReviews / totalReviews) * 100 + '%');

        $('#two_star_progress').css('width', (twoReviews / totalReviews) * 100 + '%');

        $('#one_star_progress').css('width', (oneReviews / totalReviews) * 100 + '%');


        var rating_data = 0;

        $('#add_review').click(function() {

            $('#review_modal').modal('show');

        });

        $(document).on('mouseenter', '.submit_star', function() {

            var rating = $(this).data('rating');

            reset_background();

            for (var count = 1; count <= rating; count++) {

                $('#submit_star_' + count).addClass('text-warning');

            }

        });

        function reset_background() {
            for (var count = 1; count <= 5; count++) {

                $('#submit_star_' + count).addClass('star-light');

                $('#submit_star_' + count).removeClass('text-warning');

            }
        }

        $(document).on('mouseleave', '.submit_star', function() {

            reset_background();

            for (var count = 1; count <= rating_data; count++) {

                $('#submit_star_' + count).removeClass('star-light');

                $('#submit_star_' + count).addClass('text-warning');
            }

        });

        $(document).on('click', '.submit_star', function() {

            rating_data = $(this).data('rating');

        });

        $('#save_review').click(function() {

            var user_name = $('#user_name').val();

            var user_review = $('#user_review').val();

            if (user_name == '' || user_review == '') {
                alert("Please Fill Both Field");
                return false;
            } else {
                $.ajax({
                    url: "submit_rating.php",
                    method: "POST",
                    data: {
                        rating_data: rating_data,
                        user_name: user_name,
                        user_review: user_review
                    },
                    success: function(data) {
                        $('#review_modal').modal('hide');

                        load_rating_data();

                        alert(data);
                    }
                })
            }

        });

        load_rating_data();

        function load_rating_data() {
            $.ajax({
                url: "submit_rating.php",
                method: "POST",
                data: {
                    action: 'load_data'
                },
                dataType: "JSON",
                success: function(data) {
                    $('#average_rating').text(data.average_rating);
                    $('#total_review').text(data.total_review);

                    var count_star = 0;

                    $('.main_star').each(function() {
                        count_star++;
                        if (Math.ceil(data.average_rating) >= count_star) {
                            $(this).addClass('text-warning');
                            $(this).addClass('star-light');
                        }
                    });

                    $('#total_five_star_review').text(data.five_star_review);

                    $('#total_four_star_review').text(data.four_star_review);

                    $('#total_three_star_review').text(data.three_star_review);

                    $('#total_two_star_review').text(data.two_star_review);

                    $('#total_one_star_review').text(data.one_star_review);

                    $('#five_star_progress').css('width', (data.five_star_review / data
                        .total_review) * 100 + '%');

                    $('#four_star_progress').css('width', (data.four_star_review / data
                        .total_review) * 100 + '%');

                    $('#three_star_progress').css('width', (data.three_star_review / data
                        .total_review) * 100 + '%');

                    $('#two_star_progress').css('width', (data.two_star_review / data
                        .total_review) * 100 + '%');

                    $('#one_star_progress').css('width', (data.one_star_review / data
                        .total_review) * 100 + '%');

                    if (data.review_data.length > 0) {
                        var html = '';

                        for (var count = 0; count < data.review_data.length; count++) {
                            html += '<div class="row mb-3">';

                            html +=
                                '<div class="col-sm-1"><div class="rounded bg-primary text-dark pt-1 pb-1"><h3 class="text-center">' +
                                data.review_data[count].user_name.charAt(0) + '</h3></div></div>';

                            html += '<div class="col-sm-11">';

                            html += '<div class="card">';

                            html += '<div class="card-header"><b>' + data.review_data[count]
                                .user_name + '</b></div>';

                            html += '<div class="card-body">';

                            for (var star = 1; star <= 5; star++) {
                                var class_name = '';

                                if (data.review_data[count].rating >= star) {
                                    class_name = 'text-warning';
                                } else {
                                    class_name = 'star-light';
                                }

                                html += '<span class=" ' + class_name + ' "></span>';
                            }

                            html += '<br />';

                            html += data.review_data[count].user_review;

                            html += '</div>';

                            html += '<div class="card-footer text-right">On ' + data.review_data[
                                count].datetime + '</div>';

                            html += '</div>';

                            html += '</div>';

                            html += '</div>';
                        }

                        $('#review_content').html(html);
                    }
                }
            })
        }

    });
</script>
<?php if(session('success')): ?>
    <script>
        alert('Review successfully');
    </script>
<?php endif; ?>
</div>

</div>
</div>

<!-- Footer
================================================== -->
<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div> <!-- weof wrapper -->
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1' id='swv-js'>
</script>
<script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = {
        "api": {
            "root": "https:\/\/libonatour.x10.mx\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1'
    id='contact-form-7-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2'
    id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/ui/menu.min.js?ver=1.13.2'
    id='jquery-ui-menu-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2'
    id='wp-polyfill-inert-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11'
    id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
    id='wp-polyfill-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca' id='wp-dom-ready-js'>
</script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1'
    id='wp-hooks-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/dist/i18n.min.js?ver=7701b0c3857f914212ef'
    id='wp-i18n-js'></script>
<script id="wp-i18n-js-after" type="text/javascript">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
</script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/dist/a11y.min.js?ver=7032343a947cfccf5608'
    id='wp-a11y-js'></script>
<script type='text/javascript' id='jquery-ui-autocomplete-js-extra'>
    /* <![CDATA[ */
    var uiAutocompleteL10n = {
        "noResults": "No results found.",
        "oneResult": "1 result found. Use up and down arrow keys to navigate.",
        "manyResults": "%d results found. Use up and down arrow keys to navigate.",
        "itemSelected": "Item selected."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/ui/autocomplete.min.js?ver=1.13.2'
    id='jquery-ui-autocomplete-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/ui/mouse.min.js?ver=1.13.2'
    id='jquery-ui-mouse-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/jquery/ui/sortable.min.js?ver=1.13.2'
    id='jquery-ui-sortable-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/uploads.min.js?ver=1.8.09' id='uploads-js'>
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/ajax.search.min.js?ver=1.8.09'
    id='ajaxsearch-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/fullcalendar.min.js?ver=1'
    id='listeo-core-fullcalendar-js'></script>
<script type='text/javascript' id='listeo-core-fullcalendar-single-view-js-extra'>
    /* <![CDATA[ */
    var listeoCal = {
        "language": "en"
    };
    /* ]]> */
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/listeo.fullcalendar.single.js?ver=1'
    id='listeo-core-fullcalendar-single-view-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/underscore.min.js?ver=1.13.4'
    id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/wp-util.min.js?ver=6.3.2' id='wp-util-js'>
</script>
<script type='text/javascript' id='listeo-stats-js-extra'>
    /* <![CDATA[ */
    var listeoStats = {
        "post_id": "115",
        "stats": ["unique", "booking_click", "visits"]
    };
    /* ]]> */
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/listeo-core/assets/js/listeo.stats.min.js?ver=1'
    id='listeo-stats-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.2.0'
    id='jquery-blockui-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.2.0'
    id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.2.0'
    id='woocommerce-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/flatpickr/flatpickr.min.js?ver=4.1.4'
    id='flatpickr-js'></script>
<script type='text/javascript' id='listeo-custom-js-extra'>
    /* <![CDATA[ */
    var wordpress_date_format = {
        "date": "MM\/DD\/YYYY",
        "day": "1",
        "raw": "F j, Y",
        "time": "g:i a"
    };
    var listeo = {
        "ajaxurl": "\/wp-admin\/admin-ajax.php",
        "theme_url": "https:\/\/libonatour.x10.mx\/wp-content\/themes\/listeo",
        "menu_back": "Back"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-content/themes/listeo/js/custom.js?ver=20170821'
    id='listeo-custom-js'></script>
<script type='text/javascript' src='https://libonatour.x10.mx/wp-includes/js/comment-reply.min.js?ver=6.3.2'
    id='comment-reply-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/js/fancybox.min.js?ver=2.5.8'
    id='wpcf-fancybox-popup-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/js/fancybox-config.min.js?ver=2.5.8'
    id='wpcf-fancybox-config-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/js/preloader.min.js?ver=2.5.8'
    id='wpcp-preloader-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/js/swiper-bundle.min.js?ver=2.5.8'
    id='wpcf-swiper-js-js'></script>
<script type='text/javascript'
    src='https://libonatour.x10.mx/wp-content/plugins/wp-carousel-free/public/js/wp-carousel-free-public.min.js?ver=2.5.8'
    id='wpcf-swiper-config-js'></script>

</body>

</html>
<?php /**PATH C:\Users\Administrator\Desktop\projects\laravel_project\touring\tour\resources\views/frond-end/place.blade.php ENDPATH**/ ?>