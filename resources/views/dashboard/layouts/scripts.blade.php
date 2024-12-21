 <!-- JAVASCRIPT -->
 <script src="{{ asset('dashboard/assets/js/extensions/jquery-3.7.1.min.js') }}"></script>
 <script src="{{ asset('dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('dashboard/assets/js/extensions/flasher.min.js') }}"></script>
 <!-- Layout config Js -->
 <script src="{{ asset('dashboard') }}/assets/js/layout.js"></script>
 <!-- App js -->
 <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>
 <script src="{{ asset('dashboard') }}/assets/js/dashboard.js"></script>
 {{-- toastr js links --}}
 <script src="{{ asset('dashboard/assets/js/extensions/toastr.min.js') }}"></script>

 {{-- message  --}}
 @if (Session::has('message'))
     <script>
         toastr.success("{{ Session::get('message') }}");
     </script>
 @endif
 @yield('js')
