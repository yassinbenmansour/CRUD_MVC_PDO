<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>create student</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>

<body>

        <h2>add student</h2>

        <form action="../controller/controller.php?cmd=create" method="post">
                First name : <input type="text" name="fn">
                Last name : <input type="text" name="ln">
                Old : <input type="number" name="old">
                <select name="grp">
                        <?php
                        foreach ($result as $grp) {
                        ?>
                                <option value="<?php echo $grp['groupe']?>"><?php echo $grp['groupe']?></option>
                        <?php
                        }
                        ?>
                </select>
                <input type="submit" value="add">
        </form>

</body>

</html>