<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomer 4</title>
</head>
<body>
<?php
function piramidalala($n){//function
    for ($i=$n;$i>=1;$i--){
        for ($j=1;$j<=$i;$j++){
            echo ("*");
        }
        echo ("<br>");
    }
    for ($i=1;$i<=$n;$i++){
        for ($j=0;$j<=$i;$j++){
            echo ("*");
        }
        echo ("<br>");
    }
}
piramidalala(5);//call piramid
?>
</body>
</html>



