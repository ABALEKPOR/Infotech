
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits - InfoTech Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fb;
            color: #333;
        }

        /* Navigation */
        nav {
            background: #0d6efd;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            position: relative;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-wrap: wrap;
            gap: 18px;
        }

        .nav-links > a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: 0.2s;
        }

        .nav-links > a:hover {
            color: #ffeb3b;
        }

        .user-name {
            color: white;
            font-size: 14px;
        }

        .logout-form {
            display: inline;
        }

        .logout-btn {
            background: white;
            color: #0d6efd;
            border: none;
            padding: 10px 13px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background: #e7efff;
        }

        /* Menu téléphone */
        #menu-toggle {
            display: none;
        }

        .menu-button {
            display: none;
            color: white;
            font-size: 28px;
            cursor: pointer;
            user-select: none;
        }

        /* Recherche */
        .search-box {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 30px auto 10px;
            padding: 0 20px;
        }

        .search-box input {
            width: min(400px, 100%);
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 7px;
            outline: none;
            font-size: 15px;
        }

        .search-box input:focus {
            border-color: #0d6efd;
        }

        .search-box button {
            padding: 12px 18px;
            border: none;
            background: #0d6efd;
            color: white;
            border-radius: 7px;
            cursor: pointer;
            font-size: 15px;
        }

        .search-box button:hover {
            background: #084298;
        }

        /* Titre */
        .title {
            text-align: center;
            padding: 35px 20px;
        }

        .title h1 {
            color: #222;
            margin-bottom: 12px;
            font-size: 32px;
        }

        .title p {
            color: #666;
            line-height: 1.6;
        }

        /* Produits */
        .products {
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
            padding-bottom: 55px;
        }

        .card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .card-content {
            padding: 18px;
        }

        .card h3 {
            color: #0d6efd;
            margin-bottom: 10px;
            font-size: 19px;
        }

        .card p {
            color: #555;
            margin-bottom: 14px;
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .price {
            color: #16803c;
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 17px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            background: #0d6efd;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn:hover {
            background: #084298;
        }

        .empty-state {
            grid-column: 1 / -1;
            text-align: center;
            padding: 45px 20px;
            background: white;
            border-radius: 12px;
        }

        .empty-state h2 {
            margin-bottom: 10px;
        }

        /* Pied de page */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 22px 15px;
            line-height: 1.6;
        }

        /* Tablettes et téléphones */
        @media (max-width: 900px) {
            nav {
                padding: 15px 4%;
            }

            .nav-links {
                gap: 12px;
            }

            .user-name {
                display: none;
            }
        }

        @media (max-width: 700px) {
            nav {
                flex-wrap: wrap;
                padding: 15px 20px;
            }

            .logo {
                font-size: 21px;
            }

            .menu-button {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                align-items: stretch;
                width: 100%;
                gap: 0;
                padding-top: 12px;
                border-top: 1px solid rgba(255, 255, 255, 0.3);
            }

            #menu-toggle:checked ~ .nav-links {
                display: flex;
            }

            .nav-links > a {
                display: block;
                margin: 0;
                padding: 13px 5px;
                font-size: 15px;
            }

            .user-name {
                display: block;
                padding: 12px 5px;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
            }

            .logout-form {
                display: block;
                width: 100%;
                padding: 8px 0 4px;
            }

            .logout-btn {
                width: 100%;
                padding: 12px;
            }

            .search-box {
                margin-top: 22px;
            }

            .search-box input {
                min-width: 0;
                flex: 1;
            }

            .search-box button {
                padding: 12px;
            }

            .title {
                padding: 30px 20px;
            }

            .title h1 {
                font-size: 25px;
            }

            .products {
                width: 92%;
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 18px;
            }

            .card img {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .products {
                grid-template-columns: 1fr;
            }

            .search-box {
                align-items: stretch;
            }

            .search-box input {
                width: 100%;
            }

            .title h1 {
                font-size: 23px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <a href="{{ route('espace') }}"
           class="logo"
           style="text-decoration: none;">
            InfoTech Store
        </a>

        <input type="checkbox" id="menu-toggle">

        <label for="menu-toggle"
               class="menu-button"
               aria-label="Ouvrir ou fermer le menu">
            &#9776;
        </label>

        <div class="nav-links">
            <a href="/">Accueil</a>
            <a href="{{ route('espace') }}">Produits</a>
            <a href="/contact">Contact</a>

            @auth
                <span class="user-name">
                    Bonjour, {{ Auth::user()->name }}
                </span>

                <a href="{{ route('profile.edit') }}">
                    Mon profil
                </a>

                <form method="POST"
                      action="{{ route('logout') }}"
                      class="logout-form">
                    @csrf

                    <button type="submit" class="logout-btn">
                        Déconnexion
                    </button>
                </form>
            @endauth
        </div>
    </nav>

    <!-- Recherche -->
    <form method="GET"
          action="{{ route('espace') }}"
          class="search-box">

        <input
            type="text"
            name="q"
            value="{{ request('q') }}"
            placeholder="Rechercher un produit..."
            aria-label="Rechercher un produit">

        <button type="submit">
            Rechercher
        </button>
    </form>

    <!-- Titre -->
    <div class="title">
        <h1>Nos Produits Informatiques</h1>
        <p>
            Découvrez notre sélection d'équipements informatiques de qualité.
        </p>
    </div>

    <!-- Liste des produits -->
    <div class="products">

        @forelse($produits as $produit)

            <div class="card">

                <img
                    src="{{ asset('images/' . $produit->image) }}"
                    alt="{{ $produit->nom }}"
                    loading="lazy">

                <div class="card-content">

                    <h3>{{ $produit->nom }}</h3>

                    <p>{{ $produit->description }}</p>

                    <div class="price">
                        {{ $produit->prix }} DH
                    </div>

                    <a href="{{ route('achat.formulaire', $produit->id) }}"
                       class="btn">
                        Acheter
                    </a>

                </div>
            </div>

        @empty

            <div class="empty-state">
                <h2>Aucun produit disponible</h2>
                <p>
                    Aucun produit ne correspond à votre recherche.
                    Essayez un autre mot-clé.
                </p>
            </div>

        @endforelse

    </div>

    <!-- Pied de page -->
    <footer>
        &copy; {{ date('Y') }} InfoTech Store
        - Vente de matériel informatique
    </footer>

</body>
</html>
