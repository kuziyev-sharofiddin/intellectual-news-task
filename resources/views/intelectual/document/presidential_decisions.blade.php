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
                    <a aria-current="page" href="https://ipcenter.uz/docs/vazirlar-mahkamasining-qa"
                       class="router-link-active router-link-exact-active"><span>Hujjatlar</span></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none" viewBox="0 0 20 21">
                        <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="m7.5 15.5 5-5-5-5"></path>
                    </svg>
                    <a aria-current="page" href="https://ipcenter.uz/docs/vazirlar-mahkamasining-qa"
                       class="router-link-active router-link-exact-active"><span>{{$doc->name}}</span></a>
                </div>
                <h1>{{$doc->name}}</h1>
                <div class="page-wrapper">
                    <div glutter="0,0" class="ant-row css-16pw25h">
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                            <div class="page-main">
                                @foreach($documents as $document)
                                    <div class="cards-doc">
                                        <div class="cards-doc-wrapper"><span>{{$document->decision_number_date}}</span><h5>{{$document->title}}</h5><a
                                                href="https://lex.uz/uz/docs/-6688508" target="_blank"><span>{{$document->url}}</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                                     viewBox="0 0 20 20">
                                                    <g stroke="#00A651" stroke-linecap="round" stroke-linejoin="round"
                                                       stroke-width="1.5" clip-path="url(#a)">
                                                        <path d="M10 5H5a1.667 1.667 0 0 0-1.667 1.667V15A1.667 1.667 0 0 0 5 16.667h8.333A1.666 1.666 0 0 0 15 15v-5M9.167 10.834l7.5-7.5M12.5 3.334h4.167v4.167"></path>
                                                    </g>
                                                    <defs>
                                                        <clippath id="a">
                                                            <path fill="#fff" d="M0 0h20v20H0z"></path>
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                            <div class="page-sidebar">
                                <div class="page-sidebar-menu"><h4>Hujjatlar</h4>
                                    <ul>
                                        <li><a href="https://ipcenter.uz/docs/sohaga-oid-xalqaro-hujjat"
                                               class="parent"><span>Sohaga oid xalqaro hujjatlar</span><!----></a>
                                            <!----></li>
                                        <li><a href="https://ipcenter.uz/docs/qonunlar" class="parent"><span>Qonunlar</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/docs/ozbekiston-respublikasi-"
                                               class="parent"><span>O‘zbekiston Respublikasi Prezidentining farmonlari va qarorlari</span>
                                                <!----></a><!----></li>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/docs/vazirlar-mahkamasining-qa"
                                               class="router-link-active router-link-exact-active parent"><span>Vazirlar Mahkamasining qarorlari</span>
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
