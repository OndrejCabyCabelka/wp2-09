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
    function getPES ( int $PocetNakazenych){
        

        if (($PocetNakazenych > 0) && ($PocetNakazenych <= 10000)) {
                return "PES 1";
        }
            elseif (($PocetNakazenych > 10001) && ($PocetNakazenych <=50000)) {
                return "PES 2 ";
            }


            elseif   (($PocetNakazenych > 50001) && ($PocetNakazenych <=100000)) {
                return "PES 3";
            }
            elseif (($PocetNakazenych > 1000001) && ($PocetNakazenych <200000)) {
                return "PES 4 ";
            }
            elseif ($PocetNakazenych > 200001 ) {
                return "PES 5";
            }
                
    }

    echo getPES (rand (1,313131));

   

    
    ?>
</body>
</html>