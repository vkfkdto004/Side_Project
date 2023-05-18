<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>예제 회원가입</title>
    </head>
    
    <body>
        <form method="post" action="./signup_action.php">
            <label>이름 <input type="text" name='name'> </label><br>
            <label>이메일 <input type="email" name='email'> </label><br>
            <label>학번 <input type="number" name='num'> </label><br>
            <input type="submit" value='가입하기'>
        </form>
    </body>
</html>
