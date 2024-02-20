<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["acheter"])) {
    // Récupérer les données du formulaire
    $produit_id = $_POST["produit_id"];
    $quantite = $_POST["quantite"];
    
    // Effectuer le traitement d'achat ici (par exemple, enregistrer dans une base de données)
    
    // Rediriger l'utilisateur vers une page de confirmation ou autre
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site d'Achat</title>
</head>
<body>

<h1>Produit à acheter</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <!-- Informations du produit -->
    <input type="hidden" name="produit_id" value="1">
    
    <!-- Quantité à acheter -->
    <label for="quantite">Quantité :</label>
    <input type="number" name="quantite" id="quantite" min="1" value="1" required>
    
    <!-- Bouton Acheter -->
    <button type="submit" name="acheter">Acheter</button>
</form>

</body>
