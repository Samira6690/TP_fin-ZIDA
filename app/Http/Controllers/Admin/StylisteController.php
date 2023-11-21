<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StylisteController extends Controller
{
    public function profil()
    {
        $stylistes = Styliste::all();

        return view('admin.styliste', compact('stylistes'));
    }
   public function create()
     {
     return view('admin.stylistes.create');
    }

    //  Enregistrer un nouveau styliste
    public function store(Request $request)
    {
    //  Valider les données du formulaire
       $validatedData = $request->validate([
           'nom_entreprise' => 'required|string',
           'contact' => 'required|string',
          'localisation' => 'required|string',
       'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //  Ajoutez d'autres règles de validation si nécessaire
    ]);

        // Gérer le téléchargement de la photo
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('stylistes_photos', 'public');
         $validatedData['photo'] = $photoPath;
     }

        //  Créer le styliste
       Styliste::create($validatedData);
}


}