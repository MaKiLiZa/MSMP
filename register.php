<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="vendor/signup.php" class='form' method="POST" enctype='multipart/form-data'>
    <label>Ім'я Прізвище</label>
    <input type="text" name='full_name' placeholder="Введіть своє ім'я та прізвище">
    <label>Логін</label>
    <input type="text" name='login' placeholder='Введіть свій логін'>
    <label>Електронная пошта</label>
    <input type="email" name='email' placeholder='Введіть свій e-mail'>
    <label>Зображення профілю</label>
    <input type="file" name='avatar'>
    <label>Пароль</label>
    <input type="password" name='password' placeholder='Придумайте пароль'>
    <label>Підтвердіть пароль</label>
    <input type="password" name='password_confirm' placeholder='Підтведіть пароль'>
    <button type=submit>Увійти</button>
    <p>
        У вас уже є аккаунт? - <a href="index.php">авторизуйтеся</a>!
    </p>
    <?php
            if($_SESSION['message']) {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSOIN['message']);
        ?>
    <img src="photos/cherniy.png" alt="Зачекайте повного завантаження сторінки" class="black">
    </form>

</body>
</html>