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
    <form action="./controller.php?cmd=create" method="post">
        First name : <input type="text" name="fn" />
        Last name : <input type="text" name="ln"/>
        Old : <input type="text" name="old"/>
        Groupe : 
        <select name="grp">
        <?php
        foreach($groupes as $gr)
        {
            echo "<option>".$gr[0]."</option>";
        }
        ?>
        </select>
        <br>
        <input type="submit" value="enregistre" name="submit">
    </form>
</body>
</html>