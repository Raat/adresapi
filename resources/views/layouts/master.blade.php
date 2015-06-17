<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Adres API</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Adres API</a>
    </div>
    <div class="nav navbar-nav navbar-right">
      @if (Auth::guest())
        <li><a href="{{ url('/auth/register') }}">Registreren</a></li>
        <li><a href="{{ url('/auth/login') }}">Login</a></li>
      @else
        <li><a href="{{ url('/auth/logout') }}">Loguit</a></li>
      @endif
    </div>
  </div>
</nav>
 
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
 
</body>
</html>