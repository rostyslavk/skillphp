<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>

    <?php if($message):?>
    <p> <?= $message ?></p>
    <?php endif?>

<h1>Регистрация</h1>
<? $form->render()?>
 <!-- <form method="post" action="form.php">
    <label for="first name">Имя</label>
    <input type="text" id="first name" name="first_name">
    <br>
    <label for="last name">Фамилия</label>
    <input type="text" id="last name" name="last_name">
    <br>
    <label for="email">Почта</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="password">Пароль</label>
    <input type="password" id="password" name="password">
    <br>
    <button type="submit">Зарегистрироваться</button>
  </form>





</body>
</html>