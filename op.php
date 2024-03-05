<doctype html>
<html>
    <head>
        <title> formulaire de connexion </title>
        
        <link rel="stylesheet" href="loewe.css"/>
    </head>
    <body> 
        <p>
    <img src="facebook_cover_photo_2.png" alt="Logo de votre entreprise" />
    <p style="color: #70a9ff;">LIVRAISON DE GAZ</p>
</p>
    <form action="connexion.php" method="post">
        <p>
        Nom d'utilisateur: <input type="text" name="nom"  required />
        <br />
</p>
<p>
        motdepasse: <input type="varchar" name="motdepasse"  required />
        <br/>
</p>
        <input type="submit" name="submit" value="Se connecter" />
    </form>
            <a href="s'inscrire.php"> <p style="color: #70a9ff;">s'inscrire</p></a>

    </body>
    </html>