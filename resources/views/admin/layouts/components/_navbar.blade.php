<div class="header">
    <!-- navbar -->
    <nav class="navbar-default navbar navbar-expand-lg">
        <a id="nav-toggle" href="#">
            <i class="fe fe-menu"></i>
        </a>
        <!--Navbar nav -->
        <div class="ms-auto d-flex">
            <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle ">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
            </a>
            <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                <!-- List -->
                <li class="dropdown ms-2">
                    <a class="rounded-circle show" href="#" role="button" id="dropdownUser"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md">
                            @if (Auth::user()->image != null)
                                <img alt="avatar" src="{{ asset('storage/' . Auth::user()->image) }}"
                                    class="rounded-circle object-fit-cover">
                            @else
                                <img alt="avatar" src="{{ asset('assets/images/placeholder/profile.png') }}"
                                    class="rounded-circle object-fit-cover">
                            @endif
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                            <div class="d-flex">
                                <div class="avatar avatar-md">
                                    @if (Auth::user()->image != null)
                                        <img alt="avatar" src="{{ asset('storage/' . Auth::user()->image) }}"
                                            class="rounded-circle">
                                    @else
                                        <img alt="avatar" src="{{ asset('assets/images/placeholder/profile.png') }}"
                                            class="rounded-circle">
                                    @endif
                                </div>
                                {{-- <a href="{{ route('admin.pengaturan.manajemen-profil.index') }}" class="ms-3 lh-1"> --}}
                                <a href="#" class="ms-3 lh-1">
                                    <h5 class="mb-1">{{ Auth::user()->name }}</h5>
                                    <p class="mb-0 text-muted">{{ Auth::user()->email }}</p>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        {{-- TODO: integrasi SSO --}}
                        {{-- <a class="dropdown-item" href="{{ route('admin.pengaturan.manajemen-profil.index') }}"><i
                                class="fe fe-user me-2"></i>
                            <span>Profil</span></a>
                        <a class="dropdown-item" href="{{ route('admin.pengaturan.manajemen-keamanan.index') }}"><i
                                class="fe fe-lock me-2"></i>
                            <span>Keamanan</span></a>
                        <div class="dropdown-divider"></div> --}}

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit">
                                <i class="fe fe-power me-2"></i> Keluar
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
