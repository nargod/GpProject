<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layouts.head')
    </head>
    
    <body id="app-layout">

        @include('layouts.nav')

        <div class="container">

            @include('layouts.search')

            <hr>
               
            @yield('content')

            @include('layouts.footer')

         </div>

        @include('layouts.javascript')
           
        @yield('scripts')
    </body>
</html>
