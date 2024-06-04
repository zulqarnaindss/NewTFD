<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.head')
</head>

<body class="default " >
    <div>
        @include('layouts.main_navbar')
        @yield('contents')
        @include('layouts.main_footer')
        <!-- Start of HubSpot Embed Code -->
        <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/7083262.js"></script>
        <!-- End of HubSpot Embed Code -->
    </div>
    @include('layouts.script')
    @include('layouts.about_script')
    @include('layouts.counter_script')
</body>

</html>