
<!DOCTYPE html>

<html lang="en">
<head>
@include('layouts.partials._header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('layouts.partials._navbar')



@include('layouts.partials._sidebar')


  <div class="content-wrapper">
      @yield('content')
  </div>
  <!-- /.content-wrapper -->

 
 @include('layouts.partials._footer')

 
</div>


@include('layouts.partials._script')

</body>
</html>
