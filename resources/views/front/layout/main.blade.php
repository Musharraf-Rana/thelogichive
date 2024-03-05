<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>

@include('front.layout.head')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>

<body class="mainbody">
  

    <!-- Google Tag Manager (noscript) -->
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HBX3SZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}
    <!-- End Google Tag Manager (noscript) -->

    @include('front.layout.header')

    @yield('content')
    @include('front.layout.script')
    @include('front.layout.footer')

   
</body>

</html>
