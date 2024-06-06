<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <img src="<?= base_url() ?>/assets/img/ik4.png" width="250" height="400"></a>
                    </div>

                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item active ">
                        <a href="/admin" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>MENU ADMIN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/admin/approve_anak" class='sidebar-link'>
                            <i class="bi bi-emoji-laughing"></i>
                            <span>Approve Anak</span>
                        </a>

                    </li>

                    <li class="sidebar-item">
                        <a href="/admin/approve_dewasa" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Approve Dewasa</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-clock"></i>
                            <span>Bayar</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/admin/bayar_dewasa" class='sidebar-link'>
                                    <i class="bi bi-cart-x-fill"></i>
                                    <span>Bayar Dewasa</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/admin/bayar_anak" class='sidebar-link'>
                                    <i class="bi bi-calculator "></i>
                                    <span>Bayar Anak</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/admin/pengeluaran" class='sidebar-link'>
                                    <i class="bi bi-book-fill"></i>
                                    <span>Pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="sidebar-item  has-sub">
                        <a href="" class='sidebar-link'>
                            <i class="bi bi-clipboard-plus"></i>
                            <span>Koreksi</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-cart-x-fill"></i>
                                    <span>Dewasa</span>
                                </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="/admin/koreksi_anak" class='sidebar-link'>
                                <i class="bi bi-calculator "></i>
                                <span>Anak</span>
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="sidebar-item has-sub">
                        <a href="" class='sidebar-link'>
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="<?= base_url() ?>/assets/images/faces/1.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0"><?= session()->get('user_nama'); ?></p>
                            </div>

                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="/admin/logout" class='sidebar-link'>
                                    <i class="bi bi-door-closed-fill"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
            </div>
        </div>
    </div>