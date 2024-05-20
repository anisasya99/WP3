<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BookShelf Venus</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider text-white my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>
                
    <!-- Divider -->
    <hr class="sidebar-divider text-white">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Buku
     </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-list"></i>
            <span>Genre Buku</span></a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Data Buku</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider text-white">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
     </div>
     
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-user-friends fa-flip-horizontal"></i>
            <span>Data Anggota</span></a>
    </li>
    <div class="sidebar-heading">
                    Transaksi
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('pinjam'); ?>">
                                <i class="fa fa-fw fa-shopping-cart"></i>
                                <span>Data Peminjaman</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('pinjam/daftarBooking'); ?>">
                                <i class="fa fa-fw fa-list"></i>
                                <span>Data Booking</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">
                <div class="sidebar-heading">
                    Laporan
                </div>
                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_buku'); ?>">
                                <i class="fa fa-fw fa-address-book"></i>
                                <span>Laporan Data Buku</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_anggota'); ?>">
                                <i class="fa fa-fw fa-address-book"></i>
                                <span>Laporan Data Anggota</span></a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link pb-0" href="<?= base_url('laporan/laporan_pinjam'); ?>">
                                <i class="fa fa-fw fa-address-book"></i>
                                <span>Laporan Peminjaman</span></a>
                        </li>
                    </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
    <!-- End of Sidebar --   > 
        

    

                    
                       


                

            
        