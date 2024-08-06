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
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/press-relizlar"
                       class="router-link-active router-link-exact-active"><span>Медиатека</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/press-relizlar"
                       class="router-link-active router-link-exact-active"><span>{{$doc->title}}</span></a></div>
                <h1>{{$doc->title}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        @foreach($news as $pres)
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-static-wrapper">
                                    <div class="page-static-content"></div>
                                    <div class="page-static-docs">{!! $pres->description !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Медиатека</h4>
                                    <ul>
                                        <li><a href="https://ipcenter.uz/ru/news" class="parent"><span>Новости центра</span>
                                                <!----></a><!----></li>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/ru/static/press-relizlar"
                                               class="router-link-active router-link-exact-active parent"><span>Пресс-релизы</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/photo-gallery" class="parent"><span>Фотогалерея</span>
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
    <div class="layout-body"><!--[-->
        <div class="page">
            <div class="container">
                <div class="breadcrumb"><a href="https://ipcenter.uz/ru" class=""><span>Главная страница</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/press-relizlar"
                       class="router-link-active router-link-exact-active"><span>Медиатека</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/press-relizlar"
                       class="router-link-active router-link-exact-active"><span>{{$doc->name}}</span></a></div>
                <h1>{{$doc->name}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        @foreach($news as $pres)
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-static-wrapper">
                                    <div class="page-static-content"></div>
                                    <div class="page-static-docs"><a
                                            href="{{$pres->getImageUrl()}}"
                                            download="" target="_blank" class="page-static-doc"><span>{!! $pres->description !!}</span><span
                                                class="ext">pdf</span></a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Медиатека</h4>
                                    <ul>
                                        <li><a href="https://ipcenter.uz/ru/news" class="parent"><span>Новости центра</span>
                                                <!----></a><!----></li>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/ru/static/press-relizlar"
                                               class="router-link-active router-link-exact-active parent"><span>Пресс-релизы</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/photo-gallery" class="parent"><span>Фотогалерея</span>
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
