@extends('intelectual.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="layout-body"><!--[-->
        <div class="page-department">
            <div class="page">
                <div class="container">
                    <div class="breadcrumb"><a href="https://ipcenter.uz/uz" class=""><span>Асосий саҳифа</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none"
                             viewBox="0 0 20 21">
                            <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="m7.5 15.5 5-5-5-5"></path>
                        </svg>
                        <a aria-current="page" href="https://ipcenter.uz/uz/departments"
                           class="router-link-active router-link-exact-active"><span>Марказ ҳақида</span></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none"
                             viewBox="0 0 20 21">
                            <path stroke="#C3CBD9" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="m7.5 15.5 5-5-5-5"></path>
                        </svg>
                        <a aria-current="page" href="https://ipcenter.uz/uz/departments"
                           class="router-link-active router-link-exact-active"><span>Марказ бўлимлари</span></a>
                    </div>
                    <h1>Марказ бўлимлари</h1>
                    <div class="page-wrapper">
                        <div glutter="0,0" class="ant-row css-16pw25h">
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-18 ant-col-xxl-19 css-16pw25h">
                                <div class="page-main">
                                    <div class="ant-row css-16pw25h">
                                        @foreach($departments as $department)
                                        <div class="ant-col ant-col-xxl-12 css-16pw25h">
                                            <div class="cards-leadership">
                                                <div class="cards-leadership-wrapper">
                                                    <div class="ant-row css-16pw25h">
                                                        <div class="ant-col ant-col-xs-24 ant-col-sm-8 ant-col-md-8 ant-col-lg-8 ant-col-xl-8 ant-col-xxl-8 css-16pw25h">
                                                            <div class="cards-leadership-avatar"><img
                                                                    src="{{$department->getImageUrl() }}"
                                                                    alt=""></div>
                                                        </div>
                                                        <div class="ant-col ant-col-xs-24 ant-col-sm-16 ant-col-md-16 ant-col-lg-16 ant-col-xl-16 ant-col-xxl-16 css-16pw25h">
                                                            <div class="cards-leadership-data">
                                                                <div class="cards-leadership-main"><h1>{{$department->full_name}}</h1><span>{{$department->position}}</span>
                                                                </div>
                                                                <div class="cards-leadership-contacts">
                                                                    <div class="cards-leadership-contact">
                                                                        <span>Тел:</span>
                                                                        <div class="phone"><a
                                                                                href="https://ipcenter.uz/uz/departments">{{$department->phone}}</a><!----></div>
                                                                    </div><!----></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-24 ant-col-xl-6 ant-col-xxl-5 css-16pw25h">
                                <div class="page-sidebar">
                                    <div class="page-sidebar-menu"><h4>Марказ ҳақида</h4>
                                        <ul>
                                            <li><a href="https://ipcenter.uz/uz/history" class="parent"><span>Марказ тарихи</span>
                                                    <!----></a><!----></li>
                                            <li><a href="https://ipcenter.uz/uz/static/responsibilities-and-func"
                                                   class="parent"><span>Вазифа ва функциялари</span><!----></a>
                                                <!----></li>
                                            <li><a href="https://ipcenter.uz/uz/static/the-structure-of-the-cent"
                                                   class="parent"><span>Марказ тузилмаси</span><!----></a><!---->
                                            </li>
                                            <li><a href="https://ipcenter.uz/uz/leadership" class="parent"><span>Раҳбарият</span>
                                                    <!----></a><!----></li>
                                            <li><a href="https://ipcenter.uz/uz/static/scientific-and-technical-"
                                                   class="parent"><span>Илмий-техник кенгаш</span><!----></a><!---->
                                            </li>
                                            <li><a aria-current="page" href="https://ipcenter.uz/uz/departments"
                                                   class="router-link-active router-link-exact-active parent"><span>Марказ бўлимлари</span>
                                                    <!----></a><!----></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--]--></div>
@endsection
