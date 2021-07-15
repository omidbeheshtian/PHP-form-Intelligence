<?php
if(isset($_GET['send'])){
    if ($_GET['mali']=="500m"){
        echo "500mil";
    }
    if ($_GET['mali']=="1mm"){
        echo "zan nimikhay";
    }
    if ($_GET['mali']=="2mm"){
        echo "jooooooooooon";
    }
}
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="GET">
            <div id="mali">
                <input type="radio" id="r1" name="mali" value="500m">500 mil
                <input type="radio" id="r2" name="mali" value="1mm">1 miliard
                <input type="radio" id="r3" name="mali" value="2mm" checked="checked">2 miliard
            </div>
            <input type="submit" value="send" name="send">
        </form>
</body>
</html>