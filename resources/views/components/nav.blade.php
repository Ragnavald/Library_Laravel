<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="nav_container h-100">
        <a class="navbar-brand h-100" href="/">
            <a class="navbar-brand p-2" href="#"><img src="/images/logo.png" class="h-100"></a>
        </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ms-auto flex-nowrap">
            <li class="nav-item">
                <a href="{{route('books.index')}}" class="nav-link m-2 menu-item nav-active">Books</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">How We Help</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link m-2 menu-item">Blog</a>
            </li>
            @auth
            <li class="nav-item">
                <a href="{{route('logout')}}" class="nav-link m-2 menu-item">Logout</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
