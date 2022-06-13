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
    <h2>games</h2>
    <ul>
        
        <?php foreach($top50games as $value) : ?>
            <p><?=$value->name?></p>
            <?php endforeach; ?>
       
    </ul>
     
  
</body>
</html>