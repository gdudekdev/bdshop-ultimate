<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Page de détail</title>
</head>

<body>
      <h1>Détail du produit</h1>
      <a href="/index.php?page=home">Retour à l'accueil</a>
      <a href="/index.php?page=listing">Retour à la page de listing</a>
      <table>

            <tr>
                  <?php $item = new \App\Entity\Product($product);
                  var_dump($item); ?>
            </tr>
      </table>
</body>

</html>