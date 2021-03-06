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
  @include('includes.general.header')
  <main>
    {{-- sezione main HERO --}}
    <section class="container-hero">
    </section>
    @yield('content_main_home')



  </main>
  {{-- 'componente footer' --}}
  @include('includes.general.footer')



  <script src="{{ asset('js/app.js') }}"></script>
</body>


</html>
