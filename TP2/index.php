<?php
if (
    isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['age'],
        $_POST['societe'],
        $_POST['civilite'],
       
    )
) {
    // input sanitization
$firstName = htmlspecialchars(trim($_POST['nom']));
$lastName = htmlspecialchars(trim($_POST['prenom']));
$age = htmlspecialchars(trim($_POST['age']));
$societe = htmlspecialchars(trim($_POST['societe']));
$civilite = htmlspecialchars(trim($_POST['civilite']));


}



if (
    empty($_POST['nom']) ||
    empty($_POST['prenom']) ||
    empty($_POST['age']) ||
    empty($_POST['societe']) ||
    empty($_POST['civilite']) 
   
) {   
}











?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'enregistrement</title>
    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
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

        input, select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
        .test{
            text-align: center;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Formulaire d'enregistrement</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="civilite">Civilité :</label>
                <select id="civilite" name="civilite" required value="<?php if(isset($civilite)){ echo $civilite; } ?>">
                    <option value="monsieur">Monsieur</option>
                    <option value="madame">Madame</option>
                    <option value="autre">Autre</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required value="<?php if(isset($firstName)){ echo $firstName; } ?>">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required value="<?php if(isset($lastName)){ echo $lastName; } ?>">
            </div>

            <div class="form-group">
                <label for="age">Âge :</label>
                <input type="number" id="age" name="age" min="0" required value="<?php if(isset($age)){ echo $age; } ?>">
            </div>

            <div class="form-group">
                <label for="societe">Société :</label>
                <input type="text" id="societe" name="societe" required value="<?php if(isset($societe)){ echo $societe; } ?>">
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>
    <div class="test">
<?php
if (
    isset(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['age'],
        $_POST['societe'],
        $_POST['civilite'],
       
    )
){
    echo $_POST['nom' ]. "<br>";
    echo $_POST['prenom' ]. "<br>";
    echo $_POST['age' ] . "<br>";
    echo $_POST['societe' ]. "<br>";
    echo $_POST['civilite' ]. "<br>";
}
?>
</div>
</body>
</html>
