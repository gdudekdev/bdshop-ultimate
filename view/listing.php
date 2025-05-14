<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Page de listing</title>
</head>

<body>
      <h1>Liste des produits</h1>
      <a href="/index.php?page=home">Retour à l'accueil</a>
      <a href="/index.php?page=detail">Lien de detail</a>
      <table>


            <?php foreach ($products as $product): ?>
                  <tr>
                        <td><a href="index.php?page=detail&id=<?= $product['product_id'] ?>">Détail</a></td>
                        <?php foreach ($product as $key => $value): ?>
                              <td><?= $value ?> </td>
                        <?php endforeach; ?>
                  </tr>
            <?php endforeach; ?>
      </table>
</body>

</html>