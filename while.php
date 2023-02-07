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
    <script>
    var i=1
    while (i<=11){
        for(var a = 0; a < 5; a++){
        for(var j = 0; j < 10; j++){
            if(a%2==0){
                document.write("<div class='xanh'></div>");
            }else{
                document.write("<div class='do'></div>");
            }
        }
        document.write("<div style='clear:both'></div>");
    };
    i++
    }
    </script>
</body>
</html>