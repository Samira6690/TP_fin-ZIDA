<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Collections</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style1.css')}}" rel="stylesheet">
<link rel="stylesheet" href="bootstrap-5.3.0-examples">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link href="bootstrap.min.css" rel="stylesheet">
<script src="{{ asset('js/color-modes.js') }}"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>
  </head>
     @include('nav')
  <body>
    <section class="container6">
    </section><br><br>
  <div class="title-text">
  <p>Nos collections</p>
  <h1>Découvrez nos collections</h1>
  </div>
  <section class="team">
  <div class="row">
    <div class="box">
      <div class="image">
        <img src="{{ asset('images/r8.webp') }}" alt="">
      </div>
      <div class="content1">
        <h5>colection ma patrie</h5>
    </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{ asset('images/r10.webp') }}" alt="">
      </div>
       <div class="content1">
        <h5>collection ma patrie</h5>
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{ asset('images/r11.webp') }}" alt="">
      </div>
       <div class="content1">
        <h5>colection ma patrie</h5>
    </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{ asset('images/r9.webp') }}" alt="">
      </div>
       <div class="content1">
        <h5>colection espoir</h5>
      </div>
    </div>
    </div>
    </div>
  </section>
  <section class="team">
    <div class="row">
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r9.webp') }}" alt="">
        </div>
        <div class="content1">
          <h5>colection ma patrie</h5>
      </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r10.webp') }}" alt="">
        </div>
         <div class="content1">
          <h5>collection ma patrie</h5>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r11.webp') }}" alt="">
        </div>
         <div class="content1">
          <h5>colection ma patrie</h5>
      </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="{{ asset('images/r9.webp') }}" alt="">
        </div>
         <div class="content1">
          <h5>colection espoir</h5>
        </div>
      </div>
      </div>
      </div>

    </section>
    <footer class="text-body-secondary py-5">
        <div class="container">
          <p class="float-end mb-1" style="margin-left:50px;">
            <a href="#">Back to top</a>
          </p>
          <p class="mb-0"><a href="home.php">Visit the homepage</a></p>
        </div>
      </footer>

       @include('footer')
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/color-modes.js')}}"></script>
          </body>
      </html>
















{{--  <section class="container6">
  </section><br><br>
<div class="title-text">
<p>Nos collections</p>
<h1>Découvrez nos collections</h1>
</div>
<section class="team">
<div class="row">
  <div class="box">
    <div class="image">
      <img src="{{asset('images/r8.webp')}}" alt="">
    </div>
    <div class="content1">
      <h5>colection ma patrie</h5>
  </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="r{{asset('images/r10.webp')}}" alt="">
    </div>
     <div class="content1">
      <h5>collection ma patrie</h5>
    </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="{{asset('images/r11.webp')}}" alt="">
    </div>
     <div class="content1">
      <h5>colection ma patrie</h5>
  </div>
  </div>
  <div class="box">
    <div class="image">
      <img src="{{asset('images/r9.webp')}}" alt="">
    </div>
     <div class="content1">
      <h5>colection espoir</h5>
    </div>
  </div>
  </div>
  </div>
</section>
<section class="team">
  <div class="row">
    <div class="box">
      <div class="image">
        <img src="{{ asset('images/r7.webp') }}" alt="">
      </div>
      <div class="content1">
        <h5>colection ma patrie</h5>
    </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{asset('images/r10.webp')}}" alt="">
      </div>
       <div class="content1">
        <h5>collection ma patrie</h5>
      </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{asset('images/r11.webp')}}" alt="">
      </div>
       <div class="content1">
        <h5>colection ma patrie</h5>
    </div>
    </div>
    <div class="box">
      <div class="image">
        <img src="{{asset('images/r11.webp')}}" alt="">
      </div>
       <div class="content1">
        <h5>colection espoir</h5>
      </div>
    </div>
    </div>
    </div>
  </section>
  <footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-0"><a href="home.php">Visit the homepage</a></p>
  </div>
</footer>

 @include('footer')
<script src="bootstrap.bundle.min.js"></script>
<script src="color-modes.js"></script>
    </body>
</html>  --}}
