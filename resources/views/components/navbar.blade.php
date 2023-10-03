<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ request()->is('product') ? 'active' : '' }}" href="{{ route('product') }}">Produk</a>
    </li>
</ul>
