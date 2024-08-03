<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="Cms/assets/" data-template="vertical-menu-template">
    <head>
        @include('Backend.Layouts.Head')
    </head>
    <body>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @include('Backend.Layouts.Sidebar')
            <div class="layout-page">
                @include('Backend.Layouts.Header')
                <div class="content-wrapper">
                @yield('content')
                </div>
                @include('Backend.Layouts.Footer')
            </div>
        </div>
       
    </div>
    </body>
</html>