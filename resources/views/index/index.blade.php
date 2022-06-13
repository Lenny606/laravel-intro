<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Laravel test projcet</title>
</head>
<body>
    <h1>HELLLOOOOOO</h1>
    <h2>how are you????</h2>
    <ul>
        <li>
            <a href="#">|Stay</a>
        </li>
        <?php foreach($things_to_do as $value) : ?>
            <p><?=$value?></p>
            <?php endforeach; ?>
        <li>
            <a href="#">GO</a>
        </li>
    </ul>
     
    <?php foreach($results as $value) : ?>
            <p><?=$value->name?></p>
            <?php endforeach; ?>
</body>
</html>