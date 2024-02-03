<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count</title>
    <link rel="stylesheet" href="cudi.css">
</head>
<body>
    <div class="body-6">

        <div class="body-1">
            <div class="body-2">
                <div class="body-5">
                <?php
                
                $i = 1;
                
                while($i <= 100){
    
                    
                    if($i <= 50){
                        echo "<p  class = 'pirveli'> $i პირველი ნახევარი. <br> </p>";
                    } if($i > 50){ 
                        echo "<p  class = 'meore'> $i მეორე ნახევარი. <br> </p>";
                    }
                    
                    $i++;
                }
                
                
                
                
                
                
                ?>
                    
    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>