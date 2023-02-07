<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./for.css">
</head>
<body>

<?php
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=5;$j++){
            if($i%2==0){
                echo "<div class='xanh'></div>";
            }else{
                echo "<div class='do'></div> ";
            }
        }
        echo "<div style='clear:both'></div>";
    }
?>

<style>
    .square{
        height:20px;
        width:20px;
        float:left;
        border:1px solid gray;
        margin-left:5px;
        margin-bottom:5px;
        background: blue;
    }
    .square1{
        height:20px;
        width:20px;
        float:left;
        border:1px solid gray;
        margin-left:5px;
        margin-bottom:5px;
        background: red;
    }
</style>

<script>
    for(var i = 0; i < 5; i++){
        for(var j = 0; j < 10; j++){
            if(i%2==0){
                document.write("<div class='square'></div>");
            }else{
                document.write("<div class='square1'></div>");
            }
        }
        document.write("<div style='clear:both'></div>");
    };


 
</script>


</body>
</html>
