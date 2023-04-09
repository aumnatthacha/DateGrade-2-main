<?php
session_start();
?>
<?php
    try {
        echo ""; 
    } catch (DivisionByZeroError $e) {
        echo "Oops I divided by zero!";
    } catch (Exception $e) { //Throwable
        echo $e->getMessage();
    } finally {
        
        ?>
        <script>
          alert("...done!");
        </script>

    <?php
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
        body{
            background-image: url("./img/23.jpg");
            background-size:100%;
        }

    </style>
</head>
<body>
<br><br>
<br><br>
<div align="center">
        <div class="row">
            <div class="col-4">   </div>
            <h5>ชื่อ-สกุล : <br>
            <?php 
                $name = $_POST['name'];
                echo $name ; 
                ?> 
        </h5>
</div>

<br>
    <div align="center">
        <div class="row">
            <div class="col-4">   </div>
            <h5>วันที่ : <br>
            <?php 
                $DR = array(
                    "Sunday" => "วันอาทิตย์",
                    "Monday" => "วันจันทร์",
                    "Tuesday" => "วันอังคาร",
                    "Wednesday" => "วันพุธ",
                    "Thursday" => "วันพฤหัสบดี",
                    "Friday" => "วันศุกร์",
                    "Saturday" => "วันเสาร์",

                );
                $day = $_POST['day'];
                echo $day;
                ?>
                <p><?php echo $DR[date("l", strtotime($day))];?></p>
                
                
               

        </h5>
</div>

    <!--เกรด-->
    <br>
<div align="center">
<h5>
<?php 
$num = $_POST['num'];

if (($num > 100) || ($num < 0)) {
    print "เกรดที่ได้  : ไม่สามารถคิดเกรดได้ คะแนนเกิน" . '<br>' ;
} else if (($num >= 79.5) && ($num <= 100)) {
    print "เกรดที่ได้  : <br> A : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 74.5) && ($num <= 79.4)) {
    print "เกรดที่ได้  : <br> B+ : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 69.5) && ($num <= 74.4)) {
    print "เกรดที่ได้  : <br> B : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 64.5) && ($num <= 69.4)) {
    print "เกรดที่ได้  : <br> C+ : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 59.5) && ($num <= 64.4)) {
    print "เกรดที่ได้  : <br> C : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 54.5) && ($num = 59.4)) {
    print "เกรดที่ได้  : <br> D+ : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if (($num >= 49.5) && ($num <= 54.4)) {
    print "เกรดที่ได้  : <br> D : <font color=\"Yellow\"> ผ่าน" . '<br>';
} else if ($num <= 49.4) {
    print "เกรดที่ได้  : <br> E หรือ F : <br> <font color=\"red\"> ไม่ผ่านจร้าา" . '<br>';
}
?></h5></div>
</body>
</html>