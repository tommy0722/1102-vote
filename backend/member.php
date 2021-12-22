<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員管理</title>
    <style>
        table tr td {
            border: black solid 1px;
            width: 60%;
        }

        tr {
            width: 50%;
        }
    </style>
</head>

<body>
    <table>
        <tr>帳號</tr>
        <tr>密碼</tr>
        <tr>信箱</tr>
        <tr>姓名</tr>
        <tr>性別</tr>
        <tr>生日</tr>
    </table>
    <?php
    $name = all('users');
    echo ($name['password']);
    ?>
</body>

</html>