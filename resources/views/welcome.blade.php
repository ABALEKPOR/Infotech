
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoTech Store | Le meilleur de la technologie</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --dark: #101828;
            --blue: #3157e8;
            --light: #f6f8fc;
            --text: #667085;
            --white: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            background: var(--white);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        /* NAVIGATION */
        header {
            background: white;
            border-bottom: 1px solid #eaecf0;
        }

        nav {
            height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .logo {
            font-size: 23px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .logo span {
            color: var(--blue);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        .nav-button, .primary-button {
            background: var(--blue);
            color: white;
            padding: 13px 21px;
            border-radius: 9px;
            font-weight: 600;
            display: inline-block;
            transition: .2s;
        }

        .nav-button:hover, .primary-button:hover {
            background: #2445c5;
            transform: translateY(-2px);
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #f4f7ff 0%, #ffffff 65%);
            padding: 85px 0 95px;
            overflow: hidden;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 55px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 13px;
            background: #e8edff;
            color: var(--blue);
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 24px;
        }

        .hero h1 {
            font-size: clamp(38px, 5vw, 61px);
            line-height: 1.12;
            letter-spacing: -2.8px;
            margin-bottom: 23px;
        }

        .hero h1 span {
            color: var(--blue);
        }

        .hero p {
            color: var(--text);
            font-size: 16px;
            line-height: 1.9;
            max-width: 510px;
            margin-bottom: 30px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .secondary-button {
            padding: 13px 20px;
            border: 1px solid #d0d5dd;
            border-radius: 9px;
            font-weight: 600;
            background: white;
        }

        .secondary-button:hover {
            border-color: var(--blue);
            color: var(--blue);
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            display: block;
            width: 100%;
            height: 420px;
            object-fit: cover;
            border-radius: 25px;
            box-shadow: 0 25px 65px #243c7b20;
        }

        .floating-card {
            position: absolute;
            bottom: 22px;
            left: -22px;
            background: white;
            padding: 18px 22px;
            border-radius: 13px;
            box-shadow: 0 12px 35px #10182818;
            font-size: 13px;
            line-height: 1.8;
        }

        .floating-card strong {
            display: block;
            font-size: 16px;
        }

        /* AVANTAGES */
        .benefits {
            padding: 30px 0;
            border-bottom: 1px solid #eaecf0;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .benefit {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 13px;
        }

        .benefit-icon {
            width: 45px;
            height: 45px;
            display: grid;
            place-items: center;
            background: #eef2ff;
            border-radius: 12px;
            font-size: 21px;
        }

        .benefit strong {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .benefit small {
            color: var(--text);
            font-size: 12px;
        }

        /* CATEGORIES */
        .section {
            padding: 85px 0;
        }

        .section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 35px;
        }

        .section-heading h2 {
            font-size: 34px;
            letter-spacing: -1.2px;
            margin-bottom: 10px;
        }

        .section-heading p {
            color: var(--text);
            font-size: 14px;
            line-height: 1.7;
        }

        .text-link {
            color: var(--blue);
            font-size: 14px;
            font-weight: 700;
            white-space: nowrap;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .category-card {
            padding: 25px 20px;
            background: var(--light);
            border: 1px solid #f0f2f5;
            border-radius: 17px;
            transition: .25s;
        }

        .category-card:hover {
            background: white;
            border-color: #c7d2fe;
            transform: translateY(-5px);
            box-shadow: 0 15px 35px #1018280c;
        }

        .category-icon {
            font-size: 35px;
            margin-bottom: 22px;
        }

        .category-card h3 {
            font-size: 16px;
            margin-bottom: 9px;
        }

        .category-card p {
            color: var(--text);
            font-size: 12px;
            line-height: 1.7;
        }

        /* PROMOTION */
        .promo {
            padding: 0 0 85px;
        }

        .promo-box {
            background: var(--dark);
            color: white;
            border-radius: 24px;
            padding: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            overflow: hidden;
        }

        .promo-box h2 {
            font-size: 32px;
            margin-bottom: 14px;
        }

        .promo-box p {
            color: #cbd5e1;
            line-height: 1.8;
            font-size: 14px;
            max-width: 580px;
        }

        .promo-box .primary-button {
            background: white;
            color: var(--dark);
            white-space: nowrap;
        }

        /* FOOTER */
        footer {
            background: #f8f9fc;
            border-top: 1px solid #eaecf0;
            padding: 40px 0;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-content p {
            color: var(--text);
            font-size: 12px;
            margin-top: 10px;
        }

        .footer-links {
            display: flex;
            gap: 22px;
            font-size: 13px;
            font-weight: 500;
        }

        /* MOBILE */
        @media (max-width: 850px) {
            .hero {
                padding: 55px 0 70px;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-image img {
                height: 350px;
            }

            .floating-card {
                left: 12px;
            }

            .category-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .promo-box {
                padding: 35px;
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 560px) {
            nav {
                height: auto;
                padding: 20px 0;
                flex-wrap: wrap;
            }

            .nav-links {
                width: 100%;
                justify-content: space-between;
                gap: 12px;
                font-size: 12px;
            }

            .nav-button {
                padding: 10px 13px;
                font-size: 12px;
            }

            .hero h1 {
                letter-spacing: -1.7px;
            }

            .hero-image img {
                height: 270px;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .benefit {
                justify-content: flex-start;
            }

            .section {
                padding: 60px 0;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
            }

            .section-heading h2 {
                font-size: 28px;
            }

            .category-grid {
                gap: 12px;
            }

            .category-card {
                padding: 18px 14px;
            }

            .promo-box {
                padding: 28px 22px;
            }

            .promo-box h2 {
                font-size: 26px;
            }

            .footer-content {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <nav>
            <a href="/" class="logo">InfoTech<span>.</span></a>

            <div class="nav-links">
                <a href="/">Accueil</a>
                <a href="{{ route('espace') }}">Nos produits</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('espace') }}" class="nav-button">Découvrir la boutique →</a>
            </div>
        </nav>
    </div>
</header>

<main>

    <section class="hero">
        <div class="container hero-content">
            <div>
                <div class="eyebrow">✦ VOTRE UNIVERS HIGH-TECH</div>

                <h1>
                    La technologie qui fait avancer <span>vos idées.</span>
                </h1>

                <p>
                    Découvrez une sélection de matériel informatique
                    pensée pour travailler, étudier, créer et jouer.
                    Trouvez les équipements adaptés à vos besoins chez InfoTech Store.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('espace') }}" class="primary-button">
                        Explorer nos produits →
                    </a>

                    <a href="{{ route('contact') }}" class="secondary-button">
                        Nous contacter
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img
                    src="https://images.unsplash.com/photo-1498049794561-7780e7231661?auto=format&fit=crop&w=1100&q=85"
                    alt="Équipements informatiques et accessoires"
                >

                <div class="floating-card">
                    <strong>Votre prochain équipement</strong>
                    Tout pour votre univers numérique
                </div>
            </div>
        </div>
    </section>

    <section class="benefits">
        <div class="container benefit-grid">
            <div class="benefit">
                <div class="benefit-icon">💻</div>
                <div>
                    <strong>Un choix varié</strong>
                    <small>Des équipements pour tous les besoins</small>
                </div>
            </div>

            <div class="benefit">
                <div class="benefit-icon">🛡️</div>
                <div>
                    <strong>Un achat accompagné</strong>
                    <small>Nous sommes là pour vous conseiller</small>
                </div>
            </div>

            <div class="benefit">
                <div class="benefit-icon">⚡</div>
                <div>
                    <strong>Simple et pratique</strong>
                    <small>Découvrez vos produits en quelques clics</small>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading">
                <div>
                    <h2>Explorez notre univers</h2>
                    <p>Le bon équipement pour chaque projet, chaque passion et chaque journée.</p>
                </div>

                <a href="{{ route('espace') }}" class="text-link">
                    Voir la boutique →
                </a>
            </div>

            <div class="category-grid">
                <a href="{{ route('espace') }}" class="category-card">
                    <div class="category-icon">💻</div>
                    <h3>Ordinateurs</h3>
                    <p>Des machines pour étudier, travailler et jouer.</p>
                </a>

                <a href="{{ route('espace') }}" class="category-card">
                    <div class="category-icon">🖥️</div>
                    <h3>Écrans</h3>
                    <p>Un affichage adapté à vos activités quotidiennes.</p>
                </a>

                <a href="{{ route('espace') }}" class="category-card">
                    <div class="category-icon">⌨️</div>
                    <h3>Accessoires</h3>
                    <p>Claviers, souris et indispensables informatiques.</p>
                </a>

                <a href="{{ route('espace') }}" class="category-card">
                    <div class="category-icon">🎧</div>
                    <h3>Audio & gaming</h3>
                    <p>Des accessoires pour une expérience immersive.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="promo">
        <div class="container">
            <div class="promo-box">
                <div>
                    <h2>Prêt à équiper votre espace ?</h2>
                    <p>
                        Parcourez notre boutique et trouvez le matériel
                        informatique qui correspond à vos attentes.
                        Vous avez une question ? Notre équipe est à votre écoute.
                    </p>
                </div>

                <a href="{{ route('espace') }}" class="primary-button">
                    Visiter la boutique →
                </a>
            </div>
        </div>
    </section>

</main>

<footer>
    <div class="container footer-content">
        <div>
            <a href="/" class="logo">InfoTech<span>.</span></a>
            <p>© {{ date('Y') }} InfoTech Store. Tous droits réservés.</p>
        </div>

        <div class="footer-links">
            <a href="/">Accueil</a>
            <a href="{{ route('espace') }}">Produits</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</footer>

</body>
</html>
