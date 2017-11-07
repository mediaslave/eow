<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>
    <nav class="navbar navbar-expand-md">
        @guest
            @include('includes.nav-guest')
        @else
            @include('includes.nav-authenticated')
        @endguest
    </nav>

    <main role="main">
        @include ('includes.status')
        
        <div class="container-fluid">
            <div class="row">
                @auth
                <div class="col-2 bg-light" id="navLeft">
                    <nav class="nav flex-column">
                      <a class="nav-link active" href="#">Active</a>
                      <a class="nav-link" href="#">Link</a>
                      <a class="nav-link" href="#">Link</a>
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </nav>
                </div>
                @endauth
                <div class="col-10">
                    @yield('content')
                </div>
            </div>
        </div> <!-- /container -->
    </main>
    
    @include('includes.footer')
    @include('includes.js')
    </body>
</html>