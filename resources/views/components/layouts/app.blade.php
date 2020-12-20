{{-- <div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div> --}}
<!-- preloader -->

<div class="uc-mobile-menu-pusher">
    <div class="content-wrapper">

        <!-- header_section_wrapper -->
        <x-partials.header></x-partials.header>
        {{-- @include('components.partials.header') --}}
        @yield('hero')
        <!-- Feature News Section -->

        <section id="category_section" class="category_section">
            <div class="container">
                <div class="row">
                    @yield('content')
                    <!-- Left Section -->

                    <x-partials.sidebar />
                    <!-- Right Section -->

                </div>
                <!-- Row -->

            </div>
            <!-- Container -->

        </section>
        <!-- Category News Section -->

        <x-partials.video />
        <!-- Video News Section -->

        <x-partials.subscribe />
        <!-- Subscriber Section -->

        <x-partials.footer></x-partials.footer>
    </div>
    <!-- #content-wrapper -->

</div>
<!-- .offcanvas-pusher -->

<a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>