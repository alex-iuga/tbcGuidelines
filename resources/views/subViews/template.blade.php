<!doctype html>
<html lang="en">
@include('subViews.head')
<body style="background-color: #edeff0 !important">
@include('subViews.nav')
<main role="main" class="container">
    @yield('body')
</main><!-- /.container -->
@include('subViews.footer')
</body>
</html>
