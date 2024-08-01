<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="vh-100" data-simplebar>
        <!-- Brand logo -->
        <div>
            <div class="d-flex flex-column align-items-center">
                <a class="mt-4" style="height: 100px; padding: 0.6rem 2rem;" href="#">
                    <img loading="lazy" style="height: 80px;" src="{{ asset('assets/images/logo/hmj-ti-512.webp') }}"
                        alt="Logo HMJ">
                </a>
                <h2 class="fs-4" style="color: rgb(231, 231, 231)">HMJ TI UNDIKSHA</h2>
            </div>
        </div>
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <div class="nav-divider"></div>
            </li>
            @foreach ($navItems as $group)
                <li class="nav-item">
                    <div class="navbar-heading">{{ $group['group'] }}</div>
                </li>
                @foreach ($group['items'] as $item)
                    @isset($item['dropdownId'])
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is($item['routeis']) ? 'active' : '' }}" data-bs-toggle="collapse"
                                data-bs-target="{{ '#' . $item['dropdownId'] }}" href="#"
                                aria-expanded="{{ Route::is($item['routeis']) ? 'true' : 'false' }}"
                                aria-controls="{{ $item['dropdownId'] }}">
                                <i class="{{ 'nav-icon me-2 ' . $item['icon'] }}"></i>
                                {{ $item['name'] }}
                            </a>
                            <div id="{{ $item['dropdownId'] }}"
                                class="collapse {{ Route::is($item['routeis']) ? 'show' : '' }}" data-bs-parent="#sideNavbar"
                                style="">
                                <ul class="nav flex-column">
                                    @foreach ($item['items'] as $subItem)
                                        <li class="nav-item">
                                            <a class="nav-link {{ Route::is($subItem['routeis']) ? 'active' : '' }}"
                                                href="{{ $subItem['route'] }}">
                                                <i class="{{ 'nav-icon me-2 ' . $subItem['icon'] }}"></i>
                                                {{ $subItem['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is($item['routeis']) ? 'active' : '' }}"
                                href="{{ $item['route'] }}">
                                <i class="{{ 'nav-icon me-2 ' . $item['icon'] }}"></i> {{ $item['name'] }}
                            </a>
                        </li>
                    @endisset
                @endforeach
            @endforeach
        </ul>
    </div>
</nav>
