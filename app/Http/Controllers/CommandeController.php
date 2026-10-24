<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function formulaire($id)
    {
        $produit = Produit::findOrFail($id);

        return view('achat', compact('produit'));
    }

    public function valider(Request $request)
    {
        $request->validate([
            'produit_id' => 'required|exists:produits,id',
            'quantite' => 'required|integer|min:1',
            'nom_complet' => 'required|string|max:255',
            'telephone' => 'required|string|max:30',
            'adresse' => 'required|string|max:500',
            'ville' => 'required|string|max:100',
            'mode_paiement' => 'required|string|max:100',
        ]);

        $produit = Produit::findOrFail($request->produit_id);

        $total = $produit->prix * $request->quantite;

        Commande::create([
            'produit_id' => $produit->id,
            'quantite' => $request->quantite,
            'montant_total' => $total,
            'mode_paiement' => $request->mode_paiement,
            'nom_complet' => $request->nom_complet,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'ville' => $request->ville,
        ]);

        return redirect('/')
            ->with('success', 'Commande enregistrée avec succès !');
    }
}
