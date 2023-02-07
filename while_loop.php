<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <div class="space"></div>
    <?php
    $kq="<br>";
    $i=0;
    while($i<=4){
        $a=0;
        while($a<=4){
            if($i%2==0){
                $kq+="<div style='background:red;width:30px;height:30px; display: inline-block;margin:10px;'></div>";
            }
            else{
                $kq+="<div style='background:green;width:30px;height:30px; display: inline-block;margin:10px;'></div>";
            }
            $a++;
        };
        $kq+="<br>";
        $i++;
    }
    ?>
    <script>
        document.getElementById('space').innerHTML="<?php echo $kq;?>";
    </script>
</body>
</html>