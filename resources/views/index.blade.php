<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <title>{{ $title }}</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">
      {{ isset($pagetitle) ? $pagetitle : 'Гостевая книга' }}
    </h1>
    <hr/>

      @if ( ! empty($users) && is_array($users))
        @forelse ($users as $user)
          <p>{{ $user['name'] }}</p>
        @endforeach
      @endif

      @yield('content')
      </div>

      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </script>
  </body>
</html>
