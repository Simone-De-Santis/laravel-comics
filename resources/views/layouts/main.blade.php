<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Home DC | @yield('title')</title>
</head>

<body>
  {{-- 'componente header' --}}
  @include('includes.header')
  {{-- sezione main HERO --}}
  <main>
    <section class="container-hero">
    </section>
    @yield('content')
  </main>
  {{-- 'componente footer' --}}
  @include('includes.footer')



  <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>
