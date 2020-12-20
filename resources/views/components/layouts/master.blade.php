<!DOCTYPE html>
<html>

<head>
    <x-partials.meta></x-partials.meta>

    <!-- web-fonts -->
    <x-partials.style></x-partials.style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <x-layouts.app></x-layouts.app>
        <!-- .uc-mobile-menu -->
        <x-partials.mobile-navbar></x-partials.mobile-navbar>
    </div>
    <!-- #main-wrapper -->

    <!-- jquery Core-->
    <x-partials.script></x-partials.script>
</body>

</html>