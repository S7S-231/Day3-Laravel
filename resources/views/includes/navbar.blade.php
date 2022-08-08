<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/users">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/users">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Options
            </a>
            <ul class="dropdown-menu">
              <li><a @class(['dropdown-item ','active' => Route::is("users.create")]) href="{{Route('users.create')}}">New User</a></li>
              <li><a @class(['dropdown-item ','active' => Route::is("posts.create")]) href="{{Route('posts.create')}}" >New Posts</a></li>
              <li><a @class(['dropdown-item ','active' => Route::is("users.index")]) href="{{Route('users.index')}}" >User List</a></li>
              <li><a @class(['dropdown-item ','active' => Route::is("posts.index")]) href="{{Route('posts.index')}}" >Posts List</a></li>
              <li><a @class(['dropdown-item ','active' => Route::is("posts.dlist")]) href="{{Route('posts.dlist')}}" >Deleted Posts</a></li>

            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

