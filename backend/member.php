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
            width: 10%;
        }

        tr {
            width: 20%;
        }
    </style>
</head>

<body>

    <table class='table m-auto w-auto'>
        <form method="post" action="../api/del_member.php">
            <tr>
                <td>編號</td>
                <td>帳號</td>
                <td>密碼</td>
                <td>信箱</td>
                <td>姓名</td>
                <td>性別</td>
                <td>生日</td>
                <td></td>
            </tr>
            <?php
            $users = all('users');
            foreach ($users as $keys => $value) {
            ?>
                <tr>
                    <td><?= $value['id']; ?></td>
                    <td><?= $value['account']; ?></td>
                    <td><?= $value['password']; ?></td>
                    <td><?= $value['email']; ?></td>
                    <td><?= $value['name']; ?></td>
                    <td><?= $value['gender']; ?></td>
                    <td><?= $value['birthday']; ?></td>
                    <td><a class='btn btn-danger' href="../api/del_member.php?id=<?= $value['id']; ?>">刪除</a></td>
                    
                </tr>
            <?php
            }
            ?>
        </form>

        <form action="../api/new_member.php" method="post" id="regForm">

            <tr>
                <td></td>
                <td><input type="text" name="account"></td>
                <td><input type="password" name="password"></td>
                <td><input type="text" name="email"></td>
                <td><input type="text" name="name"></td>
                <td><input type="date" name="birthday"></td>
                <td><input type="text" name="gender"></td>
                <td class='text-center'><input type="submit" value="確認送出"> </td>
            </tr>
    </table>
    
    </form>
    </table>
</body>

</html>