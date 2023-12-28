<!DOCTYPE html>
<html>
    <head>
        <title>@yield ('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        @include ('navigation')
        @yield ('content')
        @include ('footer')
    </body>
</html>
