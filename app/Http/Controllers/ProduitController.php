<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Styliste;
use App\Produit;
use App\Commande;
use App\Commentaire;
use App\Catégorie;
use App\Rendezvou;
class ProduitController extends Controller
{
        public function liste_produit(){
        $styliste = auth()->user()->styliste;
        $produits = $styliste->produits;
        return view('produit.liste', compact('produits'));
    }

        public function ajouter1_produit()
        {
            $produits = Produit::find($request->id);
             $stylistes =  Styliste::all();
            return view('produit.ajouter1');
        }
        public function ajouter1_produit_traitement(Request $request)
        {
            $request->validate([
                'nom' => 'required',
                'montant' => 'required',
              'styliste_id' => 'required',
        ]);
        $styliste = auth()->user()->styliste;
        $produit = new Produit([
             'nom' => $request->input('nom'),
             'montant' => $request->input('montant'),
            // $produit->nom = $request->nom;
            // $produit->montant = $request->montant;
            // $produit->styliste_id = $request->styliste_id;
        ]);
        $styliste->produits()->save($produit);
        return redirect('/produit')->with('status', 'Le produit a bien été ajouté avec success');
    }

    public function update1_produit()
    {
        $produits = Produit::find($request->id);
         $stylistes =  Styliste::all();
        return view('produit.update1');
    }
    public function update1_produit_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'montant' => 'required',
          'styliste_id' => 'required',
    ]);
    $styliste = auth()->user()->styliste;
    $produit = new Produit([
         'nom' => $request->input('nom'),
         'montant' => $request->input('montant'),
        // $produit->nom = $request->nom;
        // $produit->montant = $request->montant;
        // $produit->styliste_id = $request->styliste_id;
    ]);
    $styliste->produits()->save($produit);
    return redirect('/produit')->with('status', 'Le produit a bien été modifié avec success');
}

       public function delete_produit($id){
        $produits = Produit::find($request->id);
        $stylistes =  Styliste::all();
        $produit->delete();
           return redirect('/produit')->with('status', 'Le produit a bien été supprimer avec success');
    }
    }


