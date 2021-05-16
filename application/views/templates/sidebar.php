<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <?php if ($this->session->userdata('userlogin')) { ?>
                    <li class="menu-title">Admin</li>
                    <li>
                        <a href="<?= base_url('Admin') ?>">
                            <i class="mdi mdi-view-dashboard"></i>
                            <span> Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('DataUsers') ?>">
                            <i class="mdi mdi-account-details"></i>
                            <span> Data Users </span>
                        </a>
                    </li>
                    <li>
                        <a href="#sidebarEcommerce" data-toggle="collapse">
                            <i class="mdi mdi-archive"></i>
                            <span> Aset </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= base_url('DataAssets') ?>">Data Aset</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('DataAssets/qtyAssets') ?>">Qty Aset</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#sidebarCrm" data-toggle="collapse">
                            <i class="mdi mdi-book"></i>
                            <span> Peminjaman </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCrm">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="<?= base_url('DataPeminjaman') ?>">Data Peminjaman</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('PermintaanPeminjaman') ?>">Permintaan Peminjaman</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('PermintaanPengembalian') ?>">Permintaan Pengembalian</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-2">
                        <a href="<?= base_url('Auth/logout') ?>">
                            <i class="mdi mdi-logout"></i>
                            <span> Logout </span>
                        </a>
                    </li>
                <?php } ?>
                <?php if (!$this->session->userdata('userlogin')) { ?>
                    <li class="menu-title">Users</li>
                    <li>
                        <a href="http://mips.msalgroup.com/msal-login/">
                            <i class="mdi mdi-login"></i>
                            <span> Admin </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Users') ?>">
                            <i class="mdi mdi-archive-arrow-down"></i>
                            <span> Pinjam Aset </span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->