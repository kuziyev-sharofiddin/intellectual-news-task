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
                    <a aria-current="page" href="https://ipcenter.uz/phone-numbers"
                       class="router-link-active router-link-exact-active"><span>Bog‘lanish</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/phone-numbers"
                       class="router-link-active router-link-exact-active"><span>{{$doc->title}}</span></a></div>
                <h1>{{$doc->title}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-phone-numbers">
                                    <div class="page-phone-numbers-wrapper">
                                        {!! $page->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Bog‘lanish</h4>
                                    <ul>
                                        <li><a href="https://ipcenter.uz/contacts"
                                               class="parent"><span>Kontaktlar</span><!----></a><!----></li>
                                        <li><a aria-current="page" href="https://ipcenter.uz/phone-numbers"
                                               class="router-link-active router-link-exact-active parent"><span>Barcha raqamlar</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/fuqarolar-murojaati" class="parent"><span>Fuqarolar murojaati</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/faq" class="parent"><span>Ko‘p beriladigan savollar</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/bank-rekvizitlari"
                                               class="parent"><span>Bank rekvizitlari</span><!----></a><!----></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--]--></div>
@endsection
