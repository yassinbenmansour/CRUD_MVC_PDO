<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>update student</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

</head>

<body>

        <h2>add student</h2>

        <form action="../controller/controller.php?cmd=create" method="post">
                First name : <input type="text" name="fn" value="<?php echo $grp['fn']?>">
                Last name : <input type="text" name="ln" value="<?php echo $grp['ln']?>">
                Old : <input type="number" name="old" value="<?php echo $grp['old']?>">
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