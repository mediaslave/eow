<a class="navbar-brand" data-toggle="collapse" data-target="#navLeft"  aria-expanded="true" id="brand" aria-controls="navLeft" href="/home">EOW</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="navbar-collapse collapse" id="navbar">
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
  </ul>

  <form class="mx-2 my-auto d-inline w-100">
    <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Search for..." aria-label="Search for..." autocomplete="on">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Search</button>
      </span>
    </div>
  </form> 

  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link" href="#" id="navbarUserDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> 
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUserDropDown">
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </div>
    </li>
  </ul>
</div>