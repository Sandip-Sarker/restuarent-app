<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta')

    @include('admin.includes.style')

</head>

<body>

<!-- Page wrapper start -->
<div class="page-wrapper">

    @include('admin.includes.header')

    <!-- Main container start -->
    <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">


           @include('admin.includes.sidebar')

        </nav>

        @yield('body')


    </div>
    <!-- Main container end -->

</div>
<!-- Page wrapper end -->

@include('admin.includes.script')
</body>

</html>
