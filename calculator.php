<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
    <link rel="stylesheet" href="cudi.css">
</head>
<body>
    <div class="body-1">
        <div class="body-2">
            <div class="body-3">

                <div class="bodyb">
                    <?php

                    $x = (int)$_POST ["number-1"];
                    $y = (int)$_POST ["number-2"];
                    $z = $_POST ["action"];
                   
                    if($z == "+"){
                        echo ("შედეგია: " . $x + $y);
                    }
                    if($z == "-"){
                        echo ("შედეგია: " . $x - $y);
                    }
                    if($z == "/"){
                        echo ("შედეგია: " . $x / $y);
                    }
                    if($z == "*"){
                        echo ("შედეგია: " . $x * $y);
                    }
                    
                
            
                    ?>
            
                </div>
                
            </div>

        </div>
    </div>
    
</body>
</html>



