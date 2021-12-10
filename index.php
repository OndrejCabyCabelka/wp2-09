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
    function getPES ($PocetNAkazenych = rand (1,9999999999)){
        

        if ($PocetNakazenych <= 10000) {
                echo 1;
        }
            elseif ($PocetNakazenych <=50000) {
                echo 2;
            }
            elseif ($PocetNakazenych <=100000)) {
                echo 3;
            }
            elseif ($PocetNakazenych <200000) {
                echo 4;
            }
            else {
                
            }   
    }

    

    
    ?>
</body>
</html>