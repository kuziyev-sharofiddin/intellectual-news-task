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
                       class="router-link-active router-link-exact-active"><span>{{$page->title}}</span></a>
                </div>
                <h1>{{$page->title}}</h1>
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
                                <div class="page-sidebar-menu"><h4>Asosiy faoliyat</h4>
                                    <ul>
                                        <li><a aria-current="page"
                                               href="https://ipcenter.uz/ru/static/the-direction-of-inventio"
                                               class="router-link-active router-link-exact-active parent"><span>Ixtiro va foydali modellar yo‘nalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/sanoat-namunalari-seleks"
                                               class="parent"><span>Sanoat namunalari, seleksiya yutuqlari, geografik ko‘rsatkichlar va tovar kelib chiqqan joy nomlari</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/tovar-belgilari-va-xizmat"
                                               class="parent"><span>Tovar belgilari va xizmat ko‘rsatish belgilari yunalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/mualliflik-huquqi-obyektl"
                                               class="parent"><span>Mualliflik huquqi obyektlarini deponentlash hamda EHM uchun dastur va maʼlumotlar bazalari yo‘nalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/tiqqmlar-faoliyatini-muvo"
                                               class="parent"><span>TIQQMlar faoliyatini muvofiqlashtirish yo‘nalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/intellektual-mulk-obyektl"
                                               class="parent"><span>Intellektual mulk obyektlarini fuqarolik muomalasiga kiritish va tijoratlashtirishga ko‘maklashish yo‘nalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/xalqaro-hamkorlik-yonali"
                                               class="parent"><span>Xalqaro hamkorlik yo‘nalishi</span><!----></a>
                                            <!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/ish-faoliyatini-tashkilla"
                                               class="parent"><span>Ish faoliyatini tashkillashtirish va nazorat qilish yo‘nalishi</span>
                                                <!----></a><!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/moliya-iqtisod-bolimi"
                                               class="parent"><span>Moliya-iqtisod bo‘limi</span><!----></a><!---->
                                        </li>
                                        <li><a href="https://ipcenter.uz/ru/static/kadrlar-boyicha-mutaxass"
                                               class="parent"><span>Kadrlar bo‘yicha mutaxassis</span><!----></a>
                                            <!----></li>
                                        <li><a href="https://ipcenter.uz/ru/static/ma%CA%BCmuriy-xojalik-ishlari"
                                               class="parent"><span>Maʼmuriy-xo‘jalik ishlari bo‘yicha bosh maslahatchi</span>
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
