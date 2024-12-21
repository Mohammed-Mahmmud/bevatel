<!doctype html>
<html lang="en" data-layout="vertical">

<head>

    @include('website.reports.Layouts.Vertical.main-head')

</head>

<body>
    <!-- Begin page -->
    <x-website.reports.layouts.vertical-header></x-website.reports.layouts.vertical-header>

    @yield('reports')
    <x-website.reports.layouts.vertical-footer></x-website.reports.layouts.vertical-footer>


</body>

</html>
