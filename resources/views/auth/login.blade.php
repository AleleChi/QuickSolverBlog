<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html
    lang="en"
    dir="ltr"
    data-nav-layout="vertical"
    data-vertical-style="overlay"
    data-theme-mode="light"
    data-header-styles="light"
    data-menu-styles="light"
    data-toggled="close"
>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/sign-in-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2023 20:20:40 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>QuickSolver | Admin</title>
    <meta
        name="Description"
        content="Bootstrap Responsive Admin Web Dashboard HTML5 Template"
    />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta
        name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit."
    />
    <!-- Favicon -->
    <link
        rel="icon"
        href="https://spruko.com/demo/ynex/dist/assets/images/brand-logos/favicon.ico"
        type="image/x-icon"
    />
    <!-- Main Theme Js -->
    <script src="{{asset('assets/js/authentication-main.js')}}"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- Style Css -->
    <link href="{{asset('assets/css/styles.min.css')}}" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet"/>
    <meta http-equiv="imagetoolbar" content="no" />

</head>
<body>

<!-- End Switcher -->
<div class="container">
    <div
        class="row justify-content-center align-items-center authentication authentication-basic h-100"
    >
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="my-5 d-flex justify-content-center">
                <a href="index.html">
                    <img
                        src="../assets/images/brand-logos/logo-two.png"
                        alt="logo"
                        class="desktop-logo"
                        style="width: 100px !important; height: 30px !important;"
                    />
                    <img
                        src="../assets/images/brand-logos/logo-two.png"
                        alt="logo"
                        class="desktop-dark"
                         style="width: 130px !important; height: 30px !important;"
                    />
                </a>
            </div>
            <div class="card custom-card">
                <div class="card-body p-5">
                    <p class="h5 fw-semibold mb-2 text-center">Sign In</p>
                    <p class="mb-4 text-muted op-7 fw-normal text-center">
                        Welcome back Admin !
                    </p>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signin-username" class="form-label text-default"
                                >Email Address</label
                                >
                                <input
                                    type="text"
                                    name="email"
                                    class="form-control form-control-lg"
                                    id="signin-username"
                                    placeholder="email"
                                />
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label
                                    for="signin-password"
                                    class="form-label text-default d-block"
                                >Password
                                </label>
                                <div class="input-group">
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control form-control-lg"
                                        id="signin-password"
                                        placeholder="password"
                                    />
                                    <button
                                        class="btn btn-light"
                                        type="button"
                                        onclick="createpassword('signin-password',this)"
                                        id="button-addon2"
                                    >
                                        <i class="ri-eye-off-line align-middle"></i>
                                    </button>
                                </div>
                                <div class="mt-2">
                                    <div class="form-check">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            value=""
                                            id="defaultCheck1"
                                        />
                                        <label
                                            class="form-check-label text-muted fw-normal"
                                            for="defaultCheck1"
                                        >
                                            Remember password ?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-2">
                                <button class="btn btn-lg" style="background: #111c43 !important; color: #FFFFFF !important" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom-Switcher JS -->
<script src="{{asset('assets/js/custom-switcher.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Show Password JS -->
<script src="{{asset('assets/js/show-password.js')}}"></script>
</body>
<!-- Mirrored from spruko.com/demo/ynex/dist/html/sign-in-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Jun 2023 20:20:40 GMT -->
</html>
