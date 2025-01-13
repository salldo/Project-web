<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-book-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpus</div>
    </a>
    <hr class="sidebar-divider my-0">

    
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/beranda') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.beranda') }}">
            <i class="fa-solid fa-house"></i>
            <span>Beranda</span>
        </a>
    </li>

    @if($showberanda)
    <li class="nav-item {{ request()->is('admin/anggota') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.anggota') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Anggota</span>
        </a>
    </li>
    
    <li class="nav-item {{ request()->is('admin/buku') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.buku') }}">
            <i class="fa-solid fa-book"></i>
            <span>Buku</span>
        </a>
    </li>


    <li class="nav-item {{ request()->is('admin/pinjam') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.pinjam') }}">
            <i class="fas fa-fw fa-th-list"></i>
            <span>Pinjam Buku</span>
        </a>
    </li>
   
    <li class="nav-item {{ request()->is('admin/detail') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.pinjam') }}">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Detail Peminjaman</span>
        </a>
    </li>
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
</ul>
