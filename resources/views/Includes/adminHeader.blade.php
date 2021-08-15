<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-styles">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-toggler-left" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" id="brand" href="https://mineversal.com"><img src="{{ asset('assets/img/logo.png')}}" width="200"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="fa fa-fw fa-globe"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><i class="fa fa-fw fa-user"></i> About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-fw fa-folder"></i> Our Business</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://news.mineversal.com">News</a></li>
                            <li><a class="dropdown-item" href="https://music.mineversal.com">Music</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://beauty.mineversal.com">Beauty</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
