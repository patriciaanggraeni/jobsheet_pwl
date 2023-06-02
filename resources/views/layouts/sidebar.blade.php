<aside class="main-sidebar sidebar-primary elevation-4">
    <a href="../../index3.html" class="brand-link">
    </a>
    <div class="sidebar">
        <div class="user-panel d-flex flex-column align-items-center justify-content-center">
            <div class="image">
                <img src="{{ asset('dist/img/myprofile.jpeg') }}" class="mt-3 img-circle elevation-2" alt="User Image" style="width: 100px;">
            </div>
            <div class="info">
                <p href="#" class="d-block text-dark text-capitalize" style="font-weight: bold; font-size: 25px;">{{ auth()->user()->username }}</p>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/hobi') }}" class="nav-link">
                        <i class="nav-icon fas fa-heart text-dark"></i>
                        <p class="text-dark">Hobi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/keluarga') }}" class="nav-link">
                        <i class="nav-icon fas fa-house-user text-dark"></i>
                        <p class="text-dark">Keluarga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kendaraan') }}" class="nav-link">
                        <i class="nav-icon fas fa-car text-dark"></i>
                        <p class="text-dark">Kendaraan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/matkul') }}" class="nav-link">
                        <i class="nav-icon fas fa-book-open text-dark"></i>
                        <p class="text-dark">Mata Kuliah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa') }}" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap text-dark"></i>
                        <p class="text-dark">Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/articles') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper text-dark"></i>
                        <p class="text-dark">Artikel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-arrow-right text-dark"></i>
                        <p class="text-dark">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
