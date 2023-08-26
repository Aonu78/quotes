<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      /* Stackoverflow preview fix, please ignore */
      .navbar-nav {
        flex-direction: row;
      }
      
      .nav-link {
        padding-right: .5rem !important;
        padding-left: .5rem !important;
      }
      
      /* Fixes dropdown menus placed on the right side */
      .ml-auto .dropdown-menu {
        left: auto !important;
        right: 0px;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-light" href="/">Artists</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" style="float: right;">
      <a class="nav-link left" href="/logout">Logout</a>
    </li>
  </ul>
</nav>
@if($message = Session::get('success'))
<div class="alert alert-success alet-block" id="successMessage">
    <strong>{{$message}}</strong>
</div>
@endif
    @yield('main')
</body>
</html>