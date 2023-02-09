<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sell.css">
    <title>Sell</title>
    <style>
        .container {
            margin-left: 250px;
            background: yellowgreen;
            width: 230px;
        }
        .submit {
            margin-left: 70px;
        }

        .center {
            margin-left: 250px;
            background-color: khaki;
            width: 230px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            Tính tiền
        </div><br>
        <form action="sell.php" method="post">
            <label for="">Loại phòng</label>
            <select name="Room" id="">
                <option value="A" name="">A</option>
                <option value="B" name="">B</option>
                <option value="C" name="">C</option>
            </select><br><br>
            <label for="">Check in</label>
            <input type="date" name="check_in"><br><br>
            <label for="">Check out</label>
            <input type="date" name="check_out"><br><br>
            <label for="">Tiền ăn</label>
            <input type="number" name="tien_an"><br><br>
            <label for="">Dịch vụ: </label><br><br>
            <input type="checkbox" name="giat_la" value="Giặt là">Giặt là <br>
            <input type="checkbox" name="an_sang" value="Ăn sáng">Ăn sáng <br>
            <input type="checkbox" name="tam_hoi" value="Tắm hơi">Tắm hơi<br><br>
            <div class="button">
                <input type="submit" value="Xong" name="submit" class="submit">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $Type_Room = $_POST['Room'];
        switch ($Type_Room) {
            case 'A':
                $Type = "A";
                $A = 1000;
                break;
            case 'B':
                $Type = "B";
                $A = 800;
                break;
            case 'C':
                $Type = "C";
                $A = 500;
                break;
            default:
                # code...
                break;
        }
        $Rental_in = $_POST['check_in'] . date("");
        $ngay_dat = str_replace("-", "", $Rental_in);

        $Rental_out = $_POST['check_out'] . date("");
        $ngay_ve = str_replace("-", "", $Rental_out);

        $Tong_ngay = $ngay_ve - $ngay_dat;

        $Meals = $_POST['tien_an'];

        if (isset($_POST['giat_la'])) {
            $Services = $_POST['giat_la'];
            $G = 30;
        } else {
            $G = 0;
        }

        if (isset($_POST['an_sang'])) {
            $Services = $_POST['an_sang'];
            $S = 500;
        } else {
            $S = 0;
        }

        if (isset($_POST['tam_hoi'])) {
            $Services = $_POST['tam_hoi'];
            $T = 200;
        } else {
            $T = 0;
        }
        $sumary = $G + $S + $T;
        $Tong_thanh_toan = ($A * $Tong_ngay) + $Meals + $sumary;
        echo "<div class='center'> Bill <br>
            Type room: $Type <br>
            Money for meal: $Meals VND <br>
            Money for services:  $sumary VND <br>
            Total: $Tong_thanh_toan
        </div> ";
    }

    ?>
</body>

</html>