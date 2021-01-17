<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Ul element - 
            @yield('title')</title>
        <link rel="stylesheet" type="text/css"
        href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <header>
            <h1 align="center">Area</h1>
        </header>
        <main>
            @yield('content')
        </main>
        <footer align="center">
            &#xA9;Copyright Week-05,2020 Charisara's
Ul element.
        </footer>
    </body>
</html>