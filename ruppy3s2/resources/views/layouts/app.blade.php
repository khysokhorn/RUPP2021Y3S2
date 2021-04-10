<!DOCTYPE html>
<html lang="en">

<head>

  @include('includes.meta')

  <title>Clean Blog - Start Bootstrap Theme</title>

  @include('includes.styles')
</head>

<body>

  <!-- Navigation -->
  @include('includes.menu')

  <!-- Page Header -->
  @include('includes.header')

  <!-- Main Content -->
  <div class="container">
    <div class="row">
        @yield('content')
    </div>
  </div>

  <!-- Footer -->
  @include('includes.footer')

  @include('includes.scripts')
</body>

</html>
