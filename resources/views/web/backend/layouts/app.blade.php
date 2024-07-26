@include('web.backend.layouts.components.header')

<body>
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <div class="layout-page">
                <div class="content-wrapper">
                    @include('web.backend.layouts.components.navbar')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include("web.backend.layouts.components.foot.js")
    @stack('scripts')
</body>

</html>
