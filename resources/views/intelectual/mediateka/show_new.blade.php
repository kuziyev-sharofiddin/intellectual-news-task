@extends('intelectual.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="layout-body"><!--[-->
        <div class="page">
            <div class="container">
                <div class="breadcrumb"><a href="https://ipcenter.uz/" class=""><span>Asosiy sahifa</span></a>
                    <!--[-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/news/joriy-yilning-26-iyul-kun"
                       class="router-link-active router-link-exact-active"><span>Медиатека</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/news/joriy-yilning-26-iyul-kun"
                       class="router-link-active router-link-exact-active"><span>{{$new->title}}</span></a>
                    <!--]--></div>
                <h1>{{$new->title}}</h1>
                <div class="page-wrapper">
                    <div class="ant-row css-16pw25h" style=""><!--[-->
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h"
                             style=""><!--[-->
                            <div class="page-main"><!--[-->
                                <div id="printMe" class="page-news-detail-wrapper">
                                    <div class="news-info">
                                        <div class="news-info-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 fill="none" viewBox="0 0 20 20">
                                                <g stroke="#06496E" stroke-linecap="round" stroke-linejoin="round"
                                                   stroke-width="1.5" clip-path="url(#a)">
                                                    <path d="M3.333 5.833A1.667 1.667 0 0 1 5 4.166h10a1.667 1.667 0 0 1 1.666 1.667v10A1.667 1.667 0 0 1 15 17.499H5a1.666 1.666 0 0 1-1.667-1.666zM13.333 2.5v3.333M6.667 2.5v3.333M3.333 9.166h13.333M9.167 12.5H10M10 12.5V15"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="a">
                                                        <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <span>{{ $new->created_at_formatted }}</span></div>
                                        <div class="news-info-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23"
                                                 fill="none" viewBox="0 0 22 23">
                                                <g stroke="#06496E" stroke-linecap="round" stroke-linejoin="round"
                                                   stroke-width="1.5" clip-path="url(#a)">
                                                    <path d="M7.792 11.5a3.208 3.208 0 1 0 6.417 0 3.208 3.208 0 0 0-6.417 0"></path>
                                                    <path d="M19.25 11.5Q15.95 17 11 17t-8.25-5.5Q6.05 6 11 6t8.25 5.5"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="a">
                                                        <path fill="#fff" d="M0 .5h22v22H0z"></path>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <span>{{ $new->views_count }}</span></div>
                                    </div>
                                    <div class="news-imgs">
                                        <div class="news-swiper">
                                            <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                <div class="swiper-wrapper" id="swiper-wrapper-92aed2801003287e6"
                                                     aria-live="off"
                                                     style="transition-duration: 0ms; transition-delay: 0ms;">
                                                    <!--[-->
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/xVOtnIKsqvZKDfOYJIGwVW5LGuLjRKkoJaQDd5Y0.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/o9Zrtg43vgMkq2TJO2IwYxdPM7NhFoqFMVTxlkXZ.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/QKKuYuFHV82GuNoXw9kOI9OvuQIWjeAUpCVZx2B2.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/v76iPI4ogR8GDAZlFjJQ3vfb1oS9rXNjDc8iUsL3.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/ebz3VXCA9GJWsl2qNgbX5muYVfgvOHFv2yEDjP2b.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="news-img"><img class="bg"
                                                                                   src="{{$new->getImageUrl() }}"
                                                                                   alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                            <div class="bg-cover"></div>
                                                            <img src="./show_files/Xj3bL8KHjqN7uzeFfhVwvUu0kRQZWaVLXvFHYAKD.jpg"
                                                                 alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">
                                                        </div>
                                                    </div><!--]--></div>
                                                <span class="swiper-notification" aria-live="assertive"
                                                      aria-atomic="true"></span>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-content"><p>{!! $new->description !!}<br></p></div>
                                    <div class="news-footer">
                                        <div class="news-footer-item share">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                 fill="none" viewBox="0 0 24 25">
                                                <g clip-path="url(#a)">
                                                    <path fill="#06496E"
                                                          d="M19.333 15.167a4.66 4.66 0 0 0-3.839 2.024l-6.509-2.939a4.57 4.57 0 0 0 .005-3.488l6.5-2.954a4.66 4.66 0 1 0-.827-2.643q.006.397.08.786l-6.91 3.14a4.668 4.668 0 1 0-.015 6.827l6.928 3.128a5 5 0 0 0-.079.785 4.667 4.667 0 1 0 4.666-4.666m0-12.667a2.667 2.667 0 1 1 .002 5.335 2.667 2.667 0 0 1-.002-5.335M4.667 15.167a2.667 2.667 0 1 1-.002-5.334 2.667 2.667 0 0 1 .002 5.334M19.333 22.5a2.667 2.667 0 1 1 0-5.334 2.667 2.667 0 0 1 0 5.334"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="a">
                                                        <path fill="#fff" d="M0 .5h24v24H0z"></path>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <div class="share-btns no-active"><a target="_blank"
                                                                                 href="https://www.facebook.com/sharer/sharer.php?u=https://https://ima.rudi.uz/undefined">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                         fill="#06496E" viewBox="0 0 256 256">
                                                        <path d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24m8 191.63V152h24a8 8 0 0 0 0-16h-24v-24a16 16 0 0 1 16-16h16a8 8 0 0 0 0-16h-16a32 32 0 0 0-32 32v24H96a8 8 0 0 0 0 16h24v63.63a88 88 0 1 1 16 0"></path>
                                                    </svg>
                                                </a><a target="_blank"
                                                       href="https://t.me/share/url?url=https://ima.rudi.uz/news/joriy-yilning-26-iyul-kun&amp;text=%D0%96%D0%BE%D1%80%D0%B8%D0%B9%20%D0%B9%D0%B8%D0%BB%D0%BD%D0%B8%D0%BD%D0%B3%2026-%D0%B8%D1%8E%D0%BB%20%D0%BA%D1%83%D0%BD%D0%B8%20%D0%A5%D0%BE%D1%80%D0%B0%D0%B7%D0%BC%20%D0%B2%D0%B8%D0%BB%D0%BE%D1%8F%D1%82%D0%B8%D0%B4%D0%B0%20%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%20%D0%BA%D1%9E%D1%80%D1%81%D0%B0%D1%82%D0%BA%D0%B8%D1%87%D0%BB%D0%B0%D1%80%20%D0%B1%D1%9E%D0%B9%D0%B8%D1%87%D0%B0%20%D0%BC%D0%B8%D0%BD%D1%82%D0%B0%D2%9B%D0%B0%D0%B2%D0%B8%D0%B9%20%D0%B0%D0%BD%D0%B6%D1%83%D0%BC%D0%B0%D0%BD%20%D0%B1%D1%9E%D0%BB%D0%B8%D0%B1%20%D1%9E%D1%82%D0%B4%D0%B8.">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                         fill="#06496E" viewBox="0 0 256 256">
                                                        <path d="M228.88 26.19a9 9 0 0 0-9.16-1.57L17.06 103.93a14.22 14.22 0 0 0 2.43 27.21L72 141.45V200a15.92 15.92 0 0 0 10 14.83 15.91 15.91 0 0 0 17.51-3.73l25.32-26.26L165 220a15.88 15.88 0 0 0 10.51 4 16.3 16.3 0 0 0 5-.79 15.85 15.85 0 0 0 10.67-11.63L231.77 35a9 9 0 0 0-2.89-8.81m-61.14 36-89.59 64.16-49.6-9.73ZM88 200v-47.48l24.79 21.74Zm87.53 8-82.68-72.5 119-85.29Z"></path>
                                                    </svg>
                                                </a><a target="_blank"
                                                       href="https://twitter.com/intent/tweet?url=https://ima.rudi.uz/news/joriy-yilning-26-iyul-kun&amp;text=%D0%96%D0%BE%D1%80%D0%B8%D0%B9%20%D0%B9%D0%B8%D0%BB%D0%BD%D0%B8%D0%BD%D0%B3%2026-%D0%B8%D1%8E%D0%BB%20%D0%BA%D1%83%D0%BD%D0%B8%20%D0%A5%D0%BE%D1%80%D0%B0%D0%B7%D0%BC%20%D0%B2%D0%B8%D0%BB%D0%BE%D1%8F%D1%82%D0%B8%D0%B4%D0%B0%20%D0%B3%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D0%BA%20%D0%BA%D1%9E%D1%80%D1%81%D0%B0%D1%82%D0%BA%D0%B8%D1%87%D0%BB%D0%B0%D1%80%20%D0%B1%D1%9E%D0%B9%D0%B8%D1%87%D0%B0%20%D0%BC%D0%B8%D0%BD%D1%82%D0%B0%D2%9B%D0%B0%D0%B2%D0%B8%D0%B9%20%D0%B0%D0%BD%D0%B6%D1%83%D0%BC%D0%B0%D0%BD%20%D0%B1%D1%9E%D0%BB%D0%B8%D0%B1%20%D1%9E%D1%82%D0%B4%D0%B8.">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                         fill="#06496E" viewBox="0 0 256 256">
                                                        <path d="m214.75 211.71-62.6-98.38 61.77-67.95a8 8 0 0 0-11.84-10.76l-58.84 64.72-40.49-63.63A8 8 0 0 0 96 32H48a8 8 0 0 0-6.75 12.3l62.6 98.37-61.77 68a8 8 0 1 0 11.84 10.76l58.84-64.72 40.49 63.63A8 8 0 0 0 160 224h48a8 8 0 0 0 6.75-12.29M164.39 208 62.57 48h29l101.86 160Z"></path>
                                                    </svg>
                                                </a></div>
                                            <span>Улашиш</span></div>
                                        <div class="news-footer-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                 fill="none" viewBox="0 0 24 25">
                                                <g fill="#06496E" clip-path="url(#a)">
                                                    <path d="M19 6.5v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2a5.006 5.006 0 0 0-5 5v5a5.006 5.006 0 0 0 5 5 3 3 0 0 0 3 3h8a3 3 0 0 0 3-3 5.006 5.006 0 0 0 5-5v-5a5.006 5.006 0 0 0-5-5m-12-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2H7zm10 17a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1zm5-5a3 3 0 0 1-3 3v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a3 3 0 0 1-3-3v-5a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3z"></path>
                                                    <path d="M18 10.5h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2"></path>
                                                </g>
                                                <defs>
                                                    <clippath id="a">
                                                        <path fill="#fff" d="M0 .5h24v24H0z"></path>
                                                    </clippath>
                                                </defs>
                                            </svg>
                                            <span>Чоп этиш</span></div>
                                    </div>
                                </div>
                                <div class="news-similar"><h2>O‘xshash yangiliklar</h2>
                                    <div class="news-similar-items">
                                        <div class="ant-row css-16pw25h">
                                            @foreach($news as $new)
                                            <div class="ant-col ant-col-xxl-8 css-16pw25h">
                                                <a aria-current="page"
                                                                                              href="{{ route('news.show', ['id' => $new->id]) }}"
                                                                                              class="router-link-active router-link-exact-active cards-news">
                                                    <div class="cards-news-wrapper">
                                                        <div class="cards-news-main">
                                                            <div class="cards-news-img"><!----><!----><img
                                                                    src="{{$new->getImageUrl()}}"
                                                                    alt="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди."
                                                                    loading="lazy"></div>
                                                            <h3 title="Жорий йилнинг 26-июл куни Хоразм вилоятида географик кўрсаткичлар бўйича минтақавий анжуман бўлиб ўтди.">{{$new->title}}</h3>
                                                        </div>
                                                        <div class="cards-news-info">
                                                            <div class="cards-news-date">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                     height="20" fill="none" viewBox="0 0 20 20">
                                                                    <g stroke="#06496E" stroke-linecap="round"
                                                                       stroke-linejoin="round" stroke-width="1.5"
                                                                       clip-path="url(#a)">
                                                                        <path d="M3.333 5.833A1.667 1.667 0 0 1 5 4.166h10a1.667 1.667 0 0 1 1.666 1.667v10A1.667 1.667 0 0 1 15 17.499H5a1.666 1.666 0 0 1-1.667-1.666zM13.333 2.5v3.333M6.667 2.5v3.333M3.333 9.166h13.333M9.167 12.5H10M10 12.5V15"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <clippath id="a">
                                                                            <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                                        </clippath>
                                                                    </defs>
                                                                </svg>
                                                                <span>{{ $new->created_at_formatted }}</span></div>
                                                            <div class="cards-news-views">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                     height="23" fill="none" viewBox="0 0 22 23">
                                                                    <g stroke="#06496E" stroke-linecap="round"
                                                                       stroke-linejoin="round" stroke-width="1.5"
                                                                       clip-path="url(#a)">
                                                                        <path d="M7.792 11.5a3.208 3.208 0 1 0 6.417 0 3.208 3.208 0 0 0-6.417 0"></path>
                                                                        <path d="M19.25 11.5Q15.95 17 11 17t-8.25-5.5Q6.05 6 11 6t8.25 5.5"></path>
                                                                    </g>
                                                                    <defs>
                                                                        <clippath id="a">
                                                                            <path fill="#fff" d="M0 .5h22v22H0z"></path>
                                                                        </clippath>
                                                                    </defs>
                                                                </svg>
                                                                <span>{{ $new->views_count }}</span></div>
                                                        </div>
                                                    </div><!----></a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!----><!--]--></div><!--]--></div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h"
                             style=""><!--[-->
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Медиатека</h4>
                                    <ul><!--[-->
                                        <li><a href="https://ipcenter.uz/news" class="parent"><span>Марказ янгиликлари</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/press-relizlar"
                                               class="parent"><span>Пресс-релизлар</span><!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/photo-gallery" class="parent"><span>Фотогалерея</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/video-gallery" class="parent"><span>Видеогалерея</span>
                                                <!----></a><!----></li><!--]--></ul>
                                </div>
                            </div><!--]--></div><!--]--></div>
                </div>
            </div>
        </div><!--]--></div>
@endsection
