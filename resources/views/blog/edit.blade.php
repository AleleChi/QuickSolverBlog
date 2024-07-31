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
                    <p class="fw-semibold fs-18 mb-0"> <p class="fw-semibold fs-18 mb-0">{{$page_title}}</p></p>

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
            <div class="container-lg">
                <div class="row justify-content-center align-items-center authentication-basic h-100">
                    <div class="col-xxl-8">
                        <div class="card custom-card">
                            <div class="card-body p-5">
                                <form style="font-family: 'Times New Roman', Times, serif; font-weight:bolder;" action="{{ route('post.update', $post->id) }}"  method="POST"  enctype="multipart/form-data">
                                    @csrf
                                    <p class="h5 fw-semibold mb-2 text-center">Blog Post Details</p>
                                    <div class="row gy-3">
                                        <div class="col-xl-12">
                                            <label for="title" class="form-label text-dark">Post Title</label>
                                            <div class="input-group">
                                                <input type="title" name="title" value="{{$post->title ?? ''}}" class="form-control form-control-lg @error('title') is-invalid @enderror" placeholder="enter title of blog post"/>
                                            </div>
                                            <span class="text-danger">@error('title') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="author" class="form-label text-dark">Author</label>
                                            <div class="input-group">
                                                <input type="author" name="author" value="{{$post->author ?? ''}}" class="form-control form-control-lg  @error('author') is-invalid @enderror" placeholder="enter name of author"/>
                                            </div>
                                            <span class="text-danger">@error('author') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-xl-12">
                                            <label for="image" class="form-label text-dark">Image:</label>
                                            <input type="file" name="image" id="image" class="form-control form-control-lg" accept="image/*">
                                            <div class="mt-3">
                                                @if($post->image)
                                                    <img id="imagePreview" src="{{ asset($post->image) }}" class="img-fluid" style="max-width: 100%;" />
                                                @else
                                                    <img id="imagePreview" class="img-fluid" style="max-width: 100%; display: none;" />
                                                @endif
                                            </div>
                                            <span class="text-danger">@error('image') {{$message}} @enderror</span>
                                        </div>
                                        
                                        <div class="col-xl-12 mb-2">
                                            <label for="body" class="form-label text-dark">Post Body</label>
                                            <textarea id="body" class="form-control input" style="height: 400px;" name="body">{!! base64_decode($post->body) !!}</textarea>
                                            <span class="text-danger">@error('body') {{$message}} @enderror</span>
                                        </div>
                                        <div class="col-xl-12 d-grid mt-2">
                                            <button type="submit" style="background: #111c43 !important; color: #FFFFFF !important" class="btn btn-w-md">Save Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End::row-1 -->
        </div>
    </div>
    <!-- End::app-content -->

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>

{{--JavaScript--}}
@include('layouts.script')


<script>
     ClassicEditor
            .create(document.querySelector('#body'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}"
                }
            })
            .catch(error => {
                console.error(error);
            });

    
    document.getElementById('image').addEventListener('change', function(event) {
       var reader = new FileReader();
        reader.onload = function(e) {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
</body>
</html>
