<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description">
{{-- <link href="{{ asset('dashboard/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css"> --}}
<link href="{{ asset('dashboard/assets/libs/swiper/swiper-bundle.min.css') }}" rel="preload" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/libs/dropzone/dropzone.css') }}">
{{-- toster css links --}}
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/fontawesome-5.15.3/css/all.min.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/css-all.min.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/toastr.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/toastr.min.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/css-toastr.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/select2.min.css') }}">
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/css/extensions/dropzone.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/extensions/font.css') }}">
{{-- yajra data table --}}
<link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="{{ asset('dashboard/assets/datatables/dataTables.min.css') }}">

<link id="fontsLink" href="" rel="stylesheet">

<!-- jsvectormap css -->
<link href="{{ asset('dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="preload" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<!-- Icons Css -->
<link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="preload" as="style"
    onload="this.onload=null;this.rel='stylesheet'">

@if (App::getLocale() == 'ar')
    <!-- App Css-->
    <link href="{{ asset('dashboard/assets/css/app-rtl.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <!-- custom Css-->
    <link href="{{ asset('dashboard/assets/css/custom-rtl.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <!-- Bootstrap Css -->
@else
    <!-- App Css-->
    <link href="{{ asset('dashboard/assets/css/app.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <!-- custom Css-->
    <link href="{{ asset('dashboard/assets/css/custom.min.css') }}" rel="preload" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <!-- Bootstrap Css -->
@endif
{{-- sync Database --}}
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/syncDatabases.css') }}">
@yield('css')
