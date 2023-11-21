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

<title>Enfant</title>
</head>
@include ('nav')
<body>


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

// app/Http/Controllers/Admin/StylisteController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Styliste;
use Illuminate\Http\Request;

class StylisteController extends Controller
{
    // Afficher tous les stylistes
    public function index()
    {
        $stylistes = Styliste::all();
        return view('admin.stylistes.index', compact('stylistes'));
    }

    // Afficher le formulaire de création d'un styliste
    public function create()
    {
        return view('admin.stylistes.create');
    }

    // Enregistrer un nouveau styliste
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'contact' => 'required|string',
            'localisation' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('stylistes_photos', 'public');
            $validatedData['photo'] = $photoPath;
        }

        // Créer le styliste
        Styliste::create($validatedData);

        // Rediriger avec un message de succès
        return redirect()->route('stylistes.index')->with('success', 'Styliste ajouté avec succès');
    }

    // Afficher les détails d'un styliste
    public function show(Styliste $styliste)
    {
        return view('admin.stylistes.show', compact('styliste'));
    }

    // Afficher le formulaire d'édition d'un styliste
    public function edit(Styliste $styliste)
    {
        return view('admin.stylistes.edit', compact('styliste'));
    }

    // Mettre à jour un styliste
    public function update(Request $request, Styliste $styliste)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom_entreprise' => 'required|string',
            'contact' => 'required|string',
            'localisation' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,p


