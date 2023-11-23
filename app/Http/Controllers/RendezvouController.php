// RendezvousController.php

namespace App\Http\Controllers;

use App\Models\Rendezvous;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    public function listerRendezvous()
    {
        // Récupérer tous les rendez-vous de la base de données
        $rendezvous = Rendezvous::all();

        // Passer les données à la vue
        return view('rendezvous.index', ['rendezvous' => $rendezvous]);
    }

    public function creerRendezvous(Request $request)
    {
        // Validation des données du formulaire (si nécessaire)
        $request->validate([
            'date' => 'required|date',
            'styliste_id' => 'required|integer',
            'user_id' => 'required|integer',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau rendez-vous
        $rendezvous = new Rendezvous;
        $rendezvous->date = $request->date;
        $rendezvous->styliste_id = $request->styliste_id;
        $rendezvous->user_id = $request->user_id;
        $rendezvous->save();

        // Rediriger vers la liste des rendez-vous ou faire d'autres actions nécessaires
        return redirect()->route('rendezvous.index');
    }
}
