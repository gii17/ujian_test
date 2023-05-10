<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Back Office</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">X</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=" {{ Request::is('Office/Dashboard') ? "active" : '' }}"><a class="nav-link"
                    href="{{ route('home') }}"><i class="bi bi-grid-1x2"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Konser</li>
            <li class=" {{ Request::is('Office/Konser/List*') ? "active" : '' }}"><a class="nav-link"
                    href="{{ route('konser.index') }}"><i class="bi bi-grid-1x2"></i> <span>Konser</span></a></li>
            <li class="menu-header">Staff</li>
            <li class=" {{ Request::is('Office/Staff/List*') ? "active" : '' }}"><a class="nav-link"
                    href="{{ route('staf.index') }}"><i class="bi bi-grid-1x2"></i> <span>Staff</span></a></li>
            <li class="menu-header">Pesanan</li>
            <li class=" {{ Request::is('Office/Pesanan-Ticket/List*') ? "active" : '' }}"><a class="nav-link"
                    href="{{ route('pesanan.index') }}"><i class="bi bi-grid-1x2"></i> <span>List Pesanan Ticket</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Kembali ke beranda
            </a>
        </div>
    </aside>
</div>
