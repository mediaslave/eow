<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>
    <nav class="navbar navbar-expand-md bg-light">
        @guest
            @include('includes.nav-guest')
        @else
            @include('includes.nav-authenticated')
        @endguest
    </nav>

    <main role="main">
        @include ('includes.status')
        
        <div class="container-fluid">
            <div class="row p-3">
                @yield('content')
            </div>
        </div> <!-- /container -->
    </main>
    
    @include('includes.footer')
    @include('includes.js')
    </body>
</html>