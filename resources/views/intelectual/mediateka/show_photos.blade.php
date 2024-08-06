@extends('intelectual.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="layout-body"><!--[-->
        <div class="page">
            <div class="container">
                <div class="breadcrumb"><a href="https://ipcenter.uz/ru" class=""><span>Главная страница</span></a>
                    <!--[-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/photo-gallery/adli-vazirligi-uzuridag"
                       class="router-link-active router-link-exact-active"><span>Медиатека</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/photo-gallery/adli-vazirligi-uzuridag"
                       class="router-link-active router-link-exact-active"><span>Фотогалерея</span></a><!--]-->
                </div>
                <h1>{{$new->title}}</h1>
                <div class="page-wrapper">
                    <div class="ant-row css-16pw25h" style=""><!--[-->
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h"
                             style=""><!--[-->
                            <div class="page-main"><!--[-->
                                <div class="page-news-detail-wrapper">
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
                                    <div class="gallery-imgs">
                                        @foreach($new->images() as $image)
                                        <div class="img"><img
                                                src="{{$image->getUrl()}}"
                                                alt="Адлия вазирлиги ҳузуридаги “Интеллектуал мулк маркази” давлат муассасаси делегатсияси иштирокида Наманган вилоятида сайёр қабул ўтказилди">
                                        </div>
                                        @endforeach
                                        </div><!--]--></div>
                                    <div class="news-content no-border"></div>
                                </div><!----><!--]--></div><!--]--></div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h"
                             style=""><!--[-->
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Медиатека</h4>
                                    <ul><!--[-->
                                        <li><a href="https://ipcenter.uz/ru/news" class="parent"><span>Марказ янгиликлари</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/press-relizlar"
                                               class="parent"><span>Пресс-релизлар</span><!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/photo-gallery" class="parent"><span>Фотогалерея</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/video-gallery" class="parent"><span>Видеогалерея</span>
                                                <!----></a><!----></li><!--]--></ul>
                                </div>
                            </div><!--]--></div><!--]--></div>
                </div>
            </div>
        </div><!--]--></div>
@endsection
