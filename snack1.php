<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <?php
    
    $partite = [
        [
            "home" => "Fortitudo Basket",
            "pointHome" => "90",
            "visitor" => "Virtus Basket",
            "pointVisitor" => "7",
            
        ],
        [
            "home" => "Fortitudo Basket",
            "pointHome" => "105",
            "visitor" => "CasalPusterlengo",
            "pointVisitor" => "75",
            
        ],
        [
            "home" => "Fortitudo Basket",
            "pointHome" => "80",
            "visitor" => "wow basket",
            "pointVisitor" => "30",
            
        ],
        [
            "home" => "Fortitudo Basket",
            "pointHome" => "95",
            "visitor" => "Mamma mia",
            "pointVisitor" => "66",
            
        ]
        ];
        var_dump(count($partite));
    ?>

    <div>
        <?php
        
         for($i = 0; $i < count($partite); $i++){
             echo $partite[$i]["home"] . "-" . $partite[$i]["visitor"] . "|" . $partite[$i]["pointHome"] . "-" . $partite[$i]["pointVisitor"] . "<br>";
         }
        ?>
    </div>
</body>
</html>