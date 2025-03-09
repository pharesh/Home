@include('admin.header')
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        @include('admin.navbar')
    @include('admin.siderbar')
    @yield('section')
    </div>
</body>
@include('admin.footer')