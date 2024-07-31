<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
        <!-- Start::header-content-left -->
        <div class="header-content-left">
            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo">
                    <a href="index.html" class="header-logo">
                        <img
                            src="../assets/images/brand-logos/logo-two.png"
                            alt="logo"
                            class="desktop-logo"
                            style="width: 100px !important; height: 30px !important;"
                        />
                        <img
                            src="../assets/images/brand-logos/logo-two.png"
                            alt="logo"
                            class="toggle-logo"
                            style="width: 100px !important; height: 30px !important;"
                        />
                        <img
                            src="../assets/images/brand-logos/logo-two.png"
                            alt="logo"
                            class="desktop-dark"
                            style="width: 100px !important; height: 30px !important;"
                        />
                        <img
                            src="../assets/images/brand-logos/logo-two.png"
                            alt="logo"
                            class="toggle-dark"
                            style="width: 50px !important"
                        />
                    </a>
                </div>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link -->
                <a
                    aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar"
                    href="javascript:void(0);"
                ><span></span
                    ></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-left -->
        <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element country-selector">
                <!-- Start::header-link|dropdown-toggle -->
                <a
                    href="javascript:void(0);"
                    class="header-link dropdown-toggle"
                    data-bs-auto-close="outside"
                    data-bs-toggle="dropdown"
                >
                    <img
                        src="../assets/images/flags/us_flag.jpg"
                        alt="img"
                        class="rounded-circle"
                    />
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul
                    class="main-header-dropdown dropdown-menu dropdown-menu-end"
                    data-popper-placement="none"
                >
                    <li>
                        <a
                            class="dropdown-item d-flex align-items-center"
                            href="javascript:void(0);"
                        >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img src="../assets/images/flags/us_flag.jpg" alt="img" />
                    </span>
                            English
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a href="javascript:void(0);" class="header-link layout-setting">
                <span class="light-layout">
                  <!-- Start::header-link-icon -->
                  <i class="bx bx-moon header-link-icon"></i>
                    <!-- End::header-link-icon -->
                </span>
                    <span class="dark-layout">
                  <!-- Start::header-link-icon -->
                  <i class="bx bx-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
                <!-- Start::header-link|dropdown-toggle -->
                <a
                    href="javascript:void(0);"
                    class="header-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    id="messageDropdown"
                    aria-expanded="false"
                >
                    <i class="bx bx-bell header-link-icon"></i>
                    <span
                        class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                        id="notification-icon-badge"
                    >0</span
                    >
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <!-- Start::main-header-dropdown -->
                <div
                    class="main-header-dropdown dropdown-menu dropdown-menu-end"
                    data-popper-placement="none"
                >
                    <div class="p-3">
                        <div
                            class="d-flex align-items-center justify-content-between"
                        >
                            <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                            <span
                                class="badge bg-secondary-transparent"
                                id="notifiation-data"
                            >1 Unread</span
                            >
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <ul class="list-unstyled mb-0" id="header-notification-scroll">
                        {{-- @forelse($notifications as $notification) --}}
                        <li class="dropdown-item">
                            <div class="d-flex align-items-start">
                                <div class="lh-1">
                                    {{-- @if($notification->user->status == 1) --}}
                                        <span class="avatar avatar-md online me-3 avatar-rounded">
                                            <img alt="avatar" src="{{asset('assets/images/faces/21.jpg')}}">
                                        </span>
                                    {{-- @elseif($notification->user->status == 0) --}}
                                        <span class="avatar avatar-md offline me-3 avatar-rounded">
                                            <img alt="avatar" src="{{asset('assets/images/faces/21.jpg')}}">
                                        </span>
                                    {{-- @endif --}}
                                </div>
                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-0 fw-semibold">
                                            <a href="">James</a>
                                        </p>
                                        <span class="text-muted fw-normal fs-12 header-notification-text">Allowance Notice</span>
                                    </div>
                                    <div>
                                        <a href="" class="min-w-fit-content text-muted me-1 dropdown-item-close1">
                                            <i class="ti ti-x fs-16"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        {{-- @empty --}}
                            <li class="text-muted text-center small">No Unread Notification</li>
                        {{-- @endforelse --}}
                    </ul>
                    <div class="p-3 empty-header-item1 border-top">
                        <div class="d-grid">
                            <a href="" class="btn btn-success">View All</a>
                        </div>
                    </div>
                    <div class="p-5 empty-item1 d-none">
                        <div class="text-center">
                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                      <i class="ri-notification-off-line fs-2"></i>
                    </span>
                            <h6 class="fw-semibold mt-3">No New Notifications</h6>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a
                    href="#"
                    class="header-link dropdown-toggle"
                    id="mainHeaderProfile"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                >
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0">
                            <img
                                src="../assets/images/faces/9.jpg"
                                alt="img"
                                width="32"
                                height="32"
                                class="rounded-circle"
                            />
                        </div>
                        <div class="d-sm-block d-none">
                            <p class="fw-semibold mb-0 lh-1">Synkrotech</p>
                            <span class="op-7 fw-normal d-block fs-11"
                            >Administrator</span
                            >
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul
                    class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile"
                >
                    <li>
                        <a class="dropdown-item d-flex" href="profile.html"
                        ><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a
                        >
                    </li>
                    <li>
                        <a class="dropdown-item d-flex" href=""
                        ><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a
                        >
                    </li>
                </ul>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link|switcher-icon -->
                <a
                    href="#"
                    class="header-link switcher-icon"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#switcher-canvas"
                >
                    <i class="bx bx-cog header-link-icon"></i>
                </a>
                <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
</header>
