<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my Laravel test projcet</title>
</head>
<body>
    <h1>TOP 50</h1>
    <h2>movies</h2>
    <ul>
        
        <?php foreach($top50 as $value) : ?>
            <p><?=$value->name?></p>
            <?php endforeach; ?>
       
    </ul>
    <ul>
        <!-- creates property what didnt exist via __get() -->
        <?php foreach($movies->genre as $value) : ?>  
            <p><?=$value->Genre->name?></p>
            <?php endforeach; ?>
       
    </ul>
            
</body>
</html>