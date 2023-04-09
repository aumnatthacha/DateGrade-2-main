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
    <div class="container">
        <div class="row">
            <div class="col-4">   </div>
            <div class="col-4 form">
                <br>
                    <h2> แบบฟอร์มวันที่และคำนวณเกรด <i style="font-size:18px"></i></h2>
                    <br>
                    <hr>
                    <form action="dateF01.php" method="POST"> <!--ส่งค่า--->
                    <br>
                    <div class="form-outline">
                      <label class="font-xsmall"for="formGroupExampleInput2">ชื่อ-สกุล</label>
                    <input style type="text" class="form-control" id="formGroupExampleInput2" name="name">
                    </div>
                    <br>
                  <body>
                    <label for="day">กรุณาใส่วันที่ เช่น 2023/4/9 ค.ศ./เดือน/วัน/</label>
                    <input type="text" name="day" class="form-control">
                  </body>

                <br>
                <div class="form-group" >
                    <label class=""for="formGroupExampleInput2">ใส่คะแนนเพื่อคำนวณเกรด</label>
                    <input style type="text" class="form-control" id="formGroupExampleInput2" name="num" size="20" maxlength="100" >
                </div>
                <tr>
                <td width="171"><div align="right">คะแนน   : </div></td></tr>
                <br>
                 <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary btn-sm">คำนวณ</button>
                </div>
                <br>
                </form>
            </div>
            <div class="col-4">   </div>
        </div>
    </div>
</body>
</html>
