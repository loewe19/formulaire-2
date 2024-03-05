<!DOCTYPE html>
    <html>
        <head>          
            <meta charset="UTF-8">
            <title> inscription</title>
            <link rel="stylesheet" href="chat.css">
        </head>
        <body>
            <style>
                body {
                  background-color: pink;
                }
              </style>
     <h1><p style="color: darkcyan;" p class="centered-text">inscription</p> </h1>
     <form action="fichier.php" method="post">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" required><br>
    <label for="prenom">prenom:</label><br>
    <input type="text" id="prenom" name="prenom" required><br>
    <label for="date de naissance">date de naissance</label><br>
    <input type="int" name="datedenaissance"  required><br>
    <label for="numero de telephone">numero de telephone</label><br>
    <input type="int" name="numero de telephone"  required><br>
    <label for="email">Email:</label><br>
    <input type="varchar" id="email" name="email" required><br>
    <label for="pwd">Mot de passe:</label><br>
    <input type="varchar" id="pwd" name="pwd" required><br>
    <label for="pwd-confirm">Confirmer le mot de passe:</label><br>
    <input type="password" id="pwd-confirm" name="pwd-confirm" required><br>
    <input type="submit" value="S'inscrire">
  </form>

        </body>
    </html>