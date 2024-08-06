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
                    <a aria-current="page" href="https://ipcenter.uz/static/scientific-and-technical-"
                       class="router-link-active router-link-exact-active"><span>Markaz haqida</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/static/scientific-and-technical-"
                       class="router-link-active router-link-exact-active"><span>Ilmiy-texnik kengash</span></a>
                </div>
                <h1>{{$page->title}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                <div class="page-static-wrapper">
                                    <div class="page-static-content MsoNormal" style="text-align: justify;">{!! $page->description !!}</div>
                                    <div class="page-static-docs"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Markaz haqida</h4>
                                    <ul>
                                        <li><a href="https://ipcenter.uz/history"
                                               class="parent"><span>Markaz tarixi</span><!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/static/responsibilities-and-func"
                                               class="parent"><span>Vazifa va funksiyalari</span><!----></a><!---->
                                        </li>
                                        <li><a href="https://ipcenter.uz/static/the-structure-of-the-cent"
                                               class="parent"><span>Markaz tuzilmasi</span><!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/leadership"
                                               class="parent"><span>Rahbariyat</span><!----></a><!----></li>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/static/scientific-and-technical-"
                                               class="router-link-active router-link-exact-active parent"><span>Ilmiy-texnik kengash</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/departments" class="parent"><span>Markaz bo‘limlari</span>
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
