<!DOCTYPE html>
<html lang="en">

<head>
  @include('layout.admin.header')
</head>

<body id="page-top">
  
    @include('layout.admin.navbar')

  <div id="wrapper">

      @include('layout.admin.sidebar')

    <div id="content-wrapper">

        @include('layout.admin.footer')

    </div>

  </div>

  

    @include('layout.admin.logoutModal')
    
    @include('layout.admin.scripts')
</body>

</html>
