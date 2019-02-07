<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo app</title>

        @yield('content')

        <div>
          <nav>
            <a href="\">Home</a>
            <a href="\todos">Todos</a>
            <a href=""></a>
          </nav>
        </div>



       
    </body>
</html>