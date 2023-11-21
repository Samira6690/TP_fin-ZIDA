
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/heroes/">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link rel="stylesheet" href="{{asset('product.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <script src="https://kit.fontawesome.com/3477ae541c.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    {{--  <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">  --}}
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="{{asset('css/carousel.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesone/4.7.0.css/font-awesome.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/offcanvas-navbar/">
     <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
  <link rel="stylesheet" href="{{asset('css/offcanvas-navbar.css')}}">
   <script src="{{asset('js/color-modes.js')}}"></script>
    <!-- Favicon -->
    <link href="{{asset('images/img/favicon.ico')}}" rel="icon">
    <!-- <link rel="stylesheet" href="{{asset('css/style1.css')}}"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style1.css')}}" rel="stylesheet">

    <title>Femme</title>
  </head>
  @include ('nav')
<body>
    <!-- Category Start -->
        <!-- Blog Start -->
        <div class="container-fluid py-5" style="background-color: white;">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Modèles de dame</h5>
                <h1>Suivez la tendance</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r1.webp') }}"alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r2.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r3.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r4.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r5.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r6.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r7.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r8.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{ asset('images/r9.webp') }}" alt="">
                        <a class="blog-overlay text-decoration-none" href="">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>


    <!-- Blog End -->


    <!-- Blog End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <script src="{{asset('js/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('js/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/js/main.js')}}"></script>
        <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.')}}"></script>
        <script src="{{asset('js/index.js')}}"></script>
        <script src="{{asset('js/js/script.js')}}"></script>
        <script src="{{asset('js/https://unpkg.com/swiper@7/swiper-bundle.min.js')}}"></script>
    @include('footer')

    </body>

</html>
