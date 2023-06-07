<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>

<body>
    <h2>Liste des Stagiaires</h2>
    <table border="1">
        <thead>
            <tr>
                <td>First name</td>
                <td>Last name</td>
                <td>Old</td>
                <td>Groupe</td>
                <td>Action</td>

            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($result as $ligne)
                 echo "<tr><td>" . $ligne["fn"] . "</td><td>" . $ligne["ln"] . "</td><td>" . $ligne["old"] . "</td><td>" . $ligne["groupe"] .
                 "</td><td><a href='controller.php?cmd=delete&id=".$ligne["id"]."'>supprimer </a><a href='controller.php?cmd=update&id=".$ligne["id"]."'> update</a></td></tr>";
            ?>
        </tbody>
    </table>
    <a href="../index.php">Accueil</a>

</body>

</html>