<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Laravel test projcet</title>
</head>
<body>
    <h1>Detail</h1>
    <h2><?= $movie->name?></h2>

    <p><?=$movie->length?> min</p>
    <p><?=$movie->year?></p>
    <p><?=$movie->votes_nr?></p>
    <p><?=$movie->rating?></p>
    <p><strong>Cast:</strong></p>
    <ul>
    <?php foreach ($cast as $value): ?>
        <li><?=$value->fullname?> as: <?=$value->description ?? "-----------" ?></li>
        <?php endforeach; ?>
     </ul>

         
</body>
</html>