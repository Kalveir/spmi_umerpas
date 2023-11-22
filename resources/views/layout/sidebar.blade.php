<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web SPMI | UNMERPAS</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">
    
</head>
{{-- foto profil --}}
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
</div>
 <div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="#">
                            <img src="/assets/images/logo/unmerpas.png" alt="unmepas_logo">
                            <h6>SISTEM PENJAMINAN MUTU<p>
                        </a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            
            {{-- sidebar app --}}
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="/dashboard" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item ">
                        <a href="/addUser" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>User</span>
                        </a>
                    </li>
                    {{-- Penilaian --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-calendar-check-fill"></i>
                            <span>Penilaian & Diagram</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item">
                                <a href="#">Teknik Informatika</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Rekayasa Perangkat Lunak</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Hukum</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Ekonomi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Pertanian</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Buku kriteria --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-book-half "></i>
                            <span>Buku Kriteria</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#">Diploma Empat</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Diploma Tiga</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Strata satu</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Sub Butir Kriteria --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-diagram-3-fill"></i>
                            <span>Sub Butir Kriteria</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#">Level 2 (C1.x)</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Level 3 (C1.x.x)</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Level 4 (C1.x.x.x)</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Indikator Penailaian --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-bar-chart-line-fill"></i>
                            <span>Indikator Penilaian</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#">Diploma Empat</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Diploma Tiga</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Strata Satu</a>
                            </li>
                        </ul>
                    </li>
                    {{-- Element & Berkas --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-journal-bookmark-fill"></i>
                            <span>Element & Berkas</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#">Teknik Informatika</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Rekayasa Perangkat Lunak</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Hukum</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Ekonomi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Pertanian</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item ">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-search"></i>
                            <span>Multi Search</span>
                        </a>
                    </li>
                    {{-- Pengaturna --}}
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-gear-fill"></i>
                            <span>Pengaturan</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="#">Jenjang Pendidikan</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Program Studi</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="#">Target</a>
                            </li>
                            </li>
                        </ul>
            </div>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
</div>
@yield('sidebar_menu')
