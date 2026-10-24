<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
        }

        nav{
            background:#0d6efd;
            padding:15px 30px;
        }

        nav a{
            color:white;
            text-decoration:none;
            margin-right:20px;
            font-weight:bold;
        }

        nav a:hover{
            color:yellow;
        }

        .container{
            width:500px;
            margin:50px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        label{
            display:block;
            margin-top:15px;
            font-weight:bold;
        }

        input, textarea{
            width:100%;
            padding:10px;
            margin-top:5px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            margin-top:20px;
            width:100%;
            padding:12px;
            border:none;
            background:#0d6efd;
            color:white;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#084298;
        }

        .infos{
            margin-top:20px;
            text-align:center;
            color:#555;
        }

        footer{
            margin-top:30px;
            background:#222;
            color:white;
            text-align:center;
            padding:15px;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Accueil</a>
    <a href="/espace">Produits</a>
    <a href="/contact">Contact</a>
</nav>

<div class="container">

    <h1>Contactez-nous</h1>

    <form>
        <label>Nom</label>
        <input type="text" placeholder="Votre nom">

        <label>Email</label>
        <input type="email" placeholder="Votre adresse email">

        <label>Message</label>
        <textarea rows="5" placeholder="Votre message"></textarea>

        <button type="submit">Envoyer</button>
    </form>

    <div class="infos">
        <p>Email : contact@infotechstore.com</p>
        <p>Téléphone : +212 6 00 00 00 00</p>
        <p>Casablanca - Maroc</p>
    </div>

</div>

<footer>
    © 2026 InfoTech Store
</footer>

</body>
</html>