<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Admin Dashboard' }}</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.7/css/all.min.css" 
        integrity="sha512-Evv84Mr4kqVGRNGJLg/F/aIDQybXQ2ycrdIwxfJThS8C7RPBEaKCr51Ck+vv+U6SwU2rImVvVX0SvK9ABhg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOoLhFLHE0P73JGoPKvLI1bcEPTNaed2xphsD9ESMhqIYd0nLMwNLD69Npy4Hi+N" 
        crossorigin="anonymous">
  @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    @include('components.partials.sidebar')

    <div class="content-wrapper">
      @include('components.partials.header')
      {{ $slot }}
    </div>

    @include('components.partials.footer')
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
          integrity="sha512-894YE6QWDtS5Hvgi0ZGFeYm4dnWc1qTNtyvSAhCOP+uIT9qYdvDhz0PPSIiqn+7eJ7JoAEG7TubfWGUrMQ==" 
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
  @stack('scripts')
</body>

</html>
