<?php $name=$_POST['name'];
$email=$_POST['email'];
$num=$_POST['num'];
$con = mysqli_connect("localhost","root","2021","hi") or die ("Can't access DB");
$query = "insert into exam (name,email,num) values('".$name."','".$email."','".$num."')";
$resut=mysqli_query($con,$query);
if(!$result) 
{?>
    <script> alert('회원가입이 완료되었습니다.'); location.href=".."; </script> 
<?php
} else {?>
    <script> alert('회원가입에 실패했습니다.\n다시 시도해 주세요.'); location.href=".."; </script>
<?php } ?>
