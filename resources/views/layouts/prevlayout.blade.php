<!DOCTYPE html>

<html>
    <head>
        <title>Site name - @yield('title')</title>
    </head>
    
    <body>
        <div class='container'>
            @yield('content')
        </div>
        <div class='navigation'>
            @yield('navi')
        </div>
        <div class='container'>
            @yield('workdiary')
        </div>
    </body>

</html>