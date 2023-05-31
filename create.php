<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>
<body>
    <h2>Add Student</h2>
    <form action="" method="post">
        First name : <input type="text" name="cin" required/><br>
        Last name : <input type="text" name="nom"/><br>
        Old : <input type="text" name="moyenne"/><br>
        Groupe : 
        <select name="groupe">
        <?php
        foreach($groupes as $gr)
        {
            echo "<option>".$gr[0]."</option>";
        }
        ?>
        </select>
        <br>
    </form>
</body>
</html>