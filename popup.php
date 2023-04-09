<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title></title>
	<!-- สามารถไปดาวน์โหลดมาไว้ใน server ได้เลย -->
    <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
  </head>
  <body>
    <center>
  <!-- นับเวลาถอยหลัง -->
  <h1 style="font-size: 250px;"><span id="seconds">3</span></h1>
  </center>
  
  <!--จะโหลดมาไว้ใน  server  หรือใช้แบบนี้ก็ได้ -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
  
  <script>
      function openColorBox(){
		  //กำหนดขนาดและหน้าเว็บที่จะแสดงใน popup สามารถใส่เป็นภาพก็ได้นะครับ
        $.colorbox({iframe:true, width:"1090px", height:"720px", href: "index.php"});
      }
      
      function countDown(){
        seconds--
        $("#seconds").text(seconds);
        if (seconds === 0){
          openColorBox();
          clearInterval(i);
        }
      }
      //กำหนดเวลา วินาทีที่จะให้ popup ทำงาน 

      var seconds = 3,
          i = setInterval(countDown, 1000);
        
    </script>
    
</body>
</html>