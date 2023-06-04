<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{route('dashboard')}}"> <img alt="image" src="{{asset ('frontEndAsset') }}/img/logo/logo.png" class="header-logo" /> <span
                    class="logo-name">Admin</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-bars-staggered"></i><span>Logo</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-logo')}}">Add logo</a></li>
                    <li><a class="nav-link" href="{{route('manage-logo')}}">Manage logo</a></li>
                </ul>
            </li>
{{--            <li class="dropdown">--}}
{{--                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-newspaper"></i><span>News ticker</span></a>--}}
{{--                <ul class="dropdown-menu">--}}
{{--                    <li><a class="nav-link" href="{{route('add-newsTicker')}}">Add news ticker</a></li>--}}
{{--                    <li><a class="nav-link" href="{{route('manage-newsTicker')}}">Manage news ticker</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-sliders"></i><span>Image slider</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-slider')}}">Add slider</a></li>
                    <li><a class="nav-link" href="{{route('manage-slide')}}">Manage slider</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-bullhorn"></i><span>Notice board</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-notice')}}">Add notice</a></li>
                    <li><a class="nav-link" href="{{route('manage-notice')}}">Manage notice</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-regular fa-newspaper"></i><span>Proyash news slider</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('proyash-news-slider')}}">Add news slider</a></li>
                    <li><a class="nav-link" href="{{route('manage-news-slider')}}">Manage news slider</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-briefcase"></i><span>Service section</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-service')}}">Add services</a></li>
                    <li><a class="nav-link" href="{{route('service-manage')}}">Manage services</a></li>

                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-regular fa-images"></i><span>Gallery</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('create-album')}}">Create album</a></li>
                    <li><a class="nav-link" href="{{route('manage-album')}}">Manage album</a></li>
                    <li><a class="nav-link" href="{{route('upload-image')}}">Upload image</a></li>
                    <li><a class="nav-link" href="{{route('manage-image')}}">Manage image</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-person-military-rifle"></i><span>Administrative body</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('add-person')}}">Add person</a></li>
                    <li><a class="nav-link" href="{{route('manage-person')}}">Manage person</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
