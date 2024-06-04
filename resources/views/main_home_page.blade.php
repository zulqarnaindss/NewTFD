<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
    @include('layouts.home_page_head')
</head>

<body class="default ">
    <div>
        @include('layouts.main_navbar')
        @yield('contents')
        <!-- Start of HubSpot Embed Code -->
        <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/7083262.js"></script>
        <!-- End of HubSpot Embed Code -->
        @include('layouts.main_footer')
    </div>
    @include('layouts.script')
</body>

</html>