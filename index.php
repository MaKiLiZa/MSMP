<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизація</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="vendor/signin.php" method='post'>
        <label>Login</label>
        <input type="text" name='login' placeholder='Введіть свій логін'>
        <label>Пароль</label>
        <input type="password" name='password' placeholder='Введіть свій пароль'>
        <button type='submit'>Увійти</button>
        <p>
            У вас немає аккаунту? - <a href="register.php">зареєструйтесь</a>!
        </p>
        <?php
            if($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSOIN['message']);
        ?>
    </form>
</body>
</html>