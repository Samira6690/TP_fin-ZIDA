// TransactionController.php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function listerTransactions()
    {
        // Récupérer toutes les transactions de la base de données
        $transactions = Transaction::all();

        // Passer les données à la vue
        return view('transactions.index', ['transactions' => $transactions]);
    }

    public function creerTransaction(Request $request)
    {
        // Validation des données du formulaire (si nécessaire)
        $request->validate([
            'montant' => 'required|numeric',
            'date_transaction' => 'required|date',
            'commande_id' => 'required|integer',
            // Ajoutez d'autres règles de validation si nécessaire
        ]);

        // Créer une nouvelle transaction
        $transaction = new Transaction;
        $transaction->montant = $request->montant;
        $transaction->date_transaction = $request->date_transaction;
        $transaction->commande_id = $request->commande_id;
        $transaction->save();

        // Rediriger vers la liste des transactions ou faire d'autres actions nécessaires
        return redirect()->route('transactions.index');
    }
}
