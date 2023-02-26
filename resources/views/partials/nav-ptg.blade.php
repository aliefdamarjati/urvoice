<nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/dash-ptg"><img src="../img/logo-2.png" alt="" width="150px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-sm-center">
                <li class="nav-item">
                    <a class="nav-link me-lg-3 {{ $title === 'Dashboard' ? 'active' : '' }}" aria-current="page"
                        href="/dash-ptg">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-lg-3 {{ $title === 'Pengaduan' ? 'active' : '' }}" aria-current="page"
                        href="/pgd-ptg">Pengaduan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-lg-3 align-items-center d-flex justify-content-sm-center {{ $title === 'Profil' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span
                            class="material-symbols-outlined me-1"> person </span>Abdul Fajar</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ $title === 'Profil' ? 'active' : '' }}"
                                href="/user-ptg">Profil</a></li>
                        <li><a class="dropdown-item" href="pengaduan.html" data-bs-toggle="modal"
                                data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
