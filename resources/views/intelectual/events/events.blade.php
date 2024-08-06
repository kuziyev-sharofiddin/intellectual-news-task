@extends('intelectual.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
<div class="layout-body"><!--[-->
    <div class="page">
        <div class="container">
            <div class="breadcrumb"><a href="https://ipcenter.uz/" class=""><span>Asosiy sahifa</span></a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                    <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                          d="m7.5 15.5 5-5-5-5"></path>
                </svg>
                <a aria-current="page" href="https://ipcenter.uz/events"
                   class="router-link-active router-link-exact-active"><span>Tadbirlar</span></a></div>
            <h1>Tadbirlar</h1>
            <div class="page-wrapper">
                <div glutter="0,0" class="ant-row css-16pw25h"><!---->
                    <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-24 ant-col-xxl-24 css-16pw25h">
                        <div class="page-events-wrapper">
                            <div class="ant-row css-16pw25h">
                                @foreach($events as $event)
                                <div class="ant-col ant-col-xs-24 ant-col-sm-12 ant-col-md-8 ant-col-lg-8 ant-col-xl-8 ant-col-xxl-6 css-16pw25h">
                                    <a href="https://ipcenter.uz/events/andizhon-davlat-universite"
                                       class="cards-news">
                                        <div class="cards-news-wrapper">
                                            <div class="cards-news-main">
                                                <div class="cards-news-img"><!----><!----><img
                                                        src="{{$event->getImageUrl()}}"
                                                        alt="Андижон давлат университети ТИҚҚМда навбатдаги семинар ўтказилди."
                                                        loading="lazy"></div>
                                                <h3 title="Андижон давлат университети ТИҚҚМда навбатдаги семинар ўтказилди.">{{$event->title}}</h3></div>
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
                                                    <span>{{$event->created_at_formatted}}</span></div>
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
                                                    <span>{{$event->views_count}}</span></div>
                                            </div>
                                        </div><!----></a></div>
                                @endforeach
                            </div><!----></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--]--></div>
@endsection
