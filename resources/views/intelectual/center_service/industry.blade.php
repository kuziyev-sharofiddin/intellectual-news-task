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
                    <a aria-current="page" href="https://ipcenter.uz/static/ixtiro-va-foydali-modella"
                       class="router-link-active router-link-exact-active"><span>Markaz xizmatlari</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/static/ixtiro-va-foydali-modella"
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
                                <div class="page-sidebar-menu"><h4>Markaz xizmatlari</h4>
                                    <ul>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/static/ixtiro-va-foydali-modella"
                                               class="router-link-active router-link-exact-active parent"><span>Ixtiro va foydali modellar bo‘yicha</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/sanoat-namunalari-boyich"
                                               class="parent"><span>Sanoat namunalari bo‘yicha</span><!----></a>
                                            <!----></li>
                                        <li><a href="https://ipcenter.uz/static/tovar-belgilari-va-xiz"
                                               class="parent"><span>Tovar belgilari va xizmat ko‘rsatish belgilari bo‘yicha</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/mualliflik-huquqi-oby"
                                               class="parent"><span>Mualliflik huquqi obyektlarini deponentlash, EHM uchun dastur va maʼlumotlar bazalari bo‘yicha</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/oquv-kurslari-boyicha"
                                               class="parent"><span>O‘quv kurslari bo‘yicha</span><!----></a><!---->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--]--></div>
@endsection
