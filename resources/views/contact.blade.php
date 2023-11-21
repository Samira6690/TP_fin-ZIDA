<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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

  <title>Contact</title>
</head>
@include ('nav')
<body>
<section class='container3'>
</section>
<section class="contac">
  <div class="container">
    <div>
      <h4>Une question</h4>
      <h3>conactez-nous</h3>
    </div>
    <form action="" method="post">
      <input type="text" name="name" placeholder="Entrez votre nom" required>
      <input type="email" name="email" placeholder="Entrez votre email" required>
      <input type="text" name="subject" placeholder="Entrez le sujet" required>
      <input type="text" name="number" placeholder="Entrez votre numero de téléphone" required>
      <textarea name="message" id="" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
      <button type="submit">Envoyer</button>
    </form>
  </div>
</section>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('js/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('js/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Contact Javascript File -->
<script src="{{asset('js/mail/jqBootstrapValidation.min.js')}}"></script>
<script src="{{asset('js/mail/contact.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('js/js/main.js')}}"></script>
    <script src="{{asset('js/offcanvas-navbar.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/js/script.js')}}"></script>
    <script src="{{asset('js/https://unpkg.com/swiper@7/swiper-bundle.min.js')}}"></script>

    @include ('footer')
  </body>
  </html>

