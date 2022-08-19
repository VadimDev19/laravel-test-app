<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    />
    <title>@yield('title')</title>
  </head>
  <body>
    @include('inc.header')

    <div class="container">
      @include ('inc.message')

      <div class="row">
        <div class="col-4">@yield('content')</div>

        <div class="col-8">@include('inc.aside')</div>
      </div>
    </div>

    @include('inc.footer')
  </body>
</html>
