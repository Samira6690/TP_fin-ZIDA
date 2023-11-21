<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">

          <a href="" class="logo"><span>S</span>tyliste House</a>

      <!-- <a class="navbar-brand" href="#">Styliste House</a> -->
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="welcome.blade.php">HOME</a>
          </li>
          {{--  <!-- <li class="nav-item">
            <a class="nav-link" href="blog.php">BLOG</a>
          </li> -->  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: white;" href="homme.blade.php" data-bs-toggle="dropdown" aria-expanded="false">COLLECTIONS</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="homme.blade.php">Homme</a></li>
              <li><a class="dropdown-item" href="femme.blade.php">Femme</a></li>
              <li><a class="dropdown-item" href="enfant.blade.php">Enfants</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: white;" href="ciseaux.blade.php" data-bs-toggle="dropdown" aria-expanded="false">Nos STYLISTES</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="emperor.blade.php">Emperor style</a></li>
              <li><a class="dropdown-item" href="ciseaux.blade.php">Ciseaux d\or</a></li>
              <li><a class="dropdown-item" href="#">Les doigts magiques</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.blade.php" style="color: white;">CONTACT</a>
          </li>

        </ul>
     <form class="d-flex" role="search">
          <a class="" href="{{ route('admin.login') }}"><button class="btn btn-secondary">Inscription</button></a>

          <a class="" href="{{ route('home') }}"><button class="btn btn-primary" >Connection</button></a>
         </form>
      </div>
    </div>
  </nav>

  <!-- <div class="nav-scroller bg-body shadow-sm">
    <nav class="nav" aria-label="Secondary navigation">
      <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
      <a class="nav-link" href="#">
        Friends
        <span class="badge text-bg-light rounded-pill align-text-bottom">27</span>
      </a>
      <a class="nav-link" href="#">Explore</a>
      <a class="nav-link" href="#">Suggestions</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
    </nav>
  </div>
  </nav> -->
