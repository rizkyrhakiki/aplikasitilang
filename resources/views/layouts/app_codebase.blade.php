<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Aplikasi Tilang</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->

    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" ><div class="content-header-section">
        <button type="button" class="btn btn-secondary btn-noborder">
            Recomendation
        </button>
        <button type="button" class="btn btn-secondary btn-noborder">
            Assessment
        </button>
        <button type="button" class="btn btn-secondary btn-noborder">
            Master
        </button>
    </div>ype="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/codebase.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/style.css') }}">


    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/corporate.css') }}"> -->
    @yield('css_after')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeM7wY1YRzynn4DNyFk1RhhBfpsihr3nM&libraries=places"
            type="text/javascript"></script>
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed">
    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15 bg-black-op-10">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">Aplikasi</span><span class="font-size-xl text-primary">Tilang</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    @include('layouts.menu')
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->

            <!-- Center Section -->
            <div class="content-header-section">
                <button type="button" class="btn btn-secondary btn-noborder">
                    HOME
                </button>
                <button type="button" class="btn btn-secondary btn-noborder">
                    MASTER
                </button>
                {{--<button type="button" class="btn btn-secondary btn-noborder">--}}
                {{--Master--}}
                {{--</button>--}}
            </div>
            <!-- END Center Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    {{-- <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Admin<i class="fa fa-angle-down ml-5"></i>
                     </button>--}}
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                    {{-- <a class="dropdown-item" href="javascript:void(0)">
                         <i class="si si-user mr-5"></i> Profile
                     </a>
                     <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                         <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                         <span class="badge badge-primary">3</span>
                     </a>
                     <a class="dropdown-item" href="javascript:void(0)">
                         <i class="si si-note mr-5"></i> Invoices
                     </a>
                     <div class="dropdown-divider"></div>
                     <!-- Toggle Side Overlay -->
                     <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                     <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                         <i class="si si-wrench mr-5"></i> Settings
                     </a>--}}
                    <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Loader -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-white opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<script src=""{{asset('js/jquery.js')}}></script>

<!-- Codebase Core JS -->
<script src="{{ asset('js/codebase.app.js') }}"></script>

<!-- Laravel Scaffolding JS -->
<script src="{{ asset('js/laravel.app.js') }}"></script>
<!-- Page JS Code -->
<script src="{{ asset('js/pages/db_classic.min.js')}}"></script>

<script src="{{ asset('js/maps.js') }}"></script>

@yield('js_after')
</body>
</html>
