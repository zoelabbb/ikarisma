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
                        <a href="/" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/daftar/dewasa" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Registrasi Dewasa</span>
                        </a>
                    </li>

                    <li class="sidebar-item text-danger">
                        <a href="/daftar/anak" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Registrasi Anak</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/kaos_anak" class='sidebar-link'>
                            <i class="bi bi-emoji-laughing"></i>
                            <span>List Anak</span>
                        </a>

                    </li>

                    <li class="sidebar-item">
                        <a href="/kaos" class='sidebar-link'>
                            <i class="bi bi-hand-thumbs-up"></i>
                            <span>List Dewasa</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Jadwal Imsak 2022 </span>
                        </a>
                    </li> -->
                    <li class="sidebar-item">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Tentang </span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>