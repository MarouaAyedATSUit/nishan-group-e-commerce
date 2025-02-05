@extends('admin.layouts.app')

@section('content')
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Online Courses</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Dashboards</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_app">Rollover</a>
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_create_campaign">Add Campaign</a>
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-10">
                            <!--begin::Lists Widget 19-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Heading-->
                                <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                    style="background-image:url('assets/media/svg/shapes/top-green.png"
                                    data-bs-theme="light">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column text-white pt-15">
                                        <span class="fw-bold fs-2x mb-3">My Tasks</span>
                                        <div class="fs-4 text-white">
                                            <span class="opacity-75">You have</span>
                                            <span class="position-relative d-inline-block">
                                                <a href="pages/user-profile/projects.html"
                                                    class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                                <!--begin::Separator-->
                                                <span
                                                    class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                <!--end::Separator-->
                                            </span>
                                            <span class="opacity-75">to comlete</span>
                                        </div>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar pt-5">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="ki-duotone ki-dots-square fs-4">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                        Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Body-->
                                <div class="card-body mt-n20">
                                    <!--begin::Stats-->
                                    <div class="mt-n20 position-relative">
                                        <!--begin::Row-->
                                        <div class="row g-3 g-lg-6">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                                        <span class="symbol-label">
                                                            <i class="ki-duotone ki-flask fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                                        <span class="symbol-label">
                                                            <i class="ki-duotone ki-bank fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                                        <span class="symbol-label">
                                                            <i class="ki-duotone ki-award fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <!--begin::Items-->
                                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-30px me-5 mb-8">
                                                        <span class="symbol-label">
                                                            <i class="ki-duotone ki-timer fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Stats-->
                                                    <div class="m-0">
                                                        <!--begin::Number-->
                                                        <span
                                                            class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                        <!--end::Number-->
                                                        <!--begin::Desc-->
                                                        <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Lists Widget 19-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-10">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-xl-10">
                                    <!--begin::Slider Widget 1-->
                                    <div id="kt_sliders_widget_1_slider"
                                        class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                        data-bs-ride="carousel" data-bs-interval="5000">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Course</span>
                                                <span class="text-gray-500 mt-1 fw-bold fs-7">4 lessons, 3 hours 45
                                                    minutes</span>
                                            </h4>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol
                                                    class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0"
                                                        class="active ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1"
                                                        class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2"
                                                        class="ms-1"></li>
                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner mt-n5">
                                                <!--begin::Item-->
                                                <div class="carousel-item active show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_1"
                                                                style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                            This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_2"
                                                                style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                            This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <!--begin::Chart-->
                                                        <div class="w-80px flex-shrink-0 me-2">
                                                            <div class="min-h-auto ms-n3" id="kt_slider_widget_1_chart_3"
                                                                style="height: 100px"></div>
                                                        </div>
                                                        <!--end::Chart-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                            This</a>
                                                        <a href="#" class="btn btn-sm btn-primary mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_app">Continue</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 1-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-5 mb-xl-10">
                                    <!--begin::Slider Widget 2-->
                                    <div id="kt_sliders_widget_2_slider"
                                        class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                        data-bs-ride="carousel" data-bs-interval="5500">
                                        <!--begin::Header-->
                                        <div class="card-header pt-5">
                                            <!--begin::Title-->
                                            <h4 class="card-title d-flex align-items-start flex-column">
                                                <span class="card-label fw-bold text-gray-800">Today’s Events</span>
                                                <span class="text-gray-500 mt-1 fw-bold fs-7">24 events on all
                                                    activities</span>
                                            </h4>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Carousel Indicators-->
                                                <ol
                                                    class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0"
                                                        class="active ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1"
                                                        class="ms-1"></li>
                                                    <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2"
                                                        class="ms-1"></li>
                                                </ol>
                                                <!--end::Carousel Indicators-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body py-6">
                                            <!--begin::Carousel-->
                                            <div class="carousel-inner">
                                                <!--begin::Item-->
                                                <div class="carousel-item active show">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-abstract-24 fs-3x text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>5 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>60 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>137 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-abstract-25 fs-3x text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>12 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="carousel-item">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-70px symbol-circle me-5">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-abstract-36 fs-3x text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->
                                                        <!--begin::Info-->
                                                        <div class="m-0">
                                                            <!--begin::Subtitle-->
                                                            <h4 class="fw-bold text-gray-800 mb-3">Ruby on Rails</h4>
                                                            <!--end::Subtitle-->
                                                            <!--begin::Items-->
                                                            <div class="d-flex d-grid gap-5">
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0 me-4">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>3 Topics</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>1 Speakers</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex flex-column flex-shrink-0">
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center fs-7 fw-bold text-gray-500 mb-2">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>50 Min</span>
                                                                    <!--end::Section-->
                                                                    <!--begin::Section-->
                                                                    <span
                                                                        class="d-flex align-items-center text-gray-500 fw-bold fs-7">
                                                                        <i
                                                                            class="ki-duotone ki-right-square fs-6 text-gray-600 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>72 students</span>
                                                                    <!--end::Section-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Action-->
                                                    <div class="m-0">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                        <a href="#" class="btn btn-sm btn-success mb-2"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#kt_modal_create_campaign">Join Event</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Carousel-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Slider Widget 2-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Engage widget 4-->
                            <div class="card border-transparent" data-bs-theme="light"
                                style="background-color: #1C325E;">
                                <!--begin::Body-->
                                <div class="card-body d-flex ps-xl-15">
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Title-->
                                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                                            <span class="me-2">You have got
                                                <span class="position-relative d-inline-block text-danger">
                                                    <a href="pages/user-profile/overview.html"
                                                        class="text-danger opacity-75-hover">2300 bonus</a>
                                                    <!--begin::Separator-->
                                                    <span
                                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
                                                </span></span>points.
                                            <br />Feel free to use them in your lessons
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Action-->
                                        <div class="mb-3">
                                            <a href='#' class="btn btn-danger fw-semibold me-2"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Get
                                                Reward</a>
                                            <a href="apps/support-center/overview.html"
                                                class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How
                                                to</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    <!--begin::Illustration-->
                                    <img src="assets/media/illustrations/sigma-1/17-dark.png"
                                        class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 4-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::List widget 20-->
                            <div class="card h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Recommended for you</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">All Courses</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-danger text-inverse-danger">M
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">UI/UX Design</a>
                                                <span class="text-muted fw-semibold d-block fs-7">40+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-success text-inverse-success">Q
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">QA Analysis</a>
                                                <span class="text-muted fw-semibold d-block fs-7">18 Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-info text-inverse-info">W</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Web
                                                    Development</a>
                                                <span class="text-muted fw-semibold d-block fs-7">120+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-primary text-inverse-primary">M
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Marketing</a>
                                                <span class="text-muted fw-semibold d-block fs-7">50+ Courses.</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-warning text-inverse-warning">P
                                            </div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Philosophy</a>
                                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <div class="symbol-label fs-2 fw-semibold bg-dark text-inverse-dark">M</div>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                            <!--begin:Author-->
                                            <div class="flex-grow-1 me-2">
                                                <a href="pages/user-profile/overview.html"
                                                    class="text-gray-800 text-hover-primary fs-6 fw-bold">Mathematics</a>
                                                <span class="text-muted fw-semibold d-block fs-7">24+ Courses</span>
                                            </div>
                                            <!--end:Author-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <i class="ki-duotone ki-arrow-right fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </a>
                                            <!--begin::Actions-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 20-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Timeline Widget 1-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Card header-->
                                <div class="card-header pt-5">
                                    <!--begin::Card title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Team Schedule</span>
                                        <span class="text-gray-500 pt-2 fw-semibold fs-6">49 Acual Tasks</span>
                                    </h3>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Tabs-->
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                                    data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                    href="#kt_timeline_widget_1_tab_day">Day</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                                    data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                    href="#kt_timeline_widget_1_tab_week">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                                    data-kt-timeline-widget-1="tab" data-bs-toggle="tab"
                                                    href="#kt_timeline_widget_1_tab_month">Month</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pb-0">
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane active" id="kt_timeline_widget_1_tab_day" role="tabpanel"
                                            aria-labelledby="day-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_1"
                                                    class="vis-timeline-custom h-350px min-w-700px"
                                                    data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane" id="kt_timeline_widget_1_tab_week" role="tabpanel"
                                            aria-labelledby="week-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_2"
                                                    class="vis-timeline-custom h-350px min-w-700px"
                                                    data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane" id="kt_timeline_widget_1_tab_month" role="tabpanel"
                                            aria-labelledby="month-tab" data-kt-timeline-widget-1-blockui="true">
                                            <div class="table-responsive pb-10">
                                                <!--begin::Timeline-->
                                                <div id="kt_timeline_widget_1_3"
                                                    class="vis-timeline-custom h-350px min-w-700px"
                                                    data-kt-timeline-widget-1-image-root="assets/media/"></div>
                                                <!--end::Timeline-->
                                            </div>
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Timeline Widget 1-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::List widget 21-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-900">Active Lessons</span>
                                        <span class="text-muted mt-1 fw-semibold fs-7">Avg. 72% completed lessons</span>
                                    </h3>
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-sm btn-light">All Lessons</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/laravel-2.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Laravel</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">PHP Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">65%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/vue-9.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Vue 3</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-warning">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 87%" aria-valuenow="87" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">87%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/bootstrap5.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bootstrap
                                                    5</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">CSS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-primary">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 44%" aria-valuenow="44" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">44%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/angular-icon.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Angular
                                                    16</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">JS Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-info">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">70%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/spring-3.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Spring</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">Java Framework</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-danger">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 56%"
                                                    aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">56%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Logo-->
                                            <img src="assets/media/svg/brand-logos/typescript-1.svg" class="me-4 w-30px"
                                                alt="" />
                                            <!--end::Logo-->
                                            <!--begin::Section-->
                                            <div class="flex-grow-1">
                                                <!--begin::Text-->
                                                <a href="#"
                                                    class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">TypeScript</a>
                                                <!--end::Text-->
                                                <!--begin::Description-->
                                                <span class="text-gray-500 fw-semibold d-block fs-6">Better Tooling</span>
                                                <!--end::Description=-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center w-100 mw-125px">
                                            <!--begin::Progress-->
                                            <div class="progress h-6px w-100 me-2 bg-light-success">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <!--end::Progress-->
                                            <!--begin::Value-->
                                            <span class="text-gray-500 fw-semibold">82%</span>
                                            <!--end::Value-->
                                        </div>
                                        <!--end::Statistics-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::List widget 21-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Chart widget 18-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Learn Activity</span>
                                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Hours per course</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                            class="btn btn-sm btn-light d-flex align-items-center px-4">
                                            <!--begin::Display range-->
                                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                                            <!--end::Display range-->
                                            <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </div>
                                        <!--end::Daterangepicker-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_18_chart" class="h-325px w-100 min-h-auto ps-4 pe-6"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Chart widget 18-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        @include('admin.includes.footer')
        <!--end::Footer-->
        <!--Main-->
    </div>
@endsection
