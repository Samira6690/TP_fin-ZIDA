// CategorieController.php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function listerCategories()
    {
        // Récupérer toutes les catégories de la base de données
        $categories = Categorie::all();

        // Passer les données à la vue
        return view('categories.index', ['categories' => $categories]);
    }

    public function creerCategorie(Request $request)
    {
        // Validation des données du formulaire (si nécessaire)
        $request->validate([
            'nom' => 'required|string|max:255',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Créer une nouvelle catégorie
        $categorie = new Categorie;
        $categorie->nom = $request->nom;
        $categorie->save();

        // Rediriger vers la liste des catégories ou faire d'autres actions nécessaires
        return redirect()->route('categories.index');
    }
}
