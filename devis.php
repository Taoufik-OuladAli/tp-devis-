<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>Demmande de devis</title>
</head>
<?php require 'header.php'; ?>

<body>
    <div class="demande" >
        <h2>Demande le devis</h2>
        <div>
            <p>
                Librairie en Gros <br>
                122, rue de Paris <br>
                16000 Angoulême
            </p>
        </div>
    </div>
    <form action="traitement.php" method="post">
        <div class="informations">
            <div>
                <div>
                    <label for="organisme">Organisme</label>
                    <input type="text" name="organisme" id="organisme">
                </div>
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="prenom"> Prénom</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div>
                    <label for="telephone">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone">
                </div>
            </div>
            <div>
                <div>
                    <label for="mail">Mail</label>
                    <input type="email" name="mail" id="mail">
                </div>
                <div>
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" id="adresse">
                </div>
                <div>
                    <label for="cp">Code Postale</label>
                    <input type="text" name="cp" id="cp">
                </div>
                <div>
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" id="ville">
                </div>
            </div>                                                                                               
        </div>

        <div class="produits">
            <div>

                <label for="produit">Stylo à plume (prix unitaire HT 2,95€) </label>
                <input type="number" name="plume" id="plume" min="0" max="500">

            </div>
            <div>

                <label for="produit">Stylo à bille (prix unitaire HT 0.90€)</label>
                <input type="number" name="bille" id="bille" min="0" max="500">

            </div>
            <div>

                <label for="produit">Crayon à papier (prix unitaire HT 0.50€)</label>
                <input type="number" name="papier" id="papier" min="0" max="500">

            </div>
            <div>

                <label for="produit">Gomme (prix unitaire HT 0.35€)</label>
                <input type="number" name="gommes" id="gommes" min="0" max="500">

            </div>
            <div class="bouton">
                <button type="submit">Envoyer</button>
            </div>
        </div>
    </form>
    

</body>

</html>