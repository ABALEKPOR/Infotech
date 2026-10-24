
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finaliser ma commande - InfoTech Store</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 30px 15px;
            color: #1e293b;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
        }

        .brand {
            text-align: center;
            color: #0d6efd;
            font-size: 22px;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            font-size: 25px;
            margin-bottom: 25px;
        }

        .product {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .product img {
            width: 200px;
            max-width: 100%;
            height: 160px;
            object-fit: contain;
        }

        .product h2 {
            margin-bottom: 8px;
        }

        .prix {
            color: #198754;
            font-size: 22px;
            font-weight: bold;
            margin: 15px 0;
        }

        .section-title {
            margin-top: 25px;
            color: #0d6efd;
            font-size: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 15px;
        }

        input, select, textarea {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            font-size: 15px;
            background: white;
        }

        textarea {
            min-height: 90px;
            resize: vertical;
        }

        input:focus, select:focus, textarea:focus {
            outline: 2px solid #93c5fd;
            border-color: #0d6efd;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 5px;
        }

        .success {
            color: #15803d;
            background: #dcfce7;
            padding: 12px;
            border-radius: 7px;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            border: none;
            background: #0d6efd;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 7px;
            cursor: pointer;
        }

        button:hover {
            background: #084298;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #0d6efd;
            text-decoration: none;
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="brand">InfoTech Store</div>
    <h1>Finaliser ma commande</h1>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div class="product">
        <img src="{{ asset('images/'.$produit->image) }}"
             alt="{{ $produit->nom }}">

        <h2>{{ $produit->nom }}</h2>
        <p>{{ $produit->description }}</p>

        <div class="prix">
            Prix unitaire : {{ $produit->prix }} DH
        </div>
    </div>

    @if ($errors->any())
        <div class="error">
            <p>Veuillez corriger les erreurs suivantes :</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('achat.valider') }}" method="POST">
        @csrf

        <input type="hidden" name="produit_id"
               value="{{ $produit->id }}">

        <h3 class="section-title">1. Informations du client</h3>

        <label for="nom_complet">Nom complet</label>
        <input type="text" id="nom_complet" name="nom_complet"
               value="{{ old('nom_complet') }}"
               placeholder="Ex. : Jean Dupont" maxlength="255" required>

        <label for="telephone">Numéro de téléphone</label>
        <input type="tel" id="telephone" name="telephone"
               value="{{ old('telephone') }}"
               placeholder="Ex. : 06XXXXXXXX" maxlength="30" required>

        <label for="adresse">Adresse de livraison</label>
        <textarea id="adresse" name="adresse"
                  placeholder="Quartier, rue, numéro de maison, repère..."
                  maxlength="500" required>{{ old('adresse') }}</textarea>

        <label for="ville">Ville</label>
        <input type="text" id="ville" name="ville"
               value="{{ old('ville') }}"
               placeholder="Ex. : Casablanca" maxlength="100" required>

        <h3 class="section-title">2. Détails de la commande</h3>

        <label for="quantite">Nombre d'articles</label>
        <input type="number" id="quantite" name="quantite"
               min="1" value="{{ old('quantite', 1) }}" required>

        <label for="mode_paiement">Mode de paiement</label>
        <select id="mode_paiement" name="mode_paiement" required>
            <option value="">Sélectionner un mode de paiement</option>
            <option value="Carte bancaire"
                {{ old('mode_paiement') == 'Carte bancaire' ? 'selected' : '' }}>
                Carte bancaire
            </option>
            <option value="PayPal"
                {{ old('mode_paiement') == 'PayPal' ? 'selected' : '' }}>
                PayPal
            </option>
            <option value="Paiement à la livraison"
                {{ old('mode_paiement') == 'Paiement à la livraison' ? 'selected' : '' }}>
                Paiement à la livraison
            </option>
        </select>

        <button type="submit">Confirmer ma commande</button>
    </form>

    <a href="{{ route('espace') }}" class="back">
        ← Retour aux produits
    </a>

</div>

</body>
</html>
