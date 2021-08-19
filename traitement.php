<?php 

if(!isset($_POST['nom'], $_POST['prenom'], $_POST['organisme'], $_POST['telephone'],
$_POST['mail'], $_POST['adresse'], $_POST['cp'], $_POST['ville'], $_POST['plume'],
$_POST['bille'], $_POST['papier'], $_POST['gommes']
)){

}else{
    if(empty($_POST['nom']) or
     empty($_POST['prenom']) or
     empty($_POST['organisme']) or
     empty($_POST['telephone']) or
     empty($_POST['mail']) or
     empty($_POST['adresse']) or
     empty($_POST['cp']) or
     empty($_POST['ville']) or
     empty($_POST['plume']) or
     empty($_POST['bille']) or
     empty($_POST['papier']) or
     empty($_POST['gommes'])){
         header("Location: devis.php");
     }else{
         $plume = 2.95 * $_POST['plume'];
         $bille = .90 * $_POST['bille'];
         $papier = .50 * $_POST['papier'];
         $gomme = .35 * $_POST['gommes'];
         $totalHT = $plume + $bille + $papier + $gomme;
         $TVA = $totalHT * .10;
         $totalTTC = $totalHT + $TVA;
     }

}

?>







<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Le devis</title>
    
</head>
<body>
    <?php include "header.php" ?>
    <h2>Le devis</h2>
    <section>
    <h3>Les coordonnées</h3>
    <div>
        <div>
            <p>
            Librairie en Gros  <br>
            122, rue de Paris <br>
            16000 Angoulême 
            </p>
        </div>
        <div>
            <p>
                <?= htmlspecialchars($_POST['organisme']) ?> 
            </p>
            <p>
            <?= htmlspecialchars($_POST['nom']) ?> <?= htmlspecialchars($_POST['prenom']) ?> 
            </p> 
            <p>
            <?= htmlspecialchars($_POST['adresse']) ?><br>
            <?= htmlspecialchars($_POST['cp']) ?> <?= htmlspecialchars($_POST['ville']) ?>
            </p>
            <p>
            Mail: <?= htmlspecialchars($_POST['mail']) ?><br>
            telephone: <?= htmlspecialchars($_POST['telephone']) ?>
            </p>
        </div>
    </div>
    </section>
    <section>
        <h3>Les arcticles</h3>
        <div class="tableau">
          <table>
              <thead>
                  <th>Articles</th>
                  <th>Prix Unitaire HT (€) </th>
                  <th>Quantité</th>
                  <th>TVA</th>
                  <th>Total HT (€) </th>
              </thead>
              <tr>
                  <td>Stylo à plume</td>
                  <td>2,95</td>
                  <td><?= $_POST['plume'] ?></td>
                  <td>10%</td>
                  <td><?= number_format($plume, 2, ',',' ') ?></td>
              </tr>
              <tr>
                  <td>Stylo à bille</td>
                  <td>0.90</td>
                  <td><?= $_POST['bille'] ?></td>
                  <td>10%</td>
                  <td><?= number_format($bille, 2, ',',' ') ?></td>
              </tr>
              <tr>
                  <td>Crayon à papier</td>
                  <td>0.50</td>
                  <td><?= $_POST['papier'] ?></td>
                  <td>10%</td>
                  <td><?= number_format($papier, 2, ',',' ') ?></td>
              </tr>
              <tr>
                  <td>Gommes</td>
                  <td>0.35</td>
                  <td><?= $_POST['gommes'] ?></td>
                  <td>10%</td>
                  <td><?= number_format($gomme, 2, ',',' ') ?></td>
              </tr>
          </table>
        </div>
        <div>
            <table>
                <tr>
                    <td>Total HT (€)</td>
                    <td><?= number_format($totalHT, 2, ',',' ') ?></td>
                </tr>
                <tr>
                    <td>Total TVA</td>
                    <td><?= number_format($TVA, 2, ',',' ') ?></td>
                </tr>
                <tr>
                    <td>Total TTC (€)</td>
                    <td><?= number_format($totalTTC, 2, ',',' ') ?></td>
                </tr>
            </table>
        </div>
    </section>
    
</body>
</html>