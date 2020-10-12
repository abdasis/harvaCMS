<div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="{{ url('/') }}/backend/assets/images/users/user-6.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark font-weight-normal dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">@if (Auth::check())
                                    {{ Auth::user()->name }}
                                    @else
                                    Guest
                                @endif</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Backend Programmer</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="{{ route('admin.index') }}" data-toggle="collapse">
                                    <i data-feather="airplay"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="#artikel" data-toggle="collapse">
                                    <i class="fas fa-book"></i>
                                    <span> Artikel </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="artikel">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.artikel.index') }}">Semua Artikel</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.artikel.create') }}">Tambah Baru</a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('admin.kategori.index') }}">Kategori</a>
                                        </li> --}}
                                        <!-- <li>
                                            <a href="tickets-detail.html">Tag</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ route('admin.kategori.index') }}">
                                    <i class="fas fa-bookmark"></i>
                                    <span> Kategori </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.user.index') }}">
                                    <i class="fas fa-users"></i>
                                    <span> Pengguna </span>
                                    {{-- <span class="menu-arrow"></span> --}}
                                </a>
                                {{-- <div class="collapse" id="pengguna">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ route('admin.user.index') }}">Semua Pengguna</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.user.create') }}">Tambah Pengguna</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </li>

                            <li>
                                <a href="#setting" data-toggle="collapse">
                                    <i class="fas fa-cogs"></i>
                                    <span> Pengaturan </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="setting">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="tickets-list.html">General</a>
                                        </li>
                                        <li>
                                            <a href="tickets-detail.html">SEO</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
