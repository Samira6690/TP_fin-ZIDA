
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
     <link rel="stylesheet" href="s{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Emperor</title>
</head>
 @include('nav')
<body>
    {{--  <section class="container9">
        <div class="text">
            <h2>Bienvenu dans la maison Emperor Style</h2>
            <h4>La marque de la noblesse</h4>
        </div>
    </section><br><br><br><br>  --}}
      {{--  <section class="container">
        <div id="carouselExample" class="carousel slide" style="width: 25vw; height:25vh;" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/r10.webp') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                    <div class="text">
                            <h1>Bienvenue dans <span>Styliste House</span></h1>
                            <h2>Suivre la mode en temps réel</h2>
                        </div>
                        <div class="btn1">
                            <a href="#"><span></span>Nous suivre</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/r11.webp') }}" class="d-block w-100" alt="Slide 2">
                </div>
                <!-- Ajoutez d'autres images si nécessaire -->
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>  --}}


            <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/j4.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h1>Innovative Way To Learn</h1>
                    </div>
                    <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
                    <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
        </div>
    </section><br><br><br>
    <section class="menu">
        <div class="titre-test">
            <h2 class="titre"><span>Nos</span>Creations</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j6.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j5.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j3.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j2.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j4.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j3.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j6.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
            <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j4.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
             <div class="box">
                <div class="imbox">
                    <img src="{{ asset('images/j5.jpg') }}" alt="">
                </div>
                <div class="test">
<h3>Tenu traditionnel</h3>
                </div>
            </div>
        </div>
        </section>
        <div class="tite">
            <a href="" class="n1">voir tout</a>
        </div>
    </section><br><br><br><br><br><br><br>
             @include('footer')

</body>
</html>
