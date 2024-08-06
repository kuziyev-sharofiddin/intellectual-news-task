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
                    <a aria-current="page" href="https://ipcenter.uz/faq"
                       class="router-link-active router-link-exact-active"><span>Bog‘lanish</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/faq"
                       class="router-link-active router-link-exact-active"><span>{{$doc->name}}</span></a>
                </div>
                <h1>{{$doc->name}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-faq">
                                    <div class="page-faq-wrapper">
                                        @foreach($pages as $page)
                                        <div class="page-faq-item">
                                            <div class="page-faq-item-title"><h1>{{$page->title}}</h1>
                                                <button class="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         fill="none" viewBox="0 0 24 24">
                                                        <g stroke="#003C5D" stroke-linecap="round"
                                                           stroke-linejoin="round" stroke-width="1.5"
                                                           clip-path="url(#a)">
                                                            <path d="M20.485 12H3.515M12 3.516v16.97"></path>
                                                        </g>
                                                        <defs>
                                                            <clippath id="a">
                                                                <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                            </clippath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="page-faq-item-content"><p>{!! $page->description !!}<br></p></div>
                                        </div>
                                        @endforeach
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
                                        <li><a href="https://ipcenter.uz/phone-numbers" class="parent"><span>Barcha raqamlar</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/fuqarolar-murojaati" class="parent"><span>Fuqarolar murojaati</span>
                                                <!----></a><!----></li>
                                        <li><a aria-current="page" href="https://ipcenter.uz/faq"
                                               class="router-link-active router-link-exact-active parent"><span>Ko‘p beriladigan savollar</span>
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
