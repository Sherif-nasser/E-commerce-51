@include('user.includes.header')
     <!-- Page Wrapper -->
     <div id="wrapper">
    @include('user.includes.navbar')
    @include('user.includes.pageheader')


    @yield('content')

</div>
<!-- End of Main Content -->
@include('user.includes.footer')
@include('user.includes.mainscripts')

</body>
</html>