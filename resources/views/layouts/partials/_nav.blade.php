<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('root_path')}}">Laracarte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{set_active_route('root_path')}}">
        <a class="nav-link " href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{set_active_route('about_path')}}">
        <a class="nav-link" href="{{route('about_path')}}">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Artisans</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Planet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
          <a class="dropdown-item" href="https://laravel.io">Laraverl.io</a>
           <a class="dropdown-item" href="https://Laracasts.com">Laracasts</a>
           <a class="dropdown-item" href="https://larajobs.com">Laraveljobs</a>
          <a class="dropdown-item" href="laravel-news.com">Laraverl News</a>
           <a class="dropdown-item" href="Larachat.com">Larachat</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li class="nav-item">
        <a class="nav-link disabled" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Register</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>