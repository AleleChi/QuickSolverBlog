<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
    data-nav-layout="vertical"
    data-theme-mode="light"
    data-header-styles="light"
    data-menu-styles="dark"
    data-toggled="close"
>

<!--Header Starts-->
@include('layouts.header')
<!--Header Ends-->

<body>

<!-- Start Switcher -->
@include('layouts.switcher')
<!-- End Switcher -->

<div class="page">
    <!-- app-header -->
    @include('layouts.topnav')
    <!-- /app-header -->


    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">
        <!-- Start::main-sidebar -->
        @include('layouts.sidebar')
        <!-- End::main-sidebar -->
    </aside>
    <!-- End::app-sidebar -->


    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div>
                    <p class="fw-semibold fs-18 mb-0">Welcome back, Synkrotech !</p>
        
                </div>
                <div class="btn-list mt-md-0 mt-2">
                    <button type="button" class="btn btn-info btn-wave">
                        <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i
                        >Filters
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-wave">
                        <i
                            class="ri-upload-cloud-line me-2 align-middle d-inline-block"
                        ></i
                        >Export
                    </button>
                </div>
            </div>
            <!-- End::page-header -->
            <!-- Start::row-1 -->
            <div class="row">
                
            </div>
            <!-- End::row-1 -->
        </div>
    </div>
    <!-- End::app-content -->
    <div
        class="modal fade"
        id="searchModal"
        tabindex="-1"
        aria-labelledby="searchModal"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <a
                            href="javascript:void(0);"
                            class="input-group-text"
                            id="Search-Grid"
                        ><i class="fe fe-search header-link-icon fs-18"></i
                            ></a>
                        <input
                            type="search"
                            class="form-control border-0 px-2"
                            placeholder="Search"
                            aria-label="Username"
                        />
                        <a
                            href="javascript:void(0);"
                            class="input-group-text"
                            id="voice-search"
                        ><i class="fe fe-mic header-link-icon"></i
                            ></a>
                        <a
                            href="javascript:void(0);"
                            class="btn btn-light btn-icon"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="fe fe-more-vertical"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <div class="mt-4">
                        <p class="font-weight-semibold text-muted mb-2">
                            Are You Looking For...
                        </p>
                        <span class="search-tags"
                        ><i class="fe fe-user me-2"></i>People<a
                                href="javascript:void(0)"
                                class="tag-addon"
                            ><i class="fe fe-x"></i></a
                            ></span>
                        <span class="search-tags"
                        ><i class="fe fe-file-text me-2"></i>Pages<a
                                href="javascript:void(0)"
                                class="tag-addon"
                            ><i class="fe fe-x"></i></a
                            ></span>
                        <span class="search-tags"
                        ><i class="fe fe-align-left me-2"></i>Articles<a
                                href="javascript:void(0)"
                                class="tag-addon"
                            ><i class="fe fe-x"></i></a
                            ></span>
                        <span class="search-tags"
                        ><i class="fe fe-server me-2"></i>Tags<a
                                href="javascript:void(0)"
                                class="tag-addon"
                            ><i class="fe fe-x"></i></a
                            ></span>
                    </div>
                    <div class="my-4">
                        <p class="font-weight-semibold text-muted mb-2">
                            Recent Search :
                        </p>
                        <div
                            class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"
                        >
                            <a href="notifications.html"><span>Notifications</span></a>
                            <a
                                class="ms-auto lh-1"
                                href="javascript:void(0);"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            ><i class="fe fe-x text-muted"></i
                                ></a>
                        </div>
                        <div
                            class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"
                        >
                            <a href="alerts.html"><span>Alerts</span></a>
                            <a
                                class="ms-auto lh-1"
                                href="javascript:void(0);"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            ><i class="fe fe-x text-muted"></i
                                ></a>
                        </div>
                        <div
                            class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"
                        >
                            <a href="mail.html"><span>Mail</span></a>
                            <a
                                class="ms-auto lh-1"
                                href="javascript:void(0);"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                            ><i class="fe fe-x text-muted"></i
                                ></a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group ms-auto">
                        <button class="btn btn-sm btn-primary-light">Search</button>
                        <button class="btn btn-sm btn-primary">Clear Recents</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>

{{--JavaScript--}}
@include('layouts.script')

<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        event.preventDefault();
        swal({
            title: "Are you sure?",
            text: "Point Transaction will be deleted.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#E6533C',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete transaction!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>

</body>
</html>
