<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  'root',
  'capston'); // 데이터베이스 이름

$sql = "SELECT * FROM topin";
$result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>Hoseo University</h1>
    <h3> 당신의 학번, 이름, 체온을 입력하세요. </h3>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="stNUM" placeholder="학번 (ex)20161712"></p>
      <p><input type="text" name="name" placeholder="이름 (ex)홍길동"></p>
      <p><input type="text" name="temperature" placeholder="체온 (ex)36.5"></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
