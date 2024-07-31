<head>
    <!-- Meta Data -->
    <base href="/public">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SynKrotech | Admin</title>
    <meta name="Description" content="Your all in one calculator application"/>
    <meta name="Author" content="Synkrotech Limited" />
    <meta name="keywords" content="mathematics,maths,physics,chemistry,biology,science,technology,stem,tech,calculation,calculator,solve,cgpa"/>
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/images/brand-logos/logo.png')}}" type="image/x-icon"/>
    <!-- Choices JS -->
    <script src="{{asset('assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <!-- Main Theme Js -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Bootstrap Css -->
    <link id="style" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- Style Css -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    <!-- Node Waves Css -->
    <link href="{{asset('assets/libs/node-waves/waves.min.css')}}" rel="stylesheet" />
    <!-- Simplebar Css -->
    <link href="{{asset('assets/libs/simplebar/simplebar.min.css" rel="stylesheet')}}" />
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/libs/%40simonwep/pickr/themes/nano.min.css')}}"/>
    <!-- Choices Css -->
    <link rel="stylesheet" href="{{asset('assets/libs/choices.js/public/assets/styles/choices.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/libs/jsvectormap/css/jsvectormap.min.css')}}"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/libs/swiper/swiper-bundle.min.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
 
    
    <script type="text/javascript">
      Paddle.Setup({ vendor: 21108 });
    </script>
    <style>
        .ck.ck-editor__editable {
            min-height: 400px; /* Adjust as needed */
        }
    </style>
    <style>
          .blog-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .blog-post {
            margin-bottom: 20px;
        }
        .post-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .post-body {
            font-size: 1rem;
        }
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .card-body {
            flex: 1;
        }
        
    </style>
</head>
