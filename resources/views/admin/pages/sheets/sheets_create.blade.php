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
                                    <a href="admin/dashboard">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{route('sheets.index')}}">
                                        Pages
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
            <form id="kt_docs_formvalidation_text" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{route('sheets.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="required form-label">Image</div>
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <div class="image-input-wrapper w-200px h-175px border-secondary border d-flex align-items-center flex-column justify-content-center">
                        </div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-kt-initialized="1">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="file" value="" name="image">
                        </label>

                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
                        </span>
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Name</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control form-control-solid mb-3 mb-lg-0">
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title(*uz)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title_uz" value="{{old('title_uz')}}" class="form-control form-control-solid mb-3 mb-lg-0">
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title(*ru)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title_ru" value="{{old('title_ru')}}" class="form-control form-control-solid mb-3 mb-lg-0">
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Title(*crl)</label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="title_crl" value="{{old('title_crl')}}" class="form-control form-control-solid mb-3 mb-lg-0">
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Description(*uz)</label>
                    </div>
                    <div class="col-7">
                        <textarea type="text"  name="description_uz" id="editor" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="">{{old('description_uz')}}</textarea>
                        {{--                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="">--}}
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Description(*ru)</label>
                    </div>
                    <div class="col-7">
                        <textarea type="text" name="description_ru" id="editor2" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="">{{old('description_ru')}}</textarea>
                        {{--                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="">--}}
                    </div>
                </div>
                <div class="fv-row mb-10 row fv-plugins-icon-container">
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <label class="required fw-semibold fs-6 mb-2">Description(*crl)</label>
                    </div>
                    <div class="col-7">
                        <textarea type="text" name="description_crl" id="editor3" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="">{{old('description_crl')}}</textarea>
                        {{--                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="">--}}
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

