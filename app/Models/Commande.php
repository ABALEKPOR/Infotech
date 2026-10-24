<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'produit_id',
        'quantite',
        'montant_total',
        'mode_paiement',
        'nom_complet',
        'telephone',
        'adresse',
        'ville',
    ];
}
