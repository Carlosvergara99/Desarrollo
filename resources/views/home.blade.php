<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  
    <title>Vue js App</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

        <body>
            <div class="wrapper" id="app">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse">
                        <div class="navbar-nav">
                            <router-link to="/" class="nav-item nav-link">Home</router-link>
                            <router-link to="/hoy" class="nav-item nav-link">Home</router-link>

                        </div>
                    </div>
                </nav>    
            <div  class="content">
                
                @yield('content')

            </div>
            </div>
            <script src="{{ mix('js/app.js') }}"></script>

       </body>
</html>