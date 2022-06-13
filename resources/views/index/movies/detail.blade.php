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
    <h2><?= $shawshank[0]->name?></h2>

    <p><?=$shawshank[0]->length?> min</p>
    <p><?=$shawshank[0]->year?></p>
    <p><?=$shawshank[0]->votes_nr?></p>
    <p><?=$shawshank[0]->rating?></p>
    <p><strong>Characters:</strong></p>
    <ul>
    <?php foreach ($shawshank as $value): ?>
        <li><?=$value->description?></li>
        <?php endforeach; ?>
     </ul>

    
    
  
     
  
</body>
</html>