@extends('admin.layouts.master')
@section('app')
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.layouts.partials.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.partials.left-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.layouts.partials.header')
        <!-- /.content-header -->

        <!-- Main content -->
        @yield('content')
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('admin.layouts.partials.right-sidebar')
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layouts.partials.footer')
</div>
<!-- ./wrapper -->
@endsection