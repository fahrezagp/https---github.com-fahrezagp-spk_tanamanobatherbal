<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('style/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('style/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
   
    <title>SPK</title>
</head>

<body>
     @include('sweetalert::alert')
    <!--Navbar-->
    @include('layouts.includes._navbar')
    <!--End Navbar-->

    <div class="container">
      <br>
        @yield('content')
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>

</html>
