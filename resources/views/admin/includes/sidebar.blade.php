<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="/admin/dashboard">
            <img alt="Logo" src="/image/adminlogo.svg" class="h-30px app-sidebar-logo-default"/>
            <img alt="Logo" src="/image/favicon.svg" class="h-30px app-sidebar-logo-minimize"/>
        </a>
        <div id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
             data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true"
             style="height: 851px;">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                 data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a href="/admin/dashboard" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
               <i class="ki-duotone ki-people fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path4"></span>
                </i>
            </span>
            <span class="menu-title">Menus</span>
            <span class="menu-arrow"></span>
        </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="202"
                         style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link"
                               href="{{route('menus.index')}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Menus</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link"
                               href="">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Sub Menus</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                        <i class="ki-duotone ki-teacher" style="height: 10px; width: 10px;"
                        >
                         <span class="path1"></span>
                         <span class="path2"></span>
                        </i>
                    </span>
            <span class="menu-title">Pages</span>
            <span class="menu-arrow"></span>
        </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="202"
                         style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link"
                               href="{{route('sheets.index')}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Pages</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                        <i class="ki-duotone ki-teacher" style="height: 10px; width: 10px;"
                        >
                         <span class="path1"></span>
                         <span class="path2"></span>
                        </i>
                    </span>
            <span class="menu-title">Leader</span>
            <span class="menu-arrow"></span>
        </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="202"
                         style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link"
                               href="{{route('leaders.index')}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Leaders</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                        <i class="ki-duotone ki-teacher" style="height: 10px; width: 10px;"
                        >
                         <span class="path1"></span>
                         <span class="path2"></span>
                        </i>
                    </span>
            <span class="menu-title">Documents</span>
            <span class="menu-arrow"></span>
        </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="202"
                         style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link"
                               href="{{route('document.index')}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Documents</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <span class="menu-link">
            <span class="menu-icon">
                        <i class="ki-duotone ki-teacher" style="height: 10px; width: 10px;"
                        >
                         <span class="path1"></span>
                         <span class="path2"></span>
                        </i>
                    </span>
            <span class="menu-title">Images</span>
            <span class="menu-arrow"></span>
        </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="202"
                         style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link"
                               href="{{route('images.index')}}">
                    <span class="menu-bullet">
                        <span class="bullet bullet-dot"></span>
                    </span>
                                <span class="menu-title">Images</span>
                            </a>
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
            </div>
        </div>
    </div>
</div>
