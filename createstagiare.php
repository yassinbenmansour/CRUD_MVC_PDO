<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulaire d'ajoute</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">

</head>
<body>
        <form action="./contrllerB.php" method="post">
                fn : <input type="text" name="fn" >
                ln : <input type="text" name="ln" >
                old : <input type="text" name="old" >

                <input type="submit" value="send" name="submit">
        </form>
</body>
</html>