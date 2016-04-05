<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ trans('text.projectflyer')}}</title>
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <a class="navbar-brand" href="#">{{ trans('text.projectflyer')}}</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.home')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.about')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.contact')}}</a>
            </li>
          </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
