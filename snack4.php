<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $numbers = [];
        
        for ($i=0; count($numbers) < 15 ; $i++) { 
            $randNumbers = rand(1, 50);
            if (!in_array($randNumbers, $numbers)){
                $numbers[] = $randNumbers;
            }
        }
        var_dump($numbers);
    ?>
</body>
</html>