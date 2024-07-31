<div class="main-sidebar-header">
    <a href="{{route('dashboard')}}" class="header-logo">
        <img
            src="../assets/images/brand-logos/logo.png"
            alt="logo"
            class="desktop-logo"
            
        />
        <img
            src="../assets/images/brand-logos/logo.png"
            alt="logo"
            class="toggle-logo"

        />
        <img
            src="../assets/images/brand-logos/logo.png"
            alt="logo"
            class="desktop-dark"
            
        />
        <img
            src="../assets/images/brand-logos/logo.png"
            alt="logo"
            class="toggle-dark"
            
        />
    </a>
</div>



<div class="main-sidebar" id="sidebar-scroll">
    <!-- Start::nav -->
    <nav class="main-menu-container nav nav-pills flex-column sub-open">
        <ul class="main-menu">
            <!-- Start::slide -->
            <li class="slide">
                <a href="{{route('dashboard')}}" class="side-menu__item {{\Route::currentRouteName() == 'dashboard'?'active':''}}">
                    <i class="bx bxs-home side-menu__icon"></i>
                    <span class="side-menu__label">Dashboard</span>
                </a>
            </li>
            <li class="slide has-sub {{menuOpen('post*',3)}}">
                <a href="javascript:void(0);" class="side-menu__item {{menuActive('post*',3)}}">
                    <i class="bx bx-user side-menu__icon"></i>
                    <span class="side-menu__label">Blog Posts</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Blog Posts</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('post.view')}}" class="side-menu__item {{\Route::currentRouteName() == 'post.view'?'active':''}}">View Posts</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('post.create')}}" class="side-menu__item {{\Route::currentRouteName() == 'post.create'?'active':''}}">Add Post</a>
                    </li>
                    {{-- <li class="slide">
                        <a href="{{route('users.banned')}}" class="side-menu__item {{\Route::currentRouteName() == 'users.banned'?'active':''}}">Banned Users</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('users.emailVerified')}}" class="side-menu__item {{\Route::currentRouteName() == 'users.emailVerified'?'active':''}}">Email Verified</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('users.emailUnverified')}}" class="side-menu__item {{\Route::currentRouteName() == 'users.emailUnverified'?'active':''}}">Email Unverified</a> --}}
                    </li>
                </ul>
            </li>
    
            {{-- <li class="slide">
                <a href="{{route('deposits.all')}}" class="side-menu__item {{\Route::currentRouteName() == 'deposits.all'?'active':''}}">
                    <i class="bx bx-wallet side-menu__icon"></i>
                    <span class="side-menu__label">Deposits</span>
                </a>
            </li>
            <li class="slide">
                <a href="{{route('packages')}}" class="side-menu__item {{\Route::currentRouteName() == 'packages'?'active':''}}">
                    <i class="bx bxs-bank side-menu__icon"></i>
                    <span class="side-menu__label">Packages</span>
                </a>
            </li>
            <li class="slide">
                <a href="{{route('features')}}" class="side-menu__item {{\Route::currentRouteName() == 'features'?'active':''}}">
                    <i class="bx bxs-component side-menu__icon"></i>
                    <span class="side-menu__label">Features</span>
                </a>
            </li>
            <li class="slide has-sub {{menuOpen('user-packages*',3)}}">
                <a href="javascript:void(0);" class="side-menu__item {{menuActive('user-packages*',3)}}">
                    <i class="bx bx-money side-menu__icon"></i>
                    <span class="side-menu__label">Subscriptions</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Subscriptions</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('user-packages.active')}}" class="side-menu__item {{\Route::currentRouteName() == 'user-packages.active'?'active':''}}">Active Subscriptions</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('user-packages.expired')}}" class="side-menu__item {{\Route::currentRouteName() == 'user-packages.expired'?'active':''}}">Expired Subscriptions</a>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a href="{{route('wallet.transfers')}}" class="side-menu__item {{\Route::currentRouteName() == 'wallet.transfers'?'active':''}}">
                    <i class="bx bx-dollar side-menu__icon"></i>
                    <span class="side-menu__label">Wallet Transfers</span>
                </a>
            </li>
            <li class="slide">
                <a href="{{route('transactions.all')}}" class="side-menu__item {{\Route::currentRouteName() == 'transactions.all'?'active':''}}">
                    <i class="bx bx-credit-card side-menu__icon"></i>
                    <span class="side-menu__label">Transaction History</span>
                </a>
            </li>
            <li class="slide">
                <a href="{{route('subject.topic')}}" class="side-menu__item {{\Route::currentRouteName() == 'subject.topic'?'active':''}}">
                    <i class="bx bx-book side-menu__icon"></i>
                    <span class="side-menu__label">Subject/Topic</span>
                </a>
            </li>
            <li class="slide has-sub {{menuOpen('resource*',3)}}">
                <a href="javascript:void(0);" class="side-menu__item {{menuActive('resource*',3)}}">
                    <i class="bx bx-book-content side-menu__icon"></i>
                    <span class="side-menu__label">Resource</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Resource</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('resource.all')}}" class="side-menu__item {{\Route::currentRouteName() == 'resource.all'?'active':''}}">All Resources</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('resource.create')}}" class="side-menu__item {{\Route::currentRouteName() == 'resource.create'?'active':''}}">Add Resource</a>
                    </li>
                </ul>
            </li>
            <li class="slide has-sub {{menuOpen('notifications*', 3)}}">
                <a href="javascript:void(0);" class="side-menu__item {{menuActive('notifications*', 3)}}">
                    <i class="bx bx-bell side-menu__icon"></i>
                    <span class="side-menu__label">Notifications</span>
                    <i class="fe fe-chevron-right side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1">
                        <a href="javascript:void(0)">Notifications</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('notifications.admin')}}" class="side-menu__item {{\Route::currentRouteName() == 'notifications.admin'?'active':''}}">Admin Notification</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('notifications.push')}}" class="side-menu__item {{\Route::currentRouteName() == 'notifications.push'?'active':''}}">Push Notification</a>
                    </li>
                    <li class="slide">
                        <a href="{{route('notifications.email')}}" class="side-menu__item {{\Route::currentRouteName() == 'notifications.email'?'active':''}}">Email Notification</a>
                    </li>
                    {{-- <li class="slide">
                        <a href="{{route('notifications.failed')}}" class="side-menu__item {{\Route::currentRouteName() == 'notifications.failed'?'active':''}}">Failed Emails</a>
                    </li> --}}
                {{-- </ul>
            </li> --}}
            {{-- <li class="slide">
                <a href="{{route('analytics')}}" class="side-menu__item {{\Route::currentRouteName() == 'analytics'?'active':''}}">
                    <i class="bx bx-analyse side-menu__icon"></i>
                    <span class="side-menu__label">Analytics</span>
                </a>
            </li>
            <li class="slide">
                <a href="{{route('paddle')}}" class="side-menu__item {{\Route::currentRouteName() == 'paddle'?'active':''}}">
                    <i class="bx bxs-ball side-menu__icon"></i>
                    <span class="side-menu__label">Paddle Test</span>
                </a>
            </li> --}}
            {{-- <li class="slide">
                <a href="{{route('settings')}}" class="side-menu__item {{\Route::currentRouteName() == 'settings'?'active':''}}">
                    <i class="bx bx-cog side-menu__icon"></i>
                    <span class="side-menu__label">General Settings</span>
                </a>
            </li> --}}
            <!-- End::slide -->
        </ul>

    </nav>
    <!-- End::nav -->
</div>
