// CommandeController.php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function listerCommandes()
    {
        // Récupérer toutes les commandes de la base de données
        $commandes = Commande::all();

        // Passer les données à la vue
        return view('commandes.index', ['commandes' => $commandes]);
    }

    public function creerCommande(Request $request)
    {
        // Validation des données du formulaire (si nécessaire)
        $request->validate([
            'date_commande' => 'required|date',
            'montant' => 'required|numeric',
            'command_id' => 'required|integer',
            'styliste_id' => 'required|integer',
            'user_id' => 'required|integer',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Créer une nouvelle commande
        $commande = new Commande;
        $commande->date_commande = $request->date_commande;
        $commande->montant = $request->montant;
        $commande->command_id = $request->command_id;
        $commande->styliste_id = $request->styliste_id;
        $commande->user_id = $request->user_id;
        $commande->save();

        // Rediriger vers la liste des commandes ou faire d'autres actions nécessaires
        return redirect()->route('commandes.index');
    }
}
