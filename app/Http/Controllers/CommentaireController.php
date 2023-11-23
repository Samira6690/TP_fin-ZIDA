// CommentaireController.php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function listerCommentaires()
    {
        // Récupérer tous les commentaires de la base de données
        $commentaires = Commentaire::all();

        // Passer les données à la vue
        return view('commentaires.index', ['commentaires' => $commentaires]);
    }

    public function creerCommentaire(Request $request)
    {
        // Validation des données du formulaire (si nécessaire)
        $request->validate([
            'contenu' => 'required|string',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau commentaire
        $commentaire = new Commentaire;
        $commentaire->contenu = $request->contenu;
        $commentaire->save();

        // Rediriger vers la liste des commentaires ou faire d'autres actions nécessaires
        return redirect()->route('commentaires.index');
    }
}
