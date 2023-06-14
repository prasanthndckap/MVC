<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<?php foreach ($user as $data ): ?>;


    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <input type="text" name="name" value="<?php echo $data['name'] ?>">
        <input type="email" name="email" value="<?php echo $data['email'] ?>" >
        <input type="text" name="assword" value="<?php echo $data['pass'] ?>" >
        <button type="submit" name="action" value ="edit">Update</button>
    </form>
<?php endforeach ;?>
</body>
</html>
