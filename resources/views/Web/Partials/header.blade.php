<nav class="p-3 navbar navbar-expand-lg bg-light" id="headerNav">
    <div class="container-fluid">
        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="mx-auto navbar-nav ">
                <li class="nav-item">
                    <a class="mx-2 nav-link " href="{{route('index')}}">Tienda</a>
                </li>
                <li class="rounded nav-item bg-warning">
                    <a class="mx-2 text-white nav-link" href="{{route('cart.index')}}">Favoritos
                        <i class="fa fa-star" aria-hidden="true"></i>
                        @if(Auth::check())
                        {{ \Cart::session($userId)->getTotalQuantity()}}
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
