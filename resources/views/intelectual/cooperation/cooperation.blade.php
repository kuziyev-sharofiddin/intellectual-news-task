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
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/the-direction-of-inventio"
                       class="router-link-active router-link-exact-active"><span>Asosiy faoliyat</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/ru/static/the-direction-of-inventio"
                       class="router-link-active router-link-exact-active"><span>{{$doc->name}}</span></a>
                </div>
                <h1>{{$doc->name}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-static-wrapper">
                                    <div class="page-static-content">
                                        {!! $page->description !!}
                                    </div>
                                    <div class="page-static-docs"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Hamkorlik</h4>
                                    <ul>
                                        <li><a aria-current="page" href="https://ipcenter.uz/uz/static/kmaklai"
                                               class="router-link-active router-link-exact-active parent"><span>TIQQM</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     fill="none" viewBox="0 0 20 20">
                                                    <path stroke="#838890" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="m5 7.5 5 5 5-5"></path>
                                                </svg>
                                            </a>
                                            <ul class="children">
                                                <li class="child"><a
                                                        href="https://ipcenter.uz/uz/static/umumiy-ma%CA%BClumotlar-va-tiq"
                                                        class=""><span>Umumiy maʼlumotlar va TIQQM loyihasiga oid hujjatlar</span></a>
                                                </li>
                                                <li class="child"><a
                                                        href="https://ipcenter.uz/uz/static/tiqqmni-tashkil-etish-ama"
                                                        class=""><span>TIQQMni tashkil etish amaliyoti</span></a>
                                                </li>
                                                <li class="child"><a href="https://ipcenter.uz/uz/centers" class=""><span>TIQQMlar ro‘yxati</span></a>
                                                </li>
                                                <li class="child"><a href="https://ipcenter.uz/uz/seminars"
                                                                     class=""><span>TIQQMda seminarlar o‘tkazish yuzasidan tarmoqli reja jadvali</span></a>
                                                </li>
                                                <li class="child"><a
                                                        href="https://ipcenter.uz/uz/static/bimt-tiqqm-haqida"
                                                        class=""><span>BIMT TIQQM haqida</span></a></li>
                                                <li class="child"><a href="https://ipcenter.uz/uz/partner/contact"
                                                                     class=""><span>TIQQMlar bilan bog‘lanish</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="https://ipcenter.uz/uz/static/xalqaro-hamkorlik"
                                               class="parent"><span>Xalqaro hamkorlik</span><!----></a><!----></li>
                                        <li><a aria-current="page" href="https://ipcenter.uz/uz/static/kmaklai"
                                               class="router-link-active router-link-exact-active parent"><span>Ko‘maklashish</span>
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
