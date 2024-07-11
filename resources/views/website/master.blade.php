
<!DOCTYPE html>
<html>

<head>
    @include('website.includes.meta')

    @include('website.includes.style')

</head>

<body>

<div class="hero_area">

    <div class="bg-box">
        <img src="{{asset('/')}}website/assets/images/hero-bg.jpg" alt="">
    </div>


    <header class="header_section">
        <div class="container">
            @yield('navbar')
        </div>
    </header>

    <!-- end header section -->
    <!-- slider section -->
    @include('website.includes.slider')
    <!-- end slider section -->
</div>

    @yield('body')


<!-- footer section -->
    @include('website.includes.footer')
<!-- footer section -->

<!-- Script -->
    @include('website.includes.script')
</body>

</html>
