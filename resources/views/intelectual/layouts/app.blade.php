<!DOCTYPE html>
<!-- saved from url=(0022)https://ipcenter.uz/uz -->
<html class="light">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .menus-childd ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background-color: #003d5c; /* Adjust to match the background color of your site */
            padding: 20px; /* Adjust the padding as needed */
        }

        .menus-childd li {
            margin-bottom: 10px;
        }

        .menus-childd a {
            text-decoration: none;
            color: white; /* Adjust the color as needed */
            font-size: 16px; /* Adjust the font size as needed */
        }
    </style>
    <title>INTELLEKTUAL MULK MARKAZI</title>
    <link rel="icon" type="image/png" href="https://ipcenter.uz/ima.png">
    <link rel="stylesheet" href="./INTELLEKTUAL MULK MARKAZI_files/index.TNdSHnls.css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css"/>
    <script id="unhead:payload" type="application/json">{
        "title": "INTELLEKTUAL MULK MARKAZI"
    }</script>

    <script>"use strict";
        (() => {
            const a = window, e = document.documentElement, c = window.localStorage, d = ["dark", "light"],
                n = c && c.getItem && c.getItem("nuxt-color-mode") || "light";
            let l = n === "system" ? f() : n;
            const i = e.getAttribute("data-color-mode-forced");
            i && (l = i), r(l), a["__NUXT_COLOR_MODE__"] = {
                preference: n,
                value: l,
                getColorScheme: f,
                addColorScheme: r,
                removeColorScheme: u
            };

            function r(o) {
                const t = "" + o + "", s = "";
                e.classList ? e.classList.add(t) : e.className += " " + t, s && e.setAttribute("data-" + s, o)
            }

            function u(o) {
                const t = "" + o + "", s = "";
                e.classList ? e.classList.remove(t) : e.className = e.className.replace(new RegExp(t, "g"), ""), s && e.removeAttribute("data-" + s)
            }

            function m(o) {
                return a.matchMedia("(prefers-color-scheme" + o + ")")
            }

            function f() {
                if (a.matchMedia && m("").media !== "not all") {
                    for (const o of d) if (m(":" + o).matches) return o
                }
                return "light"
            }
        })();
    </script>
</head>
<body>

<div id="__nuxt" style="overflow: visible;">
    <div class="main-layout specialNormal">
        @include('intelectual.includes.header')
        @yield('content')
        @include('intelectual.includes.footer')
    </div><!--]--><!--]--></div>
<div id="teleports"></div>
<script src="/assets/js/burger.js"></script>
<script src="/assets/js/menu.js"></script>
{{--<script src="/assets/js/menu.js"></script>--}}
<script type="application/json" id="__NUXT_DATA__" data-ssr="true">[
    [
        "Reactive",
        1
    ],
    {
        "data": 2,
        "state": 3,
        "once": 9,
        "_errors": 10,
        "serverRendered": 7,
        "path": 12,
        "pinia": 13
    },
    {
        "app-pages": -1,
        "home-page": -1
    },
    {
        "$snuxt-i18n-meta": 4,
        "$scolor-mode": 5
    },
    {},
    {
        "preference": 6,
        "value": 6,
        "unknown": 7,
        "forced": 8
    },
    "light",
    true,
    false,
    [
        "Set"
    ],
    {
        "app-pages": 11,
        "home-page": 11
    },
    null,
    "/uz",
    {
        "menu": 14,
        "utils": 27,
        "pages": 32,
        "advs": 36,
        "main": 57,
        "news": 103,
        "support": 114
    },
    {
        "menus": 15,
        "breadcrumbs": 18,
        "menuDetail": 21,
        "sidebarMenu": 24
    },
    [
        "Ref",
        16
    ],
    [
        "Reactive",
        17
    ],
    [],
    [
        "Ref",
        19
    ],
    [
        "Reactive",
        20
    ],
    {},
    [
        "Ref",
        22
    ],
    [
        "Reactive",
        23
    ],
    {},
    [
        "Ref",
        25
    ],
    [
        "Reactive",
        26
    ],
    {},
    {
        "img": 28,
        "view": 30
    },
    [
        "EmptyRef",
        29
    ],
    "\"\"",
    [
        "Ref",
        31
    ],
    "specialNormal",
    {
        "pages": 33
    },
    [
        "Ref",
        34
    ],
    [
        "Reactive",
        35
    ],
    {},
    {
        "contents": 37,
        "tenders": 40,
        "shopping": 43,
        "events": 46,
        "eventsCount": 49,
        "homeEvents": 51,
        "eventsDetail": 54
    },
    [
        "Ref",
        38
    ],
    [
        "Reactive",
        39
    ],
    [],
    [
        "Ref",
        41
    ],
    [
        "Reactive",
        42
    ],
    [],
    [
        "Ref",
        44
    ],
    [
        "Reactive",
        45
    ],
    [],
    [
        "Ref",
        47
    ],
    [
        "Reactive",
        48
    ],
    [],
    [
        "EmptyRef",
        50
    ],
    "0",
    [
        "Ref",
        52
    ],
    [
        "Reactive",
        53
    ],
    [],
    [
        "Ref",
        55
    ],
    [
        "Reactive",
        56
    ],
    {},
    {
        "interactive": 58,
        "services": 61,
        "manage": 64,
        "manageCount": 67,
        "map": 68,
        "geoData": 71,
        "activeRegion": 74,
        "list": 76,
        "numbers": 79,
        "regions": 82,
        "currentRegion": 85,
        "question": 88,
        "graph": 91,
        "newslatter": 94,
        "departments": 97,
        "usefulLink": 100
    },
    [
        "Ref",
        59
    ],
    [
        "Reactive",
        60
    ],
    [],
    [
        "Ref",
        62
    ],
    [
        "Reactive",
        63
    ],
    [],
    [
        "Ref",
        65
    ],
    [
        "Reactive",
        66
    ],
    {},
    [
        "EmptyRef",
        50
    ],
    [
        "Ref",
        69
    ],
    [
        "Reactive",
        70
    ],
    [],
    [
        "Ref",
        72
    ],
    [
        "Reactive",
        73
    ],
    [],
    [
        "Ref",
        75
    ],
    50,
    [
        "Ref",
        77
    ],
    [
        "Reactive",
        78
    ],
    [],
    [
        "Ref",
        80
    ],
    [
        "Reactive",
        81
    ],
    [],
    [
        "Ref",
        83
    ],
    [
        "Reactive",
        84
    ],
    [],
    [
        "Ref",
        86
    ],
    [
        "Reactive",
        87
    ],
    {},
    [
        "Ref",
        89
    ],
    [
        "Reactive",
        90
    ],
    [],
    [
        "Ref",
        92
    ],
    [
        "Reactive",
        93
    ],
    [],
    [
        "Ref",
        95
    ],
    [
        "Reactive",
        96
    ],
    [],
    [
        "Ref",
        98
    ],
    [
        "Reactive",
        99
    ],
    [],
    [
        "Ref",
        101
    ],
    [
        "Reactive",
        102
    ],
    [],
    {
        "news": 104,
        "homeNews": 107,
        "newsCount": 110,
        "newsDetail": 111
    },
    [
        "Ref",
        105
    ],
    [
        "Reactive",
        106
    ],
    {},
    [
        "Ref",
        108
    ],
    [
        "Reactive",
        109
    ],
    [],
    [
        "EmptyRef",
        50
    ],
    [
        "Ref",
        112
    ],
    [
        "Reactive",
        113
    ],
    {},
    {
        "categories": 115,
        "data": 118,
        "defaultCategory": 121
    },
    [
        "Ref",
        116
    ],
    [
        "Reactive",
        117
    ],
    [],
    [
        "Ref",
        119
    ],
    [
        "Reactive",
        120
    ],
    {},
    [
        "Ref",
        122
    ],
    25
]</script>
<script>window.__NUXT__ = {};
    window.__NUXT__.config = {
        public: {
            i18n: {
                baseUrl: "",
                defaultLocale: "oz",
                defaultDirection: "ltr",
                strategy: "prefix_except_default",
                lazy: true,
                rootRedirect: "",
                routesNameSeparator: "___",
                defaultLocaleRouteNameSuffix: "default",
                skipSettingLocaleOnNavigate: false,
                differentDomains: false,
                trailingSlash: false,
                configLocales: [{code: "ru", name: "Русский", short_name: "РУ", files: ["lang/ru.json"]}, {
                    code: "uz",
                    name: "Ўзбекча",
                    short_name: "UZ",
                    files: ["lang/uz.json"]
                }, {code: "oz", name: "O‘zbekcha", short_name: "OZ", files: ["lang/oz.json"]}],
                locales: {ru: {domain: ""}, uz: {domain: ""}, oz: {domain: ""}},
                detectBrowserLanguage: {
                    alwaysRedirect: false,
                    cookieCrossOrigin: false,
                    cookieDomain: "",
                    cookieKey: "i18n_redirected",
                    cookieSecure: false,
                    fallbackLocale: "",
                    redirectOn: "root",
                    useCookie: true
                },
                experimental: {localeDetector: "", switchLocalePathLinkSSR: false, autoImportTranslationFunctions: false}
            }
        }, app: {baseURL: "/", buildAssetsDir: "/_nuxt/", cdnURL: ""}
    }</script>
</body>
</html>

