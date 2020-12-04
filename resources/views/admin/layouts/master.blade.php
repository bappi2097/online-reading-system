<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('admin.layouts.partials.meta')

    @include('admin.layouts.partials.style')
</head>

<body class="hold-transition sidebar-mini">
    @yield('app')

    <!-- REQUIRED SCRIPTS -->
    @include('admin.layouts.partials.script')
</body>

</html>