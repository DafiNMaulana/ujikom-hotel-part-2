<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Manage</li>
        <li class="nav-item">
            <a href="" class="nav-link"><i class="fas fa-chart-bar" style="font-size: 18px"></i><span>Statistik</span></a>
        </li>
        <li class="nav-item {{ 'admin/manage-pemesanan' == request()->path() ? 'active' : '' }} {{ '/' == request()->path() ? 'active' : '' }} {{ 'admin/manage-pemesanan' == request()->path() ? 'active' : '' }}   ">
            <a href="{{ route('manage-pemesanan.index') }}" class="nav-link"><i class="fas fa-book-open" style="font-size: 18px"></i><span>Manage Pemesanan</span></a>
        </li>
        <li class="nav-item {{ 'admin/manage-kamar' == request()->path() ? 'active' : '' }} {{ '/' == request()->path() ? 'active' : '' }} {{ 'admin/manage-fasilitas-kamar' == request()->path() ? 'active' : '' }}   ">
            <a href="{{ route('manage-kamar.index') }}" class="nav-link"><i class="fas fa-bed" style="font-size: 18px"></i><span>Manage kamar</span></a>
        </li>
        <li class="nav-item {{ 'admin/manage-admin' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('manage-admin.index') }}" class="nav-link"><i class="fas fa-user-tie" style="font-size: 18px"></i><span>Manage Admin</span></a>
        </li>
        <li class="nav-item {{ 'admin/manage-fasilitas-hotel' == request()->path() ? 'active' : '' }}">
            <a href="{{ route('manage-fasilitas-hotel.index') }}" class="nav-link"><i class="fas fa-swimmer" style="font-size: 18px"></i><span>Manage Fasilitas Hotel</span></a>
        </li>
    </ul>
</aside>
