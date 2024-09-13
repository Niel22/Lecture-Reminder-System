<!DOCTYPE html>
<html lang="en">


<!-- [Head] start -->
@include('layouts.inc.head')
<!-- [Head] end -->








    <!-- [ Pre-loader ] start -->
    @include('layouts.inc.preloader')
    <!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->




    @include('layouts.inc.nav')
    <!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->



    @include('layouts.inc.header')


    <div class="pc-container">

        <div class="pc-content">
            @include('frontend.components.alert.flash-messages')

    @yield('content')

        </div>

    </div>






    @include('layouts.inc.footer')
