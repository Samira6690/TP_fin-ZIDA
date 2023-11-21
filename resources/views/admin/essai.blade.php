<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Styliste;

class DashboardController extends Controller
{
    public function index()
    {
        $stylistes = Styliste::all();

        return view('admin.dashboard', compact('stylistes'));
    }
    // public function create()
    // {
    //     return view('admin.stylistes.create');
    // }

    // // Enregistrer un nouveau styliste
    // public function store(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $validatedData = $request->validate([
    //         'nom_entreprise' => 'required|string',
    //         'contact' => 'required|string',
    //         'localisation' => 'required|string',
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         // Ajoutez d'autres règles de validation si nécessaire
    //     ]);

    //     // Gérer le téléchargement de la photo
    //     if ($request->hasFile('photo')) {
    //         $photoPath = $request->file('photo')->store('stylistes_photos', 'public');
    //         $validatedData['photo'] = $photoPath;
    //     }

    //     // Créer le styliste
    //     Styliste::create($validatedData);

    //     // Rediriger avec un message de succès
    //     return redirect()->route('stylistes.index')->with('success', 'Styliste ajouté avec succès');
    // }

    // // Afficher les détails d'un styliste
    // public function show(Styliste $styliste)
    // {
    //     return view('admin.stylistes.show', compact('styliste'));
    // }

    // // Afficher le formulaire d'édition d'un styliste
    // public function edit(Styliste $styliste)
    // {
    //     return view('admin.stylistes.edit', compact('styliste'));
    // }

    // // Mettre à jour un styliste
    // public function update(Request $request, Styliste $styliste)
    // {
    //     // Valider les données du formulaire
    //     $validatedData = $request->validate([
    //         'nom_entreprise' => 'required|string',
    //         'contact' => 'required|string',
    //         'localisation' => 'required|string',
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

    //     ]);


    //     if ($request->hasFile('photo')) {
    //         $photoPath = $request->file('photo')->store('stylistes_photos', 'public');
    //         $validatedData['photo'] = $photoPath;
    //     }




}


