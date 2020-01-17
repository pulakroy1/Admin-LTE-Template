<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('home')}}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="logOut();">Logout</a>
            <form action="{{route('logout')}}" method="POST" id="logoutForm" style="display:none;">
                @csrf
            </form>
            <script>
                function logOut() {
                    event.preventDefault();
                    const logoutForm = document.getElementById("logoutForm");
                    logoutForm.submit();
                }

            </script>
        </li>
        {{-- <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                class="nav-link dropdown-toggle">Settings</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="#" class="dropdown-item">Profile</a></li>
                <li><a href="{{ route('logout')}}" class="dropdown-item">Logout</a></li>
    </ul>
    </li> --}}

    </ul>
</nav>
<!-- /.navbar -->
