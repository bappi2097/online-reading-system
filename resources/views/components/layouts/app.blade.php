<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
    <div class="content-wrapper">

        <!-- header_section_wrapper -->
        <x-layouts.header />
        @if (url()->current() == url('/'))
        <x-layouts.hero />
        @endif
        <!-- Feature News Section -->

        <section id="category_section" class="category_section">
            <div class="container">
                <div class="row">
                    @yield('content')
                    <!-- Left Section -->

                    <x-layouts.sidebar />
                    <!-- Right Section -->

                </div>
                <!-- Row -->

            </div>
            <!-- Container -->

        </section>
        <!-- Category News Section -->

        <x-layouts.video />
        <!-- Video News Section -->

        <x-layouts.subscribe />
        <!-- Subscriber Section -->

        <x-layouts.footer />
    </div>
    <!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

<x-layouts.mobile-navbar />