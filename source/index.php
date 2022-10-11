<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAWD_2201</title>
</head>
<body>
    <?php
        $tx = 0 or null 
        $sx = 5;
        if ($tx == null) {
            echo "@var tx is null";
          } elseif ($tx == 0) {
                echo "@var tx is 0";
          } elseif ($tx > $sx) {
                echo "@var tx is getter then @var sx";
          } elseif ($tx < $sx) {
                echo "@var tx is less then @var sx";
          } elseif ($tx == $sx) {
                echo "@var tx is less then @var sx";
          } else {
                echo "Invalid Result"
          }
    ?>
</body>
</html>