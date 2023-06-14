
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
    <th rowspan>id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>

</tr>

<?php foreach ($getUserdata as $userdata => $user) : ?>

    <tr>
        <td><?php echo $userdata+1 ?></td>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->pass ?></td>
        <td>
            <form action = "index.php" method="post">
                <input type="hidden" name="delete" value ="<?php echo $user->id ?>">
            <button type="submit" name="action" value="delete">delete</button>
            </form>

        <form action = "index.php" method="post">
                <input type="hidden" name="view" value ="<?php echo $user->id ?>">
                <button type="submit" name="action" value="view">edit</button>
            </form>
        </td>

    </tr>





<!--    <form action="index.php" method="post">-->
<!--        <input type="hidden" name="id" value="--><?php //echo $user->id?><!--">-->
<!--        <input type="text" name="User_Name" value="--><?php //echo $user->name?><!--">-->
<!--        <input type="email" name="User_Email" value="--><?php //echo $user->email?><!--">-->
<!--        <input type="text" name="Password" value="--><?php //echo $user->pass?><!--">-->
<!---->
<!--        <button type="submit" name="action"  value="edit">edit</button>-->
<!--    </form>-->

    <?php endforeach;?>

</table>
<!--<form action = "index.php" method="post" >-->
<!--    <input type = "hidden" name = "id">-->
<!--    <input type = "text" name = "name">-->
<!--    <input type = "email" name = "edit">-->
<!--    <input type = "text" name = "Delete">-->
<!--</form>-->

</body>
</html>