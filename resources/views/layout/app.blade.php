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
            @yield('content',View::make('view.name'))
        </div>


     <!--Handles error messages-->

        @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    </body>
</html>
