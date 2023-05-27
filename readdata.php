<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>read data</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">

</head>
<body>
<h2>Liste des Stagiaires</h2>
<table>
        <thead>
                <tr>
                        <td>id</td>
                        <td>nom</td>
                        <td>prenom</td>
                        <td>age</td>
                </tr>
        </thead>
        <tbody>
                <?php
                        foreach($students as $s){
                ?>
        <tr>
                        <td><?= $s['id'] ?></td>
                        <td><?= $s['fn'] ?></td>
                        <td><?= $s['ln'] ?></td>
                        <td><?= $s['old'] ?></td>
                </tr>
                <?php 
                        }
                ?>
        </tbody>
</table>
</body>
</html>