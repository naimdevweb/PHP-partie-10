
<?php



// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     header('location: ./index.php');
//     return;
// }



if (
    isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['datenaissance'],
        $_POST['pays_naissance'],
        $_POST['nationalite'],
        $_POST['adresse'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['diplome'],
        $_POST['numero_pole_emploi'],
        $_POST['nombre_badge'],
        $_POST['codecademy_links'],
        $_POST['superhero'],
        $_POST['hack'],
        $_POST['experience']
    )
) {
    // input sanitization
$firstName = htmlspecialchars(trim($_POST['nom']));
$lastName = htmlspecialchars(trim($_POST['prenom']));
$datenaissance = htmlspecialchars(trim($_POST['datenaissance']));
$pays = htmlspecialchars(trim($_POST['pays_naissance']));
$nationalite = htmlspecialchars(trim($_POST['nationalite']));
$adresse = htmlspecialchars(trim($_POST['adresse']));
$mail = htmlspecialchars(trim($_POST['email']));
$tel = htmlspecialchars(trim($_POST['telephone']));
$diplome = htmlspecialchars(trim($_POST['diplome']));
$numpoleemploi = htmlspecialchars(trim($_POST['numero_pole_emploi']));
$badge = htmlspecialchars(trim($_POST['nombre_badge']));
$codecademy = htmlspecialchars(trim($_POST['codecademy_links']));
$hero = htmlspecialchars(trim($_POST['superhero']));
$hack = htmlspecialchars(trim($_POST['hack']));
$experience = htmlspecialchars(trim($_POST['experience']));

}



if (
    empty($_POST['nom']) ||
    empty($_POST['prenom']) ||
    empty($_POST['datenaissance']) ||
    empty($_POST['pays_naissance']) ||
    empty($_POST['nationalite']) ||
    empty($_POST['adresse']) ||
    empty($_POST['email']) ||
    empty($_POST['telephone']) ||
    empty($_POST['diplome']) ||
    empty($_POST['numero_pole_emploi']) ||
    empty($_POST['nombre_badge']) ||
    empty($_POST['codecademy_links']) ||
    empty($_POST['superhero']) ||
    empty($_POST['hack']) ||
    empty($_POST['experience'])
) {   
}




// a remplir en fonction de vos prerequis






?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement d'un futur apprenant</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 60%;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input, select, textarea {
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>

<body>
<?php
if (
    isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['datenaissance'],
        $_POST['pays_naissance'],
        $_POST['nationalite'],
        $_POST['adresse'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['diplome'],
        $_POST['numero_pole_emploi'],
        $_POST['nombre_badge'],
        $_POST['codecademy_links'],
        $_POST['superhero'],
        $_POST['hack'],
        $_POST['experience']
    )
) {
    
    echo $_POST['nom' ]. "<br>";
    echo $_POST['prenom' ]. "<br>";
    echo $_POST['datenaissance' ] . "<br>";
    echo $_POST['pays_naissance' ]. "<br>";
    echo $_POST['nationalite' ]. "<br>";
    echo $_POST['adresse' ] . "<br>";
    echo $_POST['email' ]. "<br>";
    echo $_POST['telephone' ]. "<br>";
    echo $_POST['diplome' ] . "<br>";
    echo $_POST['numero_pole_emploi' ]. "<br>";
    echo $_POST['nombre_badge' ]. "<br>";
    echo $_POST['codecademy_links' ] . "<br>";
    echo $_POST['superhero' ]. "<br>";
    echo $_POST['hack' ]. "<br>";
    echo $_POST['experience' ] . "<br>";
}else{


?>
    <div class="container">
        <h1>Formulaire d'enregistrement</h1>
        <form action="./index.php" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance :</label>
                <input type="date" id="date_naissance" name="datenaissance" required>
            </div>
            <div class="form-group">
                <label for="pays_naissance">Pays de naissance :</label>
                <input type="text" id="pays_naissance" name="pays_naissance" required>
            </div>
            <div class="form-group">
                <label for="nationalite">Nationalité :</label>
                <input type="text" id="nationalite" name="nationalite" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="diplome">Diplôme :</label>
                <select id="diplome" name="diplome" required>
                    <option value="sans">Sans</option>
                    <option value="bac">Bac</option>
                    <option value="bac2">Bac+2</option>
                    <option value="bac3">Bac+3</option>
                    <option value="superieur">Bac+3 ou supérieur</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero_pole_emploi">Numéro Pôle Emploi :</label>
                <input type="text" id="numero_pole_emploi" name="numero_pole_emploi">
            </div>
            <div class="form-group">
                <label for="nombre_badge">Nombre de badges :</label>
                <input type="number" id="nombre_badge" name="nombre_badge" required>
            </div>
            <div class="form-group">
                <label for="codecademy_links">Liens Codecademy :</label>
                <input type="url" id="codecademy_links" name="codecademy_links">
            </div>
            <div class="form-group">
                <label for="superhero">Si vous étiez un super héros / une super héroïne, qui seriez-vous et pourquoi ?</label>
                <textarea id="superhero" name="superhero" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="hack">Racontez-nous un de vos "hacks" (pas nécessairement technique ou informatique) :</label>
                <textarea id="hack" name="hack" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Avez-vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                <textarea id="experience" name="experience" rows="4" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
<?php
}
?>
</body>
</html>
