@extends('admin.layouts.app')
@section( 'title', 'Dashboard')
@section('content')
    <div class="app-container container-lg  pt-10">
        <div class="content-header row mb-6">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-4">Add</h2>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <ol class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold">
                                <li class="breadcrumb-item">
                                    <a href="/admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('menus.index')}}">
                                        Menus
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Add
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-flush p-10">
            <form id="kt_docs_formvalidation_text" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                  action="{{route('menus.update', ['menu' => $menu->id])}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title" value="{{ $menu->title }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Name(*uz)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name_uz" value="{{ $menu->getTranslation('name','uz') }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Name(*crl)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name_crl" value="{{ $menu->getTranslation('name','crl') }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Name(*ru)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name_ru" value="{{ $menu->getTranslation('name','ru') }}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Url Type</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="url_type" value="{{$menu->url_type}}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Url Value</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="url_value" value="{{$menu->url_value}}"
                               class="form-control form-control-solid mb-3 mb-lg-0">
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
{{--                <div class="fv-row mb-10 row fv-plugins-icon-container">--}}
{{--                    <div class="col-3 d-flex align-items-center justify-content-end">--}}
{{--                        <label class="required fw-semibold fs-6 mb-2">Url Value</label>--}}
{{--                    </div>--}}
{{--                    <div class="col-7">--}}
{{--                        <select class="form-control form-control-solid mb-3 mb-lg-0"--}}
{{--                                name="url_value" >--}}
{{--                            <option value=""></option>--}}
{{--                            @foreach ($pages as $page)--}}
{{--                                <option value="{{ $page->id }}">{{$page->title}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        <div class="fv-plugins-message-container invalid-feedback">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Parent</label>
                    </div>
                    <div class="col-7">
                        <select class="form-control form-control-solid mb-3 mb-lg-0" name="parent_id">
{{--                            <option value=""></option>--}}
                            <option></option>
                            @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}">
                                    {{ $menu->title }}
                                </option>
                            @endforeach
                        </select>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-3 col-7">
                        <button id="kt_docs_formvalidation_text_submit" type="submit" class="btn btn-primary btn-sm">
                            Save
                        </button>
                        <a class="btn btn-sm btn-danger" href="">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
