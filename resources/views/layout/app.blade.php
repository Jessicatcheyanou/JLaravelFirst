<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
      <!--defines a section of content-->
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
          <!--is used to display the contents of a given section  -->
            @yield('content')
        </div>
    </body>
</html>
