@props(['username'])

<nav class="navbar">
    <span class="brand">Mafilm</span>
    <div class="menu">
        <a href="{{ route('dashboard', ['username' => $username]) }}"
            class="{{ request()->routeIs('dashboard') ? 'aktif' : '' }}">Dashboard</a>
        <a href="{{ route('pengelolaan', ['username' => $username]) }}"
            class="{{ request()->routeIs('pengelolaan') ? 'aktif' : '' }}">Pengelolaan</a>
        <a href="{{ route('profile', ['username' => $username]) }}"
            class="{{ request()->routeIs('profile') ? 'aktif' : '' }}">Profile</a>
        <a href="{{ route('login') }}">Keluar</a>
    </div>
</nav>
