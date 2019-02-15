<? session_start() ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Bancomat Alpha Bank</title>
    </head>
    <body>
    <!--считывание целочисельной переменной-->
    <div class = "form">
    <form method="post" action="result.php" >
        <div class="welcome"><lable align="center">Thank you for using Alpha Bank!</lable></div>
        <div class="lable"><lable>Введите сумму которую Вы хотите <br></lable></div>
        <div class="lable-text"><lable>(максимальная сумма 5000)</lable><br></div>
        <div class="summa"><input type="text" name="value" class="text"><br></div>
        <div class="btn"><button type="submit" name="done" class="btn-btn">Снять</button></div>
    </form>
    </div>

    <?
    $number = $_POST['value'];
    $_SESSION['value'] = $_POST['value'];
    ?>

    <style>
        body{
            background: lightgray;
        }
        .form{
            height: 370px;
            width: 480px;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            background-image: url("https://images.designtrends.com/wp-content/uploads/2015/11/13154755/Dark-Grey-Backgrounds.jpg");
            box-shadow: 10px 10px 10px rgba(0,0,0,0.5);
            border-radius: 12px ;
        }
        .welcome{
            display: flex;
            justify-content: center;
            margin-top: 50px;
            font-size: 45px;
            color: white;
            font-family: 'Titillium Web', sans-serif;
            font-weight: bold;
        }
        .lable{
            display: flex;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
            margin-top: 15px;
            font-family: 'Titillium Web', sans-serif;
        }
        .lable-text{
            display: flex;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 16px;
            font-family: 'Titillium Web', sans-serif;
        }
        .summa{
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }
        .summa input{
            height: 35px;
            width: 150px;
        }
        .text{
            font-size: 20px;
        }
        .btn{
            display: flex;
            justify-content: center;
            margin-top: 30px;
            height: 40px;
        }
        .btn-btn{
            width: 100px;
            font-family: 'Titillium Web', sans-serif;
            font-size: 20px;
            font-weight: bold;

        }

    </style>
    </body>


