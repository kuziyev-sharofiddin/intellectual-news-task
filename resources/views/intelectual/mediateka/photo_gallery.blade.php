@extends('intelectual.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
<div class="layout-body"><!--[-->
    <div class="page">
        <div class="container">
            <div class="breadcrumb"><a href="https://ipcenter.uz/ru" class=""><span>Главная страница</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                    <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="m7.5 15.5 5-5-5-5"></path>
                </svg>
                <a aria-current="page" href="https://ipcenter.uz/ru/photo-gallery"
                   class="router-link-active router-link-exact-active"><span>Медиатека</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                    <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="m7.5 15.5 5-5-5-5"></path>
                </svg>
                <a aria-current="page" href="https://ipcenter.uz/ru/photo-gallery"
                   class="router-link-active router-link-exact-active"><span>Фотогалерея</span></a></div>
            <h1>Фотогалерея</h1>
            <div class="page-wrapper">
                <div glutter="0,0" class="ant-row css-16pw25h">
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                        <div class="page-main">
                            <div class="page-news-wrapper">
                                <div class="ant-row css-16pw25h">
                                    @foreach($photos as $photo)
                                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-12 ant-col-lg-12 ant-col-xl-12 ant-col-xxl-8 css-16pw25h">
                                        <a href="{{ route('mediateka.photo-show', ['id' => $photo->id]) }}"
                                           class="cards-news">
                                            <div class="cards-news-wrapper">
                                                <div class="cards-news-main">
                                                    <div class="cards-news-img">
                                                        <div class="cards-news-photo">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" fill="none" viewBox="0 0 24 24">
                                                                <g clip-path="url(#a)">
                                                                    <path fill="#fff"
                                                                          d="M9 7.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5S11.33 9 10.5 9 9 8.33 9 7.5M24 7v6c0 2.76-2.24 5-5 5h-9c-2.76 0-5-2.24-5-5V7c0-2.76 2.24-5 5-5h9c2.76 0 5 2.24 5 5M7 13c0 .77.29 1.47.77 2.01l5.24-5.24c.98-.98 2.69-.98 3.67 0l1.04 1.04c.23.23.62.23.85 0L22 7.38V7c0-1.65-1.35-3-3-3h-9C8.35 4 7 5.35 7 7zm15 0v-2.79l-2.02 2.02c-.98.98-2.69.98-3.67 0l-1.04-1.04a.61.61 0 0 0-.85 0l-4.79 4.79c.12.02.24.02.37.02h9c1.65 0 3-1.35 3-3m-5 7H5c-1.65 0-3-1.35-3-3v-6c0-.74.27-1.45.77-2a.998.998 0 1 0-1.49-1.33A5 5 0 0 0 0 11.01v6c0 2.76 2.24 5 5 5h12c.55 0 1-.45 1-1s-.45-1-1-1z"></path>
                                                                </g>
                                                                <defs>
                                                                    <clippath id="a">
                                                                        <path fill="#fff"
                                                                              d="M0 0h24v24H0z"></path>
                                                                    </clippath>
                                                                </defs>
                                                            </svg>
                                                        </div><!----><img
                                                            src="{{$photo->getImageUrl()}}"
                                                            alt="Адлия вазирлиги ҳузуридаги “Интеллектуал мулк маркази” давлат муассасаси делегатсияси иштирокида Наманган вилоятида сайёр қабул ўтказилди"
                                                            loading="lazy"></div>
                                                    <h3 title="Адлия вазирлиги ҳузуридаги “Интеллектуал мулк маркази” давлат муассасаси делегатсияси иштирокида Наманган вилоятида сайёр қабул ўтказилди">
                                                        {{$photo->title}}
                                                    </h3></div>
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
                                                        <span>{{ $photo->created_at_formatted }}</span></div>
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
                                                        <span>{{ $photo->views_count }}</span></div>
                                                </div>
                                            </div></a></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                        <div class="page-sidebar">
                            <div class="page-sidebar-menu"><h4>Медиатека</h4>
                                <ul>
                                    <li><a href="https://ipcenter.uz/ru/news" class="parent"><span>Марказ янгиликлари</span>
                                            <!----></a><!----></li>
                                    <li><a href="https://ipcenter.uz/ru/static/press-relizlar"
                                           class="parent"><span>Пресс-релизлар</span><!----></a><!----></li>
                                    <li><a aria-current="page" href="https://ipcenter.uz/ru/photo-gallery"
                                           class="router-link-active router-link-exact-active parent"><span>Фотогалерея</span>
                                            <!----></a><!----></li>
                                    <li><a href="https://ipcenter.uz/ru/video-gallery" class="parent"><span>Видеогалерея</span>
                                            <!----></a><!----></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--]--></div>
@endsection
