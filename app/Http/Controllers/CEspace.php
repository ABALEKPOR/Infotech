<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class CEspace extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;

        $produits = Produit::when($q, function ($query) use ($q) {
            $query->where('nom', 'like', "%{$q}%")
                  ->orWhere('description', 'like', "%{$q}%");
        })->get();

        return view('espace', compact('produits'));
    }
}