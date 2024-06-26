<!DOCTYPE html>
<html lang="en">
{{-- <html lang="en"> --}}
@include('layouts.head-css')

<body>
    <!--wrapper-->
    <div class="wrapper">
        @include('layouts.sidbar')
        @include('layouts.header')
        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('content')
        </div>
        <!--end page wrapper -->
        @include('layouts.footer')
    </div>
    @livewireScripts
    @include('layouts.footer-js')
</body>

</html>
