<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/search" method="get">
        <input type="text" name="search">
        <input type="submit" value="Search">

        
    </form>

    <?php foreach ($result as $value): ?>
        <p><?=$value->name?></p>
        <?php endforeach; ?>
</body>
</html>