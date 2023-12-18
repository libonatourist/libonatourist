<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>Libona Tour &#8211; Explore top-rated attractions, activities and more!</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Libona Tour &raquo; Feed"
        href="https://libonatour.x10.mx/feed/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="alternate" type="application/rss+xml" title="Libona Tour &raquo; Comments Feed"
        href="https://libonatour.x10.mx/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/libonatour.x10.mx\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.2"
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
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.16.5'
        type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-309-css'
        href='https://libonatour.x10.mx/wp-content/uploads/elementor/css/post-309.css?ver=1697115979' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://libonatour.x10.mx/wp-content/uploads/elementor/css/global.css?ver=1697117237' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-114-css'
        href='https://libonatour.x10.mx/wp-content/uploads/elementor/css/post-114.css?ver=1697515310' type='text/css'
        media='all' />
    <link rel='stylesheet' id='forget-about-shortcode-buttons-css'
        href='https://libonatour.x10.mx/wp-content/plugins/forget-about-shortcode-buttons/public/css/button-styles.css?ver=2.1.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.15.3'
        type='text/css' media='all' />

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
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
    <link rel="alternate" type="application/json" href="https://libonatour.x10.mx/wp-json/wp/v2/pages/114" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://libonatour.x10.mx/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.3.2" />
    <meta name="generator" content="WooCommerce 8.2.0" />
    <link rel="canonical" href="https://libonatour.x10.mx/" />
    <link rel='shortlink' href='https://libonatour.x10.mx/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://libonatour.x10.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibonatour.x10.mx%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://libonatour.x10.mx/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibonatour.x10.mx%2F&#038;format=xml" />
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
    </style>

</head>

<body
    class="home page-template-default page page-id-114 theme-listeo woocommerce-no-js user_not_logged_in solid-header transparent-header full-width-header listeo elementor-default elementor-kit-309 elementor-page elementor-page-114">

    <div class="clearfix"></div>

    <!-- Wrapper -->

    <!-- Mobile Navigation -->
    @include('layout.mobileNavbar')
    <!-- Mobile Navigation / End-->

    <div id="wrapper">

        <!-- Header Container
================================================== -->
        @include('layout.header')

        <!-- Header Container / End -->

        <div class="container full-width">

            <div class="row">

                <article id="post-114"
                    class="col-md-12 page-container-col post-114 page type-page status-publish hentry">
                    <div data-elementor-type="wp-page" data-elementor-id="114" class="elementor elementor-114">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-aac89d2 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                            data-id="aac89d2" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ff4d03"
                                    data-id="8ff4d03" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-eda9759 elementor-widget elementor-widget-listeo-homebanner"
                                            data-id="eda9759" data-element_type="widget"
                                            data-widget_type="listeo-homebanner.default">
                                            <div class="elementor-widget-container">

                                                <div
                                                    class="main-search-container   elementor-main-search-container  container-overlay-solid">
                                                    <div class="main-search-inner">

                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <h1>Find Nearby Place</h1>
                                                                    <h4>Explore top-rated attractions here in Libona
                                                                        Bukidnon</h4>

                                                                    <input type="hidden" name="action"
                                                                        value="listeo_get_listings" />
                                                                    <!-- More Search Options / End -->

                                                                </div>
                                                                </form>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-a7cd12f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="a7cd12f" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a7a7f57"
                                data-id="a7a7f57" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-22e66a4 elementor-widget elementor-widget-listeo-headline"
                                        data-id="22e66a4" data-element_type="widget"
                                        data-widget_type="listeo-headline.default">
                                        <div class="elementor-widget-container">
                                            <h3 style="text-align:center;"
                                                class="headline  headline-aligned-to-center headline-extra-spacing headline-box ">
                                                Popular Categories </h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-aa988a5 elementor-widget elementor-widget-listeo-taxonomy-grid"
                                        data-id="aa988a5" data-element_type="widget"
                                        data-widget_type="listeo-taxonomy-grid.default">
                                        <div class="elementor-widget-container">

                                            <div class="categories-boxes-container margin-top-5 margin-bottom-30">

                                                <!-- Item -->
                                                @foreach ($categories as $category)
                                                    <a href="{{ route('category', $category->id) }}"
                                                        class="category-small-box">

                                                        <i class="listeo-svg-icon-box-grid">

                                                            @if ($category->id == 1)
                                                                {!! \App\Enums\CategoryIcons::Icon1 !!}
                                                            @elseif ($category->id == 2)
                                                                {!! \App\Enums\CategoryIcons::Icon2 !!}
                                                            @elseif ($category->id == 3)
                                                                {!! \App\Enums\CategoryIcons::Icon3 !!}
                                                            @elseif ($category->id == 4)
                                                                {!! \App\Enums\CategoryIcons::Icon4 !!}
                                                            @else
                                                                {!! \App\Enums\CategoryIcons::Icon5 !!}
                                                            @endif
                                                        </i>

                                                        <h4>
                                                            {{ $category->name }}
                                                        </h4>
                                                        <span class="category-box-counter">
                                                            {{ $category->place->count() }}
                                                        </span>
                                                    </a>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-bf2502c elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="bf2502c" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59b04e0"
                                data-id="59b04e0" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9d03b8f elementor-widget elementor-widget-listeo-headline"
                                        data-id="9d03b8f" data-element_type="widget"
                                        data-widget_type="listeo-headline.default">
                                        <div class="elementor-widget-container">
                                            <h3 style="text-align:center;"
                                                class="headline  headline-aligned-to-center headline-extra-spacing headline-box  headline-with-subtitle ">
                                                Most Visited Places <span> Top-Rated Local Businesses</span></h3>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-b7e308e elementor-widget elementor-widget-listeo-listings-carousel"
                                        data-id="b7e308e" data-element_type="widget"
                                        data-widget_type="listeo-listings-carousel.default">
                                        <div class="elementor-widget-container">
                                            <!-- Carousel / Start -->
                                            <div class="simple-slick-carousel dots-nav"
                                                data-slick='{"autoplay": true, "autoplaySpeed": 3000}'>
                                                @foreach ($places as $place)
                                                    <div class="fw-carousel-item">
                                                        <!-- Listing Item -->
                                                        <a href="{{ route('place.details', ['id' => $place->id]) }}"
                                                            class="listing-item-container listing-geo-data compact"
                                                            data-title="Cowboy&#8217;s Camp"
                                                            data-friendly-address="{{ $place->address }}"
                                                            data-address="{{ $place->address }}"
                                                            data-image="{{ asset('uploads/places/' . $place->images[0]->image_url) }}"
                                                            data-longitude="{{ $place->longitude }}"
                                                            data-latitude="{{ $place->latitude }}" data-rating="0"
                                                            data-reviews="0">
                                                            <div class="listing-item  featured-listing">
                                                                <div class="listing-small-badges-container">

                                                                </div>
                                                                <img fetchpriority="high" width="520"
                                                                    height="397"
                                                                    src="{{ asset('uploads/places/' . $place->images[0]->image_url) }}"
                                                                    class="attachment-listeo-listing-grid size-listeo-listing-grid wp-post-image"
                                                                    alt="" decoding="async" />

                                                                <div class="listing-item-content">

                                                                    <h3>{{ $place->name }}</h3>
                                                                    <span>
                                                                        {{ $place->address }}
                                                                    </span>
                                                                </div>

                                                            </div>
                                                        </a>

                                                        <!-- Listing Item / End -->
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-3c55e99 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
                        data-id="3c55e99" data-element_type="section"
                        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6245318"
                                data-id="6245318" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a96695e elementor-widget elementor-widget-listeo-headline"
                                        data-id="a96695e" data-element_type="widget"
                                        data-widget_type="listeo-headline.default">
                                        <div class="elementor-widget-container">
                                            <h3 style="text-align:center;"
                                                class="headline  headline-aligned-to-center headline-extra-spacing headline-box ">
                                                Plan The Vacation of Your Dreams </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-53b5761 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="53b5761" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-70a85e8"
                                data-id="70a85e8" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-fdcc131 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="fdcc131" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-extended">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d09d17d"
                                                data-id="d09d17d" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4871a86 elementor-widget elementor-widget-listeo-iconbox"
                                                        data-id="4871a86" data-element_type="widget"
                                                        data-widget_type="listeo-iconbox.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="icon-box-2 ">
                                                                <h3>Find Interesting Place</h3>
                                                                <p>You can search for areas of interest, local events,
                                                                    trendy restaurants or just things to do.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3968473"
                                                data-id="3968473" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-ae83da1 elementor-widget elementor-widget-listeo-iconbox"
                                                        data-id="ae83da1" data-element_type="widget"
                                                        data-widget_type="listeo-iconbox.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="icon-box-2 ">
                                                                <h3>Check Reviews</h3>
                                                                <p>Determine the quality of goods and services from
                                                                    local and choose the best place.</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-d515ae1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="d515ae1" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-882429d"
                                data-id="882429d" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-450bd5d elementor-widget elementor-widget-spacer"
                                        data-id="450bd5d" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-552d3a1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="552d3a1" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e360838"
                                data-id="e360838" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ef25371 elementor-widget elementor-widget-video"
                                        data-id="ef25371" data-element_type="widget"
                                        data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/youtu.be\/PuJkKWOngFc&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}"
                                        data-widget_type="video.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-wrapper elementor-open-inline">
                                                <div class="elementor-video"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-f1e22fc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="f1e22fc" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dd54a82"
                                data-id="dd54a82" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-36b1608 elementor-widget elementor-widget-spacer"
                                        data-id="36b1608" data-element_type="widget"
                                        data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-21fefb7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="21fefb7" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-15e7fc0"
                                data-id="15e7fc0" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bfe554b"
                                data-id="bfe554b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8e9e044 elementor-widget elementor-widget-shortcode"
                                        data-id="8e9e044" data-element_type="widget"
                                        data-widget_type="shortcode.default">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4753319"
                            data-id="4753319" data-element_type="column">
                            <div class="elementor-widget-wrap">
                            </div>
                        </div>
            </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-9296ddb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="9296ddb" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e409f48"
                        data-id="e409f48" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cbc3450 elementor-widget elementor-widget-spacer"
                                data-id="cbc3450" data-element_type="widget" data-widget_type="spacer.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-spacer">
                                        <div class="elementor-spacer-inner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        </article>

    </div>

    </div>
    <div class="clearfix"></div>
    <div class="margin-top-55"></div>

    <!-- Footer
================================================== -->
    @include('layout.footer')

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
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.5'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.5'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script id="elementor-frontend-js-before" type="text/javascript">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                }
            },
            "version": "3.16.5",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "additional_custom_breakpoints": true,
                "landing-pages": true
            },
            "urls": {
                "assets": "https:\/\/libonatour.x10.mx\/wp-content\/plugins\/elementor\/assets\/"
            },
            "swiperClass": "swiper-container",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 114,
                "title": "Libona%20Tour%20%E2%80%93%20Explore%20top-rated%20attractions%2C%20activities%20and%20more%21",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script type='text/javascript'
        src='https://libonatour.x10.mx/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.16.5'
        id='elementor-frontend-js'></script>

</body>

</html>
