<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline me-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline me-auto">
                    <div class="search-element d-flex">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
                                                     class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
                <span class="badge headerBadge1">
                6 </span> </a>

        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>

        </li>
        <li class="dropdown"><a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset ('adminAsset') }}/assets/img/user.png"
                                                                                                 class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <a href="#" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" onclick="event.preventDefault();document.getElementById('logOutForm').submit()" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
                <form method="post" action="{{route('logout')}}" id="logOutForm">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>
